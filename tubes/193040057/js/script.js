const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.con');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika menuliskan keyword
keyword.addEventListener('keyup', function () {

  fetch('../ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));

});