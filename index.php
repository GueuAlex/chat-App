<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once 'head.php';?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat K'SERV | inscription</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="field input">
                        <label>En tant que</label>
                        <select class="select" name="" id="">
                            <option value="CC">Conseiller client</option>
                             <option value="CC">Autres</option>
                        </select>
                    </div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nome</label>
                        <input type="text" name="fname" placeholder="Votre nom" id="fName" required>

                    </div>
                    <div class="field input">
                        <label>Prénoms</label>
                        <input type="text" name="lname" placeholder="Votre prénom(s)" id="lName" required>

                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Entrez votre Email" id="email" required>

                    </div>
                    <div class="field input">
                        <label>Mot de passe</label>
                        <input type="password" name="password" placeholder="Entrez un mot de passe" id="pswd" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" id="profil" required>

                    </div>
                    <div class="fiel button">
                        <input type="submit" value="s'inscrire">
                    </div>
            </form>
            <div class="link">Déjà inscrit ? <a href="login.php">Connexion</a></div>
        </section>
    </div>
    <script src="javaScript/pass_show_hide.js"></script>
    <script src="javaScript/signup.js"></script>
</body>
</html>