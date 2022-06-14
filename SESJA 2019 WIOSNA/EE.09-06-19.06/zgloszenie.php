<?php
$conn = mysqli_connect("localhost","root","","pogotowie");
if(isset($_POST['submit']))
{
    $date = date('H:i:s');
    $nrz = $_POST['nrz'];
    $nrd = $_POST['nrd'];
    $adres = $_POST['adres'];
    mysqli_query($conn,"INSERT INTO zgloszenia VALUES ('','$nrz','$nrd','$adres','0','$date');");
    
mysqli_close($conn);
}
?>