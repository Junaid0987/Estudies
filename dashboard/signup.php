<?php
include '../dashboard/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();
        include 'database.php';
        if(isset($_POST['firstname'])){
                $save = $db->query("insert into users values (NULL,'".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['date-of-birth']."','".$_POST['gender']."','".$_POST['religion']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contact']."','".$_POST['adress']."','".$_POST['category']."') ");
                if($save){
                    $_SESSION['firstname'] = $_POST['firstname'];
                    $_SESSION['roll'] = $_POST['category'];
                    $address = $url."users/index.php?msg="."User Added Successfully";
                    echo "<script>location.href='".$address."'</script>";
                }else{
                    echo "something went wrong";
                }
        }
    ?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-6 col-xl-5 order-2 order-lg-1">
                

                <form class="mx-1 mx-md-4" action="" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">First Name</label>
                      <input type="text" id="form3Example1c" name="firstname" class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Last Name</label>
                      <input type="text" id="form3Example3c" name="lastname" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Date Of Birth</label>
                      <input type="date" id="form3Example3c" name="date-of-birth" class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Religion</label>
                      <input type="text" id="form3Example3c" name="religion" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Gender</label>
                      <div>
                        
                        <label class="form-label" for="form3Example3c">Male</label>
                        <input type="radio" id="form3Example3c" value="male" name="gender"  required/>
                        <label class="form-label" for="form3Example3c">Female</label>
                      <input type="radio" id="form3Example3c" value="male" name="gender" required/>
                    </div>
                    </div>
                  </div>

                  
                
              </div>
              <div class="col-md-6 col-lg-6 col-xl-5 order-2 order-lg-1">
                
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c" name="email" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="form3Example4c" name="password" class="form-control" />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Contact No.</label>
                        <input type="number" id="form3Example3c" name="contact" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Adress</label>
                      <input type="text" id="form3Example3c" name="adress" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Category</label>
                      <select name="category" >
                        <option value="student">student</option>
                        <option value="guardian">guardian</option>
                        <option value="teacher">teacher</option>
                      </select>
                    </div>
                  </div>

                  
                  
                  
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>
              <!--  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
              class="img-fluid" alt="Sample image"> -->
              <div class="d-flex justify-content-center mx-4  mb-3 mb-lg-4">
                </div>
                
              </div>
            </div>
          </div>
          <input type="submit" name="register" value="register" class="btn btn-primary btn-lg px-5" />
        </form>
      </div>
    </div>
    </div>
  </div>

</section>
</body>
</html>