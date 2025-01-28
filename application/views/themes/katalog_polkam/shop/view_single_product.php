<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread"
    style="background-image: url('<?php echo get_theme_uri('images/page.png'); ?>');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h3 style="color: orange; text-align: center;">Detail</h3>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>" alt="Gambar Produk" class="img-fluid rounded">
            </div>

            <!-- Deskripsi Produk -->
            <div class="col-md-6">
                <h1 class="mb-3"><?= $product->name ?></h1>
                <p class="text-muted">Kategori: <?= $product->category_name ?></p>

                <!-- Informasi Stok -->
                <p class="font-weight-bold" hidden>
                    Stok:
                    <?php if ($product->stock <= 0): ?>
                        <span class="text-danger" hidden>Habis</span>
                    <?php endif ?>
                    <?php if ($product->stock > 0): ?>
                        <span class="text-success" hidden>Tersedia (<?php echo $product->stock; ?> unit)</span>
                    <?php endif ?>

                </p>

                <!-- Informasi Diskon -->
                <?php if (false) : ?>
                    <p>
                        <span class="badge badge-danger">Diskon <?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
                        <span class="text-muted ml-2">
                            Harga sebelumnya: <del>Rp <?php echo format_rupiah($product->price); ?></del>
                        </span>
                    </p>
                <?php endif ?>

                <!-- Deskripsi -->
                <p><?= $product->description ?></p>

                <!-- Harga -->
                <?php if (false) : ?>
                    <h4 class="text-primary mb-3">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></h4>
                <?php else : ?>
                    <h4 class="text-primary mb-3" hidden>Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></h4>
                <?php endif ?>

                <!-- Tombol -->
                <div hidden>
                    <button class="add-to-chart add-cart btn btn-success btn-lg mr-2" data-sku="<?php echo $product->sku; ?>" data-name="<?php echo $product->name; ?>"
                        data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>"
                        data-id="<?php echo $product->id; ?>">
                        <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>




<script>
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);
            $('.cart-btn').attr('data-qty', quantity + 1);

            // Increment

        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
                $('.cart-btn').attr('data-qty', quantity - 1);
            }
        });

    });
</script>