<form action="card.php" method="$_GET">

    <div class="info">
        <h4>Informations personelles</h4>
        <label for="name">Prénon</label>
        <input type="text" name="name" id="name">
    
        <label for="last_name">Nom</label>
        <input type="text" name="last_name" id="last_name">
    
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville">

        <label for="email">Adresse Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="reseaux">
        <h4>Résaux</h4>
        <label for="linkedin">Pseudo LinkedIn</label>
        <input type="text" name="linkedin" id="linkedin">
    
        <label for="twitter">Pseudo Twitter</label>
        <input type="text" name="twitter" id="twitter">
    </div>

    <div class="diplomes">
        <h4>Diplômes et formations</h4>
        <label for="dip1">Diplôme 1</label>
        <input type="text" name="dip1" id="dip1">

        <label for="dip1">Diplôme 1</label>
        <input type="text" name="dip1" id="dip1">

        <label for="dip1">Diplôme 1</label>
        <input type="text" name="dip1" id="dip1">
    </div>

    <div class="skills">
        <h4>Compétences</h4>
        <label for="skill1">Compétence 1</label>
        <input type="text" name="skill1" id="skill1">

        <label for="skill1">Compétence 1</label>
        <input type="text" name="skill1" id="skill1">

        <label for="skill1">Compétence 1</label>
        <input type="text" name="skill1" id="skill1">
    </div>


    <div class="perso">
        <h4>Personnification</h4>
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
    </div>

</form>