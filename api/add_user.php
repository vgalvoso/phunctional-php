<?php
$query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
$inputs = [
    'username' => $username ?? '',
    'email' => $email ?? '',
    'password' => password_hash($password ?? '', PASSWORD_BCRYPT)
];
if($sql->exec($query, $inputs))
echo "User added successfully.";
else
echo "Error adding user: " . $sql->getError();