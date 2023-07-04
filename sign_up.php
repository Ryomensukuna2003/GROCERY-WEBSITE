


<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: Main_page.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>



<html>
  <head>
    <title>Document</title>
    <link rel="stylesheet" href="css\Login_css.css" />
  </head>
  <body>

    <div class="form">
      <!-- ! Div 1 -->
      <div class="title">Welcome</div>
      <!-- ! Div 2 -->

      <div class="subtitle">Let's create your account!</div>
      <!-- ! Div 3 -->
      <form action="" method="post">
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" " />
        <label for="firstname" class="placeholder">Name</label>
      </div>
      <!-- ! Div 4 -->

      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " name="username" />
        <label for="lastname" class="placeholder">Username</label>
      </div>
      <!-- ! Div 5 -->

      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " name="password" />
        <label for="email" class="placeholder">Password </label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " name ="confirm_password" />
        <label for="email" class="placeholder">Confiem-Password </label>
      </div>
      <button  class="btn">Submit</button>
      <a class="nav-link" href="login_page.php">Login here</a>

      </form>
    </div>
  </body>
</html>
