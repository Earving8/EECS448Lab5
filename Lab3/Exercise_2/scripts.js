let currentImage = 1;
let imageObject = document.getElementById("slides");

function next(){
    if(currentImage == 5){
        currentImage = 1
    }else{
        currentImage++;
    }
    slides.src = "Assets/" + currentImage + ".jpg";
}

function prev(){
    if(currentImage == 1){
        currentImage = 5
    }else{
        currentImage--;
    }
    slides.src = "Assets/" + currentImage + ".jpg";
}