// Ambil elemen tanda panah ke atas
const scrollToTopButton = document.getElementById("scroll-to-top");

// Tambahkan event listener untuk menggulir ke atas saat diklik
scrollToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Efek scroll halus
  });
});

// Tampilkan/maskkan tanda panah ke atas berdasarkan posisi scroll
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    // Ubah 100 sesuai dengan posisi scroll yang Anda inginkan
    scrollToTopButton.classList.add("active");
  } else {
    scrollToTopButton.classList.remove("active");
  }
});

// Fungsi untuk animasi mengetik
function typeWriter(text, i, fnCallback) {
  // Periksa jika i kurang dari panjang teks
  if (i < text.length) {
    // Tambahkan karakter satu per satu
    document.getElementById("typewriter-text").innerHTML =
      text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
    setTimeout(function () {
      typeWriter(text, i + 1, fnCallback);
    }, 100); // Atur kecepatan mengetik di sini (dalam milidetik)
  }
  // Periksa jika animasi telah selesai dan panggil kembali jika ada fungsi yang diberikan
  else if (typeof fnCallback == "function") {
    setTimeout(fnCallback, 700); // Tunggu sejenak setelah animasi selesai
  }
}

// Fungsi untuk efek mengetik dan menghapus
function typeAndDelete(text, i, isTyping, fnCallback) {
  const speed = 300; // Kecepatan animasi (dalam milidetik)
  const delay = isTyping ? speed : 500; // Jeda setelah mengetik atau menghapus

  // Periksa apakah sedang mengetik atau menghapus
  if (isTyping) {
    // Menambahkan huruf satu per satu
    document.getElementById("typewriter-text").innerHTML =
      text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
  } else {
    // Menghapus huruf satu per satu
    document.getElementById("typewriter-text").innerHTML =
      text.substring(0, i - 1) + '<span aria-hidden="true"></span>';
  }

  // Periksa jika animasi telah selesai dan panggil kembali jika ada fungsi yang diberikan
  if (i === text.length && isTyping) {
    setTimeout(function () {
      typeAndDelete(text, i, false, fnCallback);
    }, delay);
  } else if (i === 0 && !isTyping) {
    setTimeout(function () {
      typeAndDelete(text, i, true, fnCallback);
    }, delay);
  } else {
    setTimeout(function () {
      typeAndDelete(text, isTyping ? i + 1 : i - 1, isTyping, fnCallback);
    }, speed);
  }
}

// Fungsi utama untuk memulai animasi
function startTypingDeletingAnimation() {
  const text = "A Dreamer."; // Teks yang akan ditampilkan

  // Panggil fungsi animasi mengetik dan menghapus
  typeAndDelete(text, 0, true, function () {
    // Fungsi ini akan dipanggil setelah satu putaran mengetik dan menghapus selesai
    // Anda dapat menambahkan tindakan apa pun yang diperlukan di sini
    startTypingDeletingAnimation(); // Mulai putaran berikutnya
  });
}

// Jalankan animasi saat dokumen selesai dimuat
window.addEventListener("load", startTypingDeletingAnimation);
