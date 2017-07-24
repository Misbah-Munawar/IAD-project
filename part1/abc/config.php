<?php
//$GLOBALS['$con']=mysqli_connect("localhost","root","") or die("error");
//mysqli_select_db($GLOBALS['$con'],'logininfom');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "logininfom";
    
    $GLOBALS['$conn'] = new mysqli($servername, $username, $password, $database);

            if ($GLOBALS['$conn']->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{ 
                return true;
            }

?>