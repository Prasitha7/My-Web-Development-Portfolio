const canvas = document.querySelector(".canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const context = canvas.getContext("2d");
const frameCount = 30;

const currentFrame = (index) =>`assets/sequences/pj logo sequ 15fps/${(index+1).toString()}.png`;
const images = [];
let pj = {frame : 0}

for(let i = 0; i<frameCount; i++){
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img)
}

images[0].onload = render;

function render(){
    context.clearRect(0,0,canvas.width, canvas.height);
    context.drawImage(images[pj.frame], 0, 0);
}