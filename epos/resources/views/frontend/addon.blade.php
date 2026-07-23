@extends('frontend.layouts.main')

@section('title', 'ChefOnline EPoS Add-Ons for Easy Management | ChefOnline')
@section('description', 'Simplify restaurant management with ChefOnline EPoS Add-Ons. Control staff, orders & operations effortlessly—everything at your fingertips | ChefOnline Add-Ons.')

@section('content')

    <body class="product-category-61 layout-2 left-col">
        @include('frontend.layouts.menu')


        <div class="content_headercms_top"></div>
        <div class="content-top-breadcum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="title-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ======= Quick view JS ========= -->
        <script>
            function quickbox() {
                if ($(window).width() > 767) {
                    $('.quickview-button').magnificPopup({
                        type: 'iframe',
                        delegate: 'a',
                        preloader: true,
                        tLoading: 'Loading image #%curr%...',
                    });
                }
            }
            jQuery(document).ready(function() {
                quickbox();
            });
            jQuery(window).resize(function() {
                quickbox();
            });
        </script>
        <div class="container category-page">
            <div class="row">
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <div class="box left-category">
                        <div class="box-heading">Categories</div>
                        <div class="box-content ">
                            <ul class="box-category treeview-list treeview">
                                <li>
                                    <a href="https://www.chefonline.com/epos/package">ChefOnline EPoS
                                        Packages</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.com/epos/addon" class="active">Add ons</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div id="content" class="col-sm-9 category ">
                    <div class="category-top">
                        <h1 class="page-title">Add ons</h1>
                        <div class="category_thumb">
                            <div class="col-sm-10 category_description">Streamline your business with ChefOnline EPoS
                                Add-Ons. Enjoy hassle-free management, organise every procedure, and watch the magic happen
                                before your eyes! Everything that happens within your business or with your employees can be
                                easily managed with just a few taps.<br><br>Business management has never been easier!</div>
                        </div>
                    </div>


                    <div class="category_filter">
                        <div class="col-md-4 btn-list-grid">
                            <div class="btn-group">
                                <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip"
                                    title="Grid"><i class="fa fa-th-large"></i></button>
                                <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip"
                                    title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>

                        {{-- Filler code don't romove --}}
                        {{-- <div class="pagination-right">
                            <div class="sort-by-wrapper">
                                <div class="col-md-2 text-right sort-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                </div>
                                <div class="col-md-3 text-right sort">
                                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                                        <option value="https://chefonline.com/epos/add-on?sort=p.sort_order&amp;order=ASC"
                                            selected="selected">Default</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=pd.name&amp;order=ASC">Name
                                            (A - Z)</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=pd.name&amp;order=DESC">Name
                                            (Z - A)</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=p.price&amp;order=ASC">Price
                                            (Low &gt; High)</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=p.price&amp;order=DESC">Price
                                            (High &gt; Low)</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=p.model&amp;order=ASC">Model
                                            (A - Z)</option>
                                        <option value="https://chefonline.com/epos/add-on?sort=p.model&amp;order=DESC">Model
                                            (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="show-wrapper">
                                <div class="col-md-1 text-right show">
                                    <label class="control-label" for="input-limit">Show:</label>
                                </div>
                                <div class="col-md-2 text-right limit">
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="https://chefonline.com/epos/add-on?limit=9" selected="selected">9
                                        </option>
                                        <option value="https://chefonline.com/epos/add-on?limit=25">25</option>
                                        <option value="https://chefonline.com/epos/add-on?limit=50">50</option>
                                        <option value="https://chefonline.com/epos/add-on?limit=75">75</option>
                                        <option value="https://chefonline.com/epos/add-on?limit=100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="row category-product">
                        @foreach ($addons['products'] as $product)
                            <div class="product-layout product-list col-xs-12">
                                <div class="product-block product-thumb">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="{{ route('addon.detail', ['slug' => $product['slug']]) }}">
                                                <img src="{{ asset('assets/image/cache/catalog/' . $product['list_image']) }}"
                                                    alt="Modem" title="Modem" class="img-responsive" />
                                            </a>
                                        </div>
                                        <div class="product-details">
                                            <div class="caption">
                                                <h4><a
                                                        href="{{ route('addon.detail', ['slug' => $product['slug']]) }}">{{ $product['name'] }}</a>
                                                </h4>
                                                <div class="rating list">
                                                    @for ($i = 0; $i < $product['rating']; $i++)
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"
                                                                style="color: red"></i></span>
                                                    @endfor
                                                </div>
                                                <p class="desc">{{ $product['list_description'] }}..</p>

                                                <p class="price">£{{ $product['price'] }} </p>
                                            </div>
                                            <div class="button-group grid">
                                                <button type="button" class="addtocart"
                                                    onclick="location.href='{{ route('addon.detail', ['slug' => $product['slug']]) }}'">View
                                                    Details</button>
                                            </div>
                                            <div class="list-right">
                                                <p class="price">£{{ $product['price'] }}</p>
                                                <div class="button-group list">
                                                    <button type="button" class="addtocart"
                                                        onclick="location.href='{{ route('addon.detail', ['slug' => $product['slug']]) }}'">View
                                                        Details</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="pagination-wrapper">
                        <div class="col-sm-6 text-left page-link"></div>
                        <!-- <div class="col-sm-6 text-right page-result">Showing 1 to 6 of 6 (1 Pages)</div> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
