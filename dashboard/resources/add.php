<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['Submit1'])){
                
                $filename =time().$_FILES["file"]["name"];
                $folder = "./images/" . $filename;
                $tmp=$_FILES['file']['tmp_name'];
              //  move_uploaded_file($_FILES["image"]["tmp_name"], $filename)
              move_uploaded_file($tmp, 'images/'.$filename);
                $sql = "INSERT INTO resources VALUES (NULL, '".$_POST['title']."','".$_POST['url']."', '$filename','".$_POST['class_id']."', '".$_POST['status']."' )";

                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."resources/index.php'</script>";
                }else{
                    echo "something went wrong";
                    
                }
            }else{
                $class = $db->query("select * from class where status = 'Active'");
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
                      <input type="text" id="form3Example3c" name="title"  class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">url</label>
                      <input type="text" id="form3Example1c" name="url"  class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Attach File</label>
                      <input type="file" id="form3Example3c" name="file"  required/>
                    </div>
                  </div>
                 
                  <div class="d-flex flex-row align-items-center mb-4">
                    

                        <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">class</label>
                        <select name="class_id" id="">
                        <?php foreach($class as $row){
                          echo "<option value='".$row['class']."'>".$row['class']."</option>";
                        }?>
                        </select>
                        </div>
                        </div>
                   
 
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">status</label>
                        <select name="status" >
                        <option value="Active" >Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                      </div>
                    </div>

              </div>
            </div>
            <input type="submit" name="Submit1" value="Enter Resources" class="btn btn-block btn-primary btn-lg px-5" />
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