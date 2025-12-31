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
   
 <?php
$activePage = 'admission';
include 'header.php';
?>




      
    
 
       
     

<!-- Admissions Section -->
<section class="py-5 modern-admission" id="admissions">
  <div class="container">
    

    <!-- TOP: OVERVIEW + IMAGE -->
    <div class="row align-items-center mb-5 g-4">
      
      <!-- LEFT CONTENT -->
      <div class="col-lg-7">
        <h2 class="font-weight-bold" style="color:#1F4FB2;">Admission <span style="color:#222;">Guidelines</span></h2>
        <ul class="admission-list mt-4">
          <li>New pupils must be introduced for regularity and dues clearance.</li>
          <li>Parents must accompany the child for a personal interview.</li>
          <li>Age eligibility will be verified during admission.</li>
          <li>Submit photocopy of Birth Certificate, Community Certificate, Aadhar Card & original TC.</li>
          <li>Admission enquiry timing: <strong>9.00 AM to 2.00 PM</strong>.</li>
          <li>Contact Admission In-charge for queries.</li>
          <li>Application forms are available at the school office.</li>
        </ul>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-5">
        <img src="img/admissions.jpg" alt="Admissions" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>

    
        
        
      </div>

      <!-- FORM -->
      <div class="col-lg-7 mx-auto">

        <div class="card border-0 shadow-lg rounded-4">
          <div class="card-body p-4">
            <h2 class="font-weight-bold" style="color:#1F4FB2;">Admission <span style="color:#222;">Application</span></h2>

            

          <form method="post" action="admission_mail.php" novalidate>

  <div class="row g-3">

    <div class="col-md-6">
      <label class="form-label">Student Name <span class="text-danger">*</span></label>
      <input type="text" name="student_name" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
      <input type="date" name="dob" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Admission Into Grade <span class="text-danger">*</span></label>
      <select class="form-select" name="grade" required>
        <option selected disabled>Choose...</option>
        <option>KG</option><option>Class I</option>...etc
      </select>
    </div>

    <div class="col-md-6">
      <label class="form-label">School currently studying in</label>
      <input type="text" name="current_school" class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Father’s Name</label>
      <input type="text" name="father_name" class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Mother’s Name</label>
      <input type="text" name="mother_name" class="form-control">
    </div>

    <div class="col-md-6">
      <label class="form-label">Contact Number <span class="text-danger">*</span></label>
      <input type="tel" name="contact" class="form-control" pattern="[0-9]{10}" placeholder="10-digit mobile" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Alternate Number</label>
      <input type="tel" name="alt_contact" class="form-control" pattern="[0-9]{10}">
    </div>

    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="col-12">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="address" rows="2"></textarea>
    </div>

    <div class="col-12 mt-2">
      <button type="submit" name="submit" class="btn btn-primary px-4 py-2 rounded-3">Submit</button>
    </div>

  </div>
</form>

                <?php
if(isset($_POST['submit'])) {
    $to = "Deenaravichandran@gmail.com"; // Replace with your email
    $subject = "New Admission Application";

    // Create the HTML message
    $message = "
    <html>
    <head>
      <title>Admission Application</title>
    </head>
    <body>
      <h2>New Admission Application</h2>
      <p><strong>Student Name:</strong> {$_POST['student_name']}</p>
      <p><strong>Date of Birth:</strong> {$_POST['dob']}</p>
      <p><strong>Grade:</strong> {$_POST['grade']}</p>
      <p><strong>Father's Name:</strong> {$_POST['father_name']}</p>
      <p><strong>Mother's Name:</strong> {$_POST['mother_name']}</p>
      <p><strong>Contact:</strong> {$_POST['contact']}</p>
      <p><strong>Alternate Contact:</strong> {$_POST['alt_contact']}</p>
      <p><strong>Email:</strong> {$_POST['email']}</p>
      <p><strong>Address:</strong> {$_POST['address']}</p>
    </body>
    </html>
    ";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: deenaraivichandran@gmail.com\r\n";  // Sender email

    // Send the email
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Application submitted successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send. Please try again later.');</script>";
    }
}
?>


              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

 
</section>


 

<!-- Modern Footer Start -->
<?php include 'footer.php';
?>
<!-- Modern Footer End -->


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