<?php

	$pagename = "passtries.php";
	include('includes/header.php');
	
	include_once 'includes/db_config.php';

	$db = new Database();
	$conn = $db->getConnection();

	$query = "SELECT * FROM pastries";

	$q = $conn->query($query);
	
?>

<head>
	<!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <style type="text/css">
			 .hovereffect {
			width: 100%;
			height: 100%;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: default;
			}

			.hovereffect .overlay {
			position: absolute;
			overflow: hidden;
			width: 80%;
			height: 80%;
			left: 10%;
			top: 10%;
			border-bottom: 1px solid #FFF;
			border-top: 1px solid #FFF;
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: scale(0,1);
			-ms-transform: scale(0,1);
			transform: scale(0,1);
			}

			.hovereffect:hover .overlay {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			transform: scale(1);
			}

			.hovereffect img {
			display: block;
			position: relative;
			-webkit-transition: all 0.35s;
			transition: all 0.35s;
			}

			.hovereffect:hover img {
			filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
			filter: brightness(0.6);
			-webkit-filter: brightness(0.6);
			}

			.hovereffect h2 {
			text-transform: uppercase;
			text-align: center;
			position: relative;
			font-size: 17px;
			background-color: transparent;
			color: #555;
			padding: 1em 0;
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: translate3d(0,-100%,0);
			transform: translate3d(0,-100%,0);
			}

			.hovereffect a, .hovereffect p {
			color: #FFF;
			padding: 1em 0;
			opacity: 0;
			filter: alpha(opacity=0);
			-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
			transition: opacity 0.35s, transform 0.35s;
			-webkit-transform: translate3d(0,100%,0);
			transform: translate3d(0,100%,0);
			}

			.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
			opacity: 1;
			filter: alpha(opacity=100);
			-webkit-transform: translate3d(0,0,0);
			transform: translate3d(0,0,0);
			}

			.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
				  	padding: 9px!important;
				}
				.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
				  	font-size: 0.85em;
				  	color: #333;
				  	border-top: none !important;
				  	font-family: Raleway;
				}

				.table tr{

				}

				.buy{
					text-align: center;
					margin: 10%;
				}

				.col-md-2 input[type='submit'], .col-md-2 input[type='reset']{
					padding: 8px 15px;
					color: #555;
					margin-top: 0.5em;
					font-size: 16px;
					background-color: #fff;
					border: 1px solid #555;
					width: 100%;
				}

				.col-md-2 input[type='submit']:hover, .col-md-2 input[type='reset']:hover{
					color: #fff;
					background-color: #555;
					border: 1px solid #fff;
					transition-duration: 0.3s;
				}

				#filters .col-md-2 label{
					font-size: 16px;
					font-family: Raleway;
				}

				.row .container{
					
					padding: 3.5%;
					width: 90%;
				}

				.row{
					background: rgb(255,255,255); /* Old browsers */
					background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
					background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
					background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
					
				}

				.col-md-4 .overlay{
					box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.5);
					background-color: rgba(255,255,255,0.75);
					padding: 3.5%;
				}
	        </style> 
	        <script type="text/javascript">
	        	function show_value(x)
				{
				 	document.getElementById("slider_value").innerHTML=x;
				}
	        </script>
</head>

	<hr>
		<h1 align="center" id="user-head">Pastries</h1>
	<hr>
	<div class="row">
		<div class="container">
			<div id="filters">
				<div class="col-md-2">
					<h3>Filters: </h3>
				</div>
				<div class="col-md-2">
					<label>Shape: </label><br>
					<input type="checkbox" name="shape" value="rectangle">&nbsp;Rectangle <br>
					<input type="checkbox" name="shape" value="circle">&nbsp;Circle <br>
					<input type="checkbox" name="shape" value="heart">&nbsp;Heart <br>
				</div>
				<div class="col-md-2">
					<label>Flavor: </label><br>
					<input type="checkbox" name="flavor" value="blackforest">&nbsp;Black forest <br>
					<input type="checkbox" name="flavor" value="pineapple">&nbsp;Pineapple <br>
					<input type="checkbox" name="flavor" value="redvelvet">&nbsp;Red velvet <br>
					<input type="checkbox" name="flavor" value="fruit">&nbsp;Fruit pastries <br>
				</div>
				<div class="col-md-2">
					<label>Price range: </label><br>
					<span id="slider_value" style="color:black;text-align: center">0</span>
					<input width="400" type="range" min="0" max="499" name="sld3" value="199" onchange="show_value(this.value);">499
				</div>
				<div class="col-md-2">
					<label>Veg: </label><br>
					<input type="radio" name="veg" value="yes">&nbsp;Yes <br>
					<input type="radio" name="veg" value="no">&nbsp;No <br>
				</div>
				<div class="col-md-2">
					<input type="submit" name="submit" value="Submit"><br>
					<input type="reset" name="reset" value="Reset">
				</div>
			</div>
		</div><br>


		<?php 

				if($q->setFetchMode(PDO::FETCH_ASSOC))
				{
					$cnt = 1;
					while ($r = $q->fetch()){
						$productId = $r['product_Id'];
						$name = $r['name'];
						$image = $r['image'];
						$ingredients = $r['ingredients'];
						$veg = $r['veg'];
						$price = $r['price'];

						if($cnt%3 == 1)
						{
							echo '<div class="container">';
						}
						
						echo '

						<div class="col-md-4">
							<div width="300">
								<div class="hovereffect">
									<img class="img-responsive" src='.$image.' alt="">
									<div class="overlay">
										<h2>'.$name.'</h2>
										<table class="table">
											<tr>
												<th>Price:</th>
												<td>&#8377; '.$price.'</td>
											</tr>
											<tr>
												<th>Veg:</th>
												<td>'.$veg.'</td>
											</tr>
											<tr>
												<th>Ingredient:</th>
												<td>'.$ingredients.'</td>
											</tr>
										</table>
										<a href="addtocart.php?productId='.$productId.'" style="color: #444;font-weight: bold;">Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
						';

					if($cnt%3 == 0)
					{
						echo '</div><div><br></div>';
					}
					$cnt++;
					}
				}
		
		?>

	</div>

<?php
    include('includes/footer.php');
?>