//smootscrool

var posY=0;
var jarak=10;

function smootScroll(id) {
  var target = document.getElementById(id).offsetTop; //jarak antara atas dan div

  var scrollAnimate = setTimeout(function(){
                                  smootScroll(id)
                                }, 5) //fungsi, waktu

posY = posY + jarak;

//berhenti pada bagian tertentu
if (posY >= target) {
  clearTimeout(scrollAnimate);
  posY=0;
}else {
  window.scroll(0,posY) //x dan y

}
return false;
}

// galeri


var target_gambar = document.getElementById('target_gambar');

function ganti_gambar(gambar) {
  target_gambar.src = gambar.getAttribute('src');
}
