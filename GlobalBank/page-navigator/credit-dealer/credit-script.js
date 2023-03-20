$(document).ready(function () {
    var myValue = localStorage.getItem('userData');
    myValue = JSON.parse(myValue);
    let creditMaxValue;
    let username = myValue.userName;
    $("#username").val(myValue.userName);
    $("#user").html("Hello " + "<span class='text-info'>" + myValue.userName + "</span>");
    $("#yes").change(function() {
        if ($(this).is(":checked")) {
            let inputFiled = $("<input type='number' name='childrenNum' class='form-control-sm'></input>");
            let newLabel = $("<label for='childrenNum' class='my-1'>Great! How many children do you have?</label>");
            $(".if-children-exists").append(newLabel, $("<br>"),inputFiled ).hide().fadeIn();
            $("#no").removeClass("checked");
            $(this).addClass("checked");
          } else {
            $(".if-children-exists").fadeOut(function() {
              $(this).empty();
            });
            $(this).removeClass("checked");
          }
        $("#no").change(function () {
           if($("#yes").is(":checked")) {
           
           }
        })
    })
    // presjek 

    $("#more").change( function () {
      if($(this).is(":checked")) {
        $("#if-more").removeAttr("hidden").show().fadeIn(600);
      } else {
        $("#if-more").attr("hidden",true).fadeOut(600);
      }
       
    })


    // submit button 
    $("#submitBtn").click( function ( e ) {
      e.preventDefault();
      // collect information from form 
      let form = $("#submitForm") ;
      let formSerialized = form.serialize();
      if(formSerialized.length < 18) {
        alert("Please fill out the fields in order to proceed")
      } 
      // send a infromation trought an url
      $.ajax({
        url : "creditBackend.php" ,
        method : "POST",
        data : formSerialized,
        dataType : "json",
        success : (data) => {
          console.log(data);
          creditValue = data.credit;
          $("#response").removeClass("hidden").hide().fadeIn()
          $("#response").append("<h5 class='m-0 p-0'>Response from server : </h5>")
          $("#response").append("<p>" + data.responseTxt.html + "</p>")
        },
        error : (xhr) => {
          let responseTxt = $("<p>Response from server : " + xhr.status + " " + xhr.statusText + "</p>")
          $("#response").append($(responseTxt))
          console.log(xhr.getAllResponseHeaders())
        }
      })

      // expecting a creditMax value from a response ?

      // Adittionaly listen for a two buttons to appear from a server response 
      // Those buttons will be making a another ajax call and it will be a confirmation . 
      $("#response").on("click", "#yesTake", function (e) {
        e.preventDefault();
        // code to handle click on the #yesTake button
        let name = $("#yesTake").attr("name");
        console.log(name)
        $.ajax({
          url : "userConfirmed.php",
          method : "POST",
          // data : name,
          data: { action: 'takeCredit' , credit : creditValue , userName : username},
          dataType : "text",
          success : (response) => {
            console.log(response)
            // parsing the JSON data from a response
            // appending new text which will notify user that he has taken a credit :) 
            $("#response").append(response);
          },
          error : (xhr) => {
            console.log("Something went wrong : " + xhr.statusText);
          }
        })
      });

      $("#response").on("click", "#dontTake", function (e) {
        e.preventDefault();
        console.log("No is clicked")
        // code to handle click on the #dontTake button
      });
    
    })
})

