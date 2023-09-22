<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>TimeLogix</title>
</head>

<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-clock-time"></i>
                <span class="font-weight-bold mx-2">TimeLogix </span>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>"
                        value="<?= isset($email) ? $email : null ?>" placeholder="Enter your email" autofocus>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>"
                        placeholder="Enter your password">
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Login</button>
            </div>
        </div>
    </form>
</body>

</html>
