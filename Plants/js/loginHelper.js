
function displayLoggedInStatus(username) {
  var loginStatus =  document.getElementById("loginStatus");
  loginStatus.innerHTML = "<a href='#' class='dropdown-toggle' data-toggle='dropdown'" +
  " role='button' aria-haspopup='true' aria-expanded='false'> <img alt='Login' src='../Content/images/loginIcon.png'>" + username + "<span class='caret'></span></a>"+
  "  <ul class='dropdown-menu'>" +
      "<li><a href='../Tools/plantSearch.php'>Plant Search</a></li>" +
      "<li><a href='../Tools/plantByState.php'>Plants By State</a></li>"+
      "<li role='separator' class='divider'></li>" +
      "<li class='dropdown-header'>Reference Info</li>" +
      "<li><a href='../Tools/documentation.php'>Documentation</a></li>" +
        "<li><a href='../Tools/culturalPlants.php'>Cultural Plants</a></li>" +
        "<li><a href='../Tools/hardinessZones.php'>Hardiness Zones</a></li>" +
        "<li role='separator' class='divider'></li>" +
        "<li class='dropdown-header'>Account</li>" +
        "<li><a href='../includes/logout.php'>Logout</a></li>" +
  "</ul>"

}
 // displayLoggedInStatus();
function displayLoggedOutStatus() {
  var loginStatus =  document.getElementById("loginStatus");
  loginStatus.InnerHTML = "Login"
}
