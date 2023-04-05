<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['marksadd'])){
                
                $sql = "INSERT INTO student_exam_marks VALUES (null, '".$_POST['exam_id']."',  '".$_POST['student_id']."', '".$_POST['marks']."', '".$_POST['Attempt']."'  )";
                
                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/marks_student/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo $sql;
                    echo mysqli_error($db);

                }
            }
        else{
          $students = $db->query('select *from students where status = "Active" ');
          $exams = $db->query('select *from exams');

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
                      <select name="class" id="" class="form-control" >
                        <?php foreach($exams as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Student</label>
                        <select name="subject" id="" class="form-control" >
                        <?php foreach($students as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Total marks</label>
                      <input type="number" name="marks" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Status</label>
                        <select name="Attempt" id="" class="form-control" >
                          <option value="Attempt">Attempt</option>
                          <option value="Not Attempt">Not Attempt</option>
                      </select>
                    </div>
                  </div>
                  </div>
              </div>
              <input type="submit" name="marksadd" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
  </div>

</section>
