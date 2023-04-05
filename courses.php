<?php
include ('header.php');
include ('database.php');
$subject = $db->query("select * from subject order by  id desc");
$feeback = $db->query("select * from feedback order by  id desc");

?>
   

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">SUBJECTS</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="contact.php">About</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Subjects</li>
                            <li class="breadcrumb-item"><a class="text-white" href="annoucment.php">Annoucment</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                
                <h1 class="mb-5">SUBJECTS</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- foreach -->
                <?php foreach ($subject as $row) {  ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item ">
                        <div class="position-relative w-100 text-center overflow-hidden" >
                            <img class="" src="<?php echo $url.'dashboard/subject/images/'.$row['image']; ?>" height="200px" ;alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4"> 
                            </div>
                            <h5 class="mb-4 text-center"><?php echo $row['name']; ?></h5>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>     
            </div>
        </div>
    </div>
    </div>

        


    <?php include ('footer.php');?>
        

   
