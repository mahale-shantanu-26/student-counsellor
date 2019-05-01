function do_login()
{
 var email=$("#email").val();
 var pass=$("#pswd").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'login.php',
  data:{
   do_login:"do_login",
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="logined.php";
  }
  else
  {
    alert("Wrong Details");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}