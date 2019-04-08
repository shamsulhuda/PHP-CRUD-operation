<?php 
require_once('Database/config.php');
include "inc/header.php";
?>

<?php 
// print_r($_POST);

if(isset($_POST) & !empty($_POST))
{
// 	retrive data from form
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];

// Query operation
    $insertSql = "INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";

    $res = mysqli_query($connection, $insertSql) or die(mysqli_error($connection)); //Apply query function
// 	Show insertion status as message	
    if($res){
	$smsg = "Successfully inserted data, Insert New data.";
    }else{
	$fmsg = "Data not inserted, please try again later.";
    }
}
?>


<div class="container">
	<?php
// 	showing message here
	if(isset($smsg)){ ?>
		<div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>
		<?php 
		} 
		?>

	<?php
	if(isset($fmsg)){ ?>
		<div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
		<?php 
		} 
	?>

		<div class="row">
				<div class="col-md-12">
						<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2 class="text-center">Create user</h2>
					<div class="form-group">
							<label for="input1" class="control-label">First name</label>
							<div class="">
								<input type="text" name="fname"  class="form-control" id="input1" placeholder="First Name" />
							</div>
					</div>
		
					<div class="form-group">
							<label for="input1" class="control-label">Last Name</label>
							<div class="">
								<input type="text" name="lname"  class="form-control" id="input1" placeholder="Last Name" />
							</div>
					</div>
		
					<div class="form-group">
							<label for="input1" class="control-label">E-Mail</label>
							<div class="">
								<input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" />
							</div>
					</div>
		
					<div class="form-group" class="radio">
					<label for="input1" class="control-label">Select Gender</label>
					<div class="">
						<label>
							<input type="radio" name="gender" id="optionsRadios1" value="male" checked> Male
						</label>
								<label>
							<input type="radio" name="gender" id="optionsRadios1" value="female"> Female
						</label>
					</div>
					</div>
		
					<div class="form-group">
					<label for="input1" class="control-label">Age</label>
					<div class="">
						<select name="age" class="form-control">
							<option>Select Your Age</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
						</select>
					</div>
					</div>
					<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
				</form>
		</div>
	</div>
</div>
    
<?php include "inc/footer.php";?>
