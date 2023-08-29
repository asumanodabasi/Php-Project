var email=document.forms['form']['email']
var password=document.forms['form']['password']
var mesaj=document.forms['form']['mesaj']

var email_error=document.getElementById('email_error')
console.log(email)
var pass_error=document.getElementById('pass_error')
console.log(password)
var message_error=document.getElementById('message_error')
console.log(mesaj)

document.getElementById("demo").innerHTML=text

email.addEventListener('textInput',emailVerify)
password.addEventListener('textInput',passVerify)
mesaj.addEventListener('textTextArea',mesageVerify)


function validated(){
    if(email.value<8){
        email.style.border="2px solid red"
        email_error.style.display="block";
        email_error.focus()
        return false
    }

    if(password.value<8){
        password.style.border="2px solid red"
        pass_error.style.display="block";
        pass_error.focus()
        return false
    }

    if(mesaj.value==""){
        mesaj.style.border="2px solid red"
        message_error_error.style.display="block"
        message_error.focus();
        return false
    }

}


function emailVerify(){
    if(email.value>=8){
        email.style.border="2px solid red"
        email_error.style.display="none";
        return true
    }
}

function passVerify(){
    if(password.value>8){
        password.style.border="2px solid blue"
        pass_error.style.display="none"
        return true
    }
}

function mesageVerify(){
    if(mesaj.value!=""){
        mesaj.style.border="2px solid blue"
        message_error_error.style.display="none"
        return true
    }
}