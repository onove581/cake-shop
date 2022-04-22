@extends('layout_home')
@section('noidung')
  <section class="breadcrumb-nav">
                    <div class="container">
                        <div class="breadcrumb-nav-inner">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active"><a href="#">Shop</a></li>
                            </ul>
                            <label class="now">SHOP</label>
                        </div>
                    </div>
                </section>

                <!-- Start Blog List -->   

                <section class="default-section shop-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="blog-left-section">
                                    <div class="blog-left-search blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <input type="text" name="txt" placeholder="Search">
                                        <input type="submit" name="submit" value="&#xf002;">
                                    </div>
                                    <div class="blog-left-categories blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <h5>Categories</h5>

                                        <ul class="list">
                                            @foreach ($allcata as $item)
                                        <li><a href="{{URL::to('/catasp/'.$item->dm_id)}}">{{$item->dm_name}}</a></li>
                                            @endforeach
                                            
                                            {{-- <li><a href="#">Community</a></li>
                                            <li><a href="#">Employment</a></li>
                                            <li><a href="#">Franchise</a></li>
                                            <li><a href="#">Kids Corner</a></li>
                                            <li><a href="#">Our Recipes</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="blog-left-filter blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <h5>Filter</h5>
                                        <p>Price: $40 — $350</p>
                                        <input id="ex2" type="text" class="span2" value="" data-slider-min="40" data-slider-max="350" data-slider-step="5" data-slider-value="[50,200]"/>
                                        <a href="#" class="filter-btn">FILTER</a>
                                    </div>
                                    <div class="blog-left-deal blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <h5>Best Deals</h5>
                                        <div class="best-deal-blog">
                                            <div class="best-deal-left">
                                                <img src="{{asset('front_end/images/img20.png')}}" alt="">
                                            </div>
                                            <div class="best-deal-right">
                                                <p>Lasal Cheese</p>
                                                <p><strong>$ 15</strong></p>
                                            </div>
                                        </div>
                                        <div class="best-deal-blog">
                                            <div class="best-deal-left">
                                                <img src="{{asset('front_end/images/img21.png')}}" alt="">
                                            </div>
                                            <div class="best-deal-right">
                                                <p>Lasal Cheese</p>
                                                <p><strong>$ 15</strong></p>
                                            </div>
                                        </div>
                                        <div class="best-deal-blog">
                                            <div class="best-deal-left">
                                                <img src="{{asset('front_end/images/img22.png')}}" alt="">
                                            </div>
                                            <div class="best-deal-right">
                                                <p>Lasal Cheese</p>
                                                <p><strong>$ 15</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-tag blog-common-wide wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <h5>Popular Tags</h5>
                                        <a href="#">Audio</a> <a href="#">Service</a> <a href="#">Online Order</a> <a href="#">Contact</a> <a href="#">Cupcake</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="blog-right-section">
                                    <div class="shop-search wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <h6>Showing all 12 results</h6>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select-dropbox">
                                                    <option>Sort by newness</option>
                                                    <option>Sort</option>
                                                    <option>Sort newness</option>
                                                    <option>Sort by newness</option>
                                                    <option>newness</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         @yield('noidung2')
                                    @foreach ($allpro as $item)
                                    
                                         <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('upload/'.$item->image)}}" alt="" >
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{URL::to('/chitietsp/'.$item->id)}}"><h5>{{$item->name}}</h5></a>
                                                <h5><strong>$ {{$item->price}}</strong></h5>
                                            </div>
                                        </div> 
                                           
                                        
                                        @endforeach
                                        
                                    </div>

                                        {{-- <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop1.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop2.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop3.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop4.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop5.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop6.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop7.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop8.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <div class="shop-main-list">
                                                <div class="shop-product">
                                                    <img src="{{asset('front_end/images/shop9.png')}}" alt="">
                                                    <div class="cart-overlay-wrap">
                                                        <div class="cart-overlay">
                                                            <a href="#" class="shop-cart-btn">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="shop_single.html"><h5>Paper Pouch</h5></a>
                                                <h5><strong>$ 15.00</strong></h5>
                                            </div>
                                        </div> --}}
                                    
                                    <div class="gallery-pagination">
                                        <div class="gallery-pagination-inner">
                                            <ul>
                                                <li><a href="#" class="pagination-prev"><i class="icon-left-4"></i> <span>PREV page</span></a></li>
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>
                                                <li><a href="#"><span>3</span></a></li>
                                                <li><a href="#" class="pagination-next"><span>next page</span> <i class="icon-right-4"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Blog List -->
@endsection