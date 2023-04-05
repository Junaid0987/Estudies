<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['Submit1'])){
      if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] !=''){
        $filename =time().$_FILES["file"]["name"];
        $folder = "./images/" . $filename;
        $tmp=$_FILES['file']['tmp_name'];
        //  move_uploaded_file($_FILES["file"]["tmp_name"], $filename)
        move_uploaded_file($tmp,"images/".$filename);
        $save = $db->query("update `resources` set `title` ='".$_POST['title']."',`url` ='".$_POST['url']."',`files`='$filename', `class_id` = '".$_POST['class']."', `status` = '".$_POST['status']."' where `id` = ".$_POST['id'] );
      }else{
        $save = $db->query("update `resources` set `title` ='".$_POST['title']."',`url` ='".$_POST['url']."',`files`='$filename',`class_id` = '".$_POST['class']."', `status` = '".$_POST['status']."' where `id` = ".$_POST['id'] );
      }
      
      
        if($save){
            $address = $url."resources/index.php?msg="."resources Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
    }else{
      $class = $db->query("select * from class");
    }

    if(isset($_GET['id'])){
      $link = $db->query("select *from resources where `id` = ". $_GET['id']);
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
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Resources</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">
                
                <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Title</label>
                      <input type="hidden"  value="<?php  echo $data['id'] ; ?>" name="id"  class="form-control" />
                      <input type="text" id="form3Example3c" name="title" value="<?php  echo $data['title']  ?>"  class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">url</label>
                      <input type="text" id="form3Example1c" name="url" value="<?php  echo $data['url']  ?>"  class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Attach File</label>
                      <input type="file" id="form3Example3c" value="<?php  echo $data['file']  ?>" name="file"  required/>
                    </div>
                  </div>
                 
                  <div class="d-flex flex-row align-items-center mb-4">
                    

                        <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">class</label>
                        <select name="class" id="">
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                         <option value="<?php echo $data['class_id']; ?>" selected><?php echo $data['class_id']; ?></option>";
                        </select>
                        </div>
                        </div>
                   
 
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">status</label>
                        <select name="status" >
                        <option value="<?php echo $data['Active'];  ?>" selected><?php echo $data['status']; ?></option>
                        <option value="Active" >Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                      </div>
                    </div>

              </div>
            </div>
            <input type="submit" name="Submit1" value="Edit Resources" class="btn btn-block btn-primary btn-lg px-5" />
          </form>
          </div>
    </div>
</div>
</div>
</div> 
  </div>
</section>
<?php
include "../footer.php";
?>