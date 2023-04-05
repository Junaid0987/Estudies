<?php include ('header.php');
include "database.php"; 
// session_start();
if(isset($_POST['feedbackadd'])){
    
$data = $db->query("insert into feedback values (NULL,'".$_POST['name']."','".$_POST['profession']."','".$_POST['message']."') ");

if($data){
$msg="Feedback Submitted Successfully";

}else{
echo mysqli_error($db);
// echo "something went wrong";
}
}
?>




<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               
                <h1 class="mb-2 mt-5">Feedback</h1>
                <?php if(isset($msg)){ echo '<h3>'.$msg.'</h3>';} ?>
            </div>
  <div class="row align-items-center  >
  <div class="col-md-8 ">


<form method="post">
  <!-- Name input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Name</label>
    <input type="text" id="form4Example1"name="name" class="form-control"  />
    
  </div>
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example1">Profession</label>
    <input type="text" id="form4Example1" class="form-control" name="profession"  />
  </div>
 

  <!-- Message input -->
  <div class="form-outline mb-4">
      <label class="form-label" for="form4Example3">Message</label>
    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea> 
  
  </div>
  <!-- Submit button -->
  <div class="row">
      <div class="col-md-12">
        <input type="submit" name="feedbackadd" class="btn btn-primary px-5 btn-block">
     </div>
     </div>
</form>
</div>
</div>
</div>

<?php include ('footer.php'); ?>