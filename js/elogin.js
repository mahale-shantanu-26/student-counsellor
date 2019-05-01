function do_elogin()
{
 var email=$("#email2").val();
 var pass=$("#pswd2").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'do_login.php',
  data:{
   do_elogin:"do_elogin",
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="expert_login.php";
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
