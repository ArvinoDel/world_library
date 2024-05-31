<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="book-detail">
        <img src="<?= base_url('img/buku1.jpg') ?>" alt="Cover Buku" class="book-cover">
        <div class="book-title">Judul Buku</div>
        <ul class="book-info">
            <li><strong>Penulis:</strong> Nama Penulis</li>
            <li><strong>Penerbit:</strong> Nama Penerbit</li>
            <li><strong>Tanggal Terbit:</strong> Tanggal Terbit</li>
            <li><strong>Kategori:</strong> Kategori</li>
            <li><strong>Deskripsi:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                vehicula erat ac ex venenatis, nec commodo elit sagittis.</li>
        </ul>
        <div class="button-container">
                <a href="#" class="animated-button" id="openModalBtn">Pinjam Buku</a>
        </div>
        <div id="myModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1 id="successMessage">Peminjaman Berhasil</h1>
                <h2 id="bookTitle">Judul Buku: <span></span></h2>
                <p>Tanggal Peminjaman: <span id="borrowDate"></span></p>
                <p>Waktu Tersisa: <span id="countdown"></span></p>
            </div>
        </div>
    </div>

    <script>
         document.addEventListener('DOMContentLoaded', (event) => {
    const modal = document.getElementById("myModal");
    const openModalBtn = document.getElementById("openModalBtn");
    const span = document.getElementsByClassName("close")[0];
    const bookTitle = "Contoh Judul Buku";
    const today = new Date();
    const borrowDateElem = document.getElementById("borrowDate");
    const countdownElem = document.getElementById("countdown");

    let countdownInterval;

    // Set judul buku
    document.getElementById("bookTitle").querySelector("span").textContent = bookTitle;

    // Set tanggal peminjaman
    borrowDateElem.textContent = today.toLocaleDateString();

    // Fungsi untuk membuka modal
    openModalBtn.onclick = function() {
        modal.style.display = "flex";
        const targetDate = getTargetDate();
        startCountdown(targetDate);
    }

    // Fungsi untuk menutup modal
    span.onclick = function() {
        modal.style.display = "none";
        clearInterval(countdownInterval);
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            clearInterval(countdownInterval);
        }
    }

    // Fungsi untuk mendapatkan target date dari localStorage atau membuat yang baru
    function getTargetDate() {
        let targetDate = localStorage.getItem('targetDate');
        if (!targetDate) {
            targetDate = new Date();
            targetDate.setDate(targetDate.getDate() + 5);
            localStorage.setItem('targetDate', targetDate);
        } else {
            targetDate = new Date(targetDate);
        }
        return targetDate;
    }

    // Fungsi untuk menghitung countdown
    function startCountdown(targetDate) {
        countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            const daysLeft = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hoursLeft = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutesLeft = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const secondsLeft = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElem.textContent = `${daysLeft}d ${hoursLeft}h ${minutesLeft}m ${secondsLeft}s`;

            if (distance < 0) {
                clearInterval(countdownInterval);
                countdownElem.textContent = "Waktu Habis";
            }
        }, 1000);
    }
});
    </script>
<?= $this->endsection(); ?>