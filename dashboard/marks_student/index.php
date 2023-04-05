<?php
include '../database.php';
include '../sidebar_header.php';
if(isset($_GET['delete']) && $_GET['delete'] =='yes' ){
    $delete = $db->query("delete from student_exam_marks where id = ".$_GET['id'] );
    if($delete){
        // header ('location: users.php');
        $_GET['msg'] = "User removed Successfully";
    }else{
        echo "something went wrong";
    }
}
$student_exam_marks = $db->query("select * from student_exam_marks");
?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>student_exam_marks Table</h2>
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
<button class="btn btn-primary ml-3"><a  class=" text-white" href="<?php echo $url ?>marks_student/add.php">Add Marks</a></button>
<table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Exam</th>
                            <th>Student</th>
                            <th>Marks</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($student_exam_marks as $row) {?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['exam_id']; ?></td>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['marks']; ?></td>
                            <td><?php echo $row['Attempt']; ?></td>
                            
                            <td>
                                <a href="<?php echo $url;?>/marks_student/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a href="<?php echo $url;?>/marks_student/index.php?delete=yes&&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
<?php 
    include '../footer.php';
?>