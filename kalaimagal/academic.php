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
   
 <?php include 'header.php'; ?>
  
 <!-- Admissions Guidelines PAGE START -->
<section class="learning-hero d-flex align-items-center text-center">
  <div class="container">
    <h1 class="text-white mb-2"></h1>
    
  </div>
</section>


<style>
.learning-hero {
    height: 400px; /* adjust height */
    background-image: url("img/academic.png"); /* your image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}

/* Dark overlay for better text readability */
.learning-hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    
    z-index: 1;
}

/* Ensure text appears above overlay */
.learning-hero .container {
    position: relative;
    z-index: 2;
}

</style>
</style>

 <div class="container2 modern-wrapper">

  <!-- Academics Section -->
  <section class="modern-card">
    <h2 class="modern-title">Academics</h2>
    <p class="modern-text">
      Experience global-standard education at Kalaimagal Matriculation school—delivered through
      <strong>innovative pedagogy</strong>, state-of-the-art resources, and caring mentorship.
      Our school emphasizes small class sizes (student–teacher ratio of <strong>15 : 1</strong>),
      smart classrooms, flipping classrooms, and research-based teaching for holistic learning.
    </p>

    <ul class="modern-list">
      <li><i class="bi bi-lightbulb-fill icon"></i> Innovative pedagogy tailored for every child.</li>
      <li><i class="bi bi-building icon"></i> Air-conditioned Kindergarten classrooms & play areas.</li>
      <li><i class="bi bi-pc-display icon"></i> Fully equipped labs: language, computer, math, science, robotics.</li>
      <li><i class="bi bi-hospital icon"></i> Medical room, library, learning center, AV & internet facilities.</li>
      <li><i class="bi bi-shield-check icon"></i> CCTV, PA systems, Wi-Fi campus, and full fire safety.</li>
      <li><i class="bi bi-people-fill icon"></i> Special educators, behavioral counseling & career guidance.</li>
      <li><i class="bi bi-mortarboard-fill icon"></i> Research-based teaching with holistic programs.</li>
    </ul>
  </section>

  <!-- Discipline Section -->
  <section class="modern-card mt-5">
    <h2 class="modern-title">Discipline Guidelines</h2>
    <p class="modern-text"><strong>The students should:</strong></p>

    <ul class="modern-list">
      <li><i class="bi bi-check-circle-fill icon"></i> Promote a positive and safe environment for all.</li>
      <li><i class="bi bi-person-heart icon"></i> Be respectful to teachers, staff, and fellow students.</li>
      <li><i class="bi bi-book icon"></i> Understand and follow discipline policies & rules.</li>
      <li><i class="bi bi-emoji-smile icon"></i> Contribute positively to school climate.</li>
      <li><i class="bi bi-award icon"></i> Participate actively in school activities.</li>
      <li><i class="bi bi-heart-pulse icon"></i> Understand how behavior affects others & restore relationships.</li>
      <li><i class="bi bi-chat-dots icon"></i> Share ideas for improving school climate & discipline.</li>
    </ul>
  </section>

  <!-- EXTRA MODERN OPTIONAL SECTION -->
  <section class="modern-card mt-5">
    <h2 class="modern-title">Why Choose Kalaimagal Matriculation school?</h2>
    <ul class="modern-list">
      <li><i class="bi bi-globe2 icon"></i> Global-standard curriculum aligned with NEP 2020.</li>
      <li><i class="bi bi-person-video3 icon"></i> Smart classrooms powered by digital learning tools.</li>
      <li><i class="bi bi-trophy-fill icon"></i> Strong focus on academics, sports & co-curricular activities.</li>
      <li><i class="bi bi-stars icon"></i> A safe and nurturing environment for every child.</li>
    </ul>
  </section>

</div>
<!-- Chatbot Button -->
<div id="chatbot-btn">
  <i class="fa fa-comment"></i>
</div>
<div id="chatbot-box">
  <div class="chat-header">
    <h5>School Chatbot</h5>
    <span id="chat-close">×</span>
  </div>
  <div id="chat-body"></div>

  <div class="chat-input-area">
    <input type="text" id="chat-input" placeholder="Type your message...">
    <button id="chat-send"><i class="fa fa-paper-plane"></i></button>
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
    background: #2988BC;
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

</body>
</html>