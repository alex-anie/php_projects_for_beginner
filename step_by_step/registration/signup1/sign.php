<?php
    $success = 0;
    $user = 0;


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from `registration` where username='$username'";

        $result = mysqli_query($con, $sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
                // echo "User already exist";
                $user=1;
            }else {
                $sql = "insert into `registration`(username, password) values('$username', '$password')";
                $result = mysqli_query($con, $sql);

                if($result){
                    // echo "Signup successful";
                    $success = 1;
                    header('location:login.php');
                }else {
                    die(mysqli_error($con));
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup Page</title>
</head>
<body>

<?php
    if($user){
        echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ohh no Sorry</strong> User already exist <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
    }
?>


<?php
    if($success){
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> You are successfully signed up <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
    }
?>


    <h1 class="text-center">Sign up page</h1>

    <div class="container mt-5">
        <form action="sign.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>
           
            <button type="submit" class="btn btn-primary w-100">Sign up</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>