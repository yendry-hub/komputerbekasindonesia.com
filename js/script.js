// Ambil elemen pop-up dan tombol tutup
const popup = document.getElementById("popup");
const closePopup = document.getElementById("closePopup");

// Tampilkan pop-up saat pengunjung meninggalkan halaman
window.addEventListener("beforeunload", function (e) {
  // Hentikan peristiwa standar penutupan
  e.preventDefault();
  // Tampilkan pop-up
  popup.style.display = "block";
});

// Tangani tombol tutup
closePopup.addEventListener("click", function () {
  // Sembunyikan pop-up
  popup.style.display = "none";
});