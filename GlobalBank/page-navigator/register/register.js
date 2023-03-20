$(document).ready(function () {
    $("#inputForm").submit( (e) => {
        e.preventDefault();
        let username = $("#usernameInput");
        let password = $("#passwordInput");
        let creditInput = $("#creditInput");
        let errorLog = $("#errorLog");
        if(username.val().length  <= 3 ) {
            $("#usernameErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Username must be longer than 3 characters !").fadeIn(3000);
        } else $("#usernameErr").hide();
        if(password.val().length  < 4 ) {
            $("#passwordErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Password needs to be longer !").fadeIn(3000);
        } else $("#passwordErr").hide();
        if(creditInput.val().length < 12  ) {
            $("#creditErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Please fill up the field !").fadeIn(3000);
        } else if (creditInput.val().length > 12  ) {
            $("#creditErr").css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"}).text("Numbers cannot be higher than 12 !").fadeIn(3000);
        }  else if (creditInput.val().length === 12) {
            $("#creditErr").hide();
        }
        //  IF ALL CONDITIONS ARE MEET Formdata variable will be declared
        if(creditInput.val().length === 12 && username.val().length > 3 && password.val().length  > 4  ) {
        let formData = $("#inputForm").serialize()
        $.post(
            "../../server-side/MANUAL/Register.php",
            formData,
            function response(data,status) {
                // custom script to listen for errors and success 
                // javascript client is going to listen to the answer from server and by the specified text it is going to determine frontend appereance 
                if(data === "Success ! Your account has been successfully created ! " ) {
                    errorLog.text(data + "\n Soon you will be redirected to login page!").css({"color" : "green","font-weight" : "500" , "margin" : "5px 0px 0px 0px"})
                    // creating a timeout and sending a user to the login page 
                    setTimeout(function() {
                        window.location = "../../index.php"; // replace with your URL
                      }, 4000); // 4000 milliseconds = 4 seconds

                } else {
                    errorLog.text(data).css({"color" : "red","font-weight" : "500" , "margin" : "5px 0px 0px 0px"})
                }
                
            })
        } else alert("Something is wrong . Please check your input.")

 
            
    })

    // make a simple ajax request
    
})