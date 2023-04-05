<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['Submit1'])){
                
                $filename =time().$_FILES["image"]["name"];
                $folder = "./images/" . $filename;
                $tmp=$_FILES['image']['tmp_name'];
              //  move_uploaded_file($_FILES["image"]["tmp_name"], $filename)
              move_uploaded_file($tmp, 'images/'.$filename);
                $sql = "INSERT INTO teachers VALUES (NULL, '".$_POST['school']."', '$filename', '".$_POST['tname']."', '".$_POST['contact']."', '".$_POST['email']."', '".$_POST['status']."', '".$_POST['joindate']."' )";

                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/teachers/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo $sql;
                }
            }
        
    ?> 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Teachers Data</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">School</label>
                      <input type="text" id="form3Example1c" name="school"  class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">image</label>
                      <input type="file" id="form3Example3c" name="image"  required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Name</label>
                      <input type="text" id="form3Example3c" name="tname"  class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Contact No.</label>
                        <input type="number" id="form3Example3c"  name="contact" class="form-control" required/>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c"  name="email" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">status</label>
                        <select name="status" >
                        <option value="yes" >yes</option>
                        <option value="No">No</option>
                      </select>
                      </div>
                    </div>
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Joining Data</label>
                      <input type="date" id="form3Example3c"  name="joindate" class="form-control" required/>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <input type="submit" name="Submit1" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
  </div>

</section>
