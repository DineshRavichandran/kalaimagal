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
    <head>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>


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
$activePage = 'contact';
include 'header.php';
?>

<!-- header end -->
  <!-- Admissions Guidelines PAGE START -->
<section class="learning-hero d-flex align-items-center text-center">
  <div class="container">
    <h1 class="text-white mb-2"></h1>
    
  </div>
</section>


<style>
.learning-hero {
    height: 400px; /* adjust height */
    background-image: url("img/banner/contact.jpg"); /* your image */
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
  <!-- Contact Hero -->
<section class="cm-hero d-flex align-items-center text-center">
  <div class="container">
    <h1 class="text-white mb-2 fw-bold display-5">Contact Us</h1>
    <p class="text-white-50 mb-0 fs-5">We’re here to assist you anytime</p>
  </div>
</section>

    

<!-- Contact Info -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      

      <!-- Address -->
      <div class="col-md-4">
        <div class="cm-card shadow-sm border-0">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h5 class="fw-bold mb-2">Address</h5>
          <p class="text-secondary small m-0">
           2, Mahabharath St, Senthil Nagar, Annanur, Thirumullaivoyal, Chennai, Tamil Nadu 600062
          </p>
        </div>
      </div>

      <!-- Phone -->
      <div class="col-md-4">
        <div class="cm-card shadow-sm border-0">
          <div class="icon-box">
            <i class="bi bi-telephone"></i>
          </div>
          <h5 class="fw-bold mb-2">Phone</h5>
          <a href="tel:+919499910329" class="small text-decoration-none d-block mb-1">
            +91 94999 10329
          </a>
          <span class="text-secondary small">Mon–Sat, 9:00 AM – 2:00 PM</span>
        </div>
      </div>

      <!-- Email -->
      <div class="col-md-4">
        <div class="cm-card shadow-sm border-0">
          <div class="icon-box">
            <i class="bi bi-envelope"></i>
          </div>
          <h5 class="fw-bold mb-2">Email</h5>
          <a href="mailto:support@kalaimagalschools.com" class="small text-decoration-none">
            support@kalaimagalschools.com
          </a>
          <div class="text-secondary small">We reply within 1–2 business days</div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.cm-card {
  background: #fff;
  padding: 30px 20px;
  border-radius: 16px;
  text-align: center;
  transition: 0.3s;
}
.cm-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
}
.icon-box {
  width: 55px;
  height: 55px;
  margin: 0 auto 15px;
  border-radius: 50%;
  background: #2988BC;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
}
</style>

<!-- Form + Map -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="cm-glass p-4 shadow-sm">
          <h3 class="fw-bold mb-3">Send us a message</h3>

          <form class="needs-validation" novalidate>
            <div class="row g-3">

              <div class="col-md-6">
                <label class="form-label">Name *</label>
                <input type="text" class="form-control" required>
                <div class="invalid-feedback">Enter your name.</div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Email *</label>
                <input type="email" class="form-control" required>
                <div class="invalid-feedback">Enter a valid email.</div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="tel" class="form-control" pattern="[0-9]{10}">
              </div>

              <div class="col-md-6">
                <label class="form-label">Subject *</label>
                <input type="text" class="form-control" required>
                <div class="invalid-feedback">Add a subject.</div>
              </div>

              <div class="col-12">
                <label class="form-label">Message *</label>
                <textarea rows="4" class="form-control" required></textarea>
                <div class="invalid-feedback">Enter your message.</div>
              </div>

              <div class="col-12">
                <button class="btn btn-primary px-4">Send</button>
              </div>
            </div>
          </form>
        </div>

        <p class="small text-muted mt-3">
          Admission enquiries handled between <strong>9:00 AM – 2:00 PM</strong>.
        </p>
      </div>

      <!-- Map -->
      <div class="col-lg-6">
        <div class="ratio ratio-4x3 shadow-sm rounded overflow-hidden">
          <iframe src="https://www.google.com/maps?q=No.+10,+Powerline+Road,+Sivasakthi+Nagar,+Annanur,+Chennai+600062&output=embed"></iframe>
        </div>

        <div class="d-flex flex-wrap gap-2 mt-3">
          <a class="btn btn-outline-primary btn-sm" href="tel:+919499910329"><i class="bi bi-telephone me-1"></i>Call</a>
          <a class="btn btn-outline-primary btn-sm" href="mailto:support@kalaimagalschools.com"><i class="bi bi-envelope me-1"></i>Email</a>
          <a class="btn btn-outline-primary btn-sm" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=Kalaimagal+Matriculation school">
            <i class="bi bi-geo-alt me-1"></i>Directions
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.cm-glass {
  background: rgba(255, 255, 255, 0.9);
  border-radius: 18px;
  backdrop-filter: blur(10px);
}
.ratio iframe {
  border: 0;
}
</style>

<script>
(function () {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  forms.forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  });
})();
</script>





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

</body>
</html>