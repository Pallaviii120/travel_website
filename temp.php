<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="margin: 45px;">
    <form method="GET">
        <?php
        include 'config.php';
        error_reporting(0);
        if (isset($_GET["send"])) {
            $first = $_GET['firstname'];
            $emailid = $_GET['emailid'];
            $mobile = $_GET['phoneno'];
            $address = $_GET['address'];
            $country = $_GET['destination'];
            $noof = $_GET['count'];
            $arrival = $_GET['arrivals'];
            $leave = $_GET['leaving'];

            $query = "CALL bookValue ('$first','$emailid','$mobile','$address','$country','$noof','$arrival','$leave')";
            $insert_query_run = mysqli_query($connect, $query);
        }
        ?>


        <table class="table table-striped">
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
                    <td><b>Action</b></td>
                </tr>
            </thead>

            <tbody>
                <?php
                include 'config.php';
                $sql = "CALL showDetails()";
                $result = $connect->query($sql);
                if (!$result) {
                    die("invalid query" . $connect->error);
                }
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                <td>" . $row["fname"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["destination"] . "</td>
                <td>" . $row["people"] . "</td>
                <td>" . $row["arrival"] . "</td>
                <td>" . $row["leaving"] . "</td>
                <td>
                <a class='btn btn-success' href='update.php?idval=$row[id]&fn=$row[fname]&email=$row[email]&mobile=$row[phone]&addr=$row[address]&place=$row[destination]&people=$row[people]&atime=$row[arrival]&ltime=$row[leaving]'>Update</a>
                <a class='btn btn-danger' href='delete.php?idval=$row[id]' onclick='return checkDelete()'>Delete</a>
                <a class='btn btn-primary' href='file.php?email=$row[email]'>Details</a>
                </td>
                </tr>";
                }
                ?>
                <tr></tr>
            </tbody>
        </table>
        <script>
            function checkDelete() {
                return confirm('Are You Sure You Want To Delete This Record');
            }
        </script>
    </form>
</body>

</html>