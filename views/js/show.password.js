function myFunctionInputPassword() 
{
  let InputPassword = document.getElementById("myInputPassword");
  
  if (InputPassword.type === "password") 
  {
    InputPassword.type = "text";
  } else 
  {
    InputPassword.type = "password";
  }
}

