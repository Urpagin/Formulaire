<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>

<script>
    // Check for the error query parameter
    window.onload = function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('error')) {
            const error = urlParams.get('error');
            // Check if the error is due to empty fields
            if (error === 'empty') {
                alert('Erreur: formulaire incomplet');
            }
        }
    }
</script>

<body>

<h1 style="color: chocolate">Formulaire de préinscription au club de Handball du lycée Ferdinand BUISSON (Voiron).</h1>
<h2 style="color: green">Veuillez compléter le formulaire pour la session 2023-2024 et vérifier ensuite les informations
    saisies.</h2>

<hr class="rounded">

<form action="recapitulatif.php" method="post">

    <div class="field">
        <label for="license">Type de licence :</label>
        <select id="license" name="license" required>
            <option value="Joueur">Joueur</option>
            <option value="Dirigeant">Dirigeant</option>
            <option value="Arbitre">Arbitre</option>
            <option value="Mutation">Mutation</option>
        </select>
    </div>

    <div class="field">
        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie" required>
            <option value="Moins de 13 ans">Moins de 13 ans</option>
            <option value="Moins de 15 ans">Moins de 15 ans</option>
            <option value="Moins de 18 ans">Moins de 18 ans</option>
            <option value="Hand à 4">Hand à 4</option>
            <option value="Sénior">Sénior</option>
        </select>
    </div>

    <hr class="rounded">

    <h2 style="color: green">Vos informations personelles</h2>

    <div class="infos-personelles">

        <p class="civility-text">Civilité</p>

        <div class="field" id="civility-radio">
            <input type="radio" id="civility1" name="civility" class="field" value="Monsieur" required>
            <label for="civility1" id="label-civility1">Monsieur</label><br>
            <input type="radio" id="civility2" name="civility" class="field" value="Madame">
            <label for="civility2" id="label-civility2">Madame</label>
        </div>

        <div class="field">
            <label for="name">Nom : (obligatoire) </label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="field">
            <label for="surname">Prénom : (obligatoire) </label>
            <input type="text" id="surname" name="surname" required>
        </div>

        <div class="field">
            <label for="birthdate">Date de naissance : (obligatoire) </label>
            <input type="date" id="birthdate" name="birthdate">
        </div>

        <div class="field">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse mail" required>
        </div>

        <div class="field">
            <label for="phone_number">Téléphone : (obligatoire) </label>
            <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}"
                   placeholder="Entrez votre numéro de tel" required>
        </div>

        <div class="field">
            <label for="address">Votre adresse : (obligatoire) </label>
            <input type="text" id="address" name="address" placeholder="Tapez ici votre adresse personelle" required>
        </div>


    </div>

    <div>
        <input type="submit" value="Valider">
    </div>

    <hr class="rounded">

    <div class="contact">
        <a href="mailto:urpagin@proton.me?subject=Contact from Website">Contactez-moi</a>
    </div>

</form>

</body>
</html>
