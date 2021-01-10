<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel= "stylesheet " href= "CSS/reset.css">
    <link rel= "stylesheet " href= "CSS/form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Générateur de Carte de Visite</title>

</head>

<body>

    <div class="wrapper">

        <h1 class="titre-princ">Générateur de carte de visite</h1>

        <p class="svp"> Veuillez remplir le formulaire ci-dessous</p>

        <form action="card.php" method='get'>

            <div class="info">
                <h2 class="titres">Informations personelles</h2>
                <label for="name">Prénom</label>
                <input type="text" name="name" id="name" value= "<?= $_GET['name'] ?? NULL ?>" >
            
                <label for="last_name">Nom</label>
                <input type="text" name="last_name" id="last_name" value= "<?= $_GET['last_name'] ?? NULL ?>" >
            
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value= "<?= $_GET['age'] ?? NULL ?>" >
            
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" value= "<?= $_GET['ville'] ?? NULL ?>" >

                <label for="email">Adresse Email</label>
                <input type="email" name="email" id="email" value= "<?= $_GET['email'] ?? NULL ?>" >
            </div>

            <div class="reseaux">
                <h2 class="titres">Twitter</h2>
                <!-- <label for="linkedin">Pseudo LinkedIn</label>
                <input type="text" name="linkedin" id="linkedin"> -->
            
                <label for="twitter">Pseudo Twitter</label>
                <input type="text" name="twitter" id="twitter" value= "<?= $_GET['twitter'] ?? NULL ?>" >
            </div>

            <div class="diplomes">
                <h2 class="titres">Diplômes et formations</h2> 
                <label for="dip1">Diplôme 1</label>
                <input type="text" name="dip1" id="dip1"
                value= "<?= $_GET['dip1'] ?? NULL ?>" >

                <label for="dip2">Diplôme 2</label>
                <input type="text" name="dip2" id="dip2" value= "<?= $_GET['dip2'] ?? NULL ?>" >

                <label for="dip3">Diplôme 3</label>
                <input type="text" name="dip3" id="dip3" value= "<?= $_GET['dip3'] ?? NULL ?>" >
            </div>

            <div class="skills">
                <h2 class="titres">Compétences</h2>
                <label for="skill1">Compétence 1</label>
                <input type="text" name="skill1" id="skill1" value= "<?= $_GET['skill1'] ?? NULL ?>" >

                <label for="skill2">Compétence 2</label>
                <input type="text" name="skill2" id="skill2" value= "<?= $_GET['skill2'] ?? NULL ?>" >

                <label for="skill3">Compétence 3</label>
                <input type="text" name="skill3" id="skill3" value= "<?= $_GET['skill3'] ?? NULL ?>" >
            </div>


            <div class="perso">
                <h2 class="titres">Personnification</h2>
                <label for="color">Choisissez une couleur :</label>
                <select name="color" id="color">
                    <option value="">Choississez une option</option>
                    <option value="rose">Rose</option>
                    <option value="vert">Vert</option>
                    <option value="bleu">Bleu</option>
                    <option value="jaune">Jaune</option>
                </select>
            
                <label for="pdp">Photo de profil</label>
                <input type="file"
                id="pdp" name="pdp"
                accept="image/png, image/jpeg">

                <div class="button">
                <button type="submit">Envoyer</button>
                </div>

            </div>

        </form>
    </div>
</body>
</html>

