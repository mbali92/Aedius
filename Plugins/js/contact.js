const inputText = document.getElementsByClassName('input-text');
const login = document.getElementById('login-btn');

let nameValue ='';
let password = '';

showLoginBtn =()=>{
 if(nameValue == 'nick tshilwane' && password == 'tlotlo@2020'){
    login.style.display ='inline-block';
 }   
}
for (let i = 0; i < inputText.length; i++) {
    inputText[i].onblur =()=>{
        if(i == 0){
            nameValue = inputText[i].value;
            showLoginBtn(); 
        }
        if(i == 1){
            password = inputText[i].value;
            showLoginBtn(); 
        }  
    } 
}
login.onclick =(e)=>{
    e.preventDefault();
    sessionStorage.setItem('showEdits',true);
    location.replace('home.php');
}

