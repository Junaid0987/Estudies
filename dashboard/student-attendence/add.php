<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
          $class = $db->query('select *from class where status = "Active" ');
          $students = $db->query('select *from students where status = "Active"');
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
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class-name" id="" class="form-control" >
                        <?php foreach($class as $row){
                          echo "<option value='".$row['id']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> student roll no</label>
                        <select name="student-roll-no" id="" class="form-control" >
                        <?php foreach($students as $row){
                          echo "<option value='".$row['id']."'>".$row['roll-no']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Total days</label>
                      <input type="number" name="Total-days" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Present</label>
                      <input type="number" name="Present" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Absent</label>
                      <input type="number" name="Absent" class="form-control">
                    </div>
                  </div>

                    <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Leave</label>
                      <input type="number" name="Leave" class="form-control">
                    </div>
                  </div>
                 </div>
              </div>
            </div>
          </div>
          <input type="submit" name="attendence" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
  </div>

</section>
