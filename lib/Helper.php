<?php
include "DotEnv.php";
$dotenv = new DotEnv(BASE_DIR . '/.env');
$dotenv->load();
$path = $_SERVER['REQUEST_URI'];
//get $path except first "/"
$path = substr($path, 1);
//remove string from start to second "/"
if(getenv('APP_ENV') == "development")
    $path = substr($path, strpos($path, "/") + 1);
$method = $_SERVER['REQUEST_METHOD'];

function api($routeName,$api,$data){
    global $path;
    global $method;
    $route = $routeName;
    //for request with parameters in uri 
    //get("api/{param1,param2}","api");
    
    if(strpos($routeName,"{")){   
        //get routeName without parameters 
        $tempRoute = substr($routeName,0,strpos($routeName,"{")+1);
        $route = substr($tempRoute,0,strlen($tempRoute)-1);
        //get param keys
        $paramKeys = substr($routeName,strpos($routeName,"{")+1);
        $paramKeys = substr($paramKeys,0,strlen($paramKeys)-1);
        $paramKeys = explode(",",$paramKeys);

        
        //check if routename exists in request uri
        if(strpos($path,$route) !== false){
            $pos = strrpos($route,"/");
            $paramValues = urldecode(substr($path,$pos+1));
            $paramValues = explode("/",$paramValues);
            if(count($paramKeys) != count($paramValues))
                notFound();
            $params = array_combine($paramKeys,$paramValues);
            $path = substr($path,0,strlen($route)-1);
            $route = substr($tempRoute,0,strlen($tempRoute)-2);
            extract($params);
        }
    }
    if($route != $path)
        return;
    
    $path = $api;
    if(!$data)
        $data = json_decode(file_get_contents('php://input'),true);
    if($data)
        extract($data);
    if(!file_exists("api/$path.php")){
        if(!file_exists("api/$path/index.php")){   
            notFound();
        }
        $path = $path."/index";
    }
    
    $sql = new Sql();
    include "api/$path.php";
    exit();
}

function post($routeName,$api){
    global $method;
    if($method != "POST") return;
    api($routeName,$api,$_POST);
}

function get($routeName,$api){
    global $method;
    if($method != "GET") return;
    api($routeName,$api,$_GET);
}

function put($routeName,$api){
    global $method;
    if($method != "PUT") return;
    $_PUT = json_decode(file_get_contents('php://input'),true);
    api($routeName,$api,$_PUT);
}

function view($routeName,$view,$part=false){
    global $path;
    if($routeName != $path)
        return;
    if($part)
        if($_SERVER["HTTP_SEC_FETCH_MODE"] == "navigate")
            notFound();
    include "view/$view.php";
    exit();
}

function to($route){
    header("Location: $route");
}

function notFound(){
    header("HTTP/1.1 404 Not Found");
    exit("URL not found");
}


