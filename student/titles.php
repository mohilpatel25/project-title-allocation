<?php
include 'header.php';
include 'connection.php';
?>

<html>
<head>
    <title>Student | View Titles</title>
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
<h1>Titles</h1>
<table border='1' style="border: #ffffff;">
    <tr>
        <th>Title</th>
        <th style="width: 60%;">Description</th>
        <th>Domain</th>
        <th>Type</th>
        <th>Students</th>
        <th>Faculty</th>
    </tr>
    <?php
        $sql="SELECT * FROM project_titles group by faculty";
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
            <td><?php echo $row['faculty']; ?></td>
        </tr>
    <?php }} ?>
</table>
</center>
</body>
</html>