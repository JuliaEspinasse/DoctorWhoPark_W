<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- l'onglet -->
        <title>DWPark RESERVATION</title>
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
        <?php include "../PHP/navbar.php"; ?>
        <section>
    <!------------ TEXTE ------------>
            <figure class="text-center texteRight">
                <blockquote class="blockquote">
                    <p> Courez espèce de petit malin, et souvenez-vous de moi. </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Doctor Who,</cite> Clara Oswin Oswald.
                </figcaption>
            </figure>

    <!------------ Boutton PREVIOUS & NEXT ------------>
            <div class="wrapper" id="arrow">
                <a class="cta" href="../HTML/leParc.php" id="previousIndex">
                    <span>
                        <svg width="66px" height="43px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="previousArrow">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="one"
                                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="two"
                                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="three"
                                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </span>
                    <span>Le parc</span>
                </a>
                <a class="cta" href="../HTML/lesEvenements.php" id="nextIndex">
                    <span>Les Evenements</span>
                    <span>
                        <svg width="66px" height="43px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="nextArrow">
                            <g troke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="one"
                                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="two"
                                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path class="three"
                                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>

    <!------------ Card ------------>
            <div class="row row-cols-1 row-cols-md-3 g-4 rowLeft">
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalBillet">
                        <div class="card">
                            <h5 class="card-title">Les Billets</h5>
                            <img src="../Images/pageReservation/LesBillets.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalSejour">
                        <div class="card">
                            <h5 class="card-title">Les Sejours</h5>
                            <img src="../Images/pageReservation/LesSejours.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a data-bs-toggle="modal" href="#modalCostume">
                        <div class="card">
                            <h5 class="card-title">Les Costumes</h5>
                            <img src="../Images/pageReservation/LesCostumes.jpg" alt="DWP">
                        </div>
                    </a>
                </div>
            </div>
        </section>

    <!-- Modal Billet-->
        <div class="modal fade" id="modalBillet" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="img-fluid d-block mx-auto" src="../Images/lieux/paramount-02.jpg" alt="" />
                        <p>A LA JOURNEE<ul>
                            <div id="tarifBillet">
                                <?php include "../PHP/sql.php";
                                   foreach(allTarifs($bdd) as $tarif){
                                       if($tarif -> period_id == 16){
                                           echo "<div class='categorie'><div> " . htmlspecialchars($tarif ->categorie) . " </div><div> " . htmlspecialchars($tarif ->montant) . " </div></div>";
                                       }
                                   }           
                                ?>
                            </div>
                        </ul></p>
                        *GRATUIT pour les moins de 6 ans
                        <button class="btn btn-resa"> 
                            <a data-bs-toggle="modal" href="#modalConnection">Réserver</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal Sejour -->
        <div class="modal fade" id="modalSejour" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="img-fluid d-block mx-auto" src="../Images/lieux/TardisIn.jpg" alt="" />
                        <p>A LA NUIT<ul>
                            <div id="tarifSejour"></div>
                        </ul></p>
                        <a href="connection.html"> 
                        <button type="submit" class="btn btn-contact">Nous Contacter</button></a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal Costume-->
        <div class="modal fade" id="modalCostume" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="img-fluid d-block mx-auto" src="../Images/pageReservation/costumes.jpg" alt="" />
                        <p>A LA JOURNEE<ul>
                            <div id="tarifCostume"></div>
                        </ul></p>
                        <button type="submit" class="btn btn-resa" formmethod="post"> 
                            <a data-bs-toggle="modal" href="#modalConnection">Réserver</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Message obligation de connection-->
        <div class="modal fade" id="modalConnection" tabindex="-2" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Vous devez être connecté !
                        <a href="connection.php">
                        <button type="submit" class="btn btn-resa"> Connection </button></a>
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