<?php
// http://localhost/Perso/Profil-Card/card.php?name=Sonia&last_name=Carmon&age=15&ville=Rouen&email=mouou%40mail.fr&linkedin=SoniaCa&twitter=KazuPkt&dip1=Master&dip1=Licence&dip1=Dev&skill1=HTML&skill1=CSS&skill1=PHP&color=&pdp=

$reponse_form=$_GET;
foreach ($reponse_form as $key => $value) {
    if(strlen($reponse_form[$key])==0) {
        $reponse_form[$key]=NULL;
    }
    
}
var_dump($reponse_form);

// /var/www/html/Perso/Profil-Card/card.php:5:
// array (size=11)
//   'name' => string 'Sonia' (length=5)
//   'last_name' => string 'Carmon' (length=6)
//   'age' => string '15' (length=2)
//   'ville' => string 'Rouen' (length=5)
//   'email' => string 'mouou@mail.fr' (length=13)
//   'linkedin' => string 'SoniaCa' (length=7)
//   'twitter' => string 'KazuPkt' (length=7)
//   'dip1' => string 'Dev' (length=3)
//   'skill1' => string 'PHP' (length=3)
//   'color' => string '' (length=0)
//   'pdp' => string '' (length=0)

?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel= "stylesheet " href= "CSS/reset.css">
    <link rel= "stylesheet " href= "CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Frontend Mentor | Profile card component</title>

</head>

<body>
<div class="wrapper <?= $reponse_form['color'] ?? NULL ?>">

    <div class="card <?= $reponse_form['color'] ?? NULL ?>">
        <header class="img-name">
            <div class="image"><img class="photo" src="./images/Sonia.jpeg" alt="Sonia"></div>
            <p class="name"><span class="princ"><?= $reponse_form['name'] ?? NULL ?> <?= $reponse_form['last_name'] ?? NULL ?></span> <span class="age"><?= $reponse_form['age'] ?? NULL ?></span>, <em><?= $reponse_form['ville'] ?? NULL ?></em> </p>
            <p><em><?= $reponse_form['email'] ?? NULL ?></em> </p>
            <p>
                <!-- <a href="https://www.linkedin.com/in/sonia-carmon-027056173/" target = "_blank"><img class="logos" src="./images/linkedin.png" alt="linkedin"></a> -->
                <?php if (isset($reponse_form['twitter'])): ?>
                    <a href="https://twitter.com/<?= $reponse_form['twitter'] ?? NULL ?>" target = "_blank"><img class="logos" src="./images/Twitter.svg" alt="twitter"></a>
                <?php endif; ?>

            </p>
        </header>

        <!-- <main>  
            <div class="formation">
                <h1 class="princ">Diplômes et formations</h1>
                <ul>                    
                    <li><em>Développeur Web (O'clock)</em></li>
                    <li><em>Master Gestion de l'Environnement</em></li>
                    <li><em>Licence Ecologie Biologie des Organismes</em></li>
                </ul>
            </div>   

            <div class="skills">
                <h1 class="princ">Compétences</h1>
                <ul>
                    <li><em>HTML: blahblahblah</em></li>
                    <li><em>CSS: blahblahblah</em></li>
                    <li><em>PHP: blahblahblah</em></li>
                </ul>
            </div>  
                
        </main> -->

        <main> 
            
            <div class="listes">

                <div class="l1">
                    <h1 class="princ">Diplômes et formations</h1>
                    <h1 class="princ">Compétences</h1>
                </div>   

                <div class="l2">
                    <?php if (isset($reponse_form['dip1'])): ?>
                        <em><?= $reponse_form['dip1']?></em>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>

                    <?php if (isset($reponse_form['skill1'])): ?>
                        <em><?= $reponse_form['skill1']?></em>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                </div>
                
                
                <div class="l3">
                    <?php if (isset($reponse_form['dip2'])): ?>
                        <em><?= $reponse_form['dip2']?></em>
                    <?php else: ?>
                    <p></p>    
                    <?php endif; ?>
                    <?php if (isset($reponse_form['skill2'])): ?>
                            <em><?= $reponse_form['skill2']?></em>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                </div>  


                <div class="l4">
                    <?php if (isset($reponse_form['dip3'])): ?>
                        <em><?= $reponse_form['dip3']?></em>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                    <?php if (isset($reponse_form['skill3'])): ?>
                        <em><?= $reponse_form['skill3']?></em>
                    <?php else: ?>
                        <p></p>
                    <?php endif; ?>
                </div>  

            </div>  
        </main>


    </div>

    <footer>
            <div class="attribution">
            Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
            Coded by <a href="#">Sonia</a>.
            </div>
    </footer>
    

</div>
</body>
</html>
