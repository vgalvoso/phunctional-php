<?php
$params = ["u_username"=>$username,
        "u_password"=>password_hash($password,PASSWORD_DEFAULT),
        "firstname"=>$firstname,
        "middlename"=>$middlename,
        "lastname"=>$lastname,
        "role"=>$role];
if($sql->insert("users",$params)){
    toRoute("usersTable");
}else{
    echo $sql->getError();
}