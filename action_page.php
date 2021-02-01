<?php 


$servername="localhost";
$username="root";
$password="root";
$dbname="cvmmi2020";


$conn = new mysqli($servername, $username, $password,$dbname);


$sql= "select mail from cv where mail = '". $_POST['mail']. "';";

$query = $conn->query($sql);
$conn->close();


           

if(isset($_POST['submit'])){

   
    if($query->num_rows>0){

        //si le cv existe dans la base de donnee
        $email=$_POST['mail'];
       header("Location: interface-3.php?mail=$email");


    }
    else {
      header("Location: interface-2.html");

    }


}
else{
    header("Location: interface-1.html");
}


?>
