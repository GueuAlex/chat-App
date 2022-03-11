<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">

    <style>
    .modal, .doo{
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 200;
        }

        .modal_wrapper, div.effectuer{
            width: 400px;
            max-width: calc(100vw - 20px);
            max-height: calc(100vh - 20px) ;
            padding: 20px;
            background-color: #FFF;
            transition: 0.6s cubic-bezier(0.49, -0.09, 1, 1) all;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.8);
        }
        .closeBtn{
            position: relative;
            bottom: 32px;
            right: 30px;
            width: 40px;
            height: 40px;
            background-color: #027581;
            border:solid 2px #027581;
            border-radius: 50%;
            font-size: 1.5rem;
            color: #fff;
            font-size: 1000;
            cursor: pointer;
        }

        .confimer:hover{
            cursor: pointer;
            background-color: red;
            border: 1px solid red;
        }


        
        div.effectuer div.sucess, div.effectuer span.sucess{
           
            font-size: .9rem;
            font-weight: 700;
            font-family: sans-serif;
            color: green;
        }

        div.effectuer div, div.effectuer span{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        div.effectuer svg{
            width: 50px;
            height: 50px;
            
        }

        div.effectuer{
            display: none;
        }

        
    </style>
</head>
<body>
    
<aside id="modal1"  class="modal"  aria-hidden="true" role="dialog" aria-labelledby="title_modal">
        <div  class="modal_wrapper js-modal-stop">
                <button class="js-modal-close closeBtn">X</button>
                <h2 id="title_modal">ATTENTION !</h2>
                <hr><br>
                <h3>Souhaitez vous vraiment retirer cet utulisateur ?</h3>
                 <?php
                 if(isset($_GET['id']) && !empty(trim($_GET['id']))):
                    $id = $_GET['id'];
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$id}'");
                    $row = mysqli_fetch_assoc($sql);
                    if($sql && $row['unique_id'] === $id):
                    
                    
                   
                 ?>
                <div class="bday-card">
                        <div class="bday-flex">
                            <div class="bday-img">
                                <img class="bday-img" src="images/<?= $row['img']?>" alt="">
                            </div>
                            <div class="bday-info">
                                <h5><?= $row['fname']." ".$row['lname']?></h5>
                                <small><?php 
                                    if($row['post'] === 'cc'){
                                        $post = 'Conseiller client';
                                    }elseif($row['post'] === 'autre'){
                                        $post = 'Autre';
                                    }else{
                                        $post = 'Administrateur';
                                    }

                                    echo $post;
                                ?></small>
                            </div>
                        </div>
                        <?Php else:  header('location: ../admin/admin_dashboard.php'); endif?>
                        <?php else:  header('location: ../admin/admin_dashboard.php'); endif?>
                        <div class="text-center">
                            <form action="" method="post">
                                <button type="submit" name="suprimer" class="confimer">
                                    <span class="ti-trash"></span>
                                    confirmer
                                </button>
                            </form>
                        </div>
                </div>
        </div>
        <?php
            if(isset($_POST['suprimer'])){
                $suprim = $_POST['suprimer'];
                $sql = mysqli_query($conn, "DELETE FROM users WHERE unique_id = {$id}");

                
            }
        ?>
    </aside>
    <div class="dot">
        <div class="effectuer">
            <div class="sucess">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </div>
            <span class="sucess">Utulisateur suprimer avec sucès.</span>
            <div>
                Redirection <span class="second"></span>
            </div>
        </div>
    </div>

    <script>
        const confirmer = document.querySelector('.confimer');
        const modal = document.querySelector('.modal');
        const modal_wrapper = document.querySelector('.modal_wrapper');
        const dot = document.querySelector('.dot');
        const effectur = document.querySelector('.effectuer');
        const closeBtn = document.querySelector('.closeBtn');
        const second = document.querySelector('.second');
        const head = document.querySelector('head');


        closeBtn.addEventListener('click', ()=>{
            location.href = "../admin/admin_dashboard.php";
        })

        confirmer.addEventListener('click', (e)=>{
            
            modal.style.display = 'none';
            modal_wrapper.style.display = 'none';
            dot.classList.add('doo');
            effectur.style.display = 'block';

            location.href = "../admin/admin_dashboard.php";
            

        })
    </script>
</body>
</html>