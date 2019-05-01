function do_forgot()
{
 var reset_email=$("#reset_email").val();
 

 if(reset_email!="")
 {
  $.ajax
  ({
  type:'post',
  url:'forgot.php',
  data:{
   do_forgot:"do_forgot",
   remail:reset_email
  },
  success:function(response) {
  if(response=="success")
  {
    alert("Your password has been emailed to you ! Please check your inbox to find passowrd.");
  }
 
  else if(response=="email")
  {
    alert("Invalid email !");
  }
  else if(response=="does_not_exists")
  {
    alert("This email does not exist in our database !");
  }
  else if(response=="not_sent")
  {
    alert("Email not sent !");
  }
  else
  {
    alert("Wrong Details !");
  }
  }
  });
 }

 else
 {
  alert("Fill in your Email Address !");
 }

 return false;
}