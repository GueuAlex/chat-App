<?php
    session_start();
    if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
        header("location: admin/admin_dashboard.php");
    }else if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php
    include_once 'head.php';
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat K'SERV |  connexion</header>
            <form action="#" >
                <div class="error-text"></div>
                 
                    <div class="field input log">
                        <label>Addresse Email</label>
                        <input type="text" name="email" placeholder="Entrez votre Email" id="email">

                    </div>
                    <div class="field input">
                        <label>Mot de passe</label>
                        <input type="password" name="password" placeholder="Entrez le mot de passe" id="psw">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="fiel button">
                        <input type="submit" value="connexion">
                    </div>
            </form>
            <div class="link">Pas encore s'inscrit ? <a href="index.php">S'inscrire</a></div>
        </section>
    </div>

    <script src="javaScript/pass_show_hide.js"></script>
    <script src="javaScript/login.js"></script>
</body>
</html>