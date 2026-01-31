let text_bt= true;
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
    document.getElementById("register_loginBox");
    
}


function registerr(){
    document.getElementById("register").style.display="flex";
    document.getElementById("login").style.display="none";
}
function loginn(){
    document.getElementById("login").style.display="flex";
    document.getElementById("register").style.display="none";
}