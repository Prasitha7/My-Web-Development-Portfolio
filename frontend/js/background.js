const canvas = document.querySelector(".canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const context = canvas.getContext("2d")
const frameCount = 30

const currentFrame = (index) =>'assets/sequences/pj logo sequ 15fps/${(index+1).toString()}.png';
const images = [];

for(let i = 0; i<frameCount; i++){
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img)
}

function render(){
    context.clearRect()
}