<?= $this->extend('layout/template'); ?>
<?= $this->section('container'); ?>
<div class="row mt-3">
    <div class="col-7 d-flex justify-content-center">
        <img src="<?= base_url('img/kue-basah.jpg'); ?>" alt="" width="50%" height="50%">
    </div>
    <div class="col">
        <h3><?= strtoupper($product['name']); ?></h3>
        <h4>Rp 15.000</h4>
        <h5>Stok Tersedia <i class="bi bi-check-lg"></i></h5>
        <div class="row my-3">
            <div class="col">Jumlah</div>
            <div class="col"><input type="number" name="" id="" value="1"></div>
        </div>
        <div class="row">
            <a href="" class="btn border border-dark" style="background-color: pink;">TAMBAH KE KERANJANG</a>
        </div>
        <div class="row mt-2 mb-5">
            <a href="" class="btn border border-dark" style="background-color: pink;">
                <strong>BELI SEKARANG</strong><br>PESAN SEKARANG
            </a>
        </div>
        <h4>Detail Produk</h4>
        <p>
            1. Jumlah pembelian sampai dengan 90 pcs ( gunakan kurir GO-SEND )
        </p>
        <p>
            2. Jumlah pembelian sampai dengan 210 pcs ( gunakan kurir Monami )
        </p>
        <p>
            3. Jumlah pembelian besar dan diatas 259 pcs ( gunakan kurir GO-BOX atau Mobil BOX Monami )
        </p>
    </div>
</div>
<h4>Produk Lainnya</h4>
<div class="row g-2 my-3">
    <?php foreach (model('ProductModel')->where('slug !=', $product['slug'])->paginate(4) as $key => $otherProduct) : ?>
        <div class="col-md-3 mb-2">
            <a href="<?= base_url('/product/' . $otherProduct['slug']); ?>" class="text-decoration-none">
                <div class="card text-center">
                    <img src="<?= base_url('/img/kue-basah.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= strtoupper($otherProduct['name']); ?></h5>
                        <p class="card-text">Rp 9.000</p>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>