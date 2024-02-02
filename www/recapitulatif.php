<html lang="fr">
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

<!-- This div contains the whole page -->
<div class="content-summary">

    <h1 class="title">Votre inscription</h1>

    <?php
    $stars = "********************************************************************************"; // 80 stars

    echo "<h2 class='sub-title'>$stars<br><br>VOS COORDONÉES<br><br>$stars</h2>";

    // reads form from $_POST
    $license = htmlspecialchars($_POST['license']);
    $category = htmlspecialchars($_POST['category']);
    $civility = htmlspecialchars($_POST['civility']);
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $address = htmlspecialchars($_POST['address']);

    // converts name to lowercase with the first letter uppercase and surname to uppercase
    $name = ucfirst(strtolower($name));
    $surname = strtoupper($surname);

    // converts email to lowercase as it's not case-sensitive
    $email = strtolower($email);

    // Check if any of the required fields are empty
    if (empty($civility) || empty($category) || empty($name) || empty($surname) || empty($birthdate) || empty($email) || empty($phone_number) || empty($address)) {
        // Redirect to another page with an error query parameter
        header('Location: formulaire.php?error=empty');
        exit;
    }


    // Summarises the information to the user
    echo "<p>$civility<br><b>$surname $name</b><br><br><br></p>";
    echo "<p>résidant à <br><b>$address</b><br><br></p>";
    echo "<p>Votre numéro de téléphone est le<br><b>$phone_number</b><br><br></p>";
    echo "<p>et votre email :<br><b>$email</b></p>";
    echo "<p>Vous êtes né le <b>$birthdate</b></p>";

    echo "<h2 class='sub-title'>$stars<br><br>VOTRE CHOIX D'INSCRIPTION<br><br>$stars</h2>";

    echo "<p>Vous avez choisi la license <b>$license</b></p>";
    echo "<p>et vous avez choisi la catégorie <b>$category</b><br><br></p>";

    // Offers the user the choice to redo the form - the js part allows the form data to stay which is good quality of life
    echo "<p>Pour rectifier les informations saisies, <a href='javascript:history.back()'><b>Cliquez Ici</b></a> pour revenir à la page précédente</p>";

    ?>
</div>

</body>
</html>
