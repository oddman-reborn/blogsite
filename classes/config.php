<?php
class config
{
    	public $connect;
	
        function __construct() {
                        try {
                    $connect=mysqli_connect("localhost","root","");
                    mysqli_select_db($connect,"blogsite"); 
                    
                    echo"done...";
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }

}
$test=new config();

if($connect)
{
  echo"Got access";
}
?>

