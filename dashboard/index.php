<?php
include('sidebar_header.php');
include('database.php');

$teachers = $db->query('select count(id) as totalteachers from teachers');
$teacher =  $teachers->fetch_assoc();
$students = $db->query('select count(id) as totalstudents from students');
$student =  $students->fetch_assoc();

// $events = $db->query('select * from events orderby id desc limit 1');
// $news = $db->query('select * from news orderby id desc limit 5');
?>

<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <a class="text-white" href="<?php echo $url;?>students/index.php"><h3 class="card-header text-center">Total Students</h3></a>
      <div class="card-body">
     <h1 class="card-title text-center"><strong> <?php echo $student['totalstudents'] ?></strong></h1>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <a class="text-white" href="<?php echo $url;?>teachers/index.php"><h3 class="card-header text-center">Total Teachers</h3></a>
      <div class="card-body">
        <h1 class="card-title text-center"><strong><?php echo $teacher['totalteachers'] ?></strong></h1>
      </div>
    </div>
  </div>

  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Monthly Income</span>


        <span class="info-box-number"><small>$</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Income</span>


        <span class="info-box-number"><small>$</small>11500.00</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

<?php
include('footer.php');
?>