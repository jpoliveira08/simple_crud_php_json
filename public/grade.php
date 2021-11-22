<div class="container">
    <p>
        <a class="btn btn-outline-success" href="?controller=App\Controller\UserController&method=create">Create new User</a>
    </p>
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
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td>
                            <a target="_blank" href="https://<?php echo $user['website']; ?>">
                            <?php echo $user['website']; ?>
                            </a>
                        </td>
                        <td>
                            <!-- View -->
                            <a href="?controller=App\Controller\UserController&method=toListInd&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-info">View</a>
                            <a href="?controller=App\Controller\UserController&method=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                            <a href="?controller=App\Controller\UserController&method=delete&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-danger">Delete</a>
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
</div>
