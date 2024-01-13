// validation for login form
function validateLoginForm() {
  var username = document.getElementById("login-username").value;
  var password = document.getElementById("login-password").value;
  if (username.trim() == "" || password.trim() == "") {
    alert("Please enter all fields.");
    return false;
  }
  // perform validation for existing username here
  return true;
}

// validation for signup form
function validateSignupForm() {
  var username = document.getElementById("signup-username").value;
  var password = document.getElementById("signup-password").value;
  if (username.trim() == "" || password.trim() == "") {
    alert("Please enter all fields.");
    return false;
  }
  // perform validation
