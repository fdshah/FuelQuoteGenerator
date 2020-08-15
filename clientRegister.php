<?php
     error_reporting(0);
     
 
     $con = mysqli_connect("localhost", "root", "", "test");
         if(!$con)
         {
             die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
         }
 
     
?>

<html>

<head>
    <title>Test Website: client Registration</title>    
    <link href="styles/clientRegister.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <script>
        //function to check if the entered password match each other or not.
        function checkPassword(form) {
            pass1 = form.pass1.value;
            pass2 = form.pass2.value;

            if (pass1 != pass2) {
                alert("Password did not match")
                return false;
            } else {
                 return true;
            }
        }
    </script>
</head>

<body>

    <header>


    </header>
    <div class="centerBox">
        <div class="profileTitle">
            Registration
        </div>
        <div class="registerForm">
            <form action="/processes/clientRegistration.php" method= "POST">
                <br>
                <label for="createUserN">Create New Username :</label>
                <input type="email" id="createUserN" name="createUserN" required="required" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'"><br>
                <br>
                <label for="pass1">Create New Password :</label>
                <input type="password" id="pass1" name="pass1" minlength="6" required="required" placeholder="Minimum length: 6" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Minimum length: 6'"><br>
                <br>
                <label for="pass2">Confirm Password :</label>
                <input type="password" id="pass2" name="pass2" minlength="6" required="required" placeholder="Password should match" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'"><br>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>