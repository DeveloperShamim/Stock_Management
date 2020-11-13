<?php require_once 'includes/header.php'; ?>

<?php 

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$recentOrder="SELECT  `order_id`,`order_date`,`client_name`,`grand_total`,`paid`,`due`  FROM orders  ORDER BY order_id DESC LIMIT 10; ";
$recentOrderquert=$connect->query($recentOrder);


$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = "0.00";
while ($orderResult = $orderQuery->fetch_assoc()) {
	$totalRevenue += $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$connect->close();

?>


<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">


<div  >
	
	<div  class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				
				<a href="product.php" style="text-decoration:none;color:black;">
					Total Product
					<span class="badge pull pull-right"><?php echo $countProduct; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->

		<div  class="col-md-4">
			<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Total Orders
					<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->
		

	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="product.php" style="text-decoration:none;color:black;">
					Low Stock
					<span class="badge pull pull-right"><?php echo $countLowStock; ?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->

	<div class="col-md-4">
		<div style="border-radius:10px" class="card">
		  <div style="background-color:#245580;border-radius:10px" class="cardHeader">
		    <h1><?php echo date('d'); ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p style="color:white;"><?php echo date('l') .' '.date('d').', '.date('Y'); ?></p>
		  </div>
		</div> 
		<br/>

		<div style="border-radius:10px" class="card">
		  <div class="cardHeader" style="background-color:#245580;border-radius:10px">
		    <h1><?php if($totalRevenue) {
		    	echo $totalRevenue;
		    	} else {
		    		echo '0';
		    		} ?></h1>
		  </div>

		  <div class="cardContainer">
		    <p style="color:white;" > <i class="glyphicon glyphicon-usd"></i> Total Revenue</p>
		  </div>
		</div> 


      </br>

		<div style="border-radius:10px"  class="card">
			<div class="" style="background-color:#245580;border-radius:10px">
			<p class="" style="color:#D3EAF5;padding:10px"  class="card-text">Create new orders</p>
			</div>

			<div  class="cardContainer">
			<a href="orders.php?o=add" class="btn btn-primary">New Orders</a>
			</div>
		</div> 
		</br>
         
		<div style="border-radius:10px" class="card">
			<div class="" style="background-color:#245580;border-radius:10px">
			<p style="color:#D3EAF5;;padding:10px" class="card-text">Seles report</p>
			</div>

			<div class="cardContainer">
			<a href="report.php" class="btn btn-primary">Reports</a>
			</div>
		</div> 

	</div>
	        <div  class="col-md-4">

              <?php require_once "selesbymonth.php"; ?>	
           </div>
			<div  class="col-md-4">
				<div class="panel panel-default">
					<div style="padding:20px;" class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
					<div  class="panel-body">
						<div  id="calendar"></div>
					</div>	
				</div>
				
			</div>


<div class="col-md-8 ;" style="border-radius:10px ; background-color:white ;padding-top:10px; margin-top:20px"  >
      
        <p style="border-radius:10px ; background-color:white ;padding-top:10px;">Recent Buyer</p>
		<table  id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
		width="100%">
		<thead>
			<tr>
				   <th>Order Id</th>
				   <th>Order Date</th>
					<th>Client Name</th>
					
					<th>Grand Total</th>
					<th>Paid</th>
					<th>Due</th>
			</tr>
		</thead>

		<?php while($row = mysqli_fetch_array($recentOrderquert)):;?>
			<tr>
				<td><?php echo $row[0];?></td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td><?php echo $row[3];?></td>
				<td><?php echo $row[4];?></td>
				<td><?php echo $row[5];?></td>
			</tr>
			<?php endwhile;?>
</table>

</div>				
</div> <!--/row-->







<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


	});
	
			$(document).ready(function () {
		$('#dtHorizontalVerticalExample').DataTable({
		"scrollX": true,
		"scrollY": 200,
		});
		$('.dataTables_length').addClass('bs-select');
		});


		</script>

<?php require_once 'includes/footer.php'; ?>




