<?php
if(isset ($_POST['register']))
{
    include('config.php');
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact_no=$_POST['contact_no'];
    $address=$_POST['address'];
    
    $imtmp = $_FILES["file_img"]["tmp_name"];
    $imname = $_FILES["file_img"]["name"];
    $imtype = $_FILES["file_img"]["type"];
    $impath = "user_images/".$imname;
    move_uploaded_file($imtmp,$impath);
    
    $sql="insert into user(email,password,name,contact_no,image,address) values('$email','$password','$name','$contact_no','$impath','$address')";
    $query= mysqli_query($connect, $sql);
    
    if($query)
    {
        echo "<script type='text/javascript'>
		alert('You have registred successfully...');

            </script>";
    }
        else
        {
                    echo "<script type='text/javascript'>
		alert('Registration error...');

            </script>";
        }
    mysqli_close($connect);      
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
<?php
include('header.php');
?>
</head>
<body>
  
<div class="container-fluid">
<?php	
include("top.php");
?>	
	
	
	<div class="row" >
		<nav class="navbar navbar-inverse">
			
		
			<div class="col-md-12">
			
                            <?php
                            include("mainmenu.php");
                            ?>
			</div>
		
		</nav>
	</div>
	
	
	
	
	<div class="row">
			<div class="col-md-9" >
				<div class="main-view">
					<h2 style="text-align:center;">User Registration Form</h2>
                                        <div class="input">
                                            <form method="post" action="user_reg.php" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="col-md-6">
                                               
 <div class="form-group"><label for="pwd">Name:</label><input type="text" name="name" placeholder="Name" class="form-control" required >
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Email:</label>
                                               <input type="email" name="email" placeholder="E-mail" class="form-control" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password:</label>
                                               <input type="password" name="password" placeholder="Password" class="form-control" required>

                                                </div>
                                                     <div class="form-group">
                                                         
                                               <input class="btn btn-success" type="submit" class="form-control"  name="register" value="Register">

                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pwd">Contact No:</label>
                                               <input type="number" name="contact_no" placeholder="Contact no" class="form-control" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Address:</label>
                                               <input type="text" name="address" placeholder="Full Address" class="form-control" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Upload Image:</label>
                                               <input type="file" name="file_img" placeholder="Photo" class="form-control" >

                                                </div>
                                                </div>
                                               

                                               

                                            </form>
                                        </div>
                                        
				</div>
			</div>

			<div class="col-md-3" > 
<?php
include("sidebar.php");
?>
			</div>
	
	
	</div>
	
	
	
	<div class="row">
<?php
include("footer.php");
?>
		</div>
	</div>
</div>

</body>
</html>
