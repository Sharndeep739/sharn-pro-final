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
    document.getElementById("login_b").style.backgroundColor="rgba(255, 255, 255, 0.5)";
    document.getElementById("register_b").style.backgroundColor="rgba(10, 123, 216, 0.941)";

    
}
function loginn(){
    document.getElementById("login").style.display="flex";
    document.getElementById("register").style.display="none";
    document.getElementById("register_b").style.backgroundColor="rgba(255, 255, 255, 0.5)";
    document.getElementById("login_b").style.backgroundColor="rgba(10, 123, 216, 0.941)";
}

// validation 

document.getElementById("register").addEventListener("submit", function(e){
    e.preventDefault();

    let password = this.elements["password"].value;
    let confirm = this.elements["confirm_password"].value;

    if(password !== confirm){
        alert("Passwords do not match");
        return;
    }

    let formData = new FormData(this);

    fetch("actions/process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        
            alert("Register Successful ");

            // redirect karna ho to:
            window.location.href = "main.php";
       
        
    })
    .catch(error => {
        console.error("Error:", error);
    });
});

//login

document.getElementById("login").addEventListener("submit", function(e) {
    e.preventDefault(); // page reload stop karega

    const formData = new FormData(this);

    fetch("actions/login.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {

        if (data.trim() === "Login Success") {
            alert("Login Successful ");

            // redirect karna ho to:
            window.location.href = "main.php";
        } else {
            alert("wrong passwrd"); // Wrong Password ya other message
        }

    })
    .catch(error => {
        alert("Something went wrong ❌");
        console.error(error);
    });
});
