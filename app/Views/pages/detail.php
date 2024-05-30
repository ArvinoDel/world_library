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
        <li><strong>Deskripsi:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula erat ac ex venenatis, nec commodo elit sagittis.</li>
    </ul>
    <div class="button-container">
        <a href="#" class="animated-button">Pinjam Buku</a>
    </div>
</div>

<?= $this->endsection(); ?>