<?php include 'header.php'; 
if(isset($_POST['usersadd'])){

    $save = $db->query("insert into users values (NULL,'".$_POST['uname']."','".$_POST['email']."','".$_POST['password']."') ");

    if($save){
        $address = $url."users/index.php?msg="."User Added Successfully";
        header ('location: $address');
    }else{
        echo "something went wrong";
    }

}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>user Add Form</h1>
            </div>
            <div class="col-md-6">
                <form action="userscontroller.php" method="post">
                
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">User Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="unanme" class="form-control" required>
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
                        <div class="col-md-4">
                            <label class="form-control" for="">Password </label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="usersadd" class="form-control">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
