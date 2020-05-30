<?php
include 'header.php';
include 'connection.php';
?>

<html>
<head>
    <title>Faculty | Dashboard</title>
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
        .act{background: orange; border-radius: 5px; padding:5px; color: #ffffff;}
        .pending{background-color: red; border-radius: 5px; padding:5px; color: #ffffff;}
        .complete{background-color: green; border-radius: 5px; padding:5px; color: #ffffff;}
    </style>
</head>
<body>
<div style="margin:0px"><?php include 'menu.php';?></div>
<div style="height: 10%;"></div>
<center>
<table border='1' style="border: #ffffff;">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Status</th>
    </tr>
    <?php
        $sql  = "SELECT * FROM events";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php switch ($row['flag']) {
                    case 0:
                    echo '<span class="pending">Pending</span>';break;
                    case 1:
                    echo '<span class="act">Active</span>';break;
                    case 2:
                    echo '<span class="complete">Completed</span>';break;
                } ?>
            </td>
        </tr>
    <?php }} ?>
</table>
</center>
</body>
</html>