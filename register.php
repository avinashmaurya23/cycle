<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password], input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="registration.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for= "username"><b>Full Name</b> </label>
    <input type="text" placeholder="Enter Full Name" name="username"  >
    
    <label for="rollno"><b>Roll Number</b></label>
    <input type="number" name="rollno" pattern="{0-9}{7}" required>
    <br><br>
    <label for="phone"><b>Enter a phone number</b></label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"required><br><br>
    <label for= "gender"><b>Gender</b></label required>
    <br>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other
    <br><br>
    
    <label for="hostel"><b>Hostel</b></label required>
    <select id="hostel" name="hostel">
    <option value="BH1">BH1</option>
    <option value="sBH2">BH2</option>
    <option value="BH3">BH3</option>
    <option value="GH1">GH1</option>
    <option value="GH2">GH2</option>
    </select>
   <br><br>
  
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" pattern=".{8,}" required>

    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" pattern=".{8,}" required>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> 

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>