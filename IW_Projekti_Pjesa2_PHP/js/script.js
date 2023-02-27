var varguImazheve = [
    'img/ip1.jpg',
    'img/ip2.jpg',
    'img/ip3.jpg',
    'img/ip4.jpg',
    'img/ip5.jpg',
    'img/ip6.jpg',
    'img/ip7.jpg',
    'img/ip8.jpg',
    'img/ip9.jpg',
 ];

var index = 0;
const koha = 1500;

function krijoSlider() {
    document.getElementById('imazhi').src = varguImazheve[index];
    index++;

    if(index == varguImazheve.length){
        index = 0;
    }

    setTimeout("krijoSlider()", koha);
}

krijoSlider(); 

function myFunction() {
    alert('added to cart')
}


