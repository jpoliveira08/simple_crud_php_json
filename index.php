<?php

require './vendor/autoload.php';
use App\Models\Users;

$user = new Users();
$users = $user->getUsers();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Simple PHP CRUD</title>
    </head>
    <body>
        
        <table class="table">
            <!-- Create columns -->
            <thead>
                <tr>
                    <th>Name</th>
                    <th>username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <!-- Filling the table -->
            <tbody>
                <?php foreach ($users as $usr) : ?>
                    <tr>
                        <td><?php echo $usr['name'] ?></td>
                        <td><?php echo $usr['username'] ?></td>
                        <td><?php echo $usr['email'] ?></td>
                        <td><?php echo $usr['phone'] ?></td>
                        <td><?php echo $usr['website'] ?></td>
                        <td>
                            <a href="view.php?id=<?php $usr['id']?>" class="btn btn-sm btn-outline-info">View</a>
                            <a href="update.php?id=<?php $usr['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
                            <a href="delete.php?id=<?php $usr['id']?>" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>                   </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </body>
</html>