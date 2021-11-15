<?php

require_once './vendor/autoload.php'; 
if(!isset($user)){
    echo "Not found";
    exit;
}
?>
<table class="table">
    <tbody>
        <tr>
            <th>Name: </th>
            <td><?php echo $user['name'];?></td>
        </tr>
        <tr>
            <th>UserName</th>
            <td><?php echo $user['username'];?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $user['email'];?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $user['phone'];?></td>
        </tr>
        <tr>
            <th>Website</th>
            <td><?php echo $user['website'];?></td>
        </tr>
    </tbody>
</table>