<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>New Item</h2>
        <form method="post">
    <div class="row">
        <label>Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="item name" value="">
        </div>
           <label>Description</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="item desription" value="">
        </div>
           <div class="col-sm-6"></div>
        <label for="fileUpload">Image:</label>
  <input type="file" id="fileUpload" name="fileUpload">


  </div>
    <input type="submit" value="Submit">
    </div>

        </form>
    </div>
</body>
</html>