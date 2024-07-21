<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="text-center">
    <h3>MONAMI BAKERY</h3>
    <p>Berdiri sejak 1976, Monami Bakery adalah toko roti dan kue yg mengutamakan produk-produk tradisional khas Indonesia seperti lemper, kelepon, kue lumpur dan berbagai jenis kue maupun jajanan pasar lainnya.</p>
</div>
<div class="row mt-5 g-2" id="kategori-produk">
    <h3 class="text-center">KATEGORI PRODUK</h3>
    <?php foreach ($categories as $key => $category) : ?>
        <div class="col-md-3 mb-2">
            <div class="card text-bg-dark">
                <img src="img/lemper.jpg" class="card-img" alt="...">
                <div class="card-img-overlay" style="display: flex; align-items: center;justify-content: center;width: 100%;background: rgba(57, 57, 57, 0.5);">
                    <h5 class="card-title" style="font-weight: 700;"><?= strtoupper($category['name']); ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <h5 class="text-center">Lihat Semua Kategori -></h5>
</div>
<!-- </div> -->
<?= $this->endSection(); ?>
<?= $this->section('bottom-content'); ?>
<div class="row g-0 align-items-center" style="background-color: #ccccb3;">
    <div class="col-6">
        <img src="img/lemper.jpg" class="card-img" width="100%">
    </div>
    <div class="col">
        <div class="mx-3">
            <h1><?= ucwords($newProduct['name']); ?></h1>
            <p>
                Lemper Monami Bakery dengan tekstur yang legit, rasa gurih daging ayam, dan dibungkus menggunakan daun pisang.
                Sajian ini memiliki cita rasa yang begitu enak, sedap dan istimewa....!
            </p>
            <a href="" class="btn" style="background-color:#ffb3b3;">ORDER NOW!!</a>
        </div>
    </div>
</div>
<div class="row g-0 align-items-center" style="background-color: #ccccb3;">
    <div class="col">
        <div class="mx-3">
            <h1>Paket Tampah Sedap Malam</h1>
            <p>
                Total kue tampah ini ada 131 kue loh! Banyak banget kan?
                Ada bika ambon, klepon, kue ku merah, kue lumpur, kue mangkok, lapis merah, lemper, onde-onde, risoles ayam, dan semar mendem.
            </p>
            <a href="" class="btn" style="background-color:#ffb3b3;">ORDER NOW!!</a>
        </div>
    </div>
    <div class="col-6">
        <img src="img/pastel.jpg" class="card-img" width="100%">
    </div>

</div>
<?= $this->endSection(); ?>