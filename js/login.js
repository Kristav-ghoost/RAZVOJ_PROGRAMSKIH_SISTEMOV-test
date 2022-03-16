function preveriFormoLogin(){
    let ena = preveriUsername();
    let dva = preveriPassword();

    return ena && dva;
}

function preveriUsername(){
    let prvic = document.getElementById("username").value.length;

    if(prvic > 2 && prvic < 21){
        return true;
    }
    else {
        console.log("username ni vreje");
        return false;
    }
}

function preveriPassword(){
    let prvic = document.getElementById("password").value.length;

    if(prvic > 2 && prvic < 21){
        return true;
    }
    else {
        console.log("password ni vreje");
        return false;
    }
}