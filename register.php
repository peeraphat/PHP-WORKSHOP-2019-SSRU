<?php include 'template/header.php'; ?>

<?php 
    $action = $_GET['action'];

    if($action) {
        if($action === 'register') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name     = $_POST['name'];
            $lastName = $_POST['lastName'];
            $email    = $_POST['email'];
            $gender   = $_POST['gender'];
        
            $hashPassword = hash('SHA256', $password);

            $sql = "INSERT INTO table_member (
                                    member_username,
                                    member_password,
                                    member_role,
                                    member_name,
                                    member_lastName,
                                    member_email,
                                    member_gender
                                ) VALUES (
                                    '$username',
                                    '$hashPassword',
                                    '0',
                                    '$name',
                                    '$lastName',
                                    '$email',
                                    '$gender'
                                )";
            echo $sql;
            $result = $conn->exec($sql);

            if($result) {
                echo "<script>alert('ลงทะเบียนสำเร็จ !')</script>";
                echo "<script>window.location = 'login.php'</script>";
            } else {
                echo "<script>alert('ลงทะเบียนไม่สำเร็จ !!')</script>";
                echo "<script>window.history.back()</script>";
            }
        }
    }
?>

<div class="container">
    <h2>Register</h2>
    <form action="register.php?action=register" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" placeholder="Username" name="username" id="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" placeholder="Name" name="name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" placeholder="LastName" name="lastName" id="lastName" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" name="email" id="email" class="form-control">
        </div>

        <div class="form-check">
            <input type="radio" name="gender" value="m" id="m" class="form-check-input"> 
            <label for="m" class="form-check-label">Male</label>
        </div>

        <div class="form-check">
            <input type="radio" name="gender" value="f" id="f" class="form-check-input"> 
            <label for="f" class="form-check-label">Female</label>
        </div>

        <div class="form-check">
            <input type="submit" class="btn btn-primary" value="Register" >
        </div>
    </form>
</div>

<?php include 'template/footer.php'; ?>