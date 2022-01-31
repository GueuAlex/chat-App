<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximun-scale=1">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/admin_dashboard.css">
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
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-face-smile"></span>
                        <span>Team</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-agenda"></span>
                        <span>Task</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-clipboard"></span>
                        <span>Leaves</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-folder"></span>
                        <span>Projects</span>
                   </a>
                </li>
                <li>
                    <a href="#">
                        <span class="ti-time"></span>
                        <span>Time</span>
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
                        <span>Accunt</span>
                   </a>
                </li>
            </ul>
        </div>
    </div>
        <div class="main-content">
            <header>
                <div class="search-wrapper">
                    <span class="ti-search"></span>
                    <input type="search" placeholder="Seach ...">
                </div>
                <div class="social-icons">
                    <span class="ti-bell"></span>
                    <span class="ti-comment"></span>
                    <div></div>
                </div>
            </header>
            <main>
                <h2 class="dash-title">Admin dashboard</h2>
                <div class="dash-cards">
                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon1"></div>
                            <div>
                                <h5>Admin (superviseur)</h5>
                                <h4>Effectif : 2</h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="add">Ajouter</a>
                        </div>
                    </div>

                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon2"></div>
                            <div>
                                <h5>Conseiller client</h5>
                                <h4>Effectif : 5</h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="add">Ajouter</a>
                        </div>
                    </div>

                    <div class="card-single">
                        <div class="card-body">
                            <div class="admin-icon icon3"></div>
                            <div>
                                <h5>Membres administratif</h5>
                                <h4>Effectif : 150</h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#"  class="add" >Ajouter</a>
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
                                        <tr>
                                            <td class="td-team">
                                                <div class="img-1"></div> &ensp; App Development
                                            </td>
                                            <td>15 Fev, 2020</td>
                                            <td>25 Fev, 2020</td>
                                            <td >
                                                <span class="badge success">En ligne</span>
                                            </td>
                                            <td>
                                                <span class="ti-trash hiden"></span><span class=" ti-trash remov remov-color"> Retirer</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="td-team">
                                                <div class="img-1"></div>  &ensp; web Development
                                            </td>
                                            <td>15 Fev, 2020</td>
                                            <td>25 Fev, 2020</td>
                                            <td >
                                                <span class="badge success">En ligne</span>
                                            </td>
                                            <td>
                                               <span class="ti-trash hiden"></span><span class=" ti-trash  remov remov-color"> Retirer</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="td-team"> 
                                                <div class="img-1"></div>  &ensp; Front-end Development
                                            </td>
                                            <td>15 Fev, 2020</td>
                                            <td>25 Fev, 2020</td>
                                            <td >
                                                <span class="badge warning">Hors ligne</span>
                                            </td>
                                            <td>
                                                <span class="ti-trash hiden"></span><span class=" ti-trash remov remov-color">  Retirer</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="td-team">
                                                <div class="img-1"></div> &ensp; Back-end Development
                                            </td>
                                            <td>15 Fev, 2020</td>
                                            <td>25 Fev, 2020</td>
                                            <td > 
                                                <span class="badge success">En ligne</span>
                                            </td>
                                            <td>
                                                <span class="ti-trash hiden"></span><span class=" ti-trash remov remov-color"> Retirer</span>
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td class="td-team"> 
                                                <div class="img-1"></div> &ensp; Design Development
                                            </td>
                                            <td>15 Fev, 2020</td>
                                            <td>25 Fev, 2020</td>
                                            <td >
                                                <span class="badge warning">Hors ligne</span>
                                            </td>
                                            <td>
                                                <span class="ti-trash hiden"></span></span><span class=" ti-trash remov remov-color"> Retirer</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="summary">
                            <div class="summary-card">

                                <div class="summary-single">
                                    <span class="status on-ligne"></span>
                                    <div>
                                        <h5>196</h5>
                                        <small>En ligne</small>
                                    </div>
                                </div>

                                <div class="summary-single">
                                    <span class="status off-ligne"></span>
                                    <div>
                                        <h5>16</h5>
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