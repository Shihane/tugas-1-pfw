<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .login-box {
            margin-top: 75px;
            height: auto;
            width: 400px;
            background: #f7f7f7;
            text-align: center;
            box-shadow: 0px 0px 20px 0px #000;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Login</h3>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('login')); ?>

                    </div>
                <?php endif; ?>
                <form action="/login" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ASUS\tugas-pwf-1\resources\views/login.blade.php ENDPATH**/ ?>