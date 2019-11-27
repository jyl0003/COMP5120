<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Bookstore System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

		
<div class="container-fluid">
<h1><center>Welcome to our Online Bookstore</h1>
	<form method="post">
			<div class="form-group">
				<label for="input">Input Query:</label>
				<textarea class="form-control" rows="5" name="input"></textarea>
			</div>
		<button type="submit" class="btn btn-primary" name = "submit">Submit</button>
	</form>
    <?php 
        $sql = $_POST["input"];
        $sql = stripslashes($sql);
        echo $sql;
       // echo $sql;
        //$sql = "Select Title From Book Where Author='author1'";
        //$sql = mysqli_real_escape_string($conn, $sql);
    //echo $sql;
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        $finfo = mysqli_fetch_fields($result);
        echo $sql;
    ?>
    <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
                  <?php 
                    $field_count = 0;
                  foreach($finfo as $val) { 
                  ?>
			      <th scope="col"><?php echo $val->name ?></th>
                  <?php 
                    $field_count++;
                    } 
                  ?>
		      </tr>
	       </thead>
	       <?php	
            while ($row = mysqli_fetch_row($result)) {
            ?> 
            <tr>  
                <?php 
                  for ($i = 0; $i < $field_count; $i++) { 
                ?>
                <td><?php echo $row[$i];?></td>
                <?php
                  }
                ?>
            </tr>
            <?php 
            }
            ?>
    </table>
</div>
    
<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>Bookstore Tables</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Book                                               .</a></li>
    <li><a data-toggle="tab" href="#menu1">Customer                                                 .</a></li>
    <li><a data-toggle="tab" href="#menu2">Employee                                                 .</a></li>
    <li><a data-toggle="tab" href="#menu3">Orders                                                   .</a></li>
    <li><a data-toggle="tab" href="#menu4">Order Details                                            .</a></li>
    <li><a data-toggle="tab" href="#menu5">Shipper                                                  .</a></li>
    <li><a data-toggle="tab" href="#menu6">Supplier                                                 .</a></li>
    <li><a data-toggle="tab" href="#menu7">Subject                                                  .</a></li>
  </ul>
  <div class="tab-content mr-lg-4">
    <div id="home" class="tab-pane fade in active" style="width: 200px;">
      <h3>Book</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">BookID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">Author</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">SupplierID</th>
                  <th scope="col">SubjectID</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "Select * FROM Book";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["BookID"];?></td>
                <td><?php echo $row["Title"];?></td>
                <td><?php echo $row["UnitPrice"];?></td>
                <td><?php echo $row["Author"];?></td>
                <td><?php echo $row["Quantity"];?></td>
                <td><?php echo $row["SupplierID"];?></td>
                <td><?php echo $row["SubjectID"];?></td>
            </tr>
            <?php } ?>
        </table>
  </div>
    <div id="menu1" class="tab-pane fade" style="width: 200px;">
      <h3>Customer</h3>
       <div class="table-responsive-lg">
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">CustomerID</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">First Name</th>
                  <th scope="col" class="col-sm-5">Phone #</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Customer";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["CustomerID"];?></td>
                <td><?php echo $row["LastName"];?></td>
                <td><?php echo $row["FirstName"];?></td>
                <td><?php echo $row["Phone"];?></td>
            </tr>
            <?php } ?>
        </table>
      </div>
    </div>
    <div id="menu2" class="tab-pane fade" style="width: 200px;">
      <h3>Employee</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">EmployeeID</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">First Name</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Employee";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["EmployeeID"];?></td>
                <td><?php echo $row["LastName"];?></td>
                <td><?php echo $row["FirstName"];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <!--<div class = "table-responsive-lg">-->
    <div id="menu3" class="tab-pane fade" style="width: 200px;">
      <h3>Order</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">OrderID</th>
                  <th scope="col">CustomerID</th>
                  <th scope="col">EmployeeID</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Shipped Date</th>
                  <th scope="col">ShipperID</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Orders";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["OrderID"];?></td>
                <td><?php echo $row["CustomerID"];?></td>
                <td><?php echo $row["EmployeeID"];?></td>
                <td><?php echo $row["OrderDate"];?></td>
                <td><?php echo $row["ShippedDate"];?></td>
                <td><?php echo $row["ShipperID"];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id="menu4" class="tab-pane fade" style="width: 200px;">
      <h3>OrderDetail</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">BookID</th>
                  <th scope="col">OrderID</th>
                  <th scope="col">Quantity</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM OrderDetail";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["BookID"];?></td>
                <td><?php echo $row["OrderID"];?></td>
                <td><?php echo $row["Quantity"];?></td>
            </tr>
            <?php } ?>
        </table>
      </div>
    <div id="menu5" class="tab-pane fade" style="width: 200px;">
      <h3>Shipper</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">ShipperID</th>
                  <th scope="col">Shipper Name</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Shipper";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["ShipperID"];?></td>
                <td><?php echo $row["ShipperName"];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id="menu6" class="tab-pane fade" style="width: 200px;">
      <h3>Supplier</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">SupplierID</th>
                  <th scope="col">CompanyName</th>
                  <th scope="col">Contact Last Name</th>
                  <th scope="col">Contact First Name</th>
                  <th scope="col">Phone</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Supplier";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["SupplierID"];?></td>
                <td><?php echo $row["CompanyName"];?></td>
                <td><?php echo $row["ContactLastName"];?></td>
                <td><?php echo $row["ContactFirstName"];?></td>
                <td><?php echo $row["Phone"];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id="menu7" class="tab-pane fade" style="width: 200px;">
      <h3>Subject</h3>
        <table  class = "table table-hover table-bordered">
	       <thead>
		      <tr>
			      <th scope="col">SubjectID</th>
                  <th scope="col">Category Name</th>
		      </tr>
	       </thead>
	       <?php	
		      $sql = "SELECT * FROM Subject";
		      $result = $conn->query($sql);
		      $count = mysql_num_rows($result);
            //while ($row = mysqli_fetch_row($result))
		      //echo $row[0];
            while ($row = mysqli_fetch_assoc($result)) {
            ?> 
            <tr>  
                <td><?php echo $row["SubjectID"];?></td>
                <td><?php echo $row["CategoryName"];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
   </div>
</div>
    
<!--<table class = "table">
	<thead>
		<tr>
			<th scope="col">OrderDetail</th>
		</tr>
	</thead>
-->
<!--<table  class = "table">
	<thead>
		<tr>
			<th scope="col">BookID</th>
		</tr>
	</thead>
	<?php	
		//$sql = "SELECT BookID FROM Book";
		//$result = $conn->query($sql);
		//$count = mysql_num_rows($result);
        //while ($row = mysqli_fetch_row($result))
		//echo $row[0];
       // while ($row = mysqli_fetch_assoc($result)) {
    ?>  <tr>  
        <td><?php //echo $row["BookID"];?></td>
        </tr>
    <?php
        //}
	?>
</table>-->

</body>
</html>
