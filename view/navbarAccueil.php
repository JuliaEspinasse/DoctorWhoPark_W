<?php
session_start();
if(isset($_COOKIE['id_User']) || isset($_SESSION['id_User'])){
    ?>    
    <nav class="navbar fixed-top" id="navbarAcceuil">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo/crea/drwp.png" alt="logo_DWP" id="logo">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                        <div class="welcome">
                            <?php echo $_SESSION['firstname'] ?>
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../back/deco.php">Se deconnecter</a></li>
                    </ul>
                </li>
                <?php
                if(($_SESSION["id_role"]) == '1'){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="view/admin.php">
                            <i class="fas fa-user-shield"></i>
                        </a>
                    </li>
                <?php
                } 
                ?>
            </ul>
        </div>
    </nav>
<?php
} else {
?>    
    <nav class="navbar fixed-top" id="navbarAcceuil">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo/crea/drwp.png" alt="Logo_DWP" id="logo">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                        <div class="welcome">Bienvenue</div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="view/connection.php">Creer mon compte</a></li>
                        <li><a class="dropdown-item" href="view/connection.php">Se connecter</a></li>
                        <li><a class="dropdown-item" href="view/connection.php">nous contacter</a></li>
                </li>
            </ul>
        </div>
    </nav>
<?php
}