<div class="container">
    <form method="POST" action="?controller=App\Controller\UserController&<?php echo isset($user['id']) ? "method=update&id={$user['id']}" : "method=save"; ?>" >
        <div class="form-group">
            <label>Name</label>
            <input name="name" value="<?php echo isset($user['name']) ? $user['name'] : null; ?>" class="form-control <?php echo isset($_SESSION['error']['name']) ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback"><?php echo $_SESSION['error']['name'] ?? ''; ?></div>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input name="username" value="<?php echo isset($user['username']) ? $user['username'] : null; ?>" class="form-control <?php echo isset($_SESSION['error']['username']) ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback"><?php echo $_SESSION['error']['username'] ?? ''; ?></div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" value="<?php echo isset($user['email']) ? $user['email'] : null; ?>" class="form-control <?php echo isset($_SESSION['errors']['email']) ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback"><?php echo $_SESSION['errors']['email'] ?? ''; ?></div>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : null; ?>" class="form-control <?php echo isset($_SESSION['errors']['phone']) ? 'is-invalid' : '' ?>">
            <div class="invalid-feedback"><?php echo $_SESSION['errors']['phone'] ?? ''; ?></div>
        </div>
        <div class="form-group">
            <label>Website</label>
            <input name="website" value="<?php echo isset($user['website']) ? $user['website'] : null; ?>" class="form-control">
        </div>
        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : null; ?>"/>
        <button class="btn btn-success" type="submit">Submit</button>
        <a class="btn btn-danger" href="?controller=App\Controller\UserController&method=toList">Cancelar</a>
    </form>
</div>