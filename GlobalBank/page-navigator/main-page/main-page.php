<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GlobalBank</title>
</head>
<body class="bg-dark text-light">
    <div class="container-fluid header bg-light text-dark py-2 px-5 d-flex justify-content-between align-items-center">
        <h2 id="welcomeText" class="ms-5"></h2>
        <div class="row">
            <div class="col-12 d-flex justify-content-end align-items-center">
            <button id="logout" class="btn btn-md btn-dark text-light me-2">Logout</button>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <h4 class="text-center">Bank Control Panel</h4>
        <div class="row">
        <div class="container mt-5 d-flex justify-content-center align-items-center">
            <div class="col-md-1 col-sm-0"></div>
            <div class="col-md-5 col-sm-6 getCredit border border-light rounded-1 border-3 p-5 ">
                <h5>Account Details </h5>
                <p id="userName"></p>
                <p id="userEmail"></p>
                <p id="userBalance"></p>
                <p id="userCredit"></p>
                <p id="userDebt"></p>
            </div>
            <div class="col-md-1 col-sm-0"></div>
            <div class="col-md-5 col-sm-6 getCredit border border-light rounded-1 border-3 p-5" style="min-height: 334px;"> 
                <h5>Credit section</h5>
                <p>Are you interested in taking credit ?</p>
                <p>Our bank offers you awesome credit contracts starting from now.</p>
                <p>If you are interested more about what we are offering to you please proceed to this link below.</p>
                <a href="../credit-dealer/credit-dealer.php">Proceed to page</a>

            </div>
            <div class="col-md-1 col-sm-0"></div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="main-Page.js"></script>
</body>
</html>