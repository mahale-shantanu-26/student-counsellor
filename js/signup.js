function do_signup()
{
 var name=$("#name").val();
 var dob=$("#dob").val();
 var gender=$("#gender").val();
 var email1=$("#email1").val();
 var pass1=$("#pswd1").val();

 if(name!="" && dob!="" && gender!="" && email1!="" && pass1!="")
 {
  $.ajax
  ({
  type:'post',
  url:'signup.php',
  data:{
   do_signup:"do_signup",
   name:name,
   dob:dob,
   gender:gender,
   email:email1,
   password:pass1
  },
  success:function(response) {
  if(response=="success")
  {
    alert("Registered successfully !");
  }
 
  else if(response=="name")
  {
    alert("Invalid name (with numbers/special characters) !");
  }
  else if(response=="email")
  {
    alert("Invalid email or password !");
  }
  else if(response=="emailexists")
  {
    alert("This email already exists !");
  }
  else
  {
    alert("Registered successfully !");
  }
  }
  });
 }

 else
 {
  alert("Fill all the details !");
 }

 return false;
}