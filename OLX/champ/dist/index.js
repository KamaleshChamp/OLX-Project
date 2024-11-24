const container = document.querySelector('#container');
const signInButton = document.querySelector('#signIn');
const signUpButton = document.querySelector('#signUp');
signUpButton.addEventListener('click', () => container.classList.add
('right-panel-active'));
signInButton.addEventListener('click', () => container.classList.remove
('right-panel-active'));

const name = document.getElementById("name");
const email = document.getElementById("emailid");
const password = document.getElementById("psw");
const phoneNumber = document.getElementById("num");

function formValidation() {
  
 var name = document.getElementById("name");
 var password = document.getElementById("psw");

 

if(name=="admin" && password=="user")

{
  alert("Login Successfully");
  return false;
}
else{
   alert("Login Falid");

}

}
