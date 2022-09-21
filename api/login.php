<?php
$query = "SELECT * FROM users WHERE u_username=:username";
$params = ["username"=>$username];
$user = $sql->getItem($query,$params);
if(!$user)
    toRoute("");
if(!password_verify($password,$user->u_password)){
    toRoute("");
    exit();
}

switch($user->role){
    case "Admin": //System Admin
        toRoute("home");
        break;    
    default:
        toRoute("");
        break;
}
