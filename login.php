<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>HTML Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="main">
        <h1>Login</h1>
        

        <form action="#" method="POST">
            <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" id="email" name="email" required>

            <label for="password">
                Password
            </label>
            <input type="password" id="password" name="password" 
                placeholder="Enter your Password" required>
                <div class="forgetpass" ><a href="#" class="link" onclick="message()">Forgot password?</a></div>

            <div class="wrap">
                <button type="submit" name="login">
                    Login
                </button>
            </div>
        </form>
        
        <p>Don't have an Account?
            <a href="signup.php" style="text-decoration: none;">
                Register Now
            </a>
        </p>
        
    </div>
    
<script>
    function message()
    {
        alert("Please contact admin for password reset");
    }
</script>
</body>

</html>

<?php 
   include("connection.php");
   if(isset($_POST['login']))
   {
        $email=$_POST['email'];
        $pwd = $_POST['password'];

        $query="SELECT * FROM details WHERE email='$email' && password='$pwd' ";
        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total == 1)
        {
            $_SESSION['email']=$email;
            header('location:menu.php');
        }
        else{
            echo "Login failed";

        }


   }

?>
