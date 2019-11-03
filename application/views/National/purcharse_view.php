<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Purcharse View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush|Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/purcharse_view.css")?>">	
</head>
<body>
	<div class="container-fluid">
		<div class="row row-titulo-principal align-items-center" >
			<div class="col-12 titulo_principal">
				National Academic Championship								
			</div>
		</div>
	</div>
	<br><br>
	<div class="container cuerpo border rounded shadow">
		<div class="row">
			<div class="col-lg-12 titulo-section-2">
				Receipt For:
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-xs-12">
				<div class="row">
					<div class="col-12 parrafo-1" id="schoolname">
						{SchoolName}
					</div>
					<div class="col-12 info-1" id="schooladdress">
						{SchoolAddress}
					</div>
					<div class="col-12 info-1">
						<span id="schoolcity">{SchoolCity}</span> <span id="schoolstate">{SchoolState}</span> <span id="schoolzip">{SchoolZip}</span>
					</div>
				</div>				
			</div>
			<div class="col-lg-6 col-xs-12 ">
				<div class="row">
					<div class="col-lg-12 parrafo-1">
						<span id="coach">{Coach}</span> <small ><i>Coach</i></small>
					</div>
					<div class="col-lg-12 info-1" id="cellphone">
						{Cellphone}
					</div>
					<div class="col-lg-12 info-1" >
						<a href="#"><span id="email">{Email}</span></a>
					</div>
				</div>				
			</div>
		</div>

		<div class="salto"></div>

		<div class="row">
			<div class="col-lg-6 col-xs-12">
				<div class="row">
					<div class="col-lg-12 info-1">
						<span id="location">{Location}</span> <span id="datelocation">{dateLocation}</span>
					</div>
					<div class="col-lg-12 info-1" id="level">
						{Level}
					</div>
					<div class="col-lg-12 info-1">
						<span class="parrafo-1">First Day:</span> <span id="firstday">{FirstDay}</span>
					</div>
					<div class="col-lg-12 info-1">
						<span class="parrafo-1" >Second Day:</span> <span id="secondday">{SecondDay}</span>
					</div>
					<div class="salto"></div>
					
					<div class="col-lg-12 info-1">
						<img src="{urlPicture}" class="rounded float-left" alt="..." id="citypicture">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12">
				<div class="row">
					<div class="col-lg-12 info-1" id="estimatedday">
						{EstimatedDate}
					</div>
					<div class="col-lg-12 parrafo-2">
						Hotel Information
					</div>
					<div class="col-lg-12 info-1">
						{nameHotel}
					</div>
					<div class="col-lg-12 parrafo-2">
						Link
					</div>
					<div class="col-12 info-1 text-truncate">
						<a href="{link}" target="_blank">{link}</a>
					</div>
					<div class="col-lg-12 info-1">
						{phoneHotel}
					</div>

					<div class="salto"></div>		

					<div class="col-lg-12">
						<table class="table table-striped table-sm" id="tablecrew">
							<thead>
								<tr>
									<th scope="col">Name</th>
									<th scope="col">Student</th>
									<th scope="col">Gender</th>							      
								</tr>
							</thead>
							<tbody>	
								{Crew}
							</tbody>
						</table>
					</div>
				</div>
			</div>			
		</div>
		<hr>
		

		<div class="row row-botones">
			<div class="col-lg-8 col-xs-12">
				<a href="#" class="btn btn-success" id="register">Register</a>
				<a href="<?php echo base_url('index.php/main') ?>" class="btn btn-danger">Cancel</a>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="row">
					<div class="col-12 info-1 text-right">
						Total Price: <span class="text-success">$ {Price}</span>
					</div>
					<div class="col-12 parrafo-thin text-right">
						Discount: $ {Discount}
					</div>
					<div class="col-12 parrafo-thin text-right">
						Method Payment: {MethodPayment}
					</div>
				</div>				
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/utilities.js') ?>"></script>
</body>
</html>