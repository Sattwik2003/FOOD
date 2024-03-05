<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Registration Form</title>
</head>
<body>

    <div class="registration-container">
        <h2>Restaurant Registration</h2>
        <form>
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
            <div class="form-group">
                <label for="shop_image">Image:</label>
                <input type="file" id="shop_image" name="shop_image" required>
            </div>
            <div class="form-group">
                <label for="offers">Offers:</label>
                <textarea id="offers" name="offers" placeholder="Enter any offers or promotions"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>