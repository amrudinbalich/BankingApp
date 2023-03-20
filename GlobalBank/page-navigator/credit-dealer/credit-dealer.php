<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Take a Loan</title>
</head>
<body class="bg-dark text-light">

    <div class="container-fluid header bg-light text-dark py-4 px-5 d-flex justify-content-between align-items-center ">
        <h2 id="user"></h2>
        <a href="../main-page/main-page.php" class="">Get Me back to the main page</a>

    </div>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center p-5">
            <div class="col-8 border border-2 rounded-2 p-5 text-start">
                <input type="hidden" name="username" id="username">
            <h5 class="mt-2">Applying for a Credit</h5>
            <p class="m-0">So , you are interested in taking a credit ?</p>
            <p class="m-0">Please fill up the input field that is being below in order to get your credit .</p>
            <form class="my-2 border p-3" id="submitForm">
                <h5 class="mt-2 info">Information about you</h5>
                <label for="yearIncome">What is your year income?</label>
                <input type="number" id="yearIncome"  name="yearIncome" placeholder="" class="form-control-sm">
                <br>
                 <div class="takeACredit">
                    <p class="my-0">Tell us which packet are you planning to take ? </p>
                    <label for="5000">5000$</label>
                    <input type="checkbox" class="form-check-input" name="5000">
                    <label for="10000">10000$</label>
                    <input type="checkbox" class="form-check-input" name="10000">
                    <label for="15000">15000$</label>
                    <input type="checkbox" class="form-check-input" name="15000">
                    <label for="more">More</label>
                    <input type="checkbox" class="form-check-input" id="more">
                    <div id="if-more" hidden>
                        <label for="more">Specify a sum.</label>
                        <input type="number" name="more" id="more" class="form-control-sm">
                    </div>
                 </div>
                 <div class="accept">
                 <label for="agreed">I've read and I accept terms of use </label>
                    <input type="checkbox" name="termsAgreed" class="form-check-input" required>
                    <br>
                    <input type="submit" value="Submit" id="submitBtn" class="submit btn btn-sm btn-danger my-1">
                 </div>
            </form>
            <div class="row mt-4 bg-light text-dark p-3 hidden" id="response">
                <p id="bankResponse"></p>
            </div>

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="credit-script.js">

</script>
</body>
</html>

<style>
    input[type="checkbox"]:checked {
        background-color : red ; 
    }
    input[type="checkbox"]:focus {
        border : 1px solid black;
    }
    .hidden {
        display : none ;
    }
</style>
