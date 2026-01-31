let text_bt= true;
let value=true;
// move contern in left
function moveDiv(){
    // dive move
    document.querySelector(".content").classList.toggle("move-right");
    // image hide
        document.getElementById("imgBox").classList.toggle("hide");

    
    //  btn_proprty
    let change_btn=document.querySelector(".btn");
    change_btn.classList.toggle("change_btn");
    

    if(text_bt){
    // text chage 
    change_btn.innerHTML="<";
    text_bt= false
    }else{
        change_btn.innerHTML="Register/Login  ";
        text_bt=true;
    }

    // show register page
    if(value){
        setTimeout(()=>{
            document.getElementById("register_loginBox").classList.toggle("register_loginBox");    
        },400);
        value=false;
    }else{
        document.getElementById("register_loginBox").classList.toggle("register_loginBox");    
        value=true;
    }
    
}


function registerr(){
    document.getElementById("register").style.display="flex";
    document.getElementById("login").style.display="none";
}
function loginn(){
    document.getElementById("login").style.display="flex";
    document.getElementById("register").style.display="none";
}