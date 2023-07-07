<?php
include "DotEnv.php";
(new DotEnv(BASE_DIR . '/.env'))->load();
$path = "";
if(isset($_SERVER['REQUEST_URI'])){
	$path = $_SERVER['REQUEST_URI'];
    //get $path except first "/"
    $path = substr($path, 1);
    //remove string from start to second "/"
    if(getenv('APP_ENV') == "development")
        $path = substr($path, strpos($path, "/") + 1);
    $method = $_SERVER['REQUEST_METHOD'];
}else{
	$path = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : '';
}
define('PATH',$path);
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
        if(str_contains($path,$route)){
            $pos = strrpos($route,"/");
            $paramValues = substr($path,$pos+1);
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
    
    if($method == 'GET')
        if(isset($_SERVER["HTTP_SEC_FETCH_MODE"]) && ($_SERVER["HTTP_SEC_FETCH_MODE"] == "navigate"))
            notFound();
    $path = $api;
    extract($data);
    if(!file_exists("api/$path.php")){
        if(!file_exists("api/$path/index.php")){   
            notFound();
        }
        $path = $path."/index";
    }
    
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

/**
 * Create route for views
 *
 * @param string $routeName Name of the route
 * @param string $view Path to the view file without .php extension
 * @param bool $part Specify if the view is part only (for htmx) or a new page
 * 
 * @return Exit  
 */
function view($routeName,$view,$part=false){
    global $path;
    if($routeName != $path)
        return;
    if($part)
        if(isset($_SERVER["HTTP_SEC_FETCH_MODE"]) && $_SERVER["HTTP_SEC_FETCH_MODE"] == "navigate")
            notFound();
    include "view/$view.php";
    exit();
}

function cli($routeName,$api){
    global $path;
    if($routeName != $path)
        return;
    include "api/$api.php";
}

function to($route){
    header("Location: $route");
}

function notFound(){
    header("HTTP/1.1 404 Not Found");
    exit("URL not found");
}