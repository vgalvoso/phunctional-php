<?php
$query = "SELECT * FROM users";
$users = $sql->getItems($query);
foreach($users as $user){
?>
<tr>
    <td><?= $user->u_username?></td>
    <td><?= $user->firstname?></td>
    <td><?= $user->middlename?></td>
    <td><?= $user->lastname?></td>
    <td><?= $user->role?></td>
    <td><?= $user->status?></td>
</tr>
<?php
}