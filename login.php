<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <script src="public/js/bootstrap.js" defer></script>
    <title>Login</title>
</head>

<body>
    <div class="container shadow mt-5">
        <form action="app/controllers/authController.php" method="post">
            <label for="">Usuario</label><br>
            <input type="text" class="form-control" name="usuario" placeholder="usuario" id=""><br>
            <label for="">Password</label><br>
            <input type="password" class="form-control" name="password" placeholder="password" id=""><br>
            <button class="btn btn-primary offset-md-6">Login</button>
        </form>
    </div>
</body>

</html>