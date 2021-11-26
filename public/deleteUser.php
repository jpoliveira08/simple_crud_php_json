<?php

if(!isset($user)){
    header('Location: ./public/partials/not_found.php');
    exit;
}

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Delete User <b><?php echo $user['name']; ?></b></h3>
        </div>
        <div class="card-body">

        </div>
    </div>
</div>