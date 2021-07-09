<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MR Reports</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="main.css" rel='stylesheet' type='text/css'>



<?php
    function prx($arr){
      echo '<pre>';
      print_r($arr);
      // die();
    }
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ziohealth";
    // Create connection
    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT DISTINCT location FROM `location`";
    $result = $conn->query($sql);
    //here
    if(isset($_GET['location'])){
      $location = mysqli_real_escape_string($conn, $_GET['location']);
      $sql2 = "SELECT * FROM `location` where location = '$location'";
      $result2 = $conn->query($sql2);
    }
    
?>
</head>
<body>
<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">
        <h1 style="text-align: center;padding:20px;">MR Report</h1>
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="text-size=2rem;">
                    Select Location
                    </button>
                    <div class="dropdown-menu">
                    <?php
                    while($rows = $result->fetch_assoc()) {
                          // prx($rows);
                          ?>
                        <a class="dropdown-item" href="mr.php?location=<?php echo $rows['location'];?>"><?php echo $rows['location']; ?></a>
                        <?php
                    }
                   ?>
                    </div>
                    <?php  
                      if (isset($_GET['location'])){
                        echo $location;
                      }
                    ?>
                </div>
                
                </div>
                </div>
              </div>
              
              <div class="panel-body">
             
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">ID</th>
                        <th> Dr Name</th>
                        <th>Visited</th>
                        <th>Date</th>
                        <th> D.A</th>
                        <th>T.A</th>
                        <th>Total Amounts</th>
                    </tr> 
                  </thead>
                  <tbody>
                  <?php
                  if (isset($_GET['location']) && $result2->num_rows > 0 ){
                  $id = 1;
                    while($rows = $result2->fetch_assoc()) {
                      
                      ?>
                          <tr>
                            <td class="hidden-xs"><?php echo $id ?></td>
                            <td><?php echo $rows['drname'] ?></td>

                            <td><div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Yes
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Yes</a>
                    <a class="dropdown-item" href="#">No</a></td>
                    <td>date</td>
                    <td><?php echo $rows['da'] ?></td>
                    <td><?php echo $rows['ta'] ?></td>
                    <td><?php echo $rows['da'] + $rows['ta'] ?></td>
                    </tr>
                    <?php
                    $id += 1;
                    }
                  }
                   ?>
                  </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col col-xs-6">
                  <div class="form-group">
                 <textarea rows="2" class="form-control" placeholder="Remark"></textarea>
                 </div>
                 </div>
                 <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create">Submit</button>
                  </div>


            </div>
              </div>
            </div>

            

</div></div></div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>