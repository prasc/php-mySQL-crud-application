<?php
    require_once('connect.php');

    $id = $_GET['id'];
    $SelSql = "SELECT * FROM `crud` WHERE id=$id";
    $res = mysqli_query($connection, $SelSql);
    $r = mysqli_fetch_assoc($res);

    if(isset($_POST) &!empty($_POST) ) {

        $fname = mysqli_real_escape_string($connection, $_POST['fname']);
        $lname = mysqli_real_escape_string($connection, $_POST['lname']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $gender = $_POST['gender'];
        $age = $_POST['age'];
 
        $UpdateSql = "UPDATE `crud` SET firstname='$fname', lastname='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
        $res = mysqli_query($connection, $UpdateSql);
        if ($res) {
            echo "Successfully updated data";
        } else {
            echo "failed to update data";
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple CRUD App in PHP & MySQL - Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
                <h2>Update Operation in CRUD Application with PHP PDO</h2>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="fname" class="form-control" id="input1"
                            value="<?php echo $r['firstname'] ?>" placeholder="First Name" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="lname" class="form-control" id="input1"
                            value="<?php echo $r['lastname'] ?>" placeholder="Last Name" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="input1"
                            value="<?php echo $r['email'] ?>" placeholder="E-Mail" />
                    </div>
                </div>

                <div class="form-group" class="radio">
                    <label for="input1" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="male"
                                <?php if($r['gender'] == 'male') {echo "checked";} ?>> Male
                        </label>
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="female"
                                <?php if($r['gender'] == 'female') {echo "checked";} ?>> Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-10">
                        <select name="age" class="form-control">
                            <option>Select Your Age</option>
                            <option value="20" <?php if($r['age'] == '20'){echo "selected";} ?>>20</option>
                            <option value="21" <?php if($r['age'] == '21'){echo "selected";} ?>>21</option>
                            <option value="22" <?php if($r['age'] == '22'){echo "selected";} ?>>22</option>
                            <option value="23" <?php if($r['age'] == '23'){echo "selected";} ?>>23</option>
                            <option value="24" <?php if($r['age'] == '24'){echo "selected";} ?>>24</option>
                            <option value="25" <?php if($r['age'] == '25'){echo "selected";} ?>>25</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="update" />
            </form>
        </div>
    </div>
</body>

</html>