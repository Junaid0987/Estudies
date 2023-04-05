<?php
include "../sidebar_header.php";
include "../database.php";
// $class = $db->query('select *from class where status = "Active" ');
// session_start();
if (isset($_POST['subjectadd'])) {

  $sql = "INSERT INTO students VALUES (NUll, '" . $_POST['name'] . "',  '" . $_POST['class'] . "', '" . $_POST['section'] . "', '" . $_POST['enrollment'] . "', '" . $_POST['roll-no'] . "', '" . $_POST['email'] . "','" . $_POST['status'] . "' )";

  $res = $db->query($sql);

  if ($res) {
    echo "<script>window.location.href='" . $url . "/students/index.php'</script>";
  } else {
    echo "something went wrong";
    echo mysqli_error($db);
    echo $sql;
  }
}else{
  $class = $db->query('select *from class where status = "Active" ');
}

?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Students Details</p>
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-12 col-xl-12 order-2 ">
                <form class="mx-1 mx-md-4" action="" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Name</label>
                      <input type="text" id="form3Example3c" name="name" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Class</label>
                      <select name="class" id="" class="form-control">
                        <?php foreach ($class as $row) {
                          echo "<option value='" . $row['class'] . "'>" . $row['class'] . "</option>";
                        } ?>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Section</label>
                      <select name="section">
                        <option value="A">A</option>
                        <option value="B">B</option>
                      </select>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Enrollment</label>
                      <input type="text" id="form3Example3c" name="enrollment" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Roll no</label>
                      <input type="text" id="form3Example3c" name="roll-no" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" name="email" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Status</label>
                      <select name="status" >
                        <option value="Active" >Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                  </div>
              </div>
            </div>
            <input type="submit" name="subjectadd" value="Enter Detail" class="btn btn-block btn-primary btn-lg px-5" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

</section>