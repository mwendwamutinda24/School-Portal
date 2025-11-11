<?php


include 'conn.php';

$upi=$_POST['UPI'];
$Assesment=$_POST['Assesment'];
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$surname=$_POST['surname'];
$birthNo=$_POST['birthNo'];
$DOB=$_POST['DOB'];
$grade=$_POST['Grade'];

$sql="INSERT INTO `Student`(`UPI`,`Assement`,`firstName`,`middleName`,`surname`,`birthNo`,`DOB`,`Grade`)
VALUES('$upi','$Assesment','$firstName','$middleName','$surname','$birthNo','$DOB','$grade')";

$result=mysqli_query($conn,$sql);

if($result){
    echo "
    <script>
    alert('Registered Successfully');
    window.location.href='Students.php';
    </script>";
}
?>