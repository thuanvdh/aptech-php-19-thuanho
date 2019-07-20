// function batden(){
//     document.getElementById('anh').src='batden.jpg';
// }

// function tatden(){
//     document.getElementById('anh').src='tatden.gif';
// }
var imageElement = document.getElementById('anh');

function doiAnh(){
    if (imageElement.src.includes('pic_bulboff')) {
        imageElement.src = './pic_bulbon.gif';
    }
    else {
        imageElement.src = './pic_bulboff.gif';
    }
}