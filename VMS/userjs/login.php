
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
  
          <div class="rens">
            
                <h4>Vechile Service Management System</h4>
                <div class="button-container">
                    <button class="au" onclick="showLoginPanel()">User</button>
                    <button class="au">Admin</button>
                </div>
             </div>
                
    
             <div id="whole">
        <div class="login">
            <h1 class="headline">Welcome to the User Pannel</h1>
        </div>
        <form action="authentication.php" method="POST">

            <div class="infos">

                <b style="font-family:arial">EMAIL:</b>  <input class="text" type="email" placeholder="Email" name="email" required> 
                <b style="font-family:arial">PASSWORD:</b><input class="password" type="password" placeholder="Password" name="password" autocomplete="current-password" required > 
                <button class="btn" name="button">Sign In</button>
                <a class="forgot" href="forget.php">forgot Password?</a>
            </div>
            <div class="sesss">
           
        <p>If you don’t have an account, you can create one by clicking the link below:</p>
        <a href="registerform.php">Create an Account</a> 
            </div>
        </form>
        <script src="script.js"></script>
    </div>
</body>
</html>
