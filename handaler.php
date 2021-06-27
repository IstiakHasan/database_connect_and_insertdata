<?php
$hostname='localhost';
$username='root';
$userpass='';
$dbname='robin';



 $con=mysqli_connect($hostname,$username,$userpass,$dbname);
if($con==false){
    echo "connection error";
}


    $fname=$_REQUEST['name'];
    $uname=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    
   $inserrtquery=  "INSERT INTO table1 (fname,uname,pass) VALUES ('$fname','$uname','$pass')";
     $runquery=mysqli_query($con,$inserrtquery);
    
    
    if($inserrtquery==true){
        echo "data insert successfull";
    }else{
        echo "insert error";
        
    }
    
    
    
    


?>