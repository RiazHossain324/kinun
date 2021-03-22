@extends('layout.layout')
@section('content')

<div id="wowslider-container1">
  <div class="ws_images">
    <ul>
<li><img src="assets/images/slider-img/slider1.jpg" alt="" title="Ecommerce Organic store" /> 
<a href="shop.html" class="read-more2">Read More</a>
</li>
<li>

<img src="assets/images/slider-img/slider2.jpg" alt="" title="Organic store" /><a href="shop.html" class="read-more2">Read More</a></li>
<li>

<img src="assets/images/slider-img/slider3.jpg" alt="" title="Ecommerce Store Lorem Ipsum is simply dummy text" /><a href="shop.html" class="read-more2">Read More</a></li>
<li>

<img src="assets/images/slider-img/slider4.jpg" alt="" title="Organic store" /><a href="shop.html" class="read-more2">Read More</a></li> 
</ul>

  </div>
  <div class="ws_bullets">
    <div> <a href="#" title="slider1"><span><img src="assets/images/slider-img/thum/slider1.jpg" alt=""/></span></a> <a href="#" title="slider2"><span><img src="assets/images/slider-img/thum/slider2.jpg" alt=""/></span></a> <a href="#" title="slider3"><span><img src="assets/images/slider-img/thum/slider3.jpg" alt=""/></span></a> <a href="#" title="slider4"><span><img src="assets/images/slider-img/thum/slider4.jpg" alt=""/></span></a> </div>
  </div>
</div>
<div class="clearfix"></div>
<!-- /hero slider -->
<!-- Page Content -->
<div class="products-section">
  <div class="container">
    <h2 class="wow fadeInDown">Latest Products</h2>
    <div class="owl-carousel latest-products owl-theme wow fadeIn">
      <div class="item">
        <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a>
          <h5 class="product-type">Green Apple</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$10.00 <del>$35.00</del> </h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-1"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
        <div class="product">
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
              <div class="carousel-item"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> </a> <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a> </div>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$13.00 <del>$5.00</del> </h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-2"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a>
          <h5 class="product-type">Orange</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$18.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-4"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-5.jpg" alt=""></a>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-5"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a>
          <h5 class="product-type">Orange</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="featured-products">
  <div class="container">
    <h2 class="wow fadeInDown">Featured Products</h2>
    <div class="owl-carousel latest-products owl-theme wow fadeIn">
      <div class="item">
        <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
        <div class="product">
          <div id="carousel-2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
              <div class="carousel-item"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> </a> <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a> </div>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$16.00 <del>$20.00</del> </h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-6"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-2.jpg" alt=""></a>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$18.00 <del>$35.00</del> </h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-1"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a>
          <h5 class="product-type">Orange</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-7"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-8"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product">
          <div  class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
              <div class="carousel-item"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a> </div>
            </div>
          </div>
          <h5 class="product-type">Spices</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-9"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a>
          <h5 class="product-type">Orange</h5>
          <h3 class="product-name">Ingredients</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-7"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Three-images-->
<div class="three-img">
  <div class="container">
    <h2 class="wow fadeInDown">Featured Category</h2>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 text-center wow fadeIn mt-3 mb-3">
        <ul class="ch-grid">
          <li>
            <div class="ch-item" style="background:url(assets/images/product/left-img.jpg) no-repeat center top #fec865; background-size:100% 100%">
              <div class="ch-info">
                <div class="img-text">
                  <h3>Fresh Oregano</h3>
                  <p>Oregano</p>
                  <p>Apricots</p>
                  <p>Bananas</p>
                  <p>Cantaloupe</p>
                  <a href="#">view more</a> </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4  col-md-6   text-center wow fadeIn mt-3 mb-3">
        <ul class="ch-grid">
          <li>
            <div class="ch-item" style="background:url(assets/images/product/center-img.jpg) no-repeat center top; background-size:100% 100%">
              <div class="ch-info">
                <div class="img-text">
                  <h3>Fresh Apple</h3>
                  <p>Apple</p>
                  <p>Wheatgrass</p>
                  <p>Arrowroot</p>
                  <p>Grapefruit</p>
                  <a href="#">view more</a> </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 text-center wow fadeIn mt-3 mb-3">
        <div class="position-relative">
          <ul class="ch-grid">
            <li>
              <div class="ch-item" style="background:url(assets/images/product/right-img.jpg) no-repeat center top; background-size:100% 100%">
                <div class="ch-info">
                  <div class="img-text">
                    <h3>Mango Shake</h3>
                    <p>Pear</p>
                    <p>Apricots</p>
                    <p>Bananas</p>
                    <p>Cantaloupe</p>
                    <a href="#">view more</a> </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Three-images-->
