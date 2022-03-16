function preveriTodoLogin(){
    let ena = preveriVpis();

    return ena && dva;
}

function preveriVpis(){
    let prvic = document.getElementById("vpisi").value.length;

    if(prvic > 5 && prvic < 100){
        return true;
    }
    else {
        console.log("vpis ni vreje");
        return false;
    }
}