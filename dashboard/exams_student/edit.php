<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['examedit'])){
        $save = $db->query("update `student_exams` set `exam_id` ='".$_POST['exam_id']."',`class_id` ='".$_POST['class_id']."',`start_datetime` ='".$_POST['start_datetime']."',`end_datetime` = '".$_POST['end_datetime']."', `status` ='".$_POST['status']."', `marks` ='".$_POST['marks']."' where `id` = ".$_POST['id'] );
      
      
        if($save){
            $address = $url."exams_student/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
      }
    

    if(isset($_GET['id'])){
      $class = $db->query('select *from class where status = "Active" ');
      $exams = $db->query('select *from exams where status = "Active" ');
      $link = $db->query("select *from student_exams where `id` =" . $_GET['id']);
      $data = $link->fetch_assoc();
    }else{
      echo "something went wrong";
    }

?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
        
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Exam</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" >
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Exam</label>
                      <input type="hidden" value="<?php echo $data['id'];?>" name="id" class="form-control">
                      <select name="exam_id"  class="form-control" >
                      <option value="<?php  echo $data['exam_id']  ?>"><?php  echo $data['exam_id']  ?></option>
                        <?php foreach($exams as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Class</label>
                        <select name="class_id"  class="form-control" >
                        <option value="<?php  echo $data['class_id']  ?>"><?php  echo $data['class_id']  ?></option>
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Start Date Time</label>
                        <input type="datetime-local" value="<?php echo $data['start_datetime'];?>" name="start_datetime" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label"  for="form3Example3c">End Date Time</label>
                      <input type="datetime-local" value="<?php echo $data['end_datetime'];?>" name="end_datetime" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Total marks</label>
                      <input type="text" value="<?php echo $data['marks'];?>" name="marks" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Status</label>
                        <select name="status"  class="form-control" >
                        <option value="<?php  echo $data['status']  ?>"><?php  echo $data['status']  ?></option>
                          <option value="Active">Active</option>
                          <option value="In-active">In-active</option>
                      </select>
                    </div>
                  </div>
                  </div>
              </div>
              <input type="submit" name="examedit" value="Edit Exam" class="btn btn-primary  btn-lg btn-block" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
  </div>
</section>