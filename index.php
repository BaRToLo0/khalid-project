<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="register.php">
        <div class="input-group">
           <label for="fname">First Name</label>
           <br>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           
        </div>
        <BR>
        <div class="input-group">
            <label for="lName">Last Name</label>
            <br>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            
        </div>
        <BR>
        <div class="input-group">
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Email" required>
            
        </div>
        <BR>
        <div class="input-group">
           <label for="password">Password</label>
           <br>
            <input type="password" name="password" id="password" placeholder="Password" required>
            
        </div>
       <button type="submit" class="btn" value="Sign Up" name="signUp">Sign Up</button>
      </form>
      
        </div>
        <div class="form-container sign-in">
           <form method="post" action="register.php">
          <div class="input-group">
              <label for="email">Email</label>
              <br>
              <input type="email" name="email" id="email" placeholder="Email" required>
              
          </div>
          <BR>
          <div class="input-group">
              <label for="password">Password</label>
              <br>
              <input type="password" name="password" id="password" placeholder="Password" required>
              
          </div>
          <BR>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <button type="submit" class="btn" value="Sign In" name="signIn">Log In</button>
        </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
