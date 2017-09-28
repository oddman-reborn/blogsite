<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
					
                                        
                                        
<?php
include("config.php");
session_start();

$category="IT";
$sql="select * from post where category='$category' ";

$query= mysqli_query($connect, $sql);
if($query)
{
    
    
    while($result=mysqli_fetch_assoc($query))
    {
        $heading=$result['heading'];
        $post_id=$result['id'];
        echo "<a href='view_post.php?pid=$post_id'><h2>".$heading."<h2></a>";
        
    }
}
?>
                                        
                                        
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


