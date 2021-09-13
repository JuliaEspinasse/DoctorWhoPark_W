<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- l'onglet -->
        <title>DWPark CONNECTION</title>
        <link rel="icon" href="../Images/Logo/LogoXx.png">

        <!-- aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- librairie -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        <!-- css -->
        <link href="../FONT/stylesheet.css" rel="stylesheet"/>
        <link href="../CSS/style.css" rel="stylesheet"/>
    </head>
    <body>
    <!------------ Navbar -------------->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">
                    <img src="../Images/Logo/logo/drwp.png" alt="Logo_DWP" id="logo">
                </a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
                    </li>
                    <?php
                    include "../PHP/BDD/sql.php";
                    if(isset($_COOKIE['role'== "admin"])){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../HTML/ADMIN/admin.php">
                            <i class="fas fa-user-shield"></i>
                        </a>
                    </li>
                    <?php
                    } ?>
                </ul>
            </div>
        </nav>

        <section>
    <!------------ TEXTE ------------>
            <figure class="text-center" id="texteConnect">
                <blockquote class="blockquote">
                    <p> Geronimo! </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Doctor Who,</cite> le onziéme docteur.
                </figcaption>
            </figure>

    <!---- message info connection ---->
            <!-- <div id="messageInfo">
            <?php
            // if (!empty($_GET['error'])) {
            //     $error = explode("-", $_GET['error']);
            // }
            //     echo "<p>";
            //     foreach ($error as $error) {
            //         if ($error == "format") {
            //             echo " La photo doit être au format jpg ou png. </br> ";
            //         } else if ($error == "size") {
            //             echo " Le fichier ne doit pas dépasser les 3 Mo. </br> ";
            //         }
            //         else if ($error == "exist") {
            //             echo " L'animal que vous avez rentré existe déjà.";
            //         }
            //         else if ($error == "specialC") {
            //             echo " Caractères spéciaux interdit sur le nom de l'animal.";
            //         }
            //     }
            //     echo "</p>";
            ?>
            </div> -->

    <!------------ Card ------------>
            <div class="row row-cols-1 row-cols-md-3 g-4" id="rowConnect">
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalSeConnecter">
                        <div class="card">
                            <h5 class="card-title">Se Connecter</h5>
                            <img src="../Images/pageConnection/Connection.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalSInscrire">
                        <div class="card">
                            <h5 class="card-title">S'Inscrire</h5>
                            <img src="../Images/pageConnection/Inscription.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalContact">
                        <div class="card">
                            <h5 class="card-title">Nous Contacter</h5>
                            <img src="../Images/pageConnection/Contact.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
            </div>
        </section>

    <!-- Modal "Se Connecter" -->
        <div class="modal fade" id="modalSeConnecter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <fieldset><h4>Connection</h4> 
                            <form method="post" action="../PHP/connect.php">
                                <div>
                                    <label for="email">Votre email</label>
                                    <input type="text" id="email" name="email" placeholder="email@galifrey.gxy" required>
                                </div>
                                <div>
                                    <label for="mdp">Mot de passe</label>
                                    <input type="password" id="mdp" name="mdp" placeholder="************" required>
                                </div>
                                <button type="submit" class="btn" formmethod="post"> Connection </button>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal "S'inscrire" -->
        <div class="modal fade" id="modalSInscrire" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="corp">
                            <fieldset><h4>Inscription</h4>
                                <form method="post" action="../PHP/register.php">
                                    <div>
                                        <label for="name">Nom</label>
                                        <input type="text" id="name" name="name" placeholder="" required>
                                    </div>
                                    <div>
                                        <label for="firstname">Prénom</label>
                                        <input type="text" id="firstname" name="firstname" placeholder="" required>
                                    </div>
                                    <div>
                                        <label for="email">E-mail</label>
                                        <input type="email" id="email" name="email" placeholder="" required>
                                    </div>    
                                    <div>   
                                        <label for="mdp">Mot de passe</label>
                                        <input type="password" id="mdp" name="mdp" placeholder="bip1BlopFlup#" required>
                                    </div>
                                    <div>
                                        <label for="mdp">Mot de passe</label>
                                        <input type="password" id="mdp1" name="mdp1" placeholder="Warning !! The same ..." required>
                                    </div>
                                    <!-- <div>
                                        <label for="phone">Téléphone</label>
                                        <input type="tel" id="phone" name="phone" required>
                                    </div>
                                    <div>
                                        <label for="birthday">Date de naissance</label>
                                        <input type="date" id="birthday" name="birthday" value="aaaa-mm-jj" min="1900-01-01" max="2202-02-02" required>
                                    </div>
                                    <div>
                                        <label for="codePostal">Code Postale</label>
                                        <input type="codePostal" id="codePostal" name="codePostal" placeholder="" required>
                                    </div>
                                    <div>
                                        <label for="ville">Ville</label>
                                        <input type="ville" id="ville" name="ville" placeholder="" required>
                                    </div> -->
                                    <div class="button">    
                                        <input class="btn" type="submit" value="Geronimo !">
                                        <input class="btn" type="reset" value="Exterminate">
                                    </div>   
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal "Contact" -->
        <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <fieldset><h4>Contact</h4> 
                            <form method="post" action="../PHP/contact.php">
                                <div>
                                    <label for="contact_name">Nom :</label>
                                    <input type="text" id="contact_name" name="user_name">
                                </div>
                                <div>
                                    <label for="contact-firstname">Prénom :</label>
                                    <input type="text" id="contact_firstname" name="user_firstname">
                                </div>
                                <div>
                                    <label for="contact_mail">e-mail :</label>
                                    <input type="email" id="contact_email" name="user_email">
                                </div>
                                <div>
                                    <label for="msg">Message :</label>
                                    <textarea id="msg" name="user_message"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn" formmethod="post"> Envoi </button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

        <!-- sript js -->
        <script src="../JS/main.js"></script>
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