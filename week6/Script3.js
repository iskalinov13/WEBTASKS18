
let cars = [{brand:'Toyota',model:'Camry',year:1999,price:20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];

let basket = "http://simpleicon.com/wp-content/uploads/basket-64x64.png";
let dollar = "http://simpleicon.com/wp-content/uploads/dollar-64x64.png";
let carsDiv = document.querySelector("#cars");
let icons = new Array();
let items = 0;
let total = 0;

for (let i = 0; i < cars.length; i++) {
    let icon = document.createElement("img");
    icon.src = basket;
    icon.classList.add("basket");
    icons[i] = icon;
}

for (let i = 0; i < cars.length; i++) {
    let div = document.createElement("div");
    let img = document.createElement("img");

    icons[i].addEventListener("click",function(e){
        if (icons[i].src === basket) {
            icons[i].src = dollar;
            items++;
            total += cars[i].price;
        }
        else {
            icons[i].src = basket;
            items--;
            total -= cars[i].price;
        }
        
        document.querySelector("#items").innerHTML = items;
        document.querySelector("#sum").innerHTML = total;
    });

    img.src = cars[i].image_url;
    img.classList.add("card");
    div.classList.add("card");

    div.appendChild(img);
    div.appendChild(icons[i]);
    carsDiv.appendChild(div); 

} 
