<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
        if(isset($_POST['eventsadd'])){
                
                $filename =time().$_FILES["image"]["name"];
                $folder = "./images/" . $filename;
                $tmp=$_FILES['image']['tmp_name'];
              //  move_uploaded_file($_FILES["image"]["tmp_name"], $filename)
              move_uploaded_file($tmp, 'images/'.$filename);
                $sql = "INSERT INTO events VALUES (NULL, '".$_POST['title']."', '".$_POST['description']."', '$filename', '".$_POST['category']."', '".$_POST['start_date_time']."', '".$_POST['end_date_time']."', '".$_POST['status']."' )";

                $res = $db->query($sql);

                if($res){
                    echo "<script>window.location.href='".$url."/events/index.php'</script>";
                }else{
                    echo "something went wrong";
                    echo $sql;
                }
            }
        
    ?> 
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Events Data</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                

                <form class="mx-1 mx-md-4" action="" method="post" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Title</label>
                      <input type="text" id="form3Example1c" name="title"  class="form-control" required/>
                    </div>
                  </div>

                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Description</label>
                      <input type="text" id="form3Example3c" name="description"  class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">image</label>
                      <input type="file" id="form3Example3c" name="image"  required class="form-control"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Category</label>
                        <input type="text" id="form3Example3c"  name="category" class="form-control" required/>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Start date time</label>
                      <input type="datetime-local" id="form3Example3c"  name="start_date_time" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">End date time</label>
                      <input type="datetime-local" id="form3Example3c"  name="end_date_time" class="form-control" />
                    </div>
                  </div>
                    
                  <div class="d-flex flex-row align-items-center mb-4">   
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Status</label>
                      <input type="text" id="form3Example3c"  name="status" class="form-control" value="Active"/>
                    </div>
                  </div>

              </div>
            </div>
          </div>
          <input type="submit" name="eventsadd" value="Enter Detail" class="btn btn-primary btn-lg px-5" />
        </form>
    </div>
</div>
</div>
</div> 
  </div>

</section>
