<?php
    include 'connection.php';
    session_start();
    if(empty($_SESSION['facultyusername'])) {
      ?>
        <script>
          location.replace("login.php");
        </script>
      <?php
    }
?>
<html>
<head>
    <title>Faculty | Change Password</title>
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
      if(isset($_POST['new_password'])){
        if($_POST['new_password']==$_POST['confirm_password']) {
            echo 'Hi';
            $password=md5($_POST['new_password']);
            $sql="UPDATE faculties SET password='".$password."' WHERE name='".$_SESSION['facultyusername']."'";
            if(mysqli_query($con, $sql)){
              header('location:index.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                echo "<script>alert('Something Went Wrong !');</script>";
            }
        }
        else
          echo "<script>alert('Passwords do not match!');</script>";
      }
     ?>
    <div style="height: 10%;"></div>
    <center>
        <div><h1>Change Password</h1></div>
        <br>
        <div class="frm">
            <br>
            <form method="post" action="">
                <div><span>New Password</span><br>
                    <input class="inp" type="password" name="new_password" placeholder="new password" required>
                </div>
                <br>
                <div><span>Password</span><br>
                    <input class="inp" type="password" name="confirm_password" placeholder="confirm password" required>
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
