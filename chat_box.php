<?php
    session_start();
    if(!isset( $_SESSION['unique_id'])){
        header("location: login.php");
       
    }
?>

<?php
    include_once 'head.php';
?>
<body>
    <div class="wrapper">
        <section class="chat-area">
           <header>
           <?php 
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET["user_id"]);
                $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$user_id}");
                if(mysqli_num_rows($sql) > 0 ){
                    $row = mysqli_fetch_assoc($sql);
                }
           ?>
               <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?= $row['img']?>" alt="" srcset="">
                <div class="details">
                    <span><?= $row['fname']." ". $row['lname']?></span>
                    <p><?= $row['status']?></p>
                </div>
           </header>
           <div class="chat-box">

           </div>

        <form action="#" class="typing-area">
            <input type="text" name="outgoing_id" value="<?= $_SESSION['unique_id'];?>" hidden>
            <input type="text" name="incoming_id" value="<?= $user_id;?>" hidden>
            <input type="text" class="input-field" name="message" placeholder="Ecrire ici..." id="">
            <button><i class="fa fa-arrow-circle-right"></i></button>
        </form>
        </section>
    </div>

    <script src="javaScript/chat.js"></script>
</body>
</html>