<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['Submit1'])){
      if(isset($_FILES["image"]["name"])){
        $filename =time().$_FILES["image"]["name"];
        $folder = "./images/" . $filename;
        $tmp=$_FILES['image']['tmp_name'];
        //  move_uploaded_file($_FILES["image"]["tmp_name"], $filename)
        move_uploaded_file($tmp,"images/".$filename);
        $save = $db->query("update `teachers` set `school` ='".$_POST['school']."',`image`='".$filename."',`name` = '".$_POST['tname']."', `contact` ='".$_POST['contact']."', `email` ='".$_POST['email']."', `status`='".$_POST['status']."', `joining_date`='".$_POST['joindate']."' where `id` = ".$_POST['id'] );
      }else{
        $save = $db->query("update `teachers` set `school` ='".$_POST['school']."',`name` = '".$_POST['tname']."', `contact` ='".$_POST['contact']."', `email` ='".$_POST['email']."', `status`='".$_POST['status']."', `joining_date`='".$_POST['joindate']."' where `id` = ".$_POST['id'] );
      }
      
      
        if($save){
            $address = $url."/teachers/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
    }

    if(isset($_GET['id'])){
      $link = $db->query("select *from teachers where id =" . $_GET['id']);
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
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Teachers Data</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="edit.php" method="post" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">School</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example1c" value="<?php echo $data['school']  ?>" name="school"  class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="row">
                      <div class="col-md-6">
                        <img class="img-fluid" src="<?php echo $url.'teachers/images/'.$data['image']?>" alt="">
                      </div>
                      <div class="col-md-6">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">image</label>
                            <input type="file" id="form3Example3c" value="" name="image"  />
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Name</label>
                      <input type="text" id="form3Example3c" value="<?php echo $data['name']  ?>" name="tname"  class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                      
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Contact No.</label>
                        <input type="number" id="form3Example3c" value="<?php echo $data['contact']  ?>"  name="contact" class="form-control" required/>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c" value="<?php echo $data['email']  ?>"  name="email" class="form-control" />
                    </div>
                  </div>

                  

                  
                
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">status</label>
                        <select name="status" class="form-control" >
                        <option value="<?php echo $data['Active'];  ?>"><?php echo $data['status']; ?></option>
                        <option value="No">No</option>
                        <option value="yes">yes</option>
                      </select>
                      </div>
                    </div>
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Joining Data</label>
                      <input type="date" id="form3Example3c" value="<?php echo $data['joining_date']  ?>"  name="joindate" class="form-control" required/>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <input type="submit" name="Submit1" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
</div>
</section>