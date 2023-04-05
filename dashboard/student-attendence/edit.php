<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['attendenceedit'])){
        $save = $db->query("update `attedence` set `class-name` ='".$_POST['class-name']."',`student-roll-no` = '".$_POST['student-roll-no']."', `Total-days` ='".$_POST['Total-days']."', `Present` ='".$_POST['Present']."', `Absent` ='".$_POST['Absent']."', `Leave` ='".$_POST['Leave']."' where `id` = ".$_POST['id'] );
      
      
        if($save){
            $address = $url."/student-attendence/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
      }
    

    if(isset($_GET['id'])){
      $class = $db->query('select *from class where status = "Active" ');
      $students = $db->query('select *from students  ');
      $link = $db->query("select *from attendence where id =" . $_GET['id']);
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
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class-name" id="" class="form-control" >
                      <option value="<?php  echo $data['class-name']  ?>"><?php  echo $data['class-name']  ?></option>
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c"> student roll no</label>
                        <select name="student-roll-no" id="" class="form-control" >
                      <option value="<?php  echo $data['student-roll-no']  ?>"><?php  echo $data['student-roll-no']  ?></option>
                        <?php foreach($students as $row){
                          echo "<option value='".$row['id']."'>".$row['roll-no']."</option>";
                        }?>
                      </select>
                    </div>
                  </div>
                  
                  
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Total days</label>
                      <input type="number" name="Total-days" class="form-control" value="<?php echo $data['Total-days']; ?>">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Present</label>
                      <input type="number" name="Present" class="form-control"value="<?php echo $data['Present']; ?>">
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Absent</label>
                      <input type="number" name="Absent" class="form-control"value="<?php echo $data['Absent']; ?>">
                    </div>
                  </div>

                    <div class="d-flex flex-row align-items-center mb-4">                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Leave</label>
                      <input type="number" name="Leave" class="form-control"value="<?php echo $data['Leave']; ?>">
                    </div>
                  </div>
                  </div>
                  
                

                  
                
                  
                  
                  </div>
              </div>
            </div>
          </div>
          <input type="submit" name="attendenceedit" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
</div>
</section>