function checkPass(){
    let pass1 = document.getElementById("pass1");
    let pass2 = document.getElementById("pass2");
    if(pass1.value.length < 8){
        alert("the passwords are not at least 8 characters long");    
    }else if(pass1.value != pass2.value){
        alert("the passwords entered don't match");
    }
}