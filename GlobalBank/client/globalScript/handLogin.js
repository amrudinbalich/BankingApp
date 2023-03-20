// handling a form info via ajax and jQuery
$("document").ready(function () {
    $("#inputForm").submit( (event) => {
        event.preventDefault();
        let username = $("#usernameInput");
        let password = $("#passwordInput");
        let txtField = $("#num");
        if(username.val().length  == 0 ) {
            $("#usernameErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Please fill out the username text field !").fadeIn(3000);
        } else $("#usernameErr").hide();
        if(password.val().length  == 0 ) {
            $("#passwordErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Please fill out the password field !").fadeIn(3000);
        } else $("#passwordErr").hide();
        let formData = $("#inputForm").serialize();
        $.ajax(
            {
                type : "POST",
                url : "../../GLOBALBANK/server-side/MANUAL/Finder.php",
                data : formData ,
                success : function (data, textStatus, xhr) {
                    if (xhr.getResponseHeader("Content-Type") == "text/html;charset=UTF-8") {
                        console.log(xhr.getResponseHeader("Content-Type"))
                        txtField.text(data).addClass("mt-3").css("color" , "red").fadeIn(3000);
                    } else {
                        console.log(xhr.getResponseHeader("Content-Type"))
                        localStorage.setItem("userData", JSON.stringify(data));
                        txtField.text("Informations provided are correct , soon you are going to be redirected to the main page").addClass("mt-3").css("color" , "green").fadeIn(3000);
                        if(localStorage.setItem("userData", JSON.stringify(data)) === undefined) {
                            console.log('stored , soon you will be redirected')
                            setTimeout(function() {
                                window.location = "page-navigator/main-page/main-page.php";
                            },4000)
                        }
                    }

                    /*
                    $("#num").text("Informations are correct! You are soon going to be redirected to main page.")
                    .css({"color" : "green" , "font-weight" : "500"});
                    setTimeout(function() {
                        window.location = "page-navigator/main-page/main-page.php";
                    },4000) */
                },
                error : function (xhr,textStatus,errorThrown) {
                    console.log(errorThrown);
                }
            }
        )
    })
})