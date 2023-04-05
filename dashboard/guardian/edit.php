<?php
include "../sidebar_header.php";
include "../database.php";

if(isset($_GET['id'])){
  $posts = $db->query("select *from guardian where id =" . $_GET['id']);
  $post = $posts->fetch_assoc();
}else{
  echo "something went wrong";
}
if(isset($_POST['edit'])){
  $save = $db->query("update `guardian` set `name` ='".$_POST['name']."',`cnic`='".$_POST['cnic']."',`phone` = '".$_POST['phone']."', `profession` ='".$_POST['profession']."', `email`='".$_POST['email']."' where `id` = ".$_POST['id'] );
    if($save){
        $address = $url."guardian/index.php?msg="."User Updated Successfully";
        echo "<script>window.location.href='".$address."'</script>";
    }else{
        // echo "something went wrong";
        // echo "update users set firstname ='".$_POST['firstname']."',lastname='".$_POST['lastname']."', datofbirth = '".$_POST['date-of-birth']."' , gender ='".$_POST['gender']."', religion ='".$_POST['religion']."', email='".$_POST['email']."', password='".$_POST['password']."',contact='".$_POST['contact']."',adress='".$_POST['adress']."', category='".$_POST['category']."' where id = ".$_POST['id'];
        echo mysqli_error($db);
    }
}



// if(isset($_POST['edit'])){
//   $save = $db->query(" UPDATE users set firstname = '".$_POST['firstname']."', lastname =  '".$_POST['lastname']."', dat-of-birth = '".$_POST['date-of-birth']."' , gender = '".$_POST['gender']."', religion = '".$_POST['religion']."' , email = '".$_POST['email']."' , password = '".$_POST['password']."' , contact = '".$_POST['contact']."' , adress = '".$_POST['adress']."' , category = '".$_POST['category']."' where id = ".$_POST['id'] );

//   echo " UPDATE users set firstname = '".$_POST['firstname']."', lastname =  '".$_POST['lastname']."', dat-of-birth = '".$_POST['date-of-birth']."' , gender = '".$_POST['gender']."', religion = '".$_POST['religion']."' , email = '".$_POST['email']."' , password = '".$_POST['password']."' , contact = '".$_POST['contact']."' , adress = '".$_POST['adress']."' , category = '".$_POST['category']."' where id = '".$_POST['id']."' ";

//               if($save){
//                   header ("location: ./users.php");
//               }else{
//                   echo "something went wrong";
//               }
//           }

?>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Form</p>
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-6 col-xl-5 order-2 order-lg-1">
                

                <form class="mx-1 mx-md-4" action="" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Name</label>
                      <input type="hidden" id="form3Example1c" name="id" value="<?php echo $post['id']; ?>" class="form-control" required/>
                      <input type="text" id="form3Example1c" name="name" value="<?php echo $post['name']; ?>" class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Cnic</label>
                      <input type="text" id="form3Example3c" name="cnic" value="<?php echo $post['cnic']; ?>" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Mobile</label>
                      <input type="text" id="form3Example3c" name="phone" value="<?php echo $post['phone']; ?>" class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Profession</label>
                      <input type="text" id="form3Example3c" value="<?php echo $post['profession']; ?>" name="profession" class="form-control" required/>
                    </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-5 order-2 order-lg-1">
                
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c"> Email</label>
                      <input type="email" id="form3Example3c" value="<?php echo $post['email']; ?>" name="email" class="form-control" />
                    </div>
                  </div>     
                  <div class="form-check d-flex  ">
                    <input class="form-check-input me-2"  type="checkbox" value="" id="form2Example3c" />
                  </div>
              <!-- <div class="d-flex justify-content-center mx-4  mb-3 mb-lg-4">
                </div> -->
                
              </div>
            </div>
          </div>
          <input type="submit" name="edit" value="User Edit" class="btn btn-primary btn-lg px-5" />
        </form>
      </div>
    </div>
    </div>
  </div>

</section>
<?php
include "../footer.php";
?>