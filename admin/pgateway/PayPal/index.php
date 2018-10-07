<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  
  <form action="checkout.php" method="POST">
    <div class="form-group">
      <label for="email">Product:</label>
    <input type="text" name="product" class="form-control" value="">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" name="price" class="form-control" value="">
    </div>
    
   	<input type="submit" value="submit">
  </form>
</div>


</body>
</html>