<?php

if(!isset($user)){
    header('Location: ./public/partials/not_found.php');
    exit;
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name']; ?></b></h3>
        </div>
        <div class="card-body">
        <a href="?controller=App\Controller\UserController&method=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-secondary">Update</a>
        <form style="display: inline;" method="POST" action="?controller=App\Controller\UserController&method=delete">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <button class="btn btn-sm btn-outline-danger">Delete</button>
        </form>
        <a class="btn btn-sm btn-outline-warning" href="?controller=App\Controller\UserController&method=toList">Cancelar</a>
        </div>
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
                    <td>
                        <a target="_blank" href="https://<?php echo $user['website']; ?>">
                            <?php echo $user['website']; ?>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
