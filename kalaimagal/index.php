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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    


    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.min.js"></script>


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
 

<!-- header start -->
<?php
$activePage = 'index';
include 'header.php';
?>

<!-- header end -->
 

<div class="announcement-bar">
    <div class="container-fluid px-lg-5">

        <a href="announcement.php" class="announcement-link">
            <div class="announcement-text py-1">
                <?php 
                $qry = "SELECT * FROM latest_message WHERE show_flag = '1'";
                $result = $mysqli->query($qry);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo htmlspecialchars($row['Discription']) . " | ";
                    }
                } else {
                    echo "No announcements available";
                }
                ?>
            </div>
        </a>

    </div>
</div>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
    $qry = "SELECT * FROM banners WHERE status = '1'";
    $result = $mysqli->query($qry);
    $i = 0;

    while ($row = $result->fetch_assoc()) {
        $active = ($i == 0) ? 'active' : '';
        ?>
        <div class="carousel-item <?= $active ?>">
            <img 
              src="<?= $row['image'] ?>" 
              class="d-block w-100" 
              alt="Campus Banner"
              style="height: 550px; object-fit: cover;">
        </div>
        <?php
        $i++;
    }
    ?>
  </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
</div>





<style>
  .merqee { padding-top:10px; font-size:18px; border:3px solid #ff0000; }
  .dd { color:red; }
</style>

<div class="row merqees" style="padding-top:10px;">
 
  <!-- marquee -->
</div>
<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">School <span style="color:#222;">Highlights</span></h2>
        <p class="text-muted">What makes our school stand out from the rest.</p>
    </div>

    <div class="row text-center">

        <!-- 1 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="img/icon/teachers.jpg" alt="Expert Teachers" class="highlight-img">
                
                <h5><a href="learning.php" class="text-decoration-none text-dark">Expert Teachers</a></h5>

                <p>Our School Experienced & trained CBSE faculty.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="img/icon/campus.webp" alt="Safe Campus" class="highlight-img">
                <h5><a href="learning.php" class="text-decoration-none text-dark">Safe Campus</a></h5>

                
                <p>CCTV, GPS bus tracking, and fire safety.</p>
            </div>
        </div>

        <!-- 3 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="img/icon/lab.jpg" alt="Modern Labs" class="highlight-img">
                <h5>Modern Labs</h5>
                <p>Science, Computer, Robotics & Language labs.</p>
            </div>
        </div>

        <!-- 4 -->
        <div class="col-md-3 mb-4">
            <div class="highlight-box shadow-sm p-3">
                <img src="img/icon/toprank.jpg" alt="Top Results" class="highlight-img">
                <h5>Top Results</h5>
                <p>Academic excellence every year Top Result.</p>
            </div>
        </div>

    </div>
</section>

<style>
/* Image Styling */
.highlight-img {
    width: 100%;
    height: 200px;  /* Adjust height */
    object-fit: cover;
    border-radius: 10px;
}

/* Card Box */
.highlight-box {
    background: #fff;
    padding: 15px;
    border-radius: 12px;
    transition: 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
}

/* Hover Effect */
.highlight-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.highlight-box h5 {
    margin-top: 15px;
    font-weight: 600;
}
</style>





<style>
.program-box img {
    width: 100%;
    height: 250px; /* Adjust height as needed */
    object-fit: cover; 
    border-radius: 10px;
    display: block;
}
.program-box {
    background:#fff;
    padding:20px;
    border-radius:12px;
    text-align:center;
    transition:0.3s;
    box-shadow:0 4px 15px rgba(0,0,0,0.06);
}
.program-box:hover {
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}
.program-box h5 {
    margin-top:15px;
    font-weight:600;
}
/* Programs We Offer */

</style>
<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Programs <span style="color:#222;">We Offer</span></h2>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="img/spots/kids learning.jpg" alt="">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    Kindergarten
                </a>
            </h5>
                <p>Play-based learning & activity-driven teaching.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="img/spots/stronger learning.jpg" alt="">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    Middle School
                </a>
            </h5>
                <p>Strong academic base with creative learning.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="program-box">
                <img src="img/spots/student-skills.jpg" alt="">
                 <h5>
                <a href="learning.php" class="text-decoration-none text-dark">
                    Hight Scool
                </a>
            </h5>
                <p> development, projects & technology-based learning.</p>
            </div>
        </div>

    </div>
</section>


<style>
.program-box h5 { margin-top:15px; font-weight:600; }
.program-box p { color:#555; }
</style>
<section class="achievement-section text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Our <span style="color:#ffaa00;">Achievements</span></h2>

        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-trophy"></i>
                    <h3>50+</h3>
                    <p>Academic Awards</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-users"></i>
                    <h3>800+</h3>
                    <p>Happy Students</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-chalkboard-teacher"></i>
                    <h3>40+</h3>
                    <p>Expert Teachers</p>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="achievement-box">
                    <i class="fa fa-medal"></i>
                    <h3>100+</h3>
                    <p>Sports & Arts Awards</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Background Image + Overlay */
.achievement-section {
    background: 
        linear-gradient(rgba(22, 92, 232, 0.9), rgba(0, 39, 101, 0.9)),
        url("img/header/bg.jpg");    /* 👉 change to your image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Icons */
.achievement-box i {
    font-size: 40px;
    color: #ffaa00;
}

/* Numbers */
.achievement-box h3 {
    margin-top: 10px;
    font-size: 32px;
    font-weight: bold;
}

/* Text */
.achievement-box p {
    margin: 0;
    font-size: 15px;
}
</style>

<section class="container my-5">
    <div class="text-center mb-4">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Latest <span style="color:#222;">News & Events</span></h2>
    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="img/icon/annual.jpg"  class="img-fluid rounded mb-3">
                <h5>Annual Sports Day 2025</h5>
                <p class="text-muted">A day filled with energy, excitement, and sportsmanship.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="img/icon/Science.jpg"  class="img-fluid rounded mb-3">
                <h5>Science Expo</h5>
                <p class="text-muted">Students showcased innovative science models and projects.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="event-box shadow-sm p-3 rounded">
                <img src="img/icon/Independence Day.jpg"  class="img-fluid rounded mb-3">
                <h5>Independence Day</h5>
                <p class="text-muted">A grand celebration with parade and cultural events and celebration</p>
            </div>
        </div>

    </div>
</section>
<section class="testimonial-section py-5">
    <div class="container text-center">
        <h2 class="mb-4" style="color:#1F4FB2;">What Parents <span style="color:#222;">Say</span></h2>

        <div id="multiTestimonial" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“Great teachers and safe environment!”</p>
                                <h6>— Parent of Grade 5</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“My child loves coming to school!”</p>
                                <h6>— Parent of Grade 3</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“Best CBSE school in this area.”</p>
                                <h6>— Parent of Grade 8</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“Excellent study environment.”</p>
                                <h6>— Parent of Grade 2</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“Good transport and clean campus.”</p>
                                <h6>— Parent of Grade 7</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-box">
                                <p>“Visible improvement in my child.”</p>
                                <h6>— Parent of Grade 4</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#multiTestimonial" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#multiTestimonial" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</section>

<style>
.testimonial-box {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    margin: 10px;
}
.testimonial-box p {
    font-style: italic;
    color: #555;
}
.testimonial-box h6 {
    margin-top: 10px;
    font-weight: bold;
    color: #1F4FB2;
}
</style>

<style>
.testimonial-section { background:#f7f9ff; }
.testimonial-box {
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
</style>
<!-- admission open satrt -->
<section class="cta-section text-white py-5">
    <div class="container text-center">
        <h2>Admissions Open 2026–2027</h2>
        <p class="lead">Apply today and give your child the best learning experience.</p>

        <!-- FIXED BUTTON -->
        <a href="admission.php" class="btn cta-btn px-4 py-2 mt-3">Apply Now</a>

    </div>
</section>

<style>
.cta-section {
    background:
        linear-gradient(rgba(22, 92, 232, 0.9), rgba(0, 39, 101, 0.9)),
        url("img/header/bg.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.cta-btn {
    background: #ffaa00;
    color: #000;
    border: none;
    font-weight: 600;
}

.cta-btn:hover {
    background: #ffcc33;
    color: #000;
}
</style>
<!-- admission open end -->

<?php include 'footer.php';
?>





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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
			myModal.show();
		});
	</script>

</body>
</html>