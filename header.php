<!DOCTYPE php>
<php lang="en">
<?php $url = "http://localhost/Estudiez/";
session_start();
?>
<head>
    <meta charset="utf-8">
    <title>E-studiez | WEBSITE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $url;?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $url;?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $url;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $url;?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-graduation-cap me-1 "></i>E-studiez</h2>
       
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php"  class="nav-item nav-link ">About</a>
                <a href="courses.php" class="nav-item nav-link">Subject</a>
                <a href="annoucment.php" class="nav-item nav-link">Annoucment</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
              
                <?php  if(isset($_SESSION['firstname']) && $_SESSION['firstname'] !='') {
                    echo  '<a href="'. $url.'dashboard/" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Dashboard<i class="fa fa-arrow-right ms-3"></i></a>';
                }else{
                    echo  '<a href="'. $url.'signin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>';
                    echo  '<a href="'. $url.'signup.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Register<i class="fa fa-arrow-right ms-3"></i></a>';
                }?>
                </div>
          
        </div>
    </nav>
    <!-- Navbar End -->
</body>