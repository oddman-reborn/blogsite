<?php
    session_start();
include('config.php');

if(isset($_SESSION['id']))
{
   
    if(isset($_POST['publish']))
    {
        $post_heading=$_POST['post_heading'];
        $category=$_POST['category'];
        $paragraph=$_POST['paragraph'];
        $date= date('d/m/y');
        $user_id=$_SESSION['id'];
        $user_name=$_SESSION['user'];
        
        include('config.php');

       $sql="insert into post(heading,paragraph,user_id,date,category,user_name) values('$post_heading','$paragraph','$user_id','$date','$category','$user_name'  )";
       
       $insert= mysqli_query($connect, $sql);
       
       if($insert )
       {
             echo "<script type='text/javascript'>
		alert('Your post submitted to Admin...');

            </script>";
           header("Refresh:0; url=write_post.php");
       }
 else {
            echo "<script type='text/javascript'>
		alert('Something went wrong...');

            </script>";
           header("Refresh:0; url=write_post.php");
       }
    }
    
}

 else {
        echo "<script type='text/javascript'>
		alert('You must log in to write a post...');

            </script>";
                 header("Refresh:0; url=login.php");
}
mysqli_close($connect); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Write Post</title>
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
					<h2 style="text-align:center;">Write your post</h2>
<form method="post" action="write_post.php" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="col-md-6">
                                               
                                                <div class="form-group">
                                                    <label for="pwd">Post Heading</label>
                                               <input type="text" name="post_heading" placeholder="Post Heading" class="form-control" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Category</label>
                                              <select name="category" required> 
                                                    <option value="Others">Others</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Fashion">Fashion</option>
                                                    <option value="Books">Books</option>
                                                    <option value="Historical Event">Historical Event</option>
                                                    <option value="Political">Political</option>
                                                     <option value="Popular Places">Popular Places</option>
                                            </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Post</label>
                                                    <textarea type="text" name="paragraph" required style="height: 500px;width: 950px"></textarea>
                                                                                                 
                                               <div class="form-group">
                                                         
                                               <input class="btn btn-success" type="submit" class="form-control"  name="publish" value="Publish">

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


