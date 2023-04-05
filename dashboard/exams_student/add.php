<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['examadd'])){
                
                $sql = "INSERT INTO student_exams VALUES (NUll, '".$_POST['exam_id']."',  '".$_POST['class_id']."', '".$_POST['start_datetime']."', '".$_POST['end_datetime']."', '".$_POST['status']."','".$_POST['marks']."' )";
              
                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/exams_student/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo mysqli_error($db);

                }
            }
        else{
          $class = $db->query('select *from class where status = "Active" ');
          $exams = $db->query('select *from exams where status = "Active" ');

        }
    ?> 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
        
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Class Exam Set</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Exam</label>
                      <select name="exam_id" id="" class="form-control" >
                        <?php foreach($exams as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Class</label>
                        <select name="class_id" id="" class="form-control" >
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Start Date Time</label>
                        <input type="datetime-local" name="start_datetime" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">End Date Time</label>
                      <input type="datetime-local" name="end_datetime" class="form-control">
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
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Total marks</label>
                      <input type="text" name="marks" class="form-control">
                    </div>
                  </div>
                  
                  </div>
              </div>
              <input type="submit" name="examadd" value="Set Exam" class="btn btn-primary  btn-lg btn-block" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
  </div>
</section>
