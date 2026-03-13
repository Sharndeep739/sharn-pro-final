document.getElementById("searchBar").addEventListener("keyup", function(){

    let value = this.value.toLowerCase();
    let items = document.querySelectorAll(".food_cart");

    items.forEach(function(item){

        let name = item.querySelector("#item_name").textContent.toLowerCase();

        if(name.includes(value)){
            item.style.display = "";   // ya block
        } else {
            item.style.display = "none";
        }

    });

});

//filter funtions
const filterBtn = document.getElementById("filterBtn");

filterBtn.addEventListener("click", function(){

    const min = parseInt(document.getElementById("minPrice").value) || 0;
    const max = parseInt(document.getElementById("maxPrice").value) || Infinity;

    const items = document.querySelectorAll(".food_cart");

    items.forEach(function(item){
        const price = parseInt(item.dataset.price);

        if(price >= min && price <= max){
            item.style.display = "";  // show
        } else {
            item.style.display = "none"; // hide
        }
    });

});


//recover

document.querySelectorAll(".to_cart").forEach(button => {
    button.addEventListener("click", function() {

        let parent = this.closest(".food_cart");

        let name = parent.querySelector("#item_name").innerText;
        let price = parent.getAttribute("data-price");
        let image = parent.dataset.image;

        // AJAX request
        fetch("/testphp/actions/to_cart.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `name=${name}&price=${price}&image=${image}`
        })
        .then(response => response.text())
        .then(data => {
        });

    });
});

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