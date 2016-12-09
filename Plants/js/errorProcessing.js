function showLoginError(error) {
      var pass = document.getElementById("password");
      pass.value = "";
      var email = document.getElementById("email");
      email.value = "";
      email.autofocus = true;
      var errMsg = document.getElementById("errorMsg");
      errMsg.innerHTML = "The username and password you entered did not match" +
                         " our records. " + "<br/>" +
                         "Please double-check and try again.";
      errMsg.className = "loginError";
  }

function showUpdatePasswordError(error) {
  var errMsg = document.getElementById("updatePassErr");
  errMsg.innerHTML = "";
}
