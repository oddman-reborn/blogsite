<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Preview</title>
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
session_start();

if(isset($_GET['pid']))
{
    include('config.php');
    $post_id=$_GET['pid'];
    $sql="select * from post where id='$post_id'";
    $query= mysqli_query($connect, $sql);
    
    if($query)
    {
        $result= mysqli_fetch_assoc($query);
        $heading =$result['heading'];
        $paragraph =$result['paragraph'];
        $date=$result['date'];
        $user_id=$result['user_id'];
        $user_name=$result['user_name'];
        
        echo "<h4>"."Date: ".$date."<h4>";
        echo " <h4 style='text-align:right;'>"."Posted by: ".$user_name."</h4>";
        echo "<h2>".$heading."</h2>";
        
        echo "<p>".$paragraph."</p>";
        
        
    }
}
?>
                                </div>
                            <HR style="background-color: rgb(68,157,68);height: 1px"><br>
                            <h6>Comments</h6>
<?php
$post_id=$_GET['pid'];

$comment_sql="select * from comment where post_id='$post_id'";

$comment_query= mysqli_query($connect, $comment_sql);
if($comment_query)
{
    while($comment= mysqli_fetch_assoc($comment_query))
{
    $user=$comment['user_id'];
    $date=$comment['date'];
    $user_name=$comment['user_name'];
    $comment_text=$comment['comment'];

    echo "<h4>".$user_name.".</h4>";echo "<p>"."Commented at ".$date."</p>";
    echo "<p style='margin-left: 30px'>".$comment_text."<p>";
    echo "<br><br>";
}


}
 else {
     echo "Error in loading...";
    
}

?>
                            <br><br><br>
                            <form method="POST" action="">
                                <textarea type="text" name="comment" style="height: 60px;width: 400px"></textarea><br>
                                <input class="btn btn-success" type="submit" class="form-control"  name="post" value="Post">
                            </form>
<?php
if(isset($_POST['post']))
{
    if(isset($_SESSION['id']))
    {
        $insert_comment=$_POST['comment'];
        $date=date('d/m/y');
        $insert_id=$_SESSION['id'];
        $insert_name=$_SESSION['user'];
        $post_id=$_GET['pid'];
        
        $insert_sql="insert into comment(comment,date,user_id,user_name,post_id) values('$insert_comment','$date','$insert_id','$insert_name','$post_id')";
        
        $query_insert= mysqli_query($connect, $insert_sql);
        
        if( $query_insert)
        {
            header("Refresh:0; url=view_post.php?pid='$post_id'");
        }
        else
            echo"Error post...";
    }
 else {
                echo "<script type='text/javascript'>
		alert('You must Log in to comment...');

            </script>";
                header("Refresh:0; url=login.php");
                
    }
}
?>
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
