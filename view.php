<?php
    require_once('connect.php');
    $ReadSql = "SELECT * FROM `crud`";
    $res = mysqli_query($connection, $ReadSql);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple CRUD App in PHP & MySQL - Read</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Extras</th>
                </tr>
                <?php
                while($r = mysqli_fetch_assoc($res)){
                ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $r['firstname'] . " " . $r['lastname']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['gender']; ?></td>
                    <td><?php echo $r['age']; ?></td>
                    <td><a href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a
                            href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>