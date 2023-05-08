<?php
include 'config.php';
error_reporting(0);

$id = $_GET['idval'];
$sql = "CALL deleteRecord('$id')";

$data = mysqli_query($connect, $sql);
if ($data) {
    echo "<script>alert('Record Deleted SuccessFully')</script>";
?>
    <META http-equiv="Refresh" content="0; URL =http://localhost/travelwebsite/temp.php">
<?php } else {
    echo "<script>alert('Record Not Deleted SuccessFully')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>