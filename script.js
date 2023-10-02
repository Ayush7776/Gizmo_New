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

function validatelogin() {
    var fail=document.getElementById("fail");
    var success=document.getElementById("success");
    var password=document.getElementById("pass");
    var username=document.getElementById("username");
    if (password.value==1 && username.value==1) {
        success.style.display="block";
        setTimeout(() => {
            window.location.replace("Home.php");
        }, 1000);
    }
    else{
        fail.style.display="block";
        setTimeout(() => {
        fail.style.display="none";
        }, 2000);
    }
}
