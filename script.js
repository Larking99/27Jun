function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    // Check if all fields are filled
    if (name === "" || email === "" || password === "" || confirmPassword === "") {
      alert("Please fill in all fields.");
      return false;
    }

    // Check if name is more than 6 characters in length
    if (name.length > 6) {
      alert("Name should be at least 6 characters.");
      return false;
    }

    // Check if password and confirm password match
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
  

// Hash the password using SHA-2
$hashed_password = hash('sha256',password);


  }