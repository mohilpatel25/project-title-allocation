<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<ul>
    <li><a><?php echo $_SESSION['studentusername']?></a></li>
    <li><a href="index.php">Dashboard</a></li>  
    <li><a href="titles.php">View titles</a></li>
    <li><a href="ChoiceFilling.php">Fill Choices</a></li>
    <li><a href="changePassword.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>