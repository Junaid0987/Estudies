<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['subjectedit'])){
        $save = $db->query("update `student_exam_marks` set ,`marks` = '".$_POST['marks']."', `Attempt` ='".$_POST['attempt']."' ") ;
      
      
        if($save){
            $address = $url."/subject/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
      }
    

    if(isset($_GET['id'])){
      $class = $db->query('select *from class where status = "Active" ');
      $subject = $db->query('select *from subject where status = "Active" ');
      $link = $db->query("select *from exams where id =" . $_GET['id']);
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
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Exam Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="edit.php" method="post" enctype="multipart/form-data">
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Name</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example3c" name="name"  class="form-control"  value="<?php  echo $data['name']  ?>" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class" id="" class="form-control" >
                        <option value="<?php  echo $data['class']  ?>"><?php  echo $data['class']  ?></option>
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
                        <option value="<?php  echo $data['subject']  ?>"><?php  echo $data['subject']  ?></option>
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
                        <option value="<?php  echo $data['type']  ?>"><?php  echo $data['type']  ?></option>
                          <option value="Online">Online</option>
                          <option value="Online">Written</option>
                      </select>
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
              </div>
            </div>
          </div>
          <input type="submit" name="examedit" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
</div>
</section>