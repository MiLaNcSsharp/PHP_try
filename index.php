<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>
  <form method="post">

    <div class="form-group">
      <input type="text" name="input_1" class="form-control" value="">
    </div>

    <div class="form-group">
      <input type="text" name="input_2" class="form-control" value="">
    </div>

    <div class="form-group">
      <input type="text" name="input_3" class="form-control" value="">
    </div>

    <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <?php
  $subbutton = $_POST['submit'];
  $input_1 = $_POST['input_1'];
  $input_2 = $_POST['input_2'];
  $input_3 = $_POST['input_3'];

  if (isset($subbutton)) {
    if (empty($input_1) || empty($input_2) || empty($input_3)) {
      echo "fill in all the fields";

    }
    else {
    print $input_1." ".$input_2." ". $input_3;
    }
  }
  ?>
</body>
</html>
