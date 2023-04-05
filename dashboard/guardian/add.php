<?php 
include "../sidebar_header.php";
include "../database.php"; 
        // session_start();
    if(isset($_POST['guardianadd'])){
            
    $data = $db->query("insert into guardian values (NULL,'".$_POST['name']."','".$_POST['cnic']."','".$_POST['phone']."','".$_POST['profession']."','".$_POST['email']."') ");

        // echo "insert into guardian values (NULL,'".$_POST['name']."','".$_POST['cnic']."','".$_POST['phone']."','".$_POST['profession']."','".$_POST['email']."')";

    if($data){
        $address = $url."guardian/index.php?msg="."User Added Successfully";
        echo ("<script>window.location.href='".$address."'</script>");

    }else{
        echo mysqli_error($db);
        // echo "something went wrong";
    }
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Add Form</h1>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Cnic </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="cnic" class="form-control" required>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">phone </label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Profession </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="profession" class="form-control" required>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Email </label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="guardianadd" class="btn btn-primary btn-block">
                        </div>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>
<?php include '../footer.php'; ?>
