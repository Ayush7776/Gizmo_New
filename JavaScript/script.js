function ShowHidePass(){

    var x=document.getElementById("pass");
    var y=document.getElementById("eyechage");
    if (x.type==="password") {
        x.type="text";
        y.innerHTML="visibility";

    }
    else{
        x.type="password";
        y.innerHTML="visibility_off";

    }
}

