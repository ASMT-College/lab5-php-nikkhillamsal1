function clearerrors(){
    let errors = document.getElementsByClassName("error");
    for (let items of errors){
        items.innerHTML = "";
    }
}

function seterrors(id, error){
    let element = document.getElementById(id);
    // .getElementsByClassName("error")[0]
    element.innerHTML = error;
}





function validateform(){
    let returnval = true;
    clearerrors();
    const unvalue = document.getElementById("uname").value;
    if(unvalue.length < 2){
        seterrors("unerror","*Username must have atleast 2 character.");
        returnval = false;
    }


    const emailvalue = document.getElementById("email").value;
    if(!emailvalue.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)){
        seterrors("emailerror","*Email is not valid.");
        returnval = false;
    }

    const passwordvalue = document.getElementById("password").value;
    if(!passwordvalue.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/)){
        seterrors("passworderror","*Password must contain one character and one number.");
        returnval = false;
    }
    if(passwordvalue.length < 4){
        seterrors("passworderror","*Password must have atleast 4 character.");
        returnval = false;
    }
    const confirmpassvalue = document.getElementById("confirmpass").value;
    if(passwordvalue != confirmpassvalue){
        seterrors("confirmpasserror","*Password must be same.");
        returnval = false;
    }





    return returnval;
}