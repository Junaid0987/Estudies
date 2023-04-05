<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['classedit'])){
        $save = $db->query("update `class` set `class` = '".$_POST['class']."', `details` ='".$_POST['details']."', `status` ='".$_POST['status']."' where `id` = ".$_POST['id'] );
      
      
        if($save){
            $address = $url."subject/index.php?msg="."User Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
      }
    

    if(isset($_GET['id'])){
      $link = $db->query("select *from class where id =" . $_GET['id']);
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
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Subject Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="edit.php" method="post" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Class</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example1c" value="<?php echo $data['class']  ?>" name="class"  class="form-control" required/>
                    </div>
                  </div>

                  
                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Details</label>
                      <input type="text" id="form3Example3c" value="<?php echo $data['details']  ?>" name="details"  class="form-control" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Status</label>
                      <select name="status" id="">
                      <option value="<?php echo $data['status']; ?>" selected><?php echo $data['status']; ?></option>
                      </select>
                    </div>
                  </div>

                  </div>
              </div>
              <input type="submit" name="classedit" value="Edit class" class="btn btn-block btn-primary btn-lg px-5" />
            </form>
            </div>
          </div>
    </div>
</div>
</div>
</div> 
</div>
</section>