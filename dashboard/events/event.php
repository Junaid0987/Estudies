<?php include "../sidebar_header.php"; ?>
<?php include "../database.php"; ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Add event</h1>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Title</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Note</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="note" class="form-control" required>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">image</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="image"  required>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">Category </label>
                        </div>
                        <div class="col-md-8">
                            <select name="category" id="">
                                <option value="All">All</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Teachers">Teachers</option>
                                <option value="Students">Students</option>
                            </select>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="">image</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="image"  required>
                        </div>
                    </div>                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" name="addevent" class="btn btn-primary btn-block">
                        </div>
                    </div>
                    

                </form>
            </div>
        </div>
    </div>

<?php include "../footer.php"; ?>