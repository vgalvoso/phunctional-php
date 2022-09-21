<?php
$query = "SELECT * FROM projects";
$users = $sql->getItems($query);
foreach($users as $user){
?>
<tr>
    <td><?= $user->project_number?></td>
    <td><?= $user->project_name?></td>
    <td><?= $user->project_amount?></td>
    <td><?= $user->client?></td>
    <td><?= $user->project_status?></td>
</tr>
<?php
}