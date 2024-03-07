<?php $con=mysqli_connect("localhost","root","","food_foodie");
if(!empty($_REQUEST['mode']))
{  
	$rec_shopName = $_REQUEST['shopName']; 	
    $rec_location = $_REQUEST['location'];  
    $rec_about = $_REQUEST['about'];
    $rec_foodCategory = $_REQUEST['foodCategory'];
    $rec_signatureDish = $_REQUEST['signatureDish'];
    $rec_foodLicenseNumber = $_REQUEST['foodLicenseNumber'];   
    $rec_offers = $_REQUEST['offers'];
    $rec_validity = $_REQUEST['validity'];
    $rec_timings = $_REQUEST['timings']; 
    $uploadlocation="uploaded/";  
	$fetchFileName = $_FILES['shop_image']['name'];
	$rand_variable = rand(11111, 99999);  
	$new_file=$rand_variable."_".$fetchFileName; 
    if(is_uploaded_file($_FILES['shop_image']['tmp_name']))
	{
			@move_uploaded_file($_FILES['shop_image']['tmp_name'],$uploadlocation.$new_file);
	}
    $sql_con="INSERT INTO `shop_info` SET 
    `Shop Name`= '$rec_shopName',     
    `About`= '$rec_about'
    `Food Category`= '$rec_foodCategory'
    `Signature Dish`= '$rec_signatureDish'
    `Food License No`= '$rec_foodLicenseNumber'
    `Image`= '$new_file'   
    `Offers`= '$rec_offers'
    `Validity`= '$rec_validity'
    `Timings`= '$rec_timings'
    `Location`= '$rec_location'";
    $res=mysqli_query($con, $sql_con);   
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        
        <form name="shop_regform" method="post" action="" enctype="multipart/form-data" >
        <input type="hidden" name="mode" value="1" >
        <h2>Restaurant Registration</h2>
        <div class="form">
            <div class="form-group">
                <label for="shopName">Shop Name:</label>
                <input type="text" id="shopName" name="shopName" placeholder="Enter shop name" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter location" required>
            </div>
            <div class="form-group">
                <label for="about">About:</label>
                <textarea id="about" name="about" placeholder="Enter information about your restaurant" required></textarea>
            </div>
            <div class="form-group">
                <label for="foodCategory">Food Category:</label>
                <select id="foodCategory" name="foodCategory">
                    <option value="Italian">Italian</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Indian">Indian</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="signatureDish">Signature Dish:</label>
                <input type="text" id="signatureDish" name="signatureDish" placeholder="Enter signature dish" required>
            </div>
            <div class="form-group">
                <label for="foodLicenseNumber">Food License Number:</label>
                <input type="text" id="foodLicenseNumber" name="foodLicenseNumber" placeholder="Enter food license number" required>
            </div>
            <div>
                <label for="shop_image">Image:</label>
                <input type="file" accept="image/*" onchange="previewImage(event)" id="shop_image" name="shop_image" required><br>
                <img id="preview" alt="Preview Image"><br>
            </div>
            <div class="form-group">
                <label for="offers">Offers:</label>
                <textarea id="offers" name="offers" placeholder="Enter any offers or promotions"></textarea>
            </div>
            <div class="form-group">
                <label for="validity">Validity:</label>
                <input type="text" id="validity" name="validity" placeholder="Enter validity" required>
            </div>
            <div class="form-group">
                <label for="timings">Timing:</label>
                <input type="text" id="timings" name="timings" placeholder="Enter timing" required>
            </div>
        </div>
        <div class="btn">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="java.js"></script>
</body>
</html>