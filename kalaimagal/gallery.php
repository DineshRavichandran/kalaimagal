<?php 
require_once('configi.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kalaimagal Matriculation school</title>
<link rel="icon" type="image/png" href="img/logo (2).png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
   
 <?php
$activePage = 'gallery';
include 'header.php';
?>

<!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

     <!-- Trip Gallery -->
<div class="container my-5">
    <div class="row g-3">
        <?php
        $qry = "SELECT * FROM `category`";
        $result = $mysqli->query($qry);

        while ($row = $result->fetch_assoc()) {
            $title = $row['CatName'];
            $thumb = $row['thumb_img'];
            $CatID = $row['CatID'];
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-item position-relative overflow-hidden rounded shadow-sm animate-item">
                    <!-- Main thumbnail -->
                    <a data-fancybox="cat<?= $CatID ?>" href="<?= $thumb ?>">
                        <img src="<?= $thumb ?>" class="img-fluid w-100 gallery-img" alt="<?= $title ?>">
                        <!-- Hover overlay -->
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <h5 class="text-white mb-0"><?= $title ?></h5>
                        </div>
                    </a>

                    <?php
                    // Hidden additional images for Fancybox
                    $qry2 = "SELECT * FROM `gallery` WHERE `GalCatID`='$CatID' AND GalStatus='0'";
                    $result2 = $mysqli->query($qry2);
                    while ($image = $result2->fetch_assoc()) {
                        $GalPath = $image['GalPath'];
                        echo "<a data-fancybox='cat$CatID' href='$GalPath' style='display:none;'></a>";
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<style>
/* Gallery Image */
.gallery-item {
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 25px rgba(0,0,0,0.2);
}

/* Image styling */
.gallery-img {
    display: block;
    width: 100%;
    height: 250px;
    object-fit: cover;
}

/* Overlay effect */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.gallery-item:hover .overlay {
    opacity: 1;
}

/* Overlay text */
.overlay h5 {
    font-weight: 600;
    font-size: 1.1rem;
    text-align: center;
}

/* Fade-in animation on load */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-item {
    opacity: 0;
    animation: fadeInUp 0.6s forwards;
}

/* Stagger animation delay */
.row .col-lg-3:nth-child(1) .animate-item { animation-delay: 0s; }
.row .col-lg-3:nth-child(2) .animate-item { animation-delay: 0.1s; }
.row .col-lg-3:nth-child(3) .animate-item { animation-delay: 0.2s; }
.row .col-lg-3:nth-child(4) .animate-item { animation-delay: 0.3s; }
/* Add more nth-child rules if you have more images */
</style>



</div>
    </div>


  


 





   


<!-- Modern Footer Start -->
<?php include 'footer.php';
?>
<!-- Modern Footer End -->


    <!-- Back to Top -->
     <!-- Back to Top -->
    <a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>
<style>.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 55px;
    height: 55px;
    background: #1F4FB2;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    transition: 0.3s ease;
    z-index: 9999;
    display: none; /* hidden by default */
}

.back-to-top:hover {
    background: #858586;
    transform: translateY(-4px);
}
</style>
<script>
window.addEventListener("scroll", function() {
    const button = document.querySelector(".back-to-top");
    if (window.scrollY > 200) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
});
</script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- JavaScript to Show Modal on Page Load -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
			myModal.show();
		});
	</script>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your Script -->
<script src="gallery.js"></script>
</body>
</html>


</body>
</html>