
<?php
include 'conn.php';
$Username=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT  * FROM `admin` WHERE name='$Username' AND password='$password'";

$result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
    echo"
    <script>
    alert('login successfull!');
    window.location.href='Admin3.php';
    </script>";
}
else{
    echo "
    <script>
    alert('invalid credentials!');
    window.location.href='Admin.php';
    </script>
   "
    ;
}

?>