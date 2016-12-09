
function displayLoggedInStatus(username) {
  var loginStatus =  document.getElementById("loginStatus");
  loginStatus.innerHTML = "<a href='#' class='dropdown-toggle' data-toggle='dropdown'" +
  " role='button' aria-haspopup='true' aria-expanded='false'> <img alt='Login' src='../Content/images/loginIcon.png'>" + username + "<span class='caret'></span></a>"+
  "  <ul class='dropdown-menu'>" +
      "<li><a href='../Tools/plantSearch.php'>Plant Search</a></li>" +
      "<li><a href='../Tools/plantByState.php'>Plants By State</a></li>"+
        "<li role='separator' class='divider'></li>" +
        "<li class='dropdown-header'>Account</li>" +
<<<<<<< HEAD
        "<li><a href='../Includes/logout.php'>Logout</a></li>" +
  "</ul>"
=======
        "<li><a href='../MyGarden/settings.php'>Settings</a></li>" +
        "<li><a href='../includes/logout.php'>Logout</a></li>" +
  "</ul>";
>>>>>>> refs/remotes/origin/PlantsDB-Ben

}
