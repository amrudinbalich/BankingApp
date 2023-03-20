<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../../client/additionalCSS/style.css">
    <title>Register</title>
</head>
<body class="bg-dark text-light ">
<div class="container bg-light text-dark mt-5 welcome p-5">
        <h3 class="text-center text-warning">Register</h3>
        <div class="row d-flex justify-content-center align-items-center m-1">
            <div class="col-6">
            <h4 class="text-center mb-4 mt-2">Please input info below</h4>
            <form class="bg-light text-dark p-5 border" id="inputForm">
                <p class="text-strong">Username : </p>
                <input type="text" name="username" id="usernameInput" class="form-control form-control-sm" placeholder="Enter a username" required> 
                <p id="usernameErr"></p>
                <p class="text-strong mt-2">Password : </p>
                <input type="password" name="password" id="passwordInput" class="form-control form-control-sm" placeholder="Enter a password" required>
                <p id="passwordErr"></p>
                <p class="text-strong mt-2">Email : </p>
                <input type="email" name="email" id="emailInput" class="form-control form-control-sm" placeholder="Enter a email" required>
                <p id="emailErr"></p>
                <p class="text-strong mt-2">Credit Card Number : </p>
                <input type="number" name="credit" id="creditInput" class="form-control form-control-sm" placeholder="XXXX-XXXX-XXXX" required>
                <p id="creditErr"></p>
                <p class="text-strong mt-2">I have read all terms and I agree with them : <input type="checkbox" name="Agree" id="agreeBox" class="mt-1" required></p>
                <p id="errorLog"></p>
                <input type="submit" value="REGISTER" id="submitBtn" class="btn btn-md btn-info text-light mt-3">
                <br>
            </form>
            </div>
        </div>
    </div>


    <!-- <div class="continer">
    <div id="boxDiv" class="m-3 p-5 border">
        <a href="http://youtube.com">YouTube</a>
        <h5>Some heading</h5>
        <p>Some random paragraph</p>
        <div id="groceryList">
            <p>Some grocery items to pickup this week</p>
            <ul id="list">
                <li>Banana</li>
                <li>Mango</li>
                <li>Strawberry</li>
                <li>Black Chocolate</li>
            </ul>
        </div>
    </div>
    </div>  -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="register.js">
    //   
    </script>
</body>
</html>