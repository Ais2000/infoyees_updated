<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] == 1)
  $twhere = "  ";
?>



<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 2): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box">
                <h3><?php echo $conn->query("SELECT * FROM department_list ")->num_rows; ?></h3>

                <p>Total Departments</p>
              </div>
              <div class="icon">
                <i class="fa fa-th-list" id="icon"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box1">
                <h3><?php echo $conn->query("SELECT * FROM designation_list")->num_rows; ?></h3>

                <p>Total Designations</p>
              </div>
              <div class="icon">
                <i class="fa fa-list-alt" id="icon1"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box2">
                <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" id="icon2"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner"  id="box3">
                <h3><?php echo $conn->query("SELECT * FROM employee_list")->num_rows; ?></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-friends" id="icon3"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner" id="box4">
                <h3><?php echo $conn->query("SELECT * FROM evaluator_list")->num_rows; ?></h3>

                <p>Total Supervisors</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret" id="icon4"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-light shadow-sm border">
              <div class="inner" id="box5">
                <h3><?php echo $conn->query("SELECT * FROM task_list")->num_rows; ?></h3>

                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fa fa-tasks" id="icon5"></i>
              </div>
            </div>
          </div>
      </div>

<?php else: ?>
   <div class="col-12">
              Welcome <?php echo $_SESSION['login_name']?><br>
              <img src="./assets/images/sup.png">
      </div>

      
          
<?php endif; ?>

<style>
  #icon {
    color: #33cc33;
  }

  #icon1 {
    color: #ff66ff;
  }

  #icon2 {
    color: #ffcc00;
  }

  #icon3 {
    color: #6600ff;
  }

  #icon4 {
    color: #009999;
  }

  #icon5{
    color: #ff6600;
  }

  #box {
    background-color: rgba(51, 204, 51, 0.5);
  }

  #box1 {
    background-color: rgba(255, 102, 255, 0.5);
  }

  #box2 {
    background-color: rgba(255, 204, 0, 0.5);
  }

  #box3 {
    background-color: rgba(102, 0, 255, 0.5);
  }

  #box4 {
    background-color: rgba(0, 153, 153, 0.5);
  }

  #box5 {
    background-color: rgba(255, 102, 0, 0.5);
  }

</style>