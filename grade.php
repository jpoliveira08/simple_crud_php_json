<?php

require './vendor/autoload.php';

use App\Controller\{Controller, Request, UserController};


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
                <?php
                if($users){
                    foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->phone; ?></td>
                            <td><?php echo $user->website; ?></td>
                            <td>
                                <!-- View -->
                                <a href="?controller=UserController&method=edit&id=<?php echo $user->id; ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                                <a href="?controller=UserController&method=delete&id=<?php echo $user->id; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    <?php 
                    }
                } else {
                    ?>
                    <tr>
                        <td>Nenhum registro encontrado</td>
                    </tr>
                    <?php
                }?>
            </tbody>
        </table>

    </body>
</html>