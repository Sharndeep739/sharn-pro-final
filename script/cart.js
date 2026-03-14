function openPanel(){
    document.getElementById("profilePanel").classList.toggle("active");
}

document.addEventListener("click", function(event){

    let panel = document.getElementById("profilePanel");
    let avatar = document.querySelector(".avatar");

    if(!panel.contains(event.target) && !avatar.contains(event.target)){
        panel.classList.remove("active");
    }

});

// change avatar
function toggleAvatarEdit(){
    let box = document.getElementById("avatarSelect");

    if(box.style.display == "block"){
        box.style.display = "none";
    }else{
        box.style.display = "block";
    }
}

function setAvatar(name){

    let path = "image/avatar/" + name;

    document.getElementById("mainAvatar").src = path;
    document.getElementById("userAvatar").src = path;

    fetch("actions/save_avatar.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/x-www-form-urlencoded"
        },
        body:"avatar="+name
    });

}
