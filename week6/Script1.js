let buttons = document.querySelectorAll('#tasks div button');

for (let button of buttons){
	button.addEventListener("click",clickFn);
}
function clickFn(){
    let item = event.currentTarget;
    item.parentNode.dataset.status = "done"
    
		
}

