<?php session_start()?>
<?php 
    include_once '../php/config.php';
    $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}' AND post = 'admin'");
   
    if (mysqli_num_rows($sql2)>0) {
        $row1 = mysqli_fetch_assoc($sql2);
       
    }else{
        header('location: ../users.php');
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximun-scale=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="../css/admin_dashboard.css">
   
</head>
<body>
    <input type="checkbox" id="sidebar-toggle">
     <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>Chat K'SERV</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="">
                        <span class="ti-home"></span>
                        <span>Acceuil</span>
                    </a>
                </li>
                <li>
                    <a href="../users.php">
                        <span class="ti-face-smile"></span>
                        <span>Chat</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-agenda"></span>
                        <span>Taches</span>
                   </a>
                </li>
    
                <li>
                    <a href="#">
                        <span class="ti-folder"></span>
                        <span>Projets</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-time"></span>
                        <span>Temps</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-book"></span>
                        <span>Contacts</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-settings"></span>
                        <span>Compte</span>
                   </a>
                </li>
                <li>
                    <a href="../php/logout.php?logout_id=<?=$row1['unique_id']?>">
                        <span class="ti-power-off"></span>
                        <span>Se deconnecter</span>
                   </a>
                </li>
            </ul>
        </div>
    </div>
        <div class="main-content">
            
            <header>
                <div class="search-wrapper">
                    <span class="ti-search"></span>
                    <input type="search" placeholder="Recherche ...">
                </div>
                <div class="social-icons">
                    <a href="">
                    <span class="ti-bell"></span>
                    </a>
                    <a href="../users.php">
                    <span class="ti-comment"></span>
                    </a>
                    <div>
                        <img  class="img-1" src="../php/images/<?=$row1['img']?>" alt="">
                    </div>
                </div>
            </header>
            <main>
                <h2 class="dash-title">Admin dashboard</h2>
                <div class="dash-cards">
                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon1"></div>
                            <div>

                            <?php 
                                
                                $sql11 = mysqli_query($conn, "SELECT * FROM users WHERE post = 'admin'");
                            
                                if ($sql11) {
                                    $nbrAdmin = mysqli_num_rows($sql11);
                                }
                             ?>
                                <h5>Admin (superviseur)</h5>
                                <h4>Effectif : <?= $nbrAdmin;?></h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="add.php?cat=admin" class="add">Ajouter</a>
                        </div>
                    </div>

                    <?php 
                    
                        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE post = 'cc'");
                    
                        if ($sql3) {
                            $nbrCC = mysqli_num_rows($sql3);
                        }
                   ?>
                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon2"></div>
                            <div>
                                <h5>Conseiller client</h5>
                                <h4>Effectif : <?= $nbrCC;?></h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="add.php?cat=cc" class="add">Ajouter</a>
                        </div>
                    </div>
                    <?php 
                    
                        $sql4 = mysqli_query($conn, "SELECT * FROM users WHERE post = 'autre'");
                    
                        if ($sql4) {
                            $nbrAutre = mysqli_num_rows($sql4);
                        }
                   ?>
                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon3"></div>
                            <div>
                                <h5>Membres administratif</h5>
                                <h4>Effectif : <?= $nbrAutre;?></h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="add.php?cat=autre"  class="add" >Ajouter</a>
                        </div>
                    </div>
                </div>
                <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>Membre inscrit au chat</h3>

                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Nom & Prénom</th>
                                            <th>Poste</th>
                                            <th>Date inscri...</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM users");
                                        if(mysqli_num_rows($sql) > 0):
                                      ?>
                                            <?php while($row = mysqli_fetch_assoc($sql)):?>
                                                
                                                <tr>
                                
                                                    <td class="td-team">
                                                        <div><img src="../php/images/<?=$row['img']?>" class="img-1" alt=""></div> &ensp; <?=$row['fname'].' '.$row['lname']?>
                                                    </td>
                                                    <td>
                                                    <?php 
                                                        if($row['post'] === 'cc'){
                                                            $post = 'Conseiller client';
                                                        }elseif($row['post'] === 'autre'){
                                                            $post = 'Autre';
                                                        }else{
                                                            $post = 'Administrateur';
                                                        }

                                                        echo $post;
                                                    ?>
                                                    </td>
                                                    <td>25 Fev, 2020</td>
                                                    <td >
                                                        <span class="badge success"><?=$row['status']?></span>
                                                    </td>
                                                    <td>
                                                        <a href="../php/remove.php?id=<?=$row['unique_id']?>" class="ti-trash remov"></a>
                                                       
                                                    </td>
                                 
                                               </tr>
                                              
                                            <?php endwhile?>
                                      <?php endif?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="summary">
                            <div class="summary-card">
                            <?php 
                                
                                $sql12 = mysqli_query($conn, "SELECT * FROM users WHERE status = 'En ligne'");
                            
                                if ($sql12) {
                                    $nbrConnecter = mysqli_num_rows($sql12);
                                }
                             ?>

                                <div class="summary-single">
                                    <span class="status on-ligne"></span>
                                    <div>
                                        <h5><?= $nbrConnecter ?></h5>
                                        <small>En ligne</small>
                                    </div>
                                </div>
                                
                                <?php 
                                
                                    $sql16 = mysqli_query($conn, "SELECT * FROM users WHERE status = 'Hors ligne'");
                                
                                    if ($sql16) {
                                        $nbrHors = mysqli_num_rows($sql16);
                                    }
                                ?>
                                <div class="summary-single">
                                    <span class="status off-ligne"></span>
                                    <div>
                                        <h5><?=  $nbrHors  ?></h5>
                                        <small>Hors ligne</small>
                                    </div>
                                </div>

                                <div class="summary-single">
                                    <span class="ti-trash"></span>
                                    <div>
                                        <h5>12</h5>
                                        <small>Personne(s) Retirer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="bday-card">
                                <div class="bday-flex">
                                    <div class="bday-img"></div>
                                    <div class="bday-info">
                                        <h5>Dwayne F. Sanders</h5>
                                        <small>Birthday Today</small>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button>
                                        <span class="ti-gift"></span>
                                        wish him
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
</body>
</html>