<?= $this->extend('layout/template'); ?>
<?= $this->section('top-content'); ?>
<div class="bg-secondary py-4 text-light">
    <div class="container">
        <h3 style="font-weight: 600;"><?= $category['name']; ?></h3>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<div class="row g-2 my-3">
    <?php foreach (explode(',', $category['all_products']) as $key => $product) : ?>
        <div class="col-md-3 mb-2">
            <div class="card border border-dark text-center">
                <img src="../img/<?= strtolower($category['id']); ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= strtoupper($product); ?></h5>
                    <p class="card-text">Rp 9.000</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="d-flex justify-content-md-center">
    <a href="" class="rounded btn btn-secondary">Muat Lebih Banyak</a>
</div>
<script src="../products.js"></script>
<?= $this->endSection(); ?>