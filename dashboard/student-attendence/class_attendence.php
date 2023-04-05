<?php
include '../database.php';
include '../sidebar_header.php';
  
if(isset($_POST['attendence_mark'])){
        for($i=0; $i < count($_POST['id']) ; $i++){
         
            $sql = "INSERT INTO attendence VALUES (NULL, '".$_POST['classid'][$i]."' , '".$_POST['id'][$i]."', '".$_POST['date'][$i]."', '".$_POST['attendence'][$i]."')";
            $res = $db->query($sql);
        }
        echo "<h1> All Attendence marked! </h1>";
}

$student = $db->query('select *from students where status = "Active" ');
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Class Attendence</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tables</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                    <?php if(isset($_GET['msg'])) { echo "<h5>".$_GET['msg']."</h5>" ; } ?>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="ibox-content">
<div class="table-responsive">
<button class="btn btn-primary ml-3"><a  class=" text-white" href="<?php echo $url ?>student-attendence/add.php">Attendence</a></button>
<table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Attendence</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="post">
                        <?php foreach ($student as $row) {?>
                        <tr>
                            <td><input type="number" name="id[]" readonly value="<?php echo $row['id']; ?>"><input type="hidden" readonly name="classid[]" value="<?php echo $row['class']; ?>"></td>
                            <td><input type="text" name="name[]" readonly value="<?php echo $row['name']; ?>"></td>
                            <td><input type="date" name="date[]" value="<?php echo date('Y-m-d'); ?>"></td>
                            <td><select name="attendence[]" id="">
                                <option value="Present">Present</option>
                                <option value="Absent">Absent</option>
                                <option value="Leave">Leave</option>
                            </select></td>
                           <td> <a href="<?php echo $url;?>/student-attendence/edit.php?id=<?php echo $row['id']; ?>">edit</a>
                        </td>
                                
                        </tr>
                        <?php } ?>
                        <tr>
                            <td> <input type="submit" name="attendence_mark" value="Enter Detail" class="btn btn-primary btn-lg px-5" /></td>
                        </tr>
                        

                        </form>
                    </tbody>
                    
                </table>
            </div>
        </div>
<?php 
    include '../footer.php';
?>