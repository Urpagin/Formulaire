<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Recapitulatif</title>
</head>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    // Redirects to formulaire.php
    header("Location: formulaire.php");
    exit; // Ensure no further exectution of the script
}
?>

<body>
<h1>Votre inscription</h1>
<h2>
    ********************************************************************************
    <br><br>vos coordonées<br><br>
    ********************************************************************************
</h2>

<p>
    <?php
    $license = htmlspecialchars($_POST['license']);
    $civility = htmlspecialchars($_POST['civility']);
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $address = htmlspecialchars($_POST['address']);

    // Check if any of the required fields are empty
    if (empty($civility) || empty($name) || empty($surname) || empty($birthdate) || empty($email) || empty($phone_number) || empty($address)) {
        // Redirect to another page with an error query parameter
        header('Location: formulaire.php?error=empty');
        exit;
    }

    // Echo the variables
    echo "License: " . $license . "<br>";
    echo "Civility: " . $civility . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Surname: " . $surname . "<br>";
    echo "Birthdate: " . $birthdate . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phone_number . "<br>"; // Corrected variable for phone number
    echo "Address: " . $address . "<br>";



    ?>
</p>

<button onclick="location.href='formulaire.php';">Go to Target Page</button>


</body>
</html>
