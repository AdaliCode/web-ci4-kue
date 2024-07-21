<div class="sticky-top">
    <nav class="navbar p-4" style="background-color: #ff6666;">
        <div class="container">
            <a class="navbar-brand bold" href="<?= base_url('/'); ?>">ARIIQ BAKERY</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Cari</button>
            </form>
        </div>
    </nav>
    <ul class="nav justify-content-center bg-light p-2">
        <?php foreach ($categories as $key => $category) : ?>
            <li class="nav-item">
                <!-- <a class="nav-link active" aria-current="page" href="#">JAJANAN PASAR</a> -->
                <a class="nav-link mx-3 text-dark" href="#"><?= strtoupper($category['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>