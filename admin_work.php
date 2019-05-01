<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link rel="stylesheet" href="css/home_style.css">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 10px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

</style>
</head>
<body><br>
<img src='images/logos.jpg' height=79 width=697.5>
<a href="admin_create.php" class="button1 button5" 
style="position:relative;right: -400px;top: -35px;">ADD AN EXPERT</a>
<hr>
<center><h1>All Experts</h1></center>
<hr><br>
<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email ID</th>
    <th>Password</th>
    <th>Languages</th>
    <th>Expertise</th>
    <th>Designation</th>
    <th></th>
    </tr>
<?php
include 'dbh.php';
$r="SELECT * FROM expert";
$rr=mysqli_query($conn,$r);
while($row = mysqli_fetch_assoc($rr)){
    $ii=$row["cid"];
    $nn=$row["name"];
    $ee=$row["email"];
    $ll=$row["lang"];
    $ex=$row["expertise"];
    $dd=$row["designation"];
    $pp=$row["pswd"];
    echo '
    <tr>
    <td>'.$ii.'</td>
    <td>'.$nn.'</td>
    <td>'.$ee.'</td>
    <td>'.$pp.'</td>
    <td>'.$ll.'</td>
    <td>'.$ex.'</td>
    <td>'.$dd.'</td>
    <td><button class="buttonx button5" id="'.$ii.'" onClick="reply_delete(this.id)">REMOVE</button></td>
    </tr>
    ';
  }
?>
</table>
</body>
<script>
function reply_delete(val)
{
    var javascriptVariable = val;
  window.location.href = "admin_delete.php?id=" + javascriptVariable; 
}
</script>
</html>