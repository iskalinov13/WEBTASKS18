var url = "http://demo4296963.mockable.io/listCars";
var loadingButton = document.querySelectorAll("button")[0];
var sortByMaker = document.querySelector("#sortByMaker")
var sortByPrice = document.querySelector("#sortByPrice")
var img = document.querySelector("#loading");
var arrayOfCards;
var cardsDiv = document.querySelector("#cards");

function onStreamProceed(text) {
  console.log(text);
  arrayOfCards = new Array();
  arrayOfCards = JSON.parse("[" + text + "]")[0];
  console.log(arrayOfCards);
  
  var cards = document.querySelector("#cards");
  pushAll(arrayOfCards)
  console.log();
  img.style = "";
  loadingButton.textContent = "Loaded";
}
function pushAll(arrayOfCards) {
  console.log("Pushing elements");
  
  cardsDiv.innerHTML = "";
  arrayOfCards.forEach(element => {
    var card = document.createElement("div");
    var title = document.createElement("p");
    var price = document.createElement("p");

    title.innerHTML = element.maker + " " + element.model;
    price.innerHTML = element.price;

    title.classList.add("title");
    price.classList.add("price");

    card.appendChild(title);
    card.appendChild(price);

    card.classList.add("card");

    cards.appendChild(card);
  });
}
function onSuccess(response) {
  console.log(response.status);
  
  response.text().then(onStreamProceed);
}
function onFail(error) {
  console.log("Error " + error);
  loadingButton.textContent = "Some error has occur";
}
function compareName(a, b) {
  if (a.maker < b.maker)
    return -1;
  if (a.maker > b.maker)
    return 1;
  return 0;
}

function comparePrice(a, b) {
  if (a.price < b.price)
    return -1;
  if (a.price > b.price)
    return 1;
  return 0;
}

loadingButton.addEventListener("click", function(e) {
  loadingButton.textContent = "Loading...";
  img.style = "display: block"
  fetch(url).then(onSuccess, onFail)
});

sortByMaker.addEventListener("click", function(e) {
  arrayOfCards.sort(compareName);
  console.log(arrayOfCards);
  
  pushAll(arrayOfCards);
})
sortByPrice.addEventListener("click", function(e) {
  arrayOfCards.sort(comparePrice);
  console.log(arrayOfCards);
  
  pushAll(arrayOfCards);
})