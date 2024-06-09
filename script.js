function seterrors(id, error){
    let element = document.getElementById(id);
    element.innerHTML = error;
}

function validateusername(){
    const unvalue = document.getElementById("uname").value;
    seterrors("unerror","");
    if(unvalue.length < 2){
        seterrors("unerror","*Username must have atleast 2 character.");
        return true;
    }
    return false;
}

function validateemail(){
    const emailvalue = document.getElementById("email").value;
    seterrors("emailerror","");
    if(!emailvalue.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)){
        seterrors("emailerror","*Email is not valid.");
        return true;
    }
    return false
}

function validatepassword(){
    const passwordvalue = document.getElementById("password").value;
    seterrors("passworderror","");
    if(!passwordvalue.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/)){
        seterrors("passworderror","*Password must contain one character and one number.");
        return true;
    }
    if(passwordvalue.length < 4){
        seterrors("passworderror","*Password must have atleast 4 character.");
        return true;
    }
    return false;
}

function validateconfirmpass(){
    const passwordvalue = document.getElementById("password").value;
    const confirmpassvalue = document.getElementById("confirmpass").value;
    seterrors("confirmpasserror","");
    if(passwordvalue != confirmpassvalue){
        seterrors("confirmpasserror","*Password must be same.");
        return true;
    }
    return false;
}
function validateform(){
    const validunvalue = validateusername();
    const validemailvalue = validateemail();
    const validpasswordvalue = validatepassword();
    const validconfirmpassvalue = validateconfirmpass();
    if (validunvalue || validemailvalue || validpasswordvalue || validconfirmpassvalue){
        return false;
    }
    return true;
}