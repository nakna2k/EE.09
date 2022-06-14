<?php
$conn = mysqli_connect("localhost","root","","wedkarz");
if(isset($_POST['submit']))
{
    $lowisko = $_POST['lowisko'];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];
    mysqli_query($conn,"INSERT INTO zawody_wedkarskie VALUES('',2,'$lowisko','$data','$sedzia');");
    mysqli_close($conn);
}

?>