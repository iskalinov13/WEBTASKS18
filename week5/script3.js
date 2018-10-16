function add(){
    var faculty = document.getElementById('faculty');
    let name = document.getElementById('name').value;
    let surname = document.getElementById('surname').value;
    var table = document.getElementById("students");
    var faculty = document.getElementById("faculty").value
    if(document.getElementById('surname').classList.contains("error")){
        document.getElementById('surname').classList.remove("error");
    }
    if(document.getElementById('name').classList.contains("error")){
        document.getElementById('name').classList.remove("error");
    }

    if(surname==""){
        document.getElementById('surname').classList.add("error");
    }
    if(name==""){
        document.getElementById('name').classList.add("error");
    }
    if(name!="" && surname!=""){
        var row = table.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = name;
        cell2.innerHTML = surname;
        cell3.innerHTML = "<strong>"+faculty+"</strong>";
    }    
}


const buttonAdd = document.getElementById('addStudent');
buttonAdd.addEventListener('click',add);