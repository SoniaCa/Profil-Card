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
<div class="wrapper">

    <div class="card">
        <header class="img-name">
            <div class="image"><img class="photo" src="./images/Sonia.jpeg" alt="Sonia"></div>
            <p class="name"><span class="princ">Sonia Carmon</span> <span class="age">25</span>, <em>Rouen</em> </p>
            <p><em>carmon.sonia@gmail.com</em> </p>
            <p>
                <a href="https://www.linkedin.com/in/sonia-carmon-027056173/" target = "_blank"><img class="logos" src="./images/linkedin.png" alt="linkedin"></a>
                <a href="https://twitter.com/KazuPkt" target = "_blank"><img class="logos" src="./images/Twitter.svg" alt="twitter"></a>
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
            <div class="l1">
                <h1 class="princ">Diplômes et formations</h1>
                <h1 class="princ">Compétences</h1>
            </div>   

            <div class="l2">
                <em>Développeur Web (O'clock)</em>
                <em>HTML: blahblahblah</em>
            </div>
            
            
            <div class="l3">
                <em>Master Gestion de l'Environnement</em>
                <em>CSS: blahblahblah</em>
            </div>  


            <div class="l4">
                <em>Licence Ecologie Biologie des Organismes</em>
                <em>PHP: blahblahblah</em>
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
