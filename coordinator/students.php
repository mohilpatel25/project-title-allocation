<?php
include 'header.php';
include 'connection.php';
?>

<html>
<head>
    <title>Admin | View Students</title>
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
<h1>Filled Choices</h1>
<table>
  <tr><td><form method="post"><input type="text" name="search" placeholder="Search by roll no">
    <input type="submit" value="Search" class='sub'></form></td></tr>
</table>

<table border='1' style="border: #ffffff;">
    <tr>
        <th>Roll no</th>
        <th>Partner</th>
        <th>Title</th>
        <th>Faculty</th>
    </tr>
    <?php
        $sql='';
        if(isset($_POST['search'])){
          $sql="SELECT * FROM choice_filling where roll_no='".$_POST['search']."'";
          if(empty($_POST['search']))
            $sql="SELECT * FROM choice_filling order by roll_no";
        }
        else
          $sql="SELECT * FROM choice_filling order by roll_no";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['roll_no']; ?></td>
            <td><?php echo $row['partner_roll_no']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['faculty']; ?></td>
        </tr>
    <?php }} ?>
</table>
</center>
</body>
</html>