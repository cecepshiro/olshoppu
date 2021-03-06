@extends('layouts.layouts')
@push('stylesheet')
<link rel="stylesheet" media="screen"
    href="{{ asset('assets/vendor/lightgallery.js/dist/css/lightgallery.min.css') }}" />
@endpush
@section('content')
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                class="czi-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Page v.1</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
            <h1 class="h3 text-light mb-0">Sports Hooded Sweatshirt</h1>
        </div>
    </div>
</div>
<div class="container">
    <!-- Gallery + details-->
    <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
            <div class="row">
                <!-- Product gallery-->
                <div class="col-lg-7 pr-lg-0 pt-lg-4">
                    <div class="cz-product-gallery">
                        <div class="cz-preview order-sm-2">
                            <div class="cz-preview-item active" id="first"><img class="cz-image-zoom"
                                    src="{{ asset('assets/img/shop/single/gallery/01.jpg') }}"
                                    data-zoom="{{ asset('assets/img/shop/single/gallery/01.jpg') }}"
                                    alt="Product image">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                            <div class="cz-preview-item" id="second"><img class="cz-image-zoom"
                                    src="{{ asset('assets/img/shop/single/gallery/02.jpg') }}"
                                    data-zoom="{{ asset('assets/img/shop/single/gallery/02.jpg') }}"
                                    alt="Product image">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                            <div class="cz-preview-item" id="third"><img class="cz-image-zoom"
                                    src="{{ asset('assets/img/shop/single/gallery/03.jpg') }}"
                                    data-zoom="{{ asset('assets/img/shop/single/gallery/03.jpg') }}"
                                    alt="Product image">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                            <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom"
                                    src="{{ asset('assets/img/shop/single/gallery/04.jpg') }}"
                                    data-zoom="{{ asset('assets/img/shop/single/gallery/04.jpg') }}"
                                    alt="Product image">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                        </div>
                        <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img
                                    src="{{ asset('assets/img/shop/single/gallery/th01.jpg') }}"
                                    alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img
                                    src="{{ asset('assets/img/shop/single/gallery/th02.jpg') }}"
                                    alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img
                                    src="{{ asset('assets/img/shop/single/gallery/th03.jpg') }}"
                                    alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img
                                    src="{{ asset('assets/img/shop/single/gallery/th04.jpg') }}"
                                    alt="Product thumb"></a><a class="cz-thumblist-item video-item"
                                href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                                <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div>
                            </a></div>
                    </div>
                </div>
                <!-- Product details-->
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <div class="product-details ml-auto pb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews"
                                data-scroll>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74
                                    Reviews</span>
                            </a>
                            <button class="btn-wishlist mr-0 mr-lg-n3" type="button" data-toggle="tooltip"
                                title="Add to wishlist"><i class="czi-heart"></i></button>
                        </div>
                        <div class="mb-3"><span
                                class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                            <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span
                                class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                        </div>
                        <div class="font-size-sm mb-4"><span
                                class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted"
                                id="colorOption">Red/Dark blue/White</span></div>
                        <div class="position-relative mr-n4 mb-3">
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color" id="color1"
                                    data-label="colorOption" value="Red/Dark blue/White" checked>
                                <label class="custom-option-label rounded-circle" for="color1"><span
                                        class="custom-option-color rounded-circle"
                                        style="background-image: url({{ asset('assets/img/shop/single/color-opt-1.png') }})"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color" id="color2"
                                    data-label="colorOption" value="Beige/White/Dark grey">
                                <label class="custom-option-label rounded-circle" for="color2"><span
                                        class="custom-option-color rounded-circle"
                                        style="background-image: url({{ asset('assets/img/shop/single/color-opt-2.png') }})"></span></label>
                            </div>
                            <div class="custom-control custom-option custom-control-inline mb-2">
                                <input class="custom-control-input" type="radio" name="color" id="color3"
                                    data-label="colorOption" value="Dark grey/White/Orange">
                                <label class="custom-option-label rounded-circle" for="color3"><span
                                        class="custom-option-color rounded-circle"
                                        style="background-image: url({{ asset('assets/img/shop/single/color-opt-3.png') }})"></span></label>
                            </div>
                            <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product
                                available</div>
                        </div>
                        <form class="mb-grid-gutter" method="post">
                            <div class="form-group">
                                <div class="d-flex justify-content-between align-items-center pb-1">
                                    <label class="font-weight-medium" for="product-size">Size:</label><a
                                        class="nav-link-style font-size-sm" href="#size-chart" data-toggle="modal"><i
                                            class="czi-ruler lead align-middle mr-1 mt-n1"></i>Size guide</a>
                                </div>
                                <select class="custom-select" required id="product-size">
                                    <option value="">Select size</option>
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <select class="custom-select mr-3" style="width: 5rem;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="btn btn-primary btn-shadow btn-block" type="submit"><i
                                        class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                            </div>
                        </form>
                        <!-- Product panels-->
                        <div class="accordion mb-4" id="productPanels">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading"><a href="#productInfo" role="button"
                                            data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i
                                                class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product
                                            info<span class="accordion-indicator"></span></a></h3>
                                </div>
                                <div class="collapse show" id="productInfo" data-parent="#productPanels">
                                    <div class="card-body">
                                        <h6 class="font-size-sm mb-2">Composition</h6>
                                        <ul class="font-size-sm pl-4">
                                            <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                                            <li>Lining: Cotton 100%</li>
                                            <li>Cotton 80%, Polyester 20%</li>
                                        </ul>
                                        <h6 class="font-size-sm mb-2">Art. No.</h6>
                                        <ul class="font-size-sm pl-4 mb-0">
                                            <li>183260098</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading"><a class="collapsed" href="#shippingOptions"
                                            role="button" data-toggle="collapse" aria-expanded="true"
                                            aria-controls="shippingOptions"><i
                                                class="czi-delivery text-muted lead align-middle mt-n1 mr-2"></i>Shipping
                                            options<span class="accordion-indicator"></span></a></h3>
                                </div>
                                <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                                    <div class="card-body font-size-sm">
                                        <div class="d-flex justify-content-between border-bottom pb-2">
                                            <div>
                                                <div class="font-weight-semibold text-dark">Courier</div>
                                                <div class="font-size-sm text-muted">2 - 4 days</div>
                                            </div>
                                            <div>$26.50</div>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <div>
                                                <div class="font-weight-semibold text-dark">Local shipping</div>
                                                <div class="font-size-sm text-muted">up to one week</div>
                                            </div>
                                            <div>$10.00</div>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <div>
                                                <div class="font-weight-semibold text-dark">Flat rate</div>
                                                <div class="font-size-sm text-muted">5 - 7 days</div>
                                            </div>
                                            <div>$33.85</div>
                                        </div>
                                        <div class="d-flex justify-content-between border-bottom py-2">
                                            <div>
                                                <div class="font-weight-semibold text-dark">UPS ground shipping</div>
                                                <div class="font-size-sm text-muted">4 - 6 days</div>
                                            </div>
                                            <div>$18.00</div>
                                        </div>
                                        <div class="d-flex justify-content-between pt-2">
                                            <div>
                                                <div class="font-weight-semibold text-dark">Local pickup from store
                                                </div>
                                                <div class="font-size-sm text-muted">&mdash;</div>
                                            </div>
                                            <div>$0.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading"><a class="collapsed" href="#localStore" role="button"
                                            data-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i
                                                class="czi-location text-muted font-size-lg align-middle mt-n1 mr-2"></i>Find
                                            in local store<span class="accordion-indicator"></span></a></h3>
                                </div>
                                <div class="collapse" id="localStore" data-parent="#productPanels">
                                    <div class="card-body">
                                        <select class="custom-select">
                                            <option value>Select your country</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Spain">Spain</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sharing-->
                        <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a
                            class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a
                            class="share-btn sb-instagram mr-2 my-2" href="#"><i
                                class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i
                                class="czi-facebook"></i>Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Vendor scrits: js libraries and plugins-->
@push('scripts')
<script src="{{ asset('assets/vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/lg-video.js/dist/lg-video.min.js') }}"></script>
@endpush
