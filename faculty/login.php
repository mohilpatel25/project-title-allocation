<?php
    include 'connection.php';
?>

<html>
<head>
    <title>Faculty | Log in</title>
    <style type="text/css">
        body{
            background-color: #d8e2dc;
        }
        .frm{
            background-color: #ffffff;
            width: 23%;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #aaa;
        }
        .inp{
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        span{
            font-size: 18px;
            font-weight: bold;
        }
        .btn{
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            background-color: #00b4d8;
            border: 1px solid #00b4d8;
            color: #ffffff;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
	<?php
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email=$_POST['email'];
            $pwd=md5($_POST['password']);
            $sql="SELECT * FROM faculties where email='$email' AND password='$pwd'";
            $result=mysqli_query($con, $sql);
            if (mysqli_num_rows($result)>0) {
                $row=mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['email']=$row['email'];
                $_SESSION['facultyusername']=$row['name'];
                header('Location:index.php');
            }
            else {
                echo "<script>alert('Invalid Credentials!');</script>";
            }
        }
    ?>
    <div style="height: 10%;"></div>
    <center>
        <div><h1>Login</h1></div>
        <br>
        <div class="frm">
            <br>
            <form method="post" action="">
                <div><span>Email</span><br>
                    <input class="inp" type="text" name="email" placeholder="faculty@nirmauni.ac.in" required>
                </div>
                <br>
                <div><span>Password</span><br>
                    <input class="inp" type="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <input class="btn" type="submit">
                </div>
            </form>
            <br>
        </div>
    </center>
</body>
</html>
