<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['examadd'])){
                
                $sql = "INSERT INTO exams VALUES (null, '".$_POST['name']."',  '".$_POST['class']."', '".$_POST['subject']."', '".$_POST['type']."', '".$_POST['status']."' )";
                
                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/exams/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo $sql;
                    echo mysqli_error($db);

                }
            }
        else{
          $class = $db->query('select *from class where status = "Active" ');
          $subject = $db->query('select *from subject where status = "Active" ');

        }
    ?> 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
        
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Exam Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">

                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Name</label>
                      <input type="text" id="form3Example3c" name="name"  class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class" id="" class="form-control" >
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Subject</label>
                        <select name="subject" id="" class="form-control" >
                        <?php foreach($subject as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Type</label>
                        <select name="type" id="" class="form-control" >
                          <option value="Online">Online</option>
                          <option value="Written">Written</option>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Status</label>
                        <select name="status" id="" class="form-control" >
                          <option value="Active">Active</option>
                          <option value="In-active">In-active</option>
                      </select>
                    </div>
                  </div>
                  </div>
              </div>
              <input type="submit" name="examadd" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
  </div>

</section>
