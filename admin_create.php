<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<style>
input[type=text] {
    width: 90%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: 2px solid #ddd;
    border-color: #ddd;
    background: #fff;
    border-radius: 2px;
    font-size: 16px;
  }
  .container1 {
    margin: 20px;
    max-width: 400px;
    padding: 16px;
    background-color: #eee;
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.6);
  }
  .buttonx {
      background-color: white;
    color: black;
    border: 2px solid #555555;
      width:95.5%;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
  
    .button5 {
      background-color: white;
      color: black;
      border: 2px solid #555555;
    }
  .button5:hover {
    background-color: #555555;
    color: white;
  }
</style>
</head>
<body>
<img src="images/logos.jpg" height=79 width=697.5>
<hr>
<center>
    <form method="POST" action="admin_make.php" class="container1">
        <input type="text" name="name" placeholder="Name*">
        <input type="text" name="email" placeholder="Email*"><br>
        <input type="text" name="password" placeholder="Security Key*"><br>
        <input type="text" name="language" placeholder="Languages: Hindi, English etc.."><br>
        <input type="text" name="expertise" placeholder="Expertise*"><br>
        <input type="text" name="designation" placeholder="Designation*"><br>   
        <button class="buttonx button5" id="submit">SUBMIT</button>
    </form>
</center>
</body>
</html>