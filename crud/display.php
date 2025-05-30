<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <button class="btn btn-primary">
        <a href="user.php" class="text-light">Add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "Select * from `crud`";
        $result = mysqli_query($con, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];

                echo    '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                        </tr>
                        
                        <td>
                            <button class="btn btn-primary">
                                <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                            </button>
                        </td>
                        ';
            }
        }
    ?>

   
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>