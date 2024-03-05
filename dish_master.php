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
        
        <form name="dish_masterform" method="post">
        <input type="hidden" name="mode" value="1" >
        <h2>Dish Master</h2>
        <div class="form">
            <div class="form-group">
                <label for="dishtype">Dish type :</label>
                <input type="text" id="dishtype" name="dishtype" placeholder="Enter dish type" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
            </div>
        </form>
    </div>
</body>
</html>