function what_you_gets(){
    const box = document.querySelector(".what_you_get");
    box.classList.toggle("active");
}

document.addEventListener("click", function(e){
    const box = document.querySelector(".what_you_get");
    const btn = document.getElementById("discover_btn");

    if (box.contains(e.target) || btn.contains(e.target)) return;

    box.classList.remove("active");
});

// serch fun
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("searchBar").addEventListener("focus", function() {
        window.location.href = "store.php";
    });
});

