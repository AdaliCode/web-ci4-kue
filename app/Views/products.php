<?= $this->extend('layout/template'); ?>
<?= $this->section('top-content'); ?>
<div class="py-4 text-light" style="background-image:url('../img/<?= strtolower($category['id']); ?>.jpg');background-repeat: no-repeat;background-size: cover;text-shadow: 0.07em 0.07em 0.05em black;">
    <div class="container">
        <h3 style="font-weight: 600;"><?= strtoupper($category['name']); ?></h3>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<div class="row g-2 my-3">
    <?php foreach (explode(',', $category['all_products']) as $key => $product) : ?>
        <div class="col-md-3 mb-2">
            <div class="card text-center">
                <img src="../img/<?= strtolower($category['id']); ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= strtoupper($product); ?></h5>
                    <p class="card-text">Rp 9.000</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script src="../products.js"></script>
<?= $this->endSection(); ?>