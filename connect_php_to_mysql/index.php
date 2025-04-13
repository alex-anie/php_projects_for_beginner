<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>HTML FORMS</h1>

    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" autocomplete="off"/>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" autocomplete="off"/>
            </div>

            <div class="genderContainer">
                <label>Gender</label>
                <input class="gender1" value="m" type="radio" name="gender" placeholder="Enter your email"/>Male
                <input class="gender1" value="f" type="radio" name="gender" placeholder="Enter your email"/>Female
                <input class="gender1" value="o" type="radio" name="gender" placeholder="Enter your email"/>Others
            </div>

            <div>
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Enter your mobile" autocomplete="off"/>
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" autocomplete="off"/>
            </div>

            <div class="btn">
                <button type="submit">Submit Data</button>
            </div>
        </form>
    </div>
</body>
</html>