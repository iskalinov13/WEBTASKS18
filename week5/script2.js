function onClick(event){
  const image = event.currentTarget;
 bigImage.src = image.src;
}
const bigImage = document.querySelector('#bigImage img');
const imageList = document.querySelectorAll('#carousel img');
for(const img of imageList){
  img.addEventListener('click',onClick);
}



