<?php 
require_once('Database/config.php');
include "inc/header.php";

?>  

<?php

$id = $_GET['id'];
$selectData = "SELECT * FROM `crud` WHERE id=$id";

$res = mysqli_query($connection, $selectData);

$r = mysqli_fetch_assoc($res);



// update


if(isset($_POST) & !empty($_POST))
{
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $setData = "UPDATE `crud` SET first_name = '$fname', last_name = '$lname', email_id = '$email', gender = '$gender', age = '$age' WHERE id= $id";

    $res = mysqli_query($connection, $setData);

    if($res){
        header('location: view.php');
    }else{
        $fmsg = "Woops! Data not updated!";
    }

}

?>
    
    <div class="container">
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <div class="row">
				<div class="col-md-12">
						<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2>CRUD Operation</h2>
					<div class="form-group">
							<label for="input1" class="control-label">First Name</label>
							<div class="">
								<input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $r['first_name'];?>" />
							</div>
					</div>
		
					<div class="form-group">
							<label for="input1" class="control-label">Last Name</label>
							<div class="">
								<input type="text" name="lname"  class="form-control" id="input1" value="<?php echo $r['last_name'];?>" />
							</div>
					</div>
		
					<div class="form-group">
							<label for="input1" class="control-label">E-Mail</label>
							<div class="">
								<input type="email" name="email"  class="form-control" id="input1" value="<?php echo $r['email_id'];?>" />
							</div>
					</div>
		
					<div class="form-group" class="radio">
					<label for="input1" class="control-label">Gender</label>
					<div class="">
						<label>
							<input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($r['gender'] == 'male'){ echo 'checked';}?> >Male
						</label>
								<label>
							<input type="radio" name="gender" id="optionsRadios1" value="female"<?php if($r['gender'] == 'female'){ echo 'checked';}?> > Female
						</label>
					</div>
					</div>
		
					<div class="form-group">
					<label for="input1" class="control-label">Age</label>
					<div class="">
						<select name="age" class="form-control">
							<option>Select Your Age</option>
							<option value="20" <?php if($r['age'] == '20'){echo 'selected';}?> >20</option>
							<option value="21" <?php if($r['age'] == '21'){echo 'selected';}?>>21</option>
							<option value="22" <?php if($r['age'] == '22'){echo 'selected';}?>>22</option>
							<option value="23" <?php if($r['age'] == '23'){echo 'selected';}?>>23</option>
							<option value="24" <?php if($r['age'] == '24'){echo 'selected';}?>>24</option>
							<option value="25" <?php if($r['age'] == '25'){echo 'selected';}?>>25</option>
						</select>
					</div>
					</div>
					<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
				</form>
		</div>
	</div>
</div>


<?php include "inc/footer.php";?>