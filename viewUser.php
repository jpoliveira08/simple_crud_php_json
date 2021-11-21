<?php

require_once './vendor/autoload.php'; 
require_once './partials/header.php';

if(!isset($user)){
    header('Location: ./partials/not_found.php');
    exit;
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['name']; ?></b></h3>
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

<?php require_once './partials/footer.php';