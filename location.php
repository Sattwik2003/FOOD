<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form fillup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        
        <form name="locationform" method="post">
        <input type="hidden" name="mode" value="1" >
        <h2>Location</h2>
        <div class="form">
            <div class="form-group">
                <label for="locationarea">Location Area :</label>
                <input type="text" id="locationarea" name="locationarea" placeholder="Enter location area" required>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode :</label>
                <input type="text" id="pincode" name="pincode" placeholder="Enter pincode" required>
            </div>
        </div>
        <div class="btn">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>