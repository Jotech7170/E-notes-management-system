function toggleForm() {
  var container = document.querySelector('.container');
  container.classList.toggle('active');
}

function login(){
  var email=document.querySelector("#email");
  var password = document.querySelector("#password");
  var signuperr =document.querySelector("#signinerr")
 
  if(email.value==""){
      signinerr.innerHTML="Email Cant be Empty!!";
      signinerr.style.color ="red";
      return false;
      }else if(!email.value.includes('@') || !email.value.includes('.')){
          signinerr.innerHTML="Invalid Email";
          signinerr.style.color ="red";
          return false;
      }
      else{
          signinerr.innerHTML= "";
      }
      if(password.value==""){
          signinerr.innerHTML="password Cant be Empty!!";
          signinerr.style.color ="red";
          return false;
          }else if(password.value.length < 8){
              signinerr.innerHTML="password should have atleast 8 characters!!!!";
              signinerr.style.color ="red";
              return false;
          }else if (!/[A-Z]/.test(password.value)) {
              signinerr.innerHTML = "password should contain a capital letter!!"
              signinerr.style.color = "red"
              return false;
          } else if (!/[0-9]/.test(password.value)) {
              signinerr.innerHTML = "password should contain a number!!"
             signinerr.style.color = "red"
              return false;
          }
          else{
              signinerr.innerHTML= "";
          }

}
function register(){
  var name= document.querySelector("#name");
  var email=document.querySelector("#upemail");
  var password = document.querySelector("#uppassword");
  var signuperr =document.querySelector("#signuperr")
  if(name.value==""){
  signuperr.innerHTML="Name Cant be Empty!!";
  signuperr.style.color ="red";
  return false;
  }else{
      signuperr.innerHTML= "";
  }
  if(email.value==""){
      signuperr.innerHTML="Email Cant be Empty!!";
      signuperr.style.color ="red";
      return false;
      }else if(!email.value.includes('@') || !email.value.includes('.')){
          signuperr.innerHTML="Invalid Email";
          signuperr.style.color ="red";
          return false;
      }
      else{
          signuperr.innerHTML= "";
      }
      if(password.value==""){
          signuperr.innerHTML="password Cant be Empty!!";
          signuperr.style.color ="red";
          return false;
          }else if(password.value.length < 8){
              signuperr.innerHTML="password should have atleast 8 characters!!!!";
              signuperr.style.color ="red";
              return false;
          }else if (!/[A-Z]/.test(password.value)) {
              signuperr.innerHTML = "password should contain a capital letter!!"
              signuperr.style.color = "red"
              return false;
          } else if (!/[0-9]/.test(password.value)) {
              signuperr.innerHTML = "password should contain a number!!"
             signuperr.style.color = "red"
              return false;
          }
          else{
              signuperr.innerHTML= "";
          }

}