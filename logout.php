<?php
session_start();
session_unset();
session_destroy();
                echo "<script type='text/javascript'>
		alert('You Logged out successfully...');

            </script>";
                header("Refresh:0; url=index.php");
?>

