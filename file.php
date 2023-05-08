<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tablestyle.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <h2 style="text-align: center;"><u>Details Of Booking Packages</u></h2>
    <style>
        a {
            text-decoration: none;
            font-size: 1.5rem;
            margin-left: 2rem;
            color: var(--black);
        }

        a:hover {
            color: #8e44ad;
        }
    </style>
    <a href="home.php" class="fa fa-arrow-circle-left">Back To Home</a>
</body>

</html>
<?php
include 'config.php';
error_reporting(0);

$emailval = $_GET['email'];
$sql = "CALL selectDetails('$emailval')";
$result = $connect->query($sql);
if (!$result) {
    die("invalid query" . $connect->error);
}
while ($row = $result->fetch_assoc()) {
    echo "<table class=content-table>
    <thead>
    <tr>
        <td><b>Name</b></td>
        <td><b>Email Id</b></td>
        <td><b>Mobile Number</b></td>
        <td><b>Address</b></td>
        <td><b>Designation</b></td>
        <td><b>Guests</b></td>
        <td><b>Arrival Time</b></td>
        <td><b>Leaving Time</b></td>
    </tr>
</thead>
<tbody>
    <tr>
    <td>" . $row["fname"] . "</td>
    <td>" . $row["email"] . "</td>
    <td>" . $row["phone"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["destination"] . "</td>
    <td>" . $row["people"] . "</td>
    <td>" . $row["arrival"] . "</td>
    <td>" . $row["leaving"] . "</td>
    </tr>
   
</tbody>
</table>";
}
?>