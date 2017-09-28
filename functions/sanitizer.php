<html>
    <body>
        <form method="POST" enctype="multipart/form-data" >
            <input type="file" name="image">
            <input type="submit" name="go" value="UP">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['go']))
    {
        			$img_tmp = $_FILES["image"]["tmp_name"];
                                echo $img_tmp;
			$img_name = $_FILES["image"]["name"];
			$img_type = $_FILES["image"]["type"];
			$img_path = "product_images/".$img_name;
    }
?>