<div id="bestsellers">
  <div class="container">
    <h2 class="wow fadeInDown">Bestsellers</h2>
    <div class="owl-carousel latest-products owl-theme wow fadeIn">
      <div class="item">
        <div class="sale-flag-side"> <span class="sale-text">Sale</span> </div>
        <div class="product">
          <div id="carousel3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <a href="single_product.html" class="product-img"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
              <div class="carousel-item"> <a href="single_product.html" class="product-img"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
            </div>
            <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> </a> <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a> </div>
          <a class="fa fa-star-half-full checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">Fruits</h5>
          <h3 class="product-name">Strawberry</h3>
          <h3 class="product-price">$14.00 <del>$35.00</del> </h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-10"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/fruits/img-2.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star "></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">DRIED FRUITS</h5>
          <h3 class="product-name">Fresh Walnut</h3>
          <h3 class="product-price">$14.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-11"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/fruits/img-3.jpg" alt=""></a> <a class="fa fa-star fa-star-half-full checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">Fruits</h5>
          <h3 class="product-name">Black Cherries</h3>
          <h3 class="product-price">$13.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-12"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/fruits/img-4.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">Juice</h5>
          <h3 class="product-name">Strawberry Juices</h3>
          <h3 class="product-price">$12.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-13"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/fruits/img-2.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star "></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">DRIED FRUITS</h5>
          <h3 class="product-name">Fresh Walnut</h3>
          <h3 class="product-price">$11.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-14"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/fruits/img-3.jpg" alt=""></a> <a class="fa fa-star fa-star-half-full checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
          <h5 class="product-type">Fruits</h5>
          <h3 class="product-name">Black Cherries</h3>
          <h3 class="product-price">$13.00</h3>
          <div class="product-select">
            <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-12"><i class="fa fa-eye" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="deal-of-the-week">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center mb-1">
        <div  class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <figure class="imghvr-push-right"><a href="shop.html"><img src="assets/images/page-img/sale.jpg" class="img-fluid" alt="" title=""></a>
                <figcaption>
                  <h3>Sale off Up to 30% </h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the...</p>
                </figcaption>
              </figure>
            </div>
            <div class="carousel-item">
              <figure class="imghvr-push-right"><a href="shop.html"><img src="assets/images/page-img/sale3.jpg" class="img-fluid" alt="" title=""></a>
                <figcaption>
                  <h3>Bestsellers</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the...</p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 text-center mb-1">
        <div class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active"> <a href="#" class="product-img"><img src="assets/images/page-img/sale2.jpg" class="img-fluid" alt="" title=""></a> </div>
            <div class="carousel-item"> <a href="#" class="product-img"><img src="assets/images/page-img/sale4.jpg" class="img-fluid" alt="" title=""></a> </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <h2 class="text-center wow fadeInDown">Deal Of The Week</h2>
      <div class="clearfix"></div>
    </div>
    <div>
      <div class="owl-carousel latest-products owl-theme wow fadeIn">
        <div class="item">
          <div class="product">
            <div id="carousel-4" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> </div>
                <div class="carousel-item"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a> </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> </a> <a class="carousel-control-next" href="#carousel-4" role="button" data-slide="next"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> </a> </div>
            <a class="fa fa fa-star-half-full checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Spices</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$14.00</h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-15"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="product"> <a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-2.jpg" alt=""></a> <a class="fa fa fa-star-half-full checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Spices</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$11.00</h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-16"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Orange</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$12.00</h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-17"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Spices</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$15.00</h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-18"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Spices</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$10.00 </h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-19"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a> <a class="fa fa-star checked"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a> <a class="fa fa-star"></a>
            <h5 class="product-type">Spices</h5>
            <h3 class="product-name">Ingredients</h3>
            <h3 class="product-price">$15.00</h3>
            <div class="product-select">
              <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-18"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
              <button data-toggle="tooltip" data-placement="top" title="Add To Cart"  onClick="window.location.href='cart.html'" class="add-to-cart round-icon-btn"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div id="partner">
  <div class="container">
    <div class="owl-carousel partner-logo owl-theme">
      <div class="item"> <img src="assets/images/logo-1.png" alt="" title=""></div>
      <div class="item"><img src="assets/images/logo-2.png" alt="" title=""></div>
      <div class="item"> <img src="assets/images/logo-3.png" alt="" title=""></div>
      <div class="item"> <img src="assets/images/logo-1.png" alt="" title=""></div>
      <div class="item"><img src="assets/images/logo-2.png" alt="" title=""></div>
      <div class="item"> <img src="assets/images/logo-3.png" alt="" title=""></div>
    </div>
  </div>
</div>
@endsection
