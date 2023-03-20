$(document).ready(function () {
  var myValue = localStorage.getItem('userData');
  myValue = JSON.parse(myValue);
  // display data from json now to the mainpage
  // selecting all fields from html
  let welcomeText = $("#welcomeText");
  let userName = $("#userName");
  let userEmail = $("#userEmail");
  let userBalance = $("#userBalance");
  let userCredit = $("#userCredit");
  let userDebt = $("#userDebt");
  // setting information from json file to your page
  welcomeText.html("Welcome to your account " + "<span class='text-info'>" + myValue.userName + "</span>");
  userName.html("Username :  " + "<span class='text-info'>" + myValue.userName + "</span>");
  userEmail.html("Email :  " + "<span class='text-info'>" + myValue.userEmail + "</span>");
  userBalance.html("Balance :  " + "<span class='text-info'>" + myValue.userBalance + "</span>");
  userCredit.html("Credit :  " + "<span class='text-info'>" + myValue.userCredit + "</span>");
  userDebt.html("Debt :  " + "<span class='text-info'>" + myValue.userDebt + "</span>");
 


  $("#logout").click(function () {
    window.location = "../../index.php";
  })
})