<?php

//Vérifiez si la méthode de requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validate the form data
  if (empty($name)) {
    // Set error message if name is empty
    $error_message = "veuillez remplir ce champ";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Set error message if email is invalid
    $error_message = "Adresse Email invalid";
  } elseif (strlen($password) < 8) {
    // Set error message if password length is less than 8 characters
    $error_message = "veuillez entrer un Mot de pass de  8 cararctère";
  } else {
    // Set success message if all validation checks are passed
    $success_message = " bravo vous ête connecté";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <!-- HTML form for user input -->
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Label and input for name -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <!-- Label and input for email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
  
    <!-- Label and input for password -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
  
    <!-- Submit button -->
    <input type="submit" value="Submit">
  </form>
  <!-- affichage du message d'erro -->
  <?php if (isset($error_message)) : ?>
    <p> <?php echo $error_message; ?></p>
  <?php endif; ?>
  <!-- affichage du message de succes -->
  <?php if (isset($success_message)) : ?>
    <p><?php echo $success_message; ?></p>
  <?php endif; ?>
</body>
</html>