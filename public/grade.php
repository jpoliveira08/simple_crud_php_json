<div class="container">

    <h2>List of registered users</h2>
    <a class="btn btn-outline-success mb-3" href="?controller=App\Controller\UserController&method=create">Create new User</a>

    <table class="table">
        <!-- Create columns -->
        <thead>
            <tr align="center">
                <th>Name</th>
                <th>Username</th>
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
                    <tr align="center">
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
                            <!-- Send request to controller -->
                            <a href="?controller=App\Controller\UserController&method=toListInd&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-info">View</a>
                            <a href="?controller=App\Controller\UserController&method=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                            <form style="display: inline;" method="POST" action="?controller=App\Controller\UserController&method=delete">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php 
                }
            } else {
                ?>
                <tr>
                    <td>No record found</td>
                </tr>
                <?php
            }?>
        </tbody>
    </table>
</div>
