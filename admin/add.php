<?php
    session_start();
    if (isset($_GET['cat']) && !empty(trim($_GET['cat'])) && (($_GET['cat']==='cc') || ($_GET['cat']==='admin') || ($_GET['cat']==='autre'))) {
        $cat = $_GET['cat'];
        if ($cat==='cc') {
            $vue = 'Conseiller client';
        }elseif($cat==='autre'){
            $vue = 'Autre';
        }else{
            $vue = 'Administrateur';
        }
    }else{
        header('location: admin_dashboard.php');
    }
?>

<!DOCTYPE html>
<!---------------------------- By KLA Gueu Alexandre from ITA II PLTX---------------------------------->
<!---------------------------- By KLA Gueu Alexandre from ITA II PLTX---------------------------------->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat K'SERV</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat K'SERV | ajouter</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="field input">
                        <label>En tant que</label>
                        <select disabled  class="select" id="">
                            <option><?= $vue?></option>
                        </select>
                        <input type="text" name="level" value="<?= $cat?>" hidden>
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
                        <input type="submit" value="Ajouter l'utilisateur">
                    </div>
            </form>
            
        </section>
    </div>
    <script src="../javaScript/pass_show_hide.js"></script>
    <script src="../javaScript/add.js"></script>
</body>
</html>