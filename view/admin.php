<?php
    include "../bdd/sql.php"; 
    include "../bdd/functionsBdd.php";
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- l'onglet -->
        <title>DWPark ADMIN</title>
        <link rel="icon" href="../images/logo/LogoXx.png">

        <!-- aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- librairie -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <!-- css -->
        <link href="../font/stylesheet.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>
    </head>
    <body id="bodyAdmin" onload="getUsers();">
        
    <!------------ Navbar -------------->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="../images/logo/crea/drwp.png" alt="logoDWP" id="logo">
                </a>
                <ul class="nav">
                    <a class="btn btn-admin" href="#up"> Ajouter </a>
                    <a class="btn btn-admin" href="#listUsers"> Abonnés </a>
                    <a class="btn btn-admin" href="#listTarifs"> Tarifs </a>
                    <a class="btn btn-admin" href="#listResaBillets"> Résérvation Billet </a>
                    <a class="btn btn-admin" href="#listResaCostumes"> Résérvation Costume </a>
                    <a class="btn btn-admin" href="#listEvents"> Evenements </a>
                    <a class="btn btn-admin" href="#listAttractions"> Attractions </a>
                </ul>
            </div>
        </nav>

        <div id="up"></div>
    <!--------- Boutton Encre --------->
        <div class="admin fixed-top"></div>    

    <!------------ Card ------------>
        <!----- Ajout Evenement ----->
        <div class="row row-cols-1 row-cols-md-3 g-4" id="rowFirst">
            <div class="col" >
                <div class="card card-ajout">
                    <h5 class="card-title card-titre-ajout">Ajouter un evenement</h5>
                    <div class="form-ajout">
                        <div>
                            <label for="name">Nom :</label>
                            <input type="text" id="event_card_name" name="name" required>
                        </div>
                        <div>
                            <label for="date">Date :</label>
                            <input type="date" id="event_date" name="date" value="aaaa-mm-jj" min="1900-01-01" max="2202-02-02" required>
                        </div>
                        <div>
                            <label for="time">heure :</label>
                            <input type="text" id="heure_time" name="time" required>
                        </div>
                        <div>
                            <label for="time">durée :</label>
                            <input type="text" id="event_time" name="time" required>
                        </div>
                        <div>
                            <label for="msg">Description :</label>
                            <textarea id="msg" name="msg"></textarea>
                        </div>
                        <div>
                            <input class="btn btn-file" type="file" name="file" />
                        </div>
                        <a href="#" class="btn ">Créer</a>
                    </div>
                </div>
            </div>

        <!----- Ajout Attraction ----->
            <div class="col" >
                <div class="card card-ajout">
                    <h5 class="card-title card-titre-ajout">Ajouter une attraction</h5>
                    <div class="form-ajout">
                        <div>
                            <label for="name">Nom :</label>
                            <input type="text" id="attraction_card_name" name="name" required>
                        </div>
                        <div>
                            <label for="name">Statut :</label>
                            <input type="text" id="attraction_statut" name="name" required>
                        </div>
                        <div>
                            <label for="msg">Description :</label>
                            <textarea id="attraction_texte" name="msg"></textarea>
                        </div>
                        <div>
                            <input class="btn btn-file" type="file" name="file"/>
                        </div>
                        <a href="#" class="btn ">Créer</a>
                    </div>
                </div>
            </div>

        <!----- Ajout Article ----->
            <div class="col" >
                <div class="card card-ajout">
                    <h5 class="card-title card-titre-ajout">Ajouter un article</h5>
                    <div class="form-ajout">
                        <div>
                            <label for="name">Nom :</label>
                            <input type="text" id="article_name" name="name" required>
                        </div>
                        <div>
                            <label for="name">Categorie :</label>
                            <input type="text" id="categorie_name" name="name" required>
                        </div>
                        <div>
                            <input class="btn btn-file" type="file" name="file" />
                        </div>
                        <a href="#" class="btn ">Créer</a>
                    </div>
                </div>
            </div>
        </div>
        

    <!------------ Tableau ------------>
        <!----- ABONNES ----->
        <div id="listUsers">
        <section class="tableau row-one tfirst" >  
            <table >
                <thead>
                    <tr>
                        <td>Abonnes</td>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Date de naissance</td>
                        <td>Code Postale</td>
                        <td>Ville</td>
                        <td>Date d'inscription</td>
                        <td>role</td>
                        <td>edition</td>
                    </tr>
                </thead>    
                <tbody id="users">
                    <?php 
                        foreach(allUsers($bdd) as $user){
                        echo '<tr class="user">
                                <td> '. htmlspecialchars($user ->id).'</td>
                                <td> '. htmlspecialchars($user ->name).'</td>
                                <td> '. htmlspecialchars($user ->firstname).'</td>
                                <td> '. htmlspecialchars($user ->email).'</td>
                                <td> '. htmlspecialchars($user ->phone).'</td>
                                <td> '. htmlspecialchars($user ->birthday).'</td>
                                <td> '. htmlspecialchars($user ->postcode).'</td>
                                <td> '. htmlspecialchars($user ->city).'</td>
                                <td> '. htmlspecialchars($user ->date_inscription).'</td>
                                <td>
                                    <select name="" id="value-'. $user->id . '">
                                        <option value="admin"' ?>
                                            <?php if(($user -> role) == "admin") echo "selected" ?><?= '>admin</option>
                                        <option  value="user"' ?>
                                            <?php if(($user -> role) == "user") echo "selected" ?><?= ' >user</option>
                                    </select>
                                    </td>
                                <td>
                                    <a href="'. $user->id . '" id=lien-"' . $user->id . '" class="ajaxRole"><i class="fas fa-user-edit"></i></a>
                                    <a href="../back/delUser.php?user=' . $user->id . '" 
                                        onclick="return confirm(\'Voulez-vous vraiment supprimer cet utilisateur ?\');">
                                            <i class="fas fa-skull-crossbones"></i></a>
                                </td>
                            </tr>';
                        }           
                    ?>
                </tbody>  
            </table>
        </section> 
        </div>

        <!----- Tarif ----->
        <div id="listTarifs">
        <section class="tableau row-one tfirst" >  
            <table >
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Montant</td>
                        <td>Promo</td>
                        <td>Id Period</td>
                        <td>Categorie</td>
                        <td>edition</td>
                    </tr>
                </thead>    
                <tbody id="tarif">
                    <?php 
                        foreach(allTarifs($bdd) as $tarif){
                            echo "<tr>
                            <td>".htmlspecialchars($tarif ->id)."</td>
                            <td> ". htmlspecialchars($tarif ->montant)."</td>
                            <td> ". htmlspecialchars($tarif ->promo)."</td>
                            <td> ". htmlspecialchars($tarif ->period_id)."</td>
                            <td> ". htmlspecialchars($tarif ->categorie)."</td>
                            <td><a href=''><i class='fas fa-edit'></i></a><a href=''><i class='fas fa-trash-alt'></i></a></td>
                            </tr>";
                        }           
                    ?>
                </tbody>  
            </table>
        </section> 
        </div>
            
        <!---- RESERVATION ---->
        <!------ Billet ------>
        <div id="listResaBillets"></div>   
        <section class="tableau row-one tfirst">  
            <table>
                <thead>
                    <tr>
                        <td>Reservations Billets</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Adulte</td>
                        <td>Enfant</td>
                        <td>Total</td>
                    </tr>
                </thead>    
                <tbody id="resaBillets"> </tbody>  
            </table>
        </section>

        <!---- RESERVATION ---->
        <!------ Costumes ------>
        <div id="listResaCostumes"></div>    
        <section class="tableau row-one tfirst">  
            <table>
                <thead>
                    <tr>
                        <td>Reservations Costumes</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Articles</td>
                    </tr>
                </thead>    
                <tbody id="resaCostumes"> </tbody>  
            </table>
        </section>

        <!---- EVENEMENTS ---->
        <div id="listEvents"></div>    
        <section class="tableau row-one tfirst">  
            <table>
                <thead>
                    <tr>
                        <td>Evenements</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Articles</td>
                    </tr>
                </thead>    
                <tbody id="events"> </tbody>  
            </table>
        </section>

        <!---- ATTRACTIONS ---->
        <div id="listAttractions"></div>    
        <section class="tableau row-one tfirst">  
            <table>
                <thead>
                    <tr>
                        <td>Attra</td>
                        <td>Nom</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Articles</td>
                    </tr>
                </thead>    
                <tbody id="attractions"> </tbody>  
            </table>
        </section>


        <!-- <div id="bas">Bas de page qui reste fixe</div> -->


        <!-- sript js -->
        <script src ="../js/ajax.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


        <!-- Bootstrap 5.0.0-beta2 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

        <!-- aos -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script> AOS.init();</script>

    </body>
</html>