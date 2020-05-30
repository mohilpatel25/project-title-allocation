<?php
include 'header.php';
include 'connection.php';
?>

<html>
<head>
    <title>Student | Choice Filling</title>
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
        input[type=text],select{
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

<?php
    $sel='';
    $prior=1;
    $sql="SELECT * FROM project_titles group by faculty";
    $result = mysqli_query($con, $sql);
    $count=mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $sel=$sel.'<option value="'.$row['title'].'-'.$row['faculty'].'">'.$row['title'].' - '.$row['faculty'].'</option>';
        }
    }
?>

<center>

<h2>Your choices</h2>
<table border='1' style="border: #ffffff;">
    <tr>
        <th>Partner Roll no</th>
        <th>Title</th>
        <th>Faculty</th>
        <th>Time</th>
    </tr>
    <?php
        $roll=explode('@',$_SESSION['studentusername'])[0];
        $sql="SELECT * FROM choice_filling Where roll_no='" .$roll."'";
        $result = mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td width="10%"><?php echo $row['partner_roll_no']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['faculty']; ?></td>
            <td width="20%"><?php echo $row['tim']; ?></td>
        </tr>
    <?php }} ?>
</table>

<br><br>
<h2>Choice Filling</h2>
<form method="post">
<table border='1' style="border: #ffffff;">
    <tr>
        <th colspan="2">Choices</th>
    </tr>
    <tr><td>Partner roll no</td><td><input type="text" name='partner' value='-'></td></tr>
    <tr><td style="width: 10%;">Choice 1</td><td><select name='ch1'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 2</td><td><select name='ch2'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 3</td><td><select name='ch3'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 4</td><td><select name='ch4'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 5</td><td><select name='ch5'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 6</td><td><select name='ch6'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 7</td><td><select name='ch7'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 8</td><td><select name='ch8'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 9</td><td><select name='ch9'><?php echo $sel;?></select></td></tr>
    <tr><td>Choice 10</td><td><select name='ch10'><?php echo $sel;?></select></td></tr>
    <tr><td colspan="2"><input type="submit" name='submit' class="sub"></td></tr>
</table>
</form>
<?php    
    if(isset($_POST['ch1'])){
        $roll=explode('@',$_SESSION['studentusername'])[0];
        $part=$_POST['partner'];
        $tim=date("Y/m/d H:i:s");
        $q='Delete from choice_filling where roll_no="'.$roll.'"';
        mysqli_query($con, $q);
        for($i=1;$i<=10;$i++){
            $title=explode('-',$_POST['ch'.$i])[0];
            $fac=explode('-',$_POST['ch'.$i])[1];
            $q='INSERT INTO choice_filling(roll_no,partner_roll_no,title,faculty,tim) VALUES ("'.$roll.'","'.$part.'","'.$title.'","'.$fac.'","'.$tim.'");';
            mysqli_query($con, $q);
        }
        echo '<script>location.replace("index.php");</script>';
    }
?>
</center>
</body>
</html>