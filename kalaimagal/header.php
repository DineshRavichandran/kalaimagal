<!-- header start -->
<header class="single-row-fixed-header sticky-top">
    <nav class="navbar navbar-expand-lg py-2 px-lg-5">
        <div class="container-fluid">

            <a href="index.php" class="navbar-brand m-0 d-flex align-items-center">
                <img src="img/logo (2).png" alt="Kalaimagal Matriculation school Logo" class="school-logo-sm">
                <div class="ms-3">
                    <h2 class="school-title-sm mb-0">KALAIMAGAL<br>  Matriculation<br> SCHOOL</h2>
                   
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="fixedNavbar">
                <ul class="navbar-nav ms-auto gap-lg-3">
                    <li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'index') ? 'active' : ''; ?>" href="index.php">Home</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'about') ? 'active' : ''; ?>" href="about.php">About</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'admission') ? 'active' : ''; ?>" href="admission.php">Admissions</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'learning') ? 'active' : ''; ?>" href="learning.php">Learning</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'infrastructure') ? 'active' : ''; ?>" href="infrastructure.php">Infrastructure</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
</li>

<li class="nav-item">
    <a class="nav-link menu-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
</li>

                </ul>

                <a href="admission.php" class="admission-btn mt-3 mt-lg-0 ms-lg-4">Admissions Open</a>
            </div>

        </div>
    </nav>
</header>
 
<!-- header end -->