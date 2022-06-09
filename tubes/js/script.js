// Ambil elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // Buat object Ajax
  var xhr = new XMLHttpRequest();

  // Cek kesiapan Ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi ajax
  xhr.open("GET", "ajax/layanan.php?keyword=" + keyword.value, true);
  xhr.send();
});
