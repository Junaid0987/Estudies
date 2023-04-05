<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
if(isset($_GET['id'])){
  $class = $db->query('select *from class where status = "Active" ');
  $subject = $db->query('select *from subject where status = "Active" ');
  $teachers = $db->query('select *from teachers where status = "Active" ');
  $link = $db->query("select *from class_room_subject where id =" . $_GET['id']);
  $data = $link->fetch_assoc();
}else{
  echo "something went wrong";
}

    if(isset($_POST['class_room_subjectedit'])){
        $save = $db->query("update `class_room_subject` set `class_id` ='".$_POST['class_id']."',`subject_id` = '".$_POST['subject_id']."', `teachers_id` ='".$_POST['teachers_id']."', `time` ='".$_POST['time']."', `day` ='".$_POST['day']."', `status` ='".$_POST['status']."' where `id` = ".$_POST['id'] );
      
      
        if($save){
            $address = $url."/class_room_subject/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
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
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Classroom Subject Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
              <form class="mx-1 mx-md-4" action="" method="post" >
                
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class" id="" class="form-control" >
                        <option value="<?php  echo $data['class_id']  ?>"><?php  echo $data['class_id']  ?></option>
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Subject</label>
                      <select name="class" id="" class="form-control" >
                        <option value="<?php  echo $data['subject_id']  ?>"><?php  echo $data['subject_id']  ?></option>
                        <?php foreach($subject as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Teacher</label>
                        <select name="subject" id="" class="form-control" >
                        <option value="<?php  echo $data['teachers_id']  ?>"><?php  echo $data['teachers_id']  ?></option>
                        <?php foreach($teachers as $row){
                          echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Date</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="datetime-local" id="form3Example1c" value="<?php echo $data['time']  ?>" name="time"  class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">DAY</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example1c" value="<?php echo $data['day']  ?>" name="day"  class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> Status</label>
                        <select name="status" id="" class="form-control" >
                        <option value="<?php  echo $data['status']  ?>"><?php  echo $data['status']  ?></option>
                          <option value="Online">Active</option>
                          <option value="In-active">In-active</option>
                      </select>
                    </div>
                  </div>
                  </div>
                  
                  </div>
                  <input type="submit" name="class_room_subjectedit" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5"/>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
</div>
</section>