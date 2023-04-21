

<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: Main_page.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: Main_page.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<html>
  <head>
    <title>Document</title>
    <link rel="stylesheet" href="css\Login_css.css" />
  </head>
  <body>
  <form action="" method="post">
    <div class="form">
      <!-- ! Div 1 -->
      <div class="title">Welcome</div>
      <!-- ! Div 2 -->

      <div class="subtitle">login here</div>
      <!-- ! Div 3 -->
      
      <!-- ! Div 4 -->

      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" name="username" placeholder=" " />
        <label for="lastname" class="placeholder">Email</label>
      </div>
      <!-- ! Div 5 -->

      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " name ="password" />
        <label for="email" class="placeholder">Password </label>
      </div>
      <button class="btn">Submit</button>
      <a class="nav-link" href="sign_up.php">New?Register here</a>

      </form>
    </div>
  </body>
</html>
