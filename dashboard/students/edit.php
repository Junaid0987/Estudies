<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['subjectedit'])){
        $save = $db->query("update `students` set `name` ='".$_POST['name']."',`class` = '".$_POST['class']."', `section` = '".$_POST['section']."',`enrollment` ='".$_POST['enrollment']."', `roll-no` ='".$_POST['roll-no']."', `email` ='".$_POST['email']."',`status` ='".$_POST['status']."' where `id` = ".$_POST['id'] );
      
      
        if($save){
            $address = $url."/students/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
          echo "something went wrong";
            echo mysqli_error($db);
        }
      }else{
      $class = $db->query('select *from class where status = "Active" ');

      }
    

    if(isset($_GET['id'])){
      $link = $db->query("select *from students where id =" . $_GET['id']);
      $data = $link->fetch_assoc();
    }

?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Students Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="edit.php" method="post" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Name</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example1c" value="<?php echo $data['name']  ?>" name="name"  class="form-control" required/>
                    </div>
                  </div>

                  
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class" id="" class="form-control">
                      <option value="<?php echo $data['class']; ?>" selected><?php echo $data['class']; ?></option>
                        <?php foreach ($class as $row) {
                          echo "<option value='" . $row['class'] . "'>" . $row['class'] . "</option>";
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Section</label>
                        <select style="width: 50px;" name="section">
                        <option value="<?php echo $data['section']; ?>" selected><?php echo $data['section']; ?></option>
                        <option value="A" >A</option>
                        <option value="B">B</option>
                      </select>
                      </div>
                    </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Enrollment</label>
                        <input type="text" id="form3Example3c" value="<?php echo $data['enrollment']  ?>"  name="enrollment" class="form-control" required/>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Roll No.</label>
                      <input type="text" id="form3Example3c" value="<?php echo $data['roll-no']  ?>"  name="roll-no" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" value="<?php echo $data['email']  ?>"  name="email" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c"> Status</label>
                    <select name="status" >
                        <option value="<?php echo $data['Active'];  ?>" selected><?php echo $data['status']; ?></option>
                        <option value="Active" >Active</option>
                        <option value="Inactive">Inactive</option>
                    </div>
                  </div>
                 
                  </div>
              </div>
              <input type="submit" name="subjectedit" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
</div>
</section>