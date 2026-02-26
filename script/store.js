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
