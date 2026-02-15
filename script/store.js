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

