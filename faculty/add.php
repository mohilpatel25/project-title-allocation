<?php
include 'header.php';
include 'connection.php';
?>
<?php
    if(isset($_POST['title'])){
        $title=$_POST['title'];
        $desc=$_POST['desc'];
        $dom=$_POST['domain'];
        $type=$_POST['type'];
        $students=$_POST['students'];
        $fac=$_SESSION['facultyusername'];
        $q='INSERT INTO project_titles VALUES ("'.$title.'","'.$desc.'","'.$dom.'","'.$type.'","'.$students.'","'.$fac.'");';
        mysqli_query($con, $q);
        header('location:titles.php');
    }
?>