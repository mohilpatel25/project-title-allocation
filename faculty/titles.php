<?php
include 'header.php';
include 'connection.php';
?>
<?php
if(isset($_POST['deltitle'])){
    $qu='Delete from project_titles where title="'.$_POST['deltitle'].'" AND faculty="'.$_POST['delfaculty'].'"';
    mysqli_query($con, $qu);
    header('location:titles.php');
}
?>
<html>
<head>
    <title>Faculty | Manage Titles</title>
    <style type="text/css">
        body{
            background-color: #F4F6F9;
        }
        table {
          border-collapse: collapse;
          width: 80%;
          border-radius: 5px;
        }
        th, td {
          text-align: left;
          padding: 8px;
        }
        tr:nth-child(even){background-color: #ffffff}
        th {
          background-color: #007BFF;
          color: white;
        }
        input[type=text]{
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        textarea{
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        .sub{
          width: 100%;
          padding: 12px 20px;
          color:#ffffff;
          background-color: #007BFF;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
    </style>
</head>
<body>
<div style="margin:0px"><?php include 'menu.php';?></div>
<div style="height: 10%;"></div>

<center>
<h2>Your titles</h2>
<table border='1' style="border: #ffffff;">
    <tr>
        <th>Title</th>
        <th style="width: 60%;">Description</th>
        <th>Domain</th>
        <th>Type</th>
        <th>Students</th>
        <th></th>
    </tr>
    <?php
        $sql="SELECT * FROM project_titles Where faculty='" .$_SESSION['facultyusername']."'";
        $result = mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['domain']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['students']; ?></td>
            <td><form method="post" action="">
                <input type='submit' value='Delete' onclick="return confirm('Are you sure?');"></input>
                <input type="hidden" name="deltitle" value="<?php echo $row['title']; ?>">
                <input type="hidden" name="delfaculty" value="<?php echo $row['faculty']; ?>">
            </form>
            </td>
        </tr>
    <?php }} ?>
</table>

<br><br><br>
<h2>New Title</h2>
<form method="post" action="add.php">
<table>
    <tr><th>Enter title details</th></tr>
    <tr><td><input type="text" name="title" placeholder="Title" required></td></tr>
    <tr><td><textarea name="desc" placeholder="Description" required></textarea></td></tr>
    <tr><td><input type="text" name="domain" placeholder="Domain" required></td></tr>
    <tr><td><input type="text" name="type" placeholder="Type: Application/Research" required></td></tr>
    <tr><td><input type="text" name="students" placeholder="No. of Students" required></td></tr>
    <tr><td><input type="submit" class="sub" <?php if($count==5) echo 'disabled';?>></td></tr>
</table>
</form>
</center>
</body>
</html>