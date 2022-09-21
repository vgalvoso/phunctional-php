<?php
$query = "INSERT INTO projects(project_name,project_number,project_amount,client)
            VALUES(:projectName,:projectNumber,:amount,:client)";
$params = ["projectName"=>$projectName,
        "projectNumber"=>$projectNumber,
        "amount"=>$amount,
        "client"=>$client];
if($sql->exec($query,$params)){
    echo "Success";
}else{
    echo $sql->getError();
}