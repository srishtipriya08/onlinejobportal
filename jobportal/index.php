<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="admin"){
?>
<script type="text/javascript">
window.location.href="adminhome.php"</script>
<?php

}else{
?>
<script type="text/javascript">
window.location.href="userhome.php"</script>
<?php

}
}else{
echo 'no result';
}
}

?>
<html>
<head>
<meta charset="utf-8">
<title>Multi user login system</title>
<style type="text/css">

      *{
          box-sizing: border-box;
        }

        html {
          margin:0;
          padding:0;}

       body{
	        position: relative;
          width: 100%;
          height: 100vh;
          background:linear-gradient(-120deg,#E73C7E,#23A6D5,#23D5AB);
          overflow: hidden;
        }

        h1{
          color: white;
          margin: 20px;
          font-weight: normal;
          }

        .form-container{
          margin: 60px;
          padding: 15px;
          width: 340px;
          height: 320px;
          background: #173459;
          color: white;
          box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);

        }
        input{
          padding: 2px;
        }
  </style>
</head>

<body>
  <br>
  <br>
  <h1> INNOVATOR - AN ONLINE JOB PORTAL</h1>
  <hr>
  <center>
  <div class="form-container">
<form method="post">
<table align="center" width="300px" height="220px">
  <tr><center><b><u>LOGIN &nbspTO &nbspYOUR &nbspACCOUNT</u></b></center></tr>
  <br>
<tr>
<td>Username:  <input type="text" name="user" placeholder="enter your username"</td>
</tr>
<tr></tr>
<tr></tr>
<tr>
<td>Password:   <input type="password" name="pass" placeholder="enter your password"</td>
</tr>
<tr></tr>
<tr></tr>
<tr>
<td>
Select user type: <select name="usertype">
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</td>
</tr>
<tr></tr>
<tr></tr>
<tr>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
