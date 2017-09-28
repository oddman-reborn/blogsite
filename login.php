<?php

     session_start();   
if(isset($_POST['login']))
{

    include("config.php");
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $username=stripslashes($email);
    $password=stripslashes($password);

    $user_sql="select * from user where email='$email' and password='$password'";
    
    
    $user_result=mysqli_query($connect,$user_sql);
    $user_count=mysqli_num_rows($user_result);
    
    if($user_count==1)
    {

        $result=mysqli_fetch_assoc($user_result);
					
	$id=$result['id'];
        $user=$result['name'];
					
	$_SESSION['id']=$id;
	$_SESSION['user']=$user;
                echo "<script type='text/javascript'>
		alert('You Logged in successfully...');

            </script>";
        
        header("Refresh:0; url=index.php");


        
    }
    
 else
 {
           echo "<script type='text/javascript'>
		alert('No match found...');

            </script>";
           header("Refresh:1; url=login.php");
     
 }
    mysqli_close($connect); 
            
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
					<h2 style="text-align:center;">User Login</h2>
                                            <form method="post" action="login.php" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="col-md-6">
                                               
                                                <div class="form-group">
                                                    <label for="pwd">Email:</label>
                                               <input type="email" name="email" placeholder="E-mail" class="form-control" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password:</label>
                                               <input type="password" name="password" placeholder="Password" class="form-control" required>
                                                                                                   
                                               <div class="form-group">
                                                         
                                               <input class="btn btn-success" type="submit" class="form-control"  name="login" value="Login">

                                                </div>
                                                
                                                </div>
                                                </div>  
                                            </form>

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




