const username = document.getElementById("username");
const password = document.getElementById("password");
const submit = document.getElementById("submit");
const errorMessage = document.getElementById("error-message");

submit.addEventListener("click", function(event) {
  event.preventDefault();
  if (username.value === "" || password.value === "") {
    errorMessage.textContent = "Username and password are required.";
  } else if (password.value.length < 8) {
    errorMessage.textContent = "Password must be at least 8 characters.";
  } else {
    errorMessage.textContent = "";
    
  }
});