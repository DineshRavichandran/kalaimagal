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






<!-- header start -->
<?php

include 'header.php';
?>


<!-- HEADER -->
<header class="header">
    <h1>📢 School Announcements</h1>
    <p>Latest updates & important notices</p>
</header>

<!-- ANNOUNCEMENT LIST -->
<section class="announcement-section">

    <div class="announcement-card">
        <span class="date">18 Dec 2025</span>
        <h3>School Reopening</h3>
        <p>School will reopen on Monday after winter holidays.</p>
    </div>

    <div class="announcement-card">
        <span class="date">15 Dec 2025</span>
        <h3>Parent Teacher Meeting</h3>
        <p>PTM scheduled for all classes on Friday at 10 AM.</p>
    </div>

    <div class="announcement-card">
        <span class="date">10 Dec 2025</span>
        <h3>Annual Sports Day</h3>
        <p>Annual Sports Day will be held on 25th July.</p>
    </div>

</section>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f6f9;
}

.header {
    background: #003366;
    color: white;
    text-align: center;
    padding: 50px 20px;
}

.announcement-section {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 20px;
}

.announcement-card {
    background: white;
    padding: 25px;
    margin-bottom: 20px;
    border-left: 5px solid #003366;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.announcement-card h3 {
    margin-top: 10px;
    color: #003366;
}

.date {
    font-size: 14px;
    color: #777;
}
</style>

</body>
<!-- Modern Footer Start -->
<?php include 'footer.php';
?>
<!-- Modern Footer End -->
