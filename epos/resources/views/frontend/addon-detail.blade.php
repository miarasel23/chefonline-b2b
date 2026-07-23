@extends('frontend.layouts.main')

@section('title', $chefOnlineEpos['meta_title'])
@section('description', $chefOnlineEpos['meta_description'])


@section('content')

    <body class="product-product-53 layout-1">

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
        <style>
            .product-rightinfo.ProductTPL {
                display: none;
            }
        </style>



        <div class="container">
            <div class="row">
                <div id="content" class="productpage col-sm-12">
                    <div class="row">
                        <h1 class="page-title">{{ $chefOnlineEpos['name'] }}</h1>
                        <div class="col-sm-6 product-left">
                            <div class="product-info">
                                <div class="left product-image thumbnails">

                                    <div class="image"><a class="thumbnail elevatezoom-gallery"
                                            href="{{ asset('assets/image/cache/catalog/' . $chefOnlineEpos['zoom_image']) }}"
                                            title="{{ $chefOnlineEpos['name'] }}"><img id="tmzoom"
                                                src="{{ asset('assets/image/cache/catalog/' . $chefOnlineEpos['detail_image']) }}"
                                                data-zoom-image="{{ asset('assets/image/cache/catalog/' . $chefOnlineEpos['zoom_image']) }}"
                                                title="{{ $chefOnlineEpos['name'] }}"
                                                alt="{{ $chefOnlineEpos['name'] }}" /></a></div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 product-right">
                            <h2 class="product-title-h2">{{ $chefOnlineEpos['name'] }}</h2>
                            <ul class="list-unstyled short-desc">
                                <li><span
                                        class="desc">Availability:</span>{{ $chefOnlineEpos['quantity'] ? 'In Stock' : 'Out of Stock' }}
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>
                                    <h4 class="product-price">£{{ $chefOnlineEpos['price'] }}</h4>
                                </li>
                            </ul>
                            <div id="product">
                                <a style="margin-top: 20px;" class="btn btn-primary btn-lg btn-block"
                                    href="{{ route('contact.product', $chefOnlineEpos['slug']) }}">Get a
                                    Quote</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12" id="tabs_info">
                        <ul class="nav nav-tabs" id="myTabs">
                            @foreach ($chefOnlineEpos['details'] as $index => $details)
                                <li class="{{ $loop->first ? 'active' : '' }}">
                                    <a href="#tab-{{ Str::slug($details['tabs_name']) }}-{{ $index }}"
                                        data-toggle="tab">
                                        {{ $details['tabs_name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach ($chefOnlineEpos['details'] as $index => $details)
                                <div class="tab-pane {{ $loop->first ? 'active' : '' }}"
                                    id="tab-{{ Str::slug($details['tabs_name']) }}-{{ $index }}">

                                    <table class="table table-bordered">
                                        @foreach ($details['tabs_item'] as $title)
                                            <thead>
                                                <tr>
                                                    <td colspan="2"><strong>{{ $title['title'] }}</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($title['item'] as $item)
                                                    <tr>
                                                        <td>{{ $item['value'] }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>




                    <div class="box related">
                        <div class="box-heading"
                            style="background: url('{{ asset('assets/image/megnor/title-divider.png') }}') no-repeat scroll center bottom;">
                            Related Products</div>
                        <div class="box-content">
                            <div id="products-related" class="related-products">
                                <div class="box-product productbox-grid" id="related-grid">

                                    @if (!empty($chefOnlineEposRelatedProduct['products']))
                                        <?php
                                        // Shuffle the array to randomize the order of products
                                        shuffle($chefOnlineEposRelatedProduct['products']);

                                        // Select the first 4 products (or fewer if there are less than 4 products)
                                        $randomProducts = array_slice($chefOnlineEposRelatedProduct['products'], 0, 4);
                                        ?>

                                        @foreach ($randomProducts as $product)
                                            <div class="product-items">
                                                <div class="product-block product-thumb transition">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/image/cache/catalog/' . $product['list_image']) }}"
                                                                    alt="{{ $product['name'] }}"
                                                                    title="{{ $product['name'] }}"
                                                                    class="img-responsive" />
                                                            </a>
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="caption">
                                                                <h4><a href="#">{{ $product['name'] }}</a></h4>
                                                                <p class="price"> £{{ $product['price'] }} </p>
                                                            </div>
                                                        </div>
                                                        <div class="button-group">
                                                            <button type="button" class="addtocart"
                                                                onclick="location.href='{{ route('package.detail', ['id' => $product['id']]) }}'">View
                                                                Details</button>
                                                        </div>
                                                        <span class="related_default_width"
                                                            style="display:none; visibility:hidden"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {
                $.ajax({
                    url: 'index.php?route=product/product/getRecurringDescription',
                    type: 'post',
                    data: $(
                        'input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'
                    ),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#recurring-description').html('');
                    },
                    success: function(json) {
                        $('.alert, .text-danger').remove();

                        if (json['success']) {
                            $('#recurring-description').html(json['success']);
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $('#button-cart').on('click', function() {
                $.ajax({
                    url: 'index.php?route=checkout/cart/add',
                    type: 'post',
                    data: $(
                        '#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'
                    ),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#button-cart').button('loading');
                    },
                    complete: function() {
                        $('#button-cart').button('reset');
                    },
                    success: function(json) {
                        $('.alert, .text-danger').remove();
                        $('.form-group').removeClass('has-error');

                        if (json['error']) {
                            if (json['error']['option']) {
                                for (i in json['error']['option']) {
                                    var element = $('#input-option' + i.replace('_', '-'));

                                    if (element.parent().hasClass('input-group')) {
                                        element.parent().before('<div class="text-danger">' + json['error'][
                                            'option'
                                        ][i] + '</div>');
                                    } else {
                                        element.before('<div class="text-danger">' + json['error']['option']
                                            [i] + '</div>');
                                    }
                                }
                            }

                            if (json['error']['recurring']) {
                                $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json[
                                    'error']['recurring'] + '</div>');
                            }

                            // Highlight any found errors
                            $('.text-danger').parent().addClass('has-error');
                        }

                        if (json['success']) {
                            $.notify({
                                message: json['success'],
                                target: '_blank'
                            }, {
                                // settings
                                element: 'body',
                                position: null,
                                type: "info",
                                allow_dismiss: true,
                                newest_on_top: false,
                                placement: {
                                    from: "top",
                                    align: "center"
                                },
                                offset: 0,
                                spacing: 10,
                                z_index: 2031,
                                delay: 5000,
                                timer: 1000,
                                url_target: '_blank',
                                mouse_over: null,
                                animate: {
                                    enter: 'animated fadeInDown',
                                    exit: 'animated fadeOutUp'
                                },
                                onShow: null,
                                onShown: null,
                                onClose: null,
                                onClosed: null,
                                icon_type: 'class',
                                template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
                                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
                                    '<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '</div>'
                            });

                            $('#cart > button').html(
                                '<i class="fa fa-shopping-cart"></i><span id="cart-total">' + json[
                                    'total'] + '</span>');

                            //$('html, body').animate({ scrollTop: 0 }, 'slow');

                            $('#cart > ul').load('index.php?route=common/cart/info ul li');
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $('.date').datetimepicker({
                pickTime: false
            });

            $('.datetime').datetimepicker({
                pickDate: true,
                pickTime: true
            });

            $('.time').datetimepicker({
                pickDate: false
            });

            $('button[id^=\'button-upload\']').on('click', function() {
                var node = this;

                $('#form-upload').remove();

                $('body').prepend(
                    '<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>'
                );

                $('#form-upload input[name=\'file\']').trigger('click');

                if (typeof timer != 'undefined') {
                    clearInterval(timer);
                }

                timer = setInterval(function() {
                    if ($('#form-upload input[name=\'file\']').val() != '') {
                        clearInterval(timer);

                        $.ajax({
                            url: 'index.php?route=tool/upload',
                            type: 'post',
                            dataType: 'json',
                            data: new FormData($('#form-upload')[0]),
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $(node).button('loading');
                            },
                            complete: function() {
                                $(node).button('reset');
                            },
                            success: function(json) {
                                $('.text-danger').remove();

                                if (json['error']) {
                                    $(node).parent().find('input').after(
                                        '<div class="text-danger">' + json['error'] + '</div>');
                                }

                                if (json['success']) {
                                    alert(json['success']);

                                    $(node).parent().find('input').val(json['code']);
                                }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                                    .responseText);
                            }
                        });
                    }
                }, 500);
            });
        </script>
        <script type="text/javascript">
            $('#review').delegate('.pagination a', 'click', function(e) {
                e.preventDefault();

                $('#review').fadeOut('slow');

                $('#review').load(this.href);

                $('#review').fadeIn('slow');
            });

            $('#review').load('index.php?route=product/product/review&product_id=53');

            $('#button-review').on('click', function() {
                $.ajax({
                    url: 'index.php?route=product/product/write&product_id=53',
                    type: 'post',
                    dataType: 'json',
                    data: $("#form-review").serialize(),
                    beforeSend: function() {
                        $('#button-review').button('loading');
                    },
                    complete: function() {
                        $('#button-review').button('reset');
                    },
                    success: function(json) {
                        $('.alert-success, .alert-danger').remove();

                        if (json['error']) {
                            $('#review').after(
                                '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' +
                                json['error'] + '</div>');
                        }

                        if (json['success']) {
                            $('#review').after(
                                '<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' +
                                json['success'] + '</div>');

                            $('input[name=\'name\']').val('');
                            $('textarea[name=\'text\']').val('');
                            $('input[name=\'rating\']:checked').prop('checked', false);
                        }
                    }
                });
            });



            $(document).ready(function() {
                if ($(window).width() > 767) {
                    $("#tmzoom").elevateZoom({
                        gallery: 'additional-carousel',
                        // inner zoom
                        zoomType: "inner",
                        cursor: "crosshair"
                    });

                    var z_index = 0;

                    $(document).on('click', '.thumbnail', function() {
                        $('.thumbnails').magnificPopup('open', z_index);
                        return false;
                    });

                    $('.additional-carousel a').click(function() {
                        var smallImage = $(this).attr('data-image');
                        var largeImage = $(this).attr('data-zoom-image');
                        var ez = $('#tmzoom').data('elevateZoom');
                        $('.thumbnail').attr('href', largeImage);
                        ez.swaptheimage(smallImage, largeImage);
                        z_index = $(this).index('.additional-carousel a');
                        return false;
                    });

                } else {
                    $(document).on('click', '.thumbnail', function() {
                        $('.thumbnails').magnificPopup('open', 0);
                        return false;
                    });
                }
            });

            $(document).ready(function() {
                $('.thumbnails').magnificPopup({
                    delegate: 'a.elevatezoom-gallery',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-with-zoom',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function(item) {
                            return item.el.attr('title');
                        }
                    }
                });
            });

            $('#tabs a').tabs();
            $('#custom_tab a').tabs();

            //-->
        </script>
        </div>
    @endsection
