<?php


session_start();
//connect to database
$link = mysqli_connect ("localhost", "mun", "forthesakeofourstartup", "mun");
$postData = $statusMsg = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 

// Escape user inputs for security
//-------------------------------------------------------------------
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$day = mysqli_real_escape_string($link, $_REQUEST['day']);
$month = mysqli_real_escape_string($link, $_REQUEST['month']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
//-------------------------------------------------------------------
$education = mysqli_real_escape_string($link, $_REQUEST['education']);
//-------------------------------------------------------------------
$view = mysqli_real_escape_string($link, $_REQUEST['view']);
$reflect = mysqli_real_escape_string($link, $_REQUEST['reflect']);
$opinion = mysqli_real_escape_string($link, $_REQUEST['opinion']);
//-------------------------------------------------------------------
$experience = mysqli_real_escape_string($link, $_REQUEST['experience']);
$country1 = mysqli_real_escape_string($link, $_REQUEST['country1']);
$country2 = mysqli_real_escape_string($link, $_REQUEST['country2']);
$country3 = mysqli_real_escape_string($link, $_REQUEST['country3']);
//-------------------------------------------------------------------
$letter = mysqli_real_escape_string($link, $_REQUEST['letter']);
$additional = mysqli_real_escape_string($link, $_REQUEST['additional']);
//-------------------------------------------------------------------

 //insert into DB
$sql = "INSERT INTO submissions (first_name, last_name, email, phone, day, month, year, gender, education, view, reflect, opinion, experience, country1, country2, country3, letter, additional) VALUES ('$first_name', '$last_name', '$email', '$phone', '$day', '$month', '$year', '$gender', '$education', '$view', '$reflect', '$opinion', '$experience', '$country1', '$country2', '$country3', '$letter', '$additional')";


		mysqli_query($link, $sql);
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Submission</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="index.php" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Personal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Personal Infomation</h3>
									<p>Please enter your infomation and proceed to the next step.  </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>First Name</legend>
											<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Last Name</legend>
											<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="email" id="email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="+20 " required>
										</fieldset>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label class="special-label">Birth Date:</label>
										<select name="month" id="month" required>
											<option value="MM" disabled selected>MM</option>
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
											<option value="5">May</option>
											<option value="6">Jun</option>
											<option value="7">Jul</option>
											<option value="8">Aug</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Dec</option>
										</select>
										<select name="day" id="day">
											<option value="DD" disabled selected required>DD</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
										</select>
										<select name="year" id="year">
											<option value="YYYY" disabled selected required>YYYY</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
										</select>
										
										

									</div>
								</div>
								
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<select name="gender" id="gender">
											<option value="gender" disabled selected required>Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
							
							</div>
			            </section>
						

						<!-- SECTION 2 -->
						
						<h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Select Education</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Select Education</h3>
									<p>Please enter your infomation and proceed to the next step.</p>
								</div>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" class="radio" name="education" id="plan-1" value="STEM">
			                			<label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">STEM</span>
		                					<p class="plan-text">Please Select This if you are current STEM student.</p>
		                				</div>
			                			<input type="radio" class="radio" name="education" id="plan-2" value="Not STEM">
			                			<label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Not STEM</span>
		                					<p class="plan-text">Please select this if you are highschool student (not STEM).</p>
		                				</div>
										<input type="radio" class="radio" name="education" id="plan-3" value="University" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">University</span>
		                					<p class="plan-text">Please select this if you are university student or higher.</p>
		                				</div>
			                		</div>
			                	</div>
							</div>
			            </section>
							            <!-- SECTION 3 -->		
						
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Committee Preference</span>
			            </h2>
			            <section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">Committee Preference</h3>
									<p>Committee preference for this year is United Nation Security Council.</p>
								</div>
								
								
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>What are your views on the fine balance between research and oratory on a framework such as a Model United Nations? Can one compromise the other? Which quality, in your opinion, dominates in a true delegate?</legend>
									<textarea class="input100" id="view" name="view" placeholder="Your message here..." required></textarea>
								</div>
								
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>Reflect on a time when you questioned or challenged a belief or idea. What prompted your thinking? What was the outcome? </legend>
									<textarea class="input100"  id="reflect" name="reflect" placeholder="Your message here..." required></textarea>
								</div>
								
								
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>In you opinion, how does MUN conferences benefit the local communities and the global ones? </legend>
									<textarea class="input100"  id="opinion" name="opinion"  placeholder="Your message here..." required></textarea>
								</div>
								
							</div>	
						</section>
						
						
						
						  <!-- SECTION 4 -->	
						  
						<h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Experience And Selection</span>
			            </h2>
						
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">Experience And Selection</h3>
									<p>Previous Experience And Countries Selection.</p>
								</div>
								
								
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>If you have any previous MUN experience, list it below</legend>
									<textarea class="input100" id="experience" name="experience"  placeholder="Your message here..." required></textarea>
								</div>
								
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>Which countries would you like to be assigned to ? Please, mention three countries.</legend>
									
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>1.</legend>
											<input type="text" class="form-control" id="country1" name="country1"  placeholder="First" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>2.</legend>
											<input type="text" class="form-control"  id="country2" name="country2"  placeholder="Second" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>3.</legend>
											<input type="text" class="form-control"  id="country3" name="country3"  placeholder="Third" required>
										</fieldset>
									</div>
								</div>
								</div>
								
							</div>	
						</section>
						
						
						
						    <!-- SECTION 5 -->
							
						<h2>
			            	<p class="step-icon"><span>05</span></p>
			            	<span class="step-text">Motivational Letter</span>
			            </h2>
						<section>
							<div class="inner">
								<div class="wizard-header">
									<h3 class="heading">Motivational Letter</h3>
									<p>Letter of Motivation on STEMMUN.</p>
								</div>
							
							
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>Why do you wish to participate in STEMMUN 2019? (max. 150 words) </legend>
									<textarea class="input100"  id="letter" name="letter"  placeholder="Your message here..." required></textarea>
								</div>
							
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "You Can't Leave This Blank">
									<legend>Adtional Information </legend>
									<textarea class="input100"  id="additional" name="additional"  placeholder="Your message here..." required></textarea>
								</div>
						

								<div id="button" class="form-group">
									<input id="submit" class="form-submit" type="submit" name="submit" value="Submit">
								</div>
								
								
							</div>	
						</section>
					</div>
				</div>	
			</div>
			         


		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
	
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
