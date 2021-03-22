@extends('layout.layout')
@section('content')
<div class="container container-fluid">
  <nav aria-label="breadcrumb" class="bread-boder">
    <div class="row">
      <div class="col-lg-8 col-md-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="breadcrumb-item">Shop</li>
        </ol>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="custom-select2">
              <select>
                <option>Default Sorting</option>
                <option value="A-Z">A to Z</option>
                <option value="Z-A">Z to A</option>
                <option value="High to low price">High to low price</option>
                <option value="Low to high price">Low to high</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="custom-select2">
              <select>
                <option value="A-Z">Show 10</option>
                <option value="Z-A">Show 20</option>
                <option value="High to low price">Show 30</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </nav>
  <div class="row">
    <div class="col-lg-2 col-md-12">
      <div class="inner-left-menu">
        <h3>Departments</h3>
        <div class="list-css">
          <ul>
            <li><a href="#">Fresh Fruits</a></li>
            <li><a href="#">Vegetables</a></li>
            <li><a href="#">F ruit & Nut Gifts</a></li>
            <li><a href="#">Fresh Berries</a></li>
            <li><a href="#">Ocean Foods</a></li>
            <li><a href="#">Butter & Eggs</a></li>
            <li><a href="#">Fastfood</a></li>
            <li><a href="#"> Fresh Onion</a></li>
            <li><a href="#"> Papaya & Crisps</a></li>
            <li><a href="#"> Oatmeal </a></li>
            <li><a href="#"> Fresh Bananas</a></li>
          </ul>
        </div>
        <h3>Filter By Price</h3>
        <div class="price-range-block">
          <div id="slider-range" class="price-filter-range"></div>
          <div class="row">
            <div class="col-9 p-0">
              <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
              <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
            </div>
            <div class="col-3 p-0">
              <button type="button" class="btn btn-filter">Filter</button>
            </div>
          </div>
          <br>
        </div>
        <h3>Popular Picks</h3>
        <div class="list-css">
          <ul>
            <li>
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked-1">
                <label class="custom-control-label" for="defaultUnchecked-1">Top Sales</label>
              </div>
            </li>
            <li>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked-2">
                <label class="custom-control-label" for="defaultUnchecked-2">New Products</label>
              </div>
            </li>
            <li>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked-3">
                <label class="custom-control-label" for="defaultUnchecked-3">Featured Products</label>
              </div>
            </li>
            <li>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked-4">
                <label class="custom-control-label" for="defaultUnchecked-4">Bestsellers</label>
              </div>
            </li>
          </ul>
        </div>
        <h3>Product Tags</h3>
        <div class="tag_bottom"><a class="tag-btn" href="#">organic</a><a class="tag-btn" href="shop_grid%2blist_3col.html">vegatable</a><a class="tag-btn" href="#">fruits</a><a class="tag-btn" href="#">fresh meat</a><a class="tag-btn" href="#">fastfood</a><a class="tag-btn" href="#">natural</a></div>
      </div>
    </div>
    <div class="col-lg-10 col-md-12">
      <div class="row">
        <div class="col-12">
          <div class="right-heading">
            <div class="row">
              <div class="col-md-12">
                <h3>Shop Grid</h3>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-1.jpg" alt=""></a>
                <h5 class="product-type">Fruits</h5>
                <h3 class="product-name">Green Apple</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-1"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-2.jpg" alt=""></a>
                <h5 class="product-type">KIWIS</h5>
                <h3 class="product-name">Fruits</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-2"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-3.jpg" alt=""></a>
                <h5 class="product-type">Fruits</h5>
                <h3 class="product-name">Oranges</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-4.jpg" alt=""></a>
                <h5 class="product-type">Fruits</h5>
                <h3 class="product-name">Blackberry</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-4"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-5.jpg" alt=""></a>
                <h5 class="product-type">Fruits</h5>
                <h3 class="product-name">Passion Fruits</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-5"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-6.jpg" alt=""></a>
                <h5 class="product-type">Vegetables</h5>
                <h3 class="product-name">Cucumber</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-6"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-7.jpg" alt=""></a>
                <h5 class="product-type">Vegetables</h5>
                <h3 class="product-name">Mushrooms</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-7"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
              <div class="product"><a class="product-img" href="single_product.html"><img src="assets/images/product-img/product-img-8.jpg" alt=""></a>
                <h5 class="product-type">Fruits</h5>
                <h3 class="product-name">Peaches</h3>
                <div class="row m-0 list-n">
                  <div class="col-lg-12 p-0">
                    <h3 class="product-price">$14.00</h3>
                  </div>
                  <div class="col-lg-12 p-0">
                    <div class="product-price">
                      <form class="form-inline">
                        <div class="stepper-widget">
                          <button type="button" class="js-qty-down">-</button>
                          <input type="text" class="js-qty-input" value="1">
                          <button type="button" class="js-qty-up">+</button>
                          <button onClick="window.location.href='cart.html'" class="add2"><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="product-select">
                  <button data-toggle="tooltip" data-placement="top" title="Quick view" class="add-to-compare round-icon-btn" data-fancybox="gallery" data-src="#popup-8"><i class="fa fa-eye" aria-hidden="true"></i></button>
                  <button data-toggle="tooltip" data-placement="top" title="Wishlist" class="add-to-wishlist round-icon-btn" onClick="window.location.href='wishlist.html'"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col text-center">
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-template d-flex justify-content-center float-none">
                  <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                  <li class="page-item"><a href="#" class="page-link active">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                </ul>
              </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
@endsection