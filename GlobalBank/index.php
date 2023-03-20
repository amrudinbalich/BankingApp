<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="client/additionalCSS/style.css">
    <script src="client/globalScript/jQuery.js"></script>
    <title>Login/Register</title>
</head>
<body class="bg-info text-light">

    <div class="container bg-dark text-light mt-5 welcome">
        <h3 class="text-center text-warning">Atlanta Bank</h3>
        <div class="row d-flex justify-content-center align-items-center m-1">
            <div class="col-6">
            <h4 class="text-center mb-4 mt-2">Login</h4>
            <form class="bg-light text-dark p-5" id="inputForm">
                <p class="text-strong">Username : </p>
                <input type="text" name="username" id="usernameInput" class="form-control form-control-sm" placeholder="Enter a username"> 
                <p id="usernameErr"></p>
                <p class="text-strong mt-2">Password : </p>
                <input type="password" name="password" id="passwordInput" class="form-control form-control-sm" placeholder="Enter a password">
                <p id="passwordErr"></p>
                <input type="submit" value="LOGIN" id="submitBtn" class="btn btn-md btn-info text-light mt-3">
                <br>
                <p id="num"></p>
                <p class="mt-2">Don't have an account yet ? <a href="page-navigator/register/register.php">Register</a></p>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="client/globalScript/handLogin.js"></script>
</body>
</html>