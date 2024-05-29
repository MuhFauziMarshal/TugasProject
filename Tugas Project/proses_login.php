<?
session_start();
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "";
if (!empty ($_POST['submit_validate'])) {
   if ($username == "admin@admin.com" && $password == "admin") {
      $_SESSION['username'] = $username;
      header('Location: index.php');
      exit();
   } else {
      echo "Username dan Password Salah";
   }
}
?>