let time = 5000,
    currentImageIndex = 0,
    images = document
                .querySelectorAll("#slider img")
    max = images.length;

function nextImage() {

    images[currentImageIndex]
        .classList.remove("selected")

    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0

    images[currentImageIndex]
        .classList.add("selected")
}

function start() {
    setInterval(() => {
        // troca de image
        nextImage()
    }, time)
}

window.addEventListener("load", start)
/*function slide1(){
    document.getElementById('id').src="img/celular.jpg";
    setTimeout("slide2()", 1000)
    }
    
    
    function slide2(){
    document.getElementById('id').src="img/celulares2.jpg";
    setTimeout("slide3()", 1000)
    }
    
    function slide3(){
    document.getElementById('id').src="img/celulares3.jpg";
    setTimeout("slide1()", 1000)
    }*/