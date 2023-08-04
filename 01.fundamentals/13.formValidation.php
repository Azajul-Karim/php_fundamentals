<?php
echo "<h1 style='text-align:center;'>PHP FORM VALIDATION</h1>";

$errName = $errEmail = $errWebsite = $errComment = $errGender = "";

$name = $email = $website = $comment = $gender = "";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (empty($_POST['username'])) {
    $errName = "<span style='color:red'>Name is required.</span>";
  } else {
    $name = validate($_POST['username']);
  }

  if (empty($_POST['email'])) {
    $errEmail = "<span style='color:red'>Email is required.</span>";
  } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = "<span style='color:red'>Email is not valid.</span>";
  } else {
    $email = validate($_POST['email']);
  }

  if (empty($_POST['website'])) {
    $errWebsite = "<span style='color:red'>Website is required.</span>";
  } elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
    $errWebsite = "<span style='color:red'>Website is not valid.</span>";
  } else {
    $website = validate($_POST['website']);
  }

  if (empty($_POST['gender'])) {
    $errGender = "<span style='color:red'>Gender is required.</span>";
  } else {
    $gender = validate($_POST['gender']);
  }

  $comment = validate($_POST['comment']);


  echo "Name: " . $name . "<br>";

  echo "Email: " . $email . "<br>";

  echo "Website: " . $website . "<br>";

  echo "Comment: " . $comment . "<br>";

  echo "Gender: " . $gender . "<br>";
}

function validate($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <fieldset>
        <p style="color:red">
          <strong>
            * Required Field
          </strong>
        </p>

        <label for="username">User Name* </label>
        <td>
          <input type="text" name="username" id="username"> <?php echo $errName; ?>
        </td>

        <label for="email">Email*</label>
        <td>
          <input type="text" name="email" id="email">
          <?php echo $errEmail; ?>
        </td>

        <label for="website">Website*</label>
        <td>
          <input type="text" name="website" id="website">
          <?php echo $errWebsite; ?>
        </td>


        <label for="comment">Comment*</label>
        <td><textarea name="comment" id="" cols="30" rows="10"></textarea> <?php echo $errComment; ?>
        </td>

        <label for="gender">Gender *</label>
        <td>
          <input type="radio" name="gender" value="Male">Male
          <input type="radio" name="gender" value="female">Female
          <?php echo $errGender; ?>
        </td>

      </fieldset>
      <input class="button-primary" type="submit" name="submit" value="Submit">
    </form>

    <?php



    ?>
  </div>
</body>

</html>