function preveriFormo(){
    let ena = preveriFirstname();
    let dva = preveriLastname();
    let tri = preveriUsername();
    let stiri = prevriEmail();
    let pet = preveriGeslo();
    let sest = preveridrugogeslo();
    let sedem = preveriTel();

    return ena && dva && tri && stiri && pet && sest && sedem;
}

function preveriFirstname(){
    let prvic = document.getElementById("firstname").value.length;

    if(prvic > 2 && prvic < 21){
        return true;
    }
    else {
        console.log("firstname ni vreje");
        return false;
    }
}

function preveriLastname(){
    let prvic = document.getElementById("lastname").value.length;

    if(prvic > 2 && prvic < 21){
        return true;
    }
    else {
        console.log("lastname ni vreje");
        return false;
    }
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

function prevriEmail(){
    let email = document.getElementById("email").value;
    let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    let check = regex.test(email);

    if(check){
        return true;
    }
    else{
        console.log("email ni vreje");
        return false;
    }
}

function preveriGeslo(){
    var geslo = document.getElementById("password");
    var malecrke = /[a-z]/g;
    var vlkecrke = /[A-Z]/g;
    var stevilka = /[0-9]/g;

    if(geslo.value.length >= 6 && geslo.value.match(malecrke) && geslo.value.match(vlkecrke) && geslo.value.match(stevilka)){
        return true;
    }
    else {
        console.log("password ni vreje");
        return false;
    }

}

function preveridrugogeslo(){
    let drugo = document.getElementById("confirm_password").value;
    let prvo = document.getElementById("password").value;

    if(prvo == drugo){
        return true;
    }
    else{
        console.log("drugo gselo ni vreje");
        return false;
    }
}

function preveriTel(){
    let prvic = document.getElementById("tel").value.length;

    if(prvic > 5 && prvic < 21){
        return true;
    }
    else {
        console.log("tel ni vreje");
        return false;
    }
}
