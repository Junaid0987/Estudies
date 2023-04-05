<?php 
include "../sidebar_header.php";
include "../database.php"; 
  
    if(isset($_POST['newsedit'])){
      if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]) ){
        $filename =time().$_FILES["image"]["name"];
        $tmp=$_FILES['image']['tmp_name'];
        //  move_uploaded_file($_FILES["image"]["tmp_name"], $filename)
        move_uploaded_file($tmp,"images/".$filename);
        $save = $db->query("update `news` set `title` ='".$_POST['title']."',`description` = '".$_POST['description']."',`image`='".$filename."', `category` ='".$_POST['category']."',  `status`='".$_POST['status']."' where `id` = ".$_POST['id'] );
      }else{
        $save = $db->query("update `news` set `title` ='".$_POST['title']."',`description` = '".$_POST['description']."', `category` ='".$_POST['category']."',  `status`='".$_POST['status']."' where `id` = ".$_POST['id'] );
      }
      
      
        if($save){
            $address = $url."/news/index.php?msg="."news Updated Successfully";
            echo "<script>location.href='".$address."'</script>"; exit;
        }else{
            echo mysqli_error($db);
        }
    }

    if(isset($_GET['id'])){
      $link = $db->query("select *from news where id =" . $_GET['id']);
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
                      <label class="form-label" for="form3Example1c">Title</label>
                      <input type="hidden" id="form3Example1c" name="id"  value="<?php  echo $data['id']  ?>"/>
                      <input type="text" id="form3Example1c" value="<?php echo $data['title']  ?>" name="title"  class="form-control" required/>
                    </div>
                  </div>

                  
                    
                  <div class="d-flex flex-row align-items-center mb-4"> 
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Description</label>
                      <input type="text" id="form3Example3c" value="<?php echo $data['description']  ?>" name="description"  class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="row">
                      <div class="col-md-6">
                        <img class="img-fluid" src="<?php echo $url.'news/images/'.$data['image']?>" alt="">
                      </div>
                      <div class="col-md-6">
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">image</label>
                            <input type="file" id="form3Example3c" value="<?php echo $data['image']  ?>" name="image"  />
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Category</label>
                        <input type="text" id="form3Example3c" value="<?php echo $data['category']  ?>"  name="category" class="form-control" required/>
                        <input type="hidden" id="form3Example3c" value="<?php echo $data['category']  ?>"  name="category" class="form-control" required/>
                    </div>
                  </div>
                  
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Status</label>
                      <input type="text" id="form3Example3c" value="<?php echo $data['status']  ?>"  name="status" class="form-control" required/>
                    </div>
                  </div>

              </div>
            </div>
            <input type="submit" name="newsedit" value="Edit News" class="btn btn-block btn-primary btn-lg px-5" />
          </form>
          </div>
    </div>
</div>
</div>
</div> 
</div>
</section>