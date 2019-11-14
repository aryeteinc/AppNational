<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>National Academic Championship</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/nat_form.css")?>">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">	
	<script src="https://kit.fontawesome.com/f16e0af666.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">

</head>
<body>

	<div class="container-fluid cabecera">
		<div class="container">
			<div class="row contenedor">
				<div class="col-lg-4 col-xs-12 name-emprise text-white">
					<p class="texto-sup-pegado">National Academic </p>
					<p class="texto-inf-pegado">Championship.</p>
				</div>

				<img class="logo-azul" src="imgnational/commond/logo_azul.png" alt="" width="210" height="180">			
				<div class="col-lg-12 col-xs-12">
					<p class="parrafo text-capitalize text-white-50">
						If you’re registering for the national academic championship and wish to pay by check, do not send it to our old address, as it probably won’t reach us.				
						The address for question orders remains the same, but the new address for the national academic championship is	<br>
						<span class="col-12 bg-danger rounded"> 
							<b>								
								10688 S. Dimple Dell Dr.
								Sandy, UT 84092
							</b>
						</span>			
					</p>
				</div>				
			</div>
		</div>
	</div>

	<!-- Fin de la cabecera azul -->
	<br>
	<div class="container-fluid cuerpo">
		<div class="container formulario py-5 border rounded">
			<div class="row py-2">
				<div class="col-12">
					<h2>National Academic Championship</h2>
				</div>

				<div class="col-12">					
					<?php echo form_open('main/recibirForm', ''); ?>					
					<div class="form-row">
						<div class="form-group col-lg-6 col-xs-12">
						<label for="SchoolName">School Name</label>
						<input type="text" class="form-control" id="SchoolName" aria-describedby="snHelp" placeholder="Enter School Name" name="SchoolName" value="<?php echo set_value('SchoolName'); ?>" >
						<small id="SNHelp" class="form-text text-muted">
							<?php echo form_error('SchoolName'); ?>
						</small>
					</div>

					<div class="form-group col-lg-6 col-xs-12">
							<label for="SA">School Address</label>
							<input type="text" class="form-control" id="SchoolAddress" aria-describedby="SAHelp" placeholder="Enter School Address" name="SchoolAddress" value="<?php echo set_value('SchoolAddress'); ?>" >
							<small id="SAHelp" class="form-text text-muted">
								<?php echo form_error('SchoolAddress'); ?>
							</small>
						</div>							
					</div>

					<div class="form-row">
						<div class="form-group col-lg-4 col-xs-12">
							<label for="SchoolCity">City</label>
							<input type="text" class="form-control" id="SchoolCity" aria-describedby="snHelp" placeholder="Enter School City" name="SchoolCity" value="<?php echo set_value('SchoolCity'); ?>" >
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('SchoolCity'); ?>
							</small>
						</div>

						<div class="form-group col-lg-4 col-xs-12">
							<label for="SchoolState">State</label>
							<input type="text" class="form-control" id="SchoolState" aria-describedby="snHelp" placeholder="Enter School State" name="SchoolState" value="<?php echo set_value('SchoolState'); ?>" >
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('SchoolState'); ?>
							</small>
						</div>

						<div class="form-group col-lg-4 col-xs-12">
							<label for="SchoolZip">Zip</label>
							<input type="text" class="form-control" id="SchoolZip" aria-describedby="snHelp" placeholder="Enter School Zip" name="SchoolZip" value="<?php echo set_value('SchoolZip'); ?>">
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('SchoolZip'); ?>
							</small>
						</div>							
					</div>

					<div class="form-row">
						<div class="form-group col-lg-4 col-xs-12">
							<label for="Coach">Coach's Name</label>
							<input type="text" class="form-control" id="Coach" aria-describedby="snHelp" placeholder="Enter Coach Name" name="Coach" value="<?php echo set_value('Coach'); ?>" >
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('Coach'); ?>
							</small>
						</div>

						<div class="form-group col-lg-4 col-xs-12">
							<label for="Cellphone">Cellphone</label>
							<input type="text" class="form-control" id="Cellphone" aria-describedby="snHelp" placeholder="Enter Cellphonee" name="Cellphone" value="<?php echo set_value('Cellphone'); ?>">
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('Cellphone'); ?>
							</small>
						</div>

						<div class="form-group col-lg-4 col-xs-12">
							<label for="Email">Email</label>
							<input type="text" class="form-control" id="Email" aria-describedby="snHelp" placeholder="Enter Email" name="Email" value="<?php echo set_value('Email'); ?>" >
							<small id="snHelp" class="form-text text-muted">
								<?php echo form_error('Email'); ?>
							</small>
						</div>							
					</div>

					<div class="form-row">
						<div class="form-group col-lg-3 col-xs-12">
							<label for="Location">Location</label>
							<select class="custom-select" id="Location" name="Location">
								<option value="NO" 
									<?php echo  set_select('Location', 'New Orleans', TRUE); ?> selected>
									New Orleans, May 23 - 25
								</option>
								<option value="DC" 
									<?php echo  set_select('Location', 'Washington'); ?> >
									Washington, D.C., May 29 - 31
								</option>
								<option value="CH" 
									<?php echo  set_select('Location', 'Chicago'); ?> >
										Chicago , June 6 - 8
								</option>
								<option value="AT" 
									<?php echo  set_select('Location', 'Atlanta'); ?> >
									Atlanta , June 12 - 14
								</option>
							</select>
						</div>

						<div class="form-group col-lg-3 col-xs-12">
							<label for="Level">Level</label>
								<select class="custom-select" id="Level" name="Level">
									<option selected value="HS Varsity" 
										<?php echo  set_select('Level', 'HS Varsity', TRUE); ?>>
										High School Varsity
									</option>
									<option value="HS JVarsity" 
										<?php echo  set_select('Level', 'HS JVarsity'); ?>>
										High School JV
									</option>
									<option value="MS-JH" 
										<?php echo  set_select('Level', 'MS-JH'); ?>>
										Middle School / Junior High
									</option>
									<option value="Elementary" 
										<?php echo  set_select('Level', 'Elementary'); ?>>
										Elementary School
									</option>
								</select>
							</div>

							<div class="form-group col-lg-2 col-xs-12">
								<label for="FirstDay">Not scheduled
									<span class="text-danger"
									data-toggle="tooltip" data-placement="top"
									title="For your convenience and enjoyment while you're at Nationals, you are welcome to choose one time frame, below, during which you DO NOT WANT YOUR GAMES SCHEDULED, for the purpose of sightseeing or for any other reason. You needn't choose any time slots if you have no preference.">
										(?)
									</span>
								</label>
								<select class="custom-select" id="FirstDay" name="FirstDay">
									<option selected value="no" 
									<?php echo  set_select('FirstDay', 'no', TRUE); ?>>
										NO
									</option>
									<option value="FDMorning" 
									<?php echo  set_select('FirstDay', 'FDMorning'); ?>>
										Firs Day Morning
									</option>
									<option value="FDAfternoon" 
									<?php echo  set_select('FirstDay', 'FDAfternoon'); ?>>
										First Day Afternoon
									</option>
									<option value="FDEvening" 
									<?php echo  set_select('FirstDay', 'FDEvening'); ?>>
										First Day Evening
									</option>
									<option value="SDMorning" 
									<?php echo  set_select('FirstDay', 'SDMorning'); ?>>
										Second Day Morning
									</option>
									<option value="SDAfternoon" 
									<?php echo  set_select('FirstDay', 'SDAfternoon'); ?>>
										Second Day Afternoon
									</option>
									<option value="SDEvening" 
									<?php echo  set_select('FirstDay', 'SDEvening'); ?>>
										Second Day Evening
									</option>
								</select>
							</div>

							<div class="form-group col-lg-2 col-xs-12">
							<label for="EstimatedDate">Estimated Date of arrival</label>
								<input type="text" class="form-control" id="EstimatedDate" aria-describedby="sdHelp" placeholder="" name="EstimatedDate" value="<?php echo set_value('EstimatedDate'); ?>">
								<small id="snHelp" class="form-text text-muted"></small>
							</div>	
							<div class="form-group col-lg-2 col-xs-12">
								<label for="EstimatedTime">Estimated Hour of arrival</label>
								<input type="time" class="form-control" id="EstimatedTime" aria-describedby="stHelp" placeholder="" name="EstimatedTime" value="<?php echo set_value('EstimatedTime'); ?>">
								<small id="stHelp" class="form-text text-muted"></small>
							</div>						
						</div>

						<div class="form-row">
							<div class="form-group col-lg-2 col-xs-12">
								<label for="MethodPayment">Method Payment
									<span class="text-danger"
									data-toggle="tooltip" data-placement="top"
									title="Credit Card, we used Paypal service for all transactions">
										(?)
									</span></label>
								<select class="custom-select" id="mp" name="mp">
									<option selected value="Credit Card" 
									<?php echo  set_select('MethodPayment', 'Credit Card', TRUE); ?>>
										Paypal
									</option>
									<option value="Check" 
										<?php echo  set_select('MethodPayment', 'Check'); ?>>
										Check
									</option>
									<option value="Order" 
									<?php echo  set_select('MethodPayment', 'Order'); ?>>
										Order
									</option>						  	
								</select>
							</div>
							<div class="form-group col-lg-2 col-xs-12">
								<label for="RefPayment">
									Payment Reference
									<span class="text-danger"
									data-toggle="tooltip" data-placement="top"
									title="Is enabled when you choice Check or Order Option on Method Payment, ' WE DON'T NEED YOUR CREDIT CARD NUMBER' ">
										(?)
									</span>
								</label>
								<input type="text" class="form-control" id="RefPayment" aria-describedby="snHelp" placeholder="" name="RefPayment" value="<?php echo set_value('RefPayment'); ?>" >
								<small id="snHelp" class="form-text text-muted"></small>
							</div>
						</div>


						<div class="form-row">
							<div class="form-group col-lg-6 col-xs-12">
								<input type="text" class="form-control" id="nameParticipant" aria-describedby="snHelp" placeholder="Enter Name Participant"
								name="nameParticipant" value="<?php echo set_value('nameParticipant'); ?>" >
								<small id="snHelp" class="form-text text-muted">
									<?php echo form_error('nameParticipant'); ?>
								</small>
							</div>
							<div class="form-group col-lg-2 col-xs-12">
								<select class="custom-select" name="KindParticipant" id="KindParticipant">
									<option selected value="Student" 
									<?php echo  set_select('KindParticipant', 'Student', TRUE); ?>>
										Student
									</option>
									<option value="Adult" 
									<?php echo  set_select('KindParticipant', 'Adult'); ?>>
										Adult
									</option>		  	
								</select>													
							</div>

							<div class="form-group col-lg-2 col-xs-12">
								<select class="custom-select" name="Gender" id="Gender">
									<option selected value="Male" 
									<?php echo  set_select('Gender', 'Male', TRUE); ?>>
										Male
									</option>
									<option value="Female" 
									<?php echo  set_select('Gender', 'Female'); ?>>
										Female
									</option>		  	
								</select>
							</div>

							<div class="form-group col-lg-2 col-xs-12">
								<i class="fas fa-plus-circle text-success fa-2x"
								data-toggle="tooltip" data-placement="top"
									title="Add Participant" id="addParticipant"></i>
							</div>
						</div>

						<div id="dinamic">							
						</div>

						<div class="row">
							<div class="col-6">
								<button type="submit" class="btn btn-success">Register Now</button>
							</div>
						</div>
					</form>
				</div>				
			</div>			
		</div>		
		<br>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			$( "#EstimatedDate" ).datepicker();			
			$( "#RefPayment" ).prop( "disabled", true );
			var i = 1;
		


			$("#addParticipant").on('click',function(){
				var formrow = `<div class="form-row columna`+i+`">		  						
								<div class="form-group col-lg-6 col-xs-12 mx-auto">
									<input type="text" class="form-control" id="nameParticipant`+ i +`" aria-describedby="snHelp" placeholder="Enter Name Participant" 
									name="nameParticipant`+ i +`">
									<small id="snHelp" class="form-text text-muted">
									</small>
								</div>`;

				var formgroup1 = `<div class="form-group col-lg-2 col-xs-12">
								<select class="custom-select" name="KindParticipant`+ i +`" id="KindParticipant`+ i +`">
									<option selected value="Student">Student</option>
									<option value="Adult">Adult</option>		  	
								</select>													
							</div>`;

				var formgroup2 = `<div class="form-group col-lg-2 col-xs-12">
									<select class="custom-select" name="Gendere`+ i +`" id="Gender`+ i +`">
									<option selected value="Male">Male</option>
									<option value="Female">Female</option>		  	
									</select>
								</div>`;

				var formgroup3 = `<div class="form-group col-lg-2 col-xs-12">
								<i class="fas fa-minus-circle text-danger fa-2x delete"
								data-toggle="tooltip" data-placement="top"
								title="Delete Participant" id="Delete`+i+`"></i>								
							</div>
						</div>`;


				$('#dinamic').append(formrow + formgroup1 + formgroup2 + formgroup3);
				i = i +1;
			});

			$("#dinamic").on("click",".delete",function(){
				var nameBoton = ($(this).attr('id'))
				var largo = ($(this).attr('id')).length;
				var indice = nameBoton.substring(largo-1);
				var idBorrar = "columna"+indice;
				$("."+idBorrar).remove();
		  		//alert();
			});

			$('#MethodPayment').on("change",function(){
				var valor = $(this).val();
				if (valor != "CreditCard"){
					$( "#RefPayment" ).prop( "disabled", false );
				}else{
					$( "#RefPayment" ).prop( "disabled", true );
				}
		  		//alert(valor);
			});
		});
	</script>	
</body>
</html>