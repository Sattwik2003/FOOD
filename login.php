<?php $con=mysqli_connect("localhost","root","","food_foodie");
if(!empty($_REQUEST['mode']))
{  
	$rec_shopName = $_REQUEST['shopName']; 	
    $rec_password = $_REQUEST['password'];  
    $sql_con="INSERT INTO `login master` SET 
    `Shop_Username`= '$rec_shopName', 
    `Shop_Password`= '$rec_password'";   
    $res=mysqli_query($con, $sql_con);   
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="container">
       
        <form name="loginform" method="post">
        <input type="hidden" name="mode" value="1" >
        <h2>Login</h2>
        <div class=form>
            <div class="form-group">
                <label for="shopName">Shop Name:</label>
                <input type="text" id="shopName" name="shopName" placeholder="Enter shop name" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            </div>
            <div class="btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>