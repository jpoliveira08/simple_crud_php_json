<?php

if(!isset($user)){
    header('Location: ./public/partials/not_found.php');
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update User <b><?php echo $user['name']; ?></b></h3>
        </div>
        <div class="card-body">
            <form method="POST" action="?controller=App\Controller\UserController&method=update&id=<?php echo $user['id']; ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input name="website" value="<?php echo $user['website'] ?>" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : null; ?>"/>
                <button class="btn btn-success" type="submit">Submit</button>
                <a class="btn btn-danger" href="?controller=App\Controller\UserController&method=toList">Cancelar</a>
            </form>
        </div>
    </div>
</div>