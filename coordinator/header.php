<?php
session_start();
if (empty($_SESSION['adminusername'])) {
?>
<script>
location.replace("login.php");
</script>
<?php
}
?>
