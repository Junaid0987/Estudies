<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['subjectadd'])){
                
                $sql = "INSERT INTO class VALUES (null, '".$_POST['class']."', '".$_POST['details']."','".$_POST['status']."')";

                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/class/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo $sql;
            echo mysqli_error($db);

                }
            }
        
    ?> 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">class Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">
                  
                <div class="d-flex flex-row align-items-center mb-4"> 
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">class</label>
                      <input type="text" id="form3Example3c" name="class"  class="form-control" />
                    </div>
                  </div>
                  
                  
                  
                  <div class="d-flex flex-row align-items-center mb-4">  
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Details</label>
                      <input type="text" id="form3Example3c"  name="details" class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">status</label>
                        <select name="status" >
                        <option value="Active">Active </option>
                        <!-- <option value="Active">Active</option> -->
                      </select>
                      </div>
                    </div>
              </div>
            </div>
            <input type="submit" name="subjectadd" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5" />
          </form>
          </div>
    </div>
</div>
</div>
</div> 
  </div>

</section>
