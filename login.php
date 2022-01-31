<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php
    include_once 'head.php';
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat K'SERV |  Login</header>
            <form action="#" >
                <div class="error-text"></div>
                
                    <div class="field input log">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email" id="email">

                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" placeholder="Enter a password" id="psw">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="fiel button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>

    <script src="javaScript/pass_show_hide.js"></script>
    <script src="javaScript/login.js"></script>
</body>
</html>