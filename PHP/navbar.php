<?php
session_start();
if(isset($_COOKIE['id']) || isset($_SESSION['id'])){
    ?>    
    <nav class="navbar fixed-top" id="navbarAcceuil">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/logo/logo/drwp.png" alt="Logo_DWP" id="logo">
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
                        <li><a class="dropdown-item" href="../php/api/deco.php">Se deconnecter</a></li>
                    </ul>
                </li>
                <?php
                if(($_SESSION["role"]) == 'admin'){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../html/admin/admin.php">
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
            <a class="navbar-brand" href="../index.php">
                <img src="../images/logo/logo/drwp.png" alt="Logo_DWP" id="logo">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                        <div class="welcome">Bienvenue</div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="connection.php">Creer mon compte</a></li>
                        <li><a class="dropdown-item" href="connection.php">Se connecter</a></li>
                        <li><a class="dropdown-item" href="connection.php">nous contacter</a></li>
                </li>
            </ul>
        </div>
    </nav>
<?php
}