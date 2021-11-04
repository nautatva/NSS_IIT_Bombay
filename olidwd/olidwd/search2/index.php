<head>
    <link rel="stylesheet" href="./style.css">
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/less/mixins/buttons.less">
</head>
<?php
include('../../../dbconfig.php');
$conn->set_charset('utf8');
$SQL="SELECT * FROM oli" ;
$result = $conn->query($SQL);
	// output data of each row
    while($row = $result->fetch_assoc()) 
    {
	$commonname=$row["commonname"];
}
?>
<div class="container">
	<div class="row" id="search">
		<form id="search-form" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group col-xs-9">
				<input class="form-control" type="text" placeholder="Search" />
			</div>
			<div class="form-group col-xs-3">
				<button type="submit" class="btn btn-block btn-primary">Search</button>
			</div>
		</form>
	</div>
	<div class="row" id="filter">
		<form>
			<div class="form-group col-sm-3 col-xs-6">
				<select data-filter="make" class="filter-make filter form-control">
					<option value="">Select Make</option>
					<option value="">Show All</option>
				</select>
			</div>
			<div class="form-group col-sm-3 col-xs-6">
				<select data-filter="model" class="filter-model filter form-control">
					<option value="">Select Model</option>
					<option value="">Show All</option>
				</select>
			</div>
			<div class="form-group col-sm-3 col-xs-6">
				<select data-filter="type" class="filter-type filter form-control">
					<option value="">Select Type</option>
					<option value="">Show All</option>
				</select>
			</div>
			<div class="form-group col-sm-3 col-xs-6">
				<select data-filter="price" class="filter-price filter form-control">
					<option value="">Select Price Range</option>
					<option value="">Show All</option>
				</select>
			</div>
		</form>
	</div>
	<div class="row" id="products">
	</div>
</div>

<script src="main.js"></script>