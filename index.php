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
            <header>Chat K'SERV | Sign up</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First name</label>
                        <input type="text" name="fname" placeholder="First name" id="fName" required>

                    </div>
                    <div class="field input">
                        <label>Last name</label>
                        <input type="text" name="lname" placeholder="Last name" id="lName" required>

                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your Email" id="email" required>

                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="password" placeholder="Enter a password" id="pswd" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" id="profil" required>

                    </div>
                    <div class="fiel button">
                        <input type="submit" value="continue to chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="javaScript/pass_show_hide.js"></script>
    <script src="javaScript/signup.js"></script>
</body>
</html>