<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread"
    style="background-image: url('<?php echo get_theme_uri('images/page.png'); ?>');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h3 style="color: #ff7f00; text-align: center;">Halaman Katalog Jasa</h3>
            </div>
        </div>
    </div>
</div>
<!-- <section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item"
            style="background-image: url(<?php echo get_theme_uri('images/slide1.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                      
                        <h2 class="subheading mb-4">SLIDE 1</h2>
                        <p><a href="#products" class="btn btn-warning">PRODUK</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item"
            style="background-image: url(<?php echo get_theme_uri('images/slide2.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        
                        <h2 class="subheading mb-4">SLIDE 2</h2>
                        <p><a href="#products" class="btn btn-warning">JASA</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->



<!-- <section class="ftco-section" id="products">
    <h2 style="color: orange; text-align: center;">-> Kelebihan Layanan Kami <-</h2>
    <br>
    <div class="container">
        <div class="row no-gutters ftco-services">
            
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="bi bi-shield-check"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Keamanan</h3>
                        <span>Aman & Terpercaya</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas</h3>
                        <span>Kualitas dari Bahan Terbaik</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">HelpDesk</h3>
                        <span>Bantuan Selalu Online</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pengantaran</h3>
                        <span>Packingan Rapi Dan Cepat</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
               <h3 style="color: #ff7f00; text-align: center;">KATALOG JASA POLITEKNIK KAMPAR</h3>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (count($products) > 0) : ?>
            <?php foreach ($products as $product) : ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"
                        class="img-prod">
                        <img class="img-fluid"
                            src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>"
                            alt="<?php echo $product->name; ?>">
                        <?php if ($product->current_discount > 0) : ?>
                        <span
                            class="status"><?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
                        <?php endif; ?>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a
                                href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"><?php echo $product->name; ?></a>
                        </h3>
                        Tersedia : <?php echo ($product->stock > 0) ? $product->stock .' '. $product->product_unit: '<span class="text-danger"><em>Stok habis</em></span>'; ?> 
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>

        </div>
    </div>
</section>