<?php
include '../database.php';
include '../sidebar_header.php';
$class = $db->query('select *from class where status = "Active" ');
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
                            <th>Class Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($class as $row) {?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td>
                                <a href="<?php echo $url;?>/student-attendence/class_attendence.php?id=<?php echo $row['id']; ?>">Mark Attendence</a>
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