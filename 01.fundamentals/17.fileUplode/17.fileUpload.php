<?php
echo "<h1 style='text-align:center;'>FILE UPLOAD</h1>";

if (isset($_FILES['image'])) {

  $file_name = $_FILES['image']['name'];

  $file_tmp = $_FILES['image']['tmp_name'];

  move_uploaded_file($file_tmp, "images/" . $file_name);

  echo "<img src='images/$file_name' width='200px' height='200px' style='margin-left: 750px;'>";
}

?>
<div style='text-align:center; padding:150px;'>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="submit" value="Submit">

  </form>
</div>