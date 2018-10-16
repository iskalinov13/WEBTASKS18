let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

for(let country of countries){
    let countryItem = document.createElement("option");
    countryItem.textContent = country;
    document.querySelector("#countries").appendChild(countryItem);
}
document.querySelector("#cities").disabled = true;

function changeCountry(){
    let options = document.querySelector("#cities").querySelectorAll("option");
    for (let i = 1; i < options.length; i++) {
        options[i].remove();
    }
    var selectedCountry = event.currentTarget.value;
    document.querySelector("#cities").disabled = false;
    for( let city of cities_by_country[selectedCountry]){
        let cityItem = document.createElement("option");
        cityItem.textContent = city;
        document.querySelector("#cities").appendChild(cityItem);
    }  
}

document.querySelector("select").addEventListener("change",changeCountry);
