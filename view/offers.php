<style>
    body {
        font-size: 14px;
        color: #000000;
        /* font-family: 'karla', sans-serif; */
        font-weight: 400;
        background: #F5F5F5;
        -webkit-font-smoothing: antialiased;
    }

    .offers-area {
        padding-top: 35px;
        padding-bottom: 20px;
    }

    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .modal-header:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
        clear: both;
    }

    .btn-group-vertical>.btn-group:after,
    .btn-group-vertical>.btn-group:before,
    .btn-toolbar:after,
    .btn-toolbar:before,
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .dl-horizontal dd:after,
    .dl-horizontal dd:before,
    .form-horizontal .form-group:after,
    .form-horizontal .form-group:before,
    .modal-footer:after,
    .modal-footer:before,
    .modal-header:after,
    .modal-header:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
        display: table;
        content: " ";
    }

    .bg-page-white {
        background: #fff;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    .terms-area header>h1 {
        color: #58595b;
        margin: 1em 0 0.4em;
        text-transform: uppercase;
        font-size: 2em;
        font-weight: 500;
    }

    .offerdiscount-block {
        margin-bottom: 5px;
        position: relative;
    }

    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .fa-stack,
    img {
        vertical-align: middle;
    }

    hr,
    img {
        border: 0;
    }

    .offerdiscount-content.right {
        border-right: 5px solid #e8e8e8;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .offerdiscount-content {
        margin-top: 0px;
        /* font-family: Lato; */
        padding: 18px 70px;
        background: #f7f7f7;
        margin-left: -50px;
        margin-top: 20px;
    }

    .offerdiscount-content h3 {
        font-size: 25px;
        line-height: 1.5em;
        color: #EC1A3A;
        margin-top: 0;
        font-style: italic;
    }

    .offerdiscount-content h4 {
        font-size: 14px;
        line-height: 1.5em;
        color: #4a4a4a;
        margin-top: 0;
    }

    .mt-20 {
        margin-top: 10px;
    }

    .special-block .offerdiscount-content {
        margin-left: 0;
        /* text-align: right; */
        margin-right: -50px;
    }

    .offerdiscount-content.left {
        border-left: 5px solid #e8e8e8;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .faq h2 {
        font-size: 22px;
    }

    .list-inline,
    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    ol,
    ul {
        margin-bottom: 10px;
    }

    dl,
    ol,
    ul {
        margin-top: 0;
    }

    ul li {
        line-height: 1.7em;
    }

    ol li {
        line-height: 1.7em;
    }

    .faq h3 {
        font-size: 15px;
        line-height: 1.8em;
    }

    b,
    optgroup,
    strong {
        font-weight: 700;
    }

    ::marker {
        unicode-bidi: isolate;
        font-variant-numeric: tabular-nums;
        text-transform: none;
        text-indent: 0px !important;
        text-align: start !important;
        text-align-last: start !important;
    }

    .faq h3 {
        font-size: 15px;
        line-height: 1.8em;
    }

    .custom-link a {
        color: #EC1A3A;
        text-decoration: none;
    }

    .tc {
        font-weight: bold;
    }

    .custom-link a {
        color: #EC1A3A;
        text-decoration: none;
    }

    .btn-started {
        margin-top: 20px;
    }

    .main-content-header {
        margin-left: 1%;
    }

    .main-content-area {
        margin-left: 2%;
    }

    .offer-image {
        z-index: 1;
    }

    .offer-image-1-padding {
        padding-top: 85px;
    }

    .offer-image-2-padding {
        padding-top: 85px;
    }

    .offer-image-3-padding {
        padding-top: 0px;
    }

    .offer-image-4-padding {
        padding-top: 110px;
    }

    .sub-list-margin-left {
        margin-left: 5%;
    }

    @media only screen and (max-width: 991px) {

        .offerdiscount-content.left {
            border-left: none;
            /* border-top-left-radius: none; */
            border-bottom-left-radius: 0px;
        }

        .offerdiscount-content.right {
            border-right: none;
            /* border-top-right-radius: none; */
            border-bottom-right-radius: 0px;
        }

        .offerdiscount-content.right {
            /* border-right: 5px solid #e8e8e8; */
            border-top-right-radius: 10px;
            /* border-bottom-right-radius: 10px; */
        }

        .offerdiscount-content {
            margin-top: 0px;
            margin-left: 0px;
            padding: 5px;
            /* text-align: center; */
        }

        .offer-image-2-padding {
            padding-top: 5px;
        }

        .offer-image-3-padding {
            padding-top: 0px;
        }

        .offer-image-4-padding {
            padding-top: 5px;
        }

        .special-block .offerdiscount-content {
            margin-right: 0px;
            padding: 5px 10px;
            /* text-align: center; */
        }
    }
</style>

<section id="offerdiscount" class="offers-area">

    <div class="terms-area custom-link">

        <div class="container">
            <div class="bg-page-white">
                <div class="row">

                    <header class="text-center">
                        <h1>Offers & Discounts</h1>
                        <h2>Christmas Offers: Terms & Conditions</h1>
                    </header>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="main-content-header text-center">
                            <h3>CHRISTMAS 2021 GENERAL OFFER TERMS</h3>
                        </div>

                        <div class="main-content-area">
                            <ol>
                                <li>
                                    Offers are applicable until 15 January 2022.
                                </li>

                                <li>
                                    ChefOnline reserves the right to hold void, cancel, suspend, amend or withdraw
                                    offer(s) at any time without prior notice.
                                </li>

                                <li>
                                    All offers are non-exchangeable and non-transferable, and may not be used in
                                    conjunction with any other offer(s).
                                </li>

                                <li>
                                    Any personal data that is supplied when availing of this offer will be processed
                                    under the ChefOnline Privacy Policy: https://www.chefonline.com/privacy-policy
                                </li>

                                <li>
                                    These offer terms shall be governed by English law and the parties submit to the
                                    exclusive jurisdiction of the courts of England and Wales.
                                </li>

                                <li>
                                    All prices are subject to VAT.
                                </li>
                            </ol>
                        </div>

                    </div>

                    <div class="col-md-12 mt-20">
                        <div class="row">

                            <div class="col-md-6 offer-image">
                                <div class="offerdiscount-block offer-image-1-padding">
                                    <img src="https://www.chefonline.com/images/B2B_ChefOnline2_13122021.png"
                                        width="535" height="176" alt="Offers & Discounts"
                                        class="center-block img-responsive" alt="offer & discount">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="offerdiscount-content right">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <ul class="list-unstyled">
                                                <li>
                                                    <h3>CHEFONLINE ONLINE FOOD ORDERING PLATFORM
                                                    </h3>
                                                </li>

                                                <li>

                                                    <b>1.</b> The package includes:

                                                    <div class="row">
                                                        <div class="col-md-12 sub-list-margin-left">
                                                            <ul class="list-unstyled">

                                                                <li>
                                                                    <b>a.</b> An online ordering website;
                                                                </li>

                                                                <li>
                                                                    <b>b.</b> A GPRS Printer with a data SIM if
                                                                    required;
                                                                </li>

                                                                <li>
                                                                    <b>c.</b> 2000 leaflets;
                                                                </li>

                                                                <li>
                                                                    <b>d.</b> SRS Manager App; and
                                                                </li>

                                                                <li>
                                                                    <b>e.</b> 24/7 customer service.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </li>

                                                <li>
                                                    <b>2.</b> All fees and charges will be applicable, according to the
                                                    contract
                                                    signed by
                                                    both parties.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 mt-20">
                        <div class="row">

                            <div class="col-md-6 col-md-push-6 special-block offer-image">
                                <div class="offerdiscount-block offer-image-2-padding">
                                    <img src="https://www.chefonline.com/images/B2B_DigitalMarketing2_13122021.png"
                                        width="535" height="176" alt="Offers & Discounts"
                                        class="center-block img-responsive" alt="offer & discount">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-pull-6 special-block">
                                <div class="offerdiscount-content left">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <ul class="list-unstyled">
                                                <li>
                                                    <h3>CHEFONLINE DIGITAL MARKETING</h3>
                                                </li>

                                                <li>
                                                    <b>1.</b> The offer price is applicable only for the ChefOnline
                                                    Digital
                                                    Marketing SEO
                                                    Platinum Package.
                                                </li>

                                                <li>
                                                    <b>2.</b> The offered set-up fee is valid once only.
                                                </li>

                                                <li>
                                                    <b>3.</b> The offered monthly fee is valid as long as the subscriber
                                                    remains
                                                    subscribed. If the subscriber unsubscribes and resumes subscription,
                                                    the
                                                    offer will not apply.
                                                </li>

                                                <li>
                                                    <b>4.</b> ChefOnline will have to be notified 30 days in advance if
                                                    the
                                                    client
                                                    wishes
                                                    to unsubscribe.
                                                </li>

                                                <li>
                                                    <b>5.</b> If the client resumes subscription after a period of
                                                    twelve (12)
                                                    months, the
                                                    client shall be charged the regular set-up fee.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-20">
                        <div class="row">

                            <div class="col-md-6 offer-image">
                                <div class="offerdiscount-block offer-image-3-padding">
                                    <img src="https://www.chefonline.com/images/B2B_EPoS2_13122021.png" width="535"
                                        height="176" alt="Offers & Discounts" class="center-block img-responsive"
                                        alt="offer & discount">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="offerdiscount-content right">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <ul class="list-unstyled">
                                                <li>
                                                    <h3>CHEFONLINE EPOS</h3>
                                                </li>

                                                <li>
                                                    <b>1.</b> EPoS models are subject to availability.
                                                </li>

                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 mt-20">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 special-block offer-image">
                                <div class="offerdiscount-block offer-image-4-padding">
                                    <img src="https://www.chefonline.com/images/B2B_PrintMedia2_13122021.png"
                                        width="535" height="176" alt="Offers & Discounts"
                                        class="center-block img-responsive" alt="offer & discount">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-pull-6 special-block">
                                <div class="offerdiscount-content left">

                                    <div class="row">
                                        <div class="col-md-12">

                                            <ul class="list-unstyled">
                                                <li>
                                                    <h3>CHEFONLINE PRINT MEDIA</h3>
                                                </li>

                                                <li>
                                                    <b>1.</b> There is an initial charge of £100 upon order placement
                                                    for takeaway menus.
                                                    This charge is non-refundable.
                                                </li>

                                                <li>
                                                    <b>2.</b> The content and their descriptions will have to be
                                                    provided by the client.
                                                </li>

                                                <li>
                                                    <b>3.</b> The designs may be subjected to no more than three (3)
                                                    revisions.
                                                </li>

                                                <li>
                                                    <b>4.</b> The printed menus will be delivered to the client within
                                                    14 days after final
                                                    approval and payment clearance. The date of delivery may vary,
                                                    depending on
                                                    the circumstances.
                                                </li>

                                                <li>
                                                    <b>5.</b> Any pictures provided for menu design must be
                                                    copyrighted/owned by the
                                                    client. ChefOnline is not liable for any copyright breach/violations
                                                    of any
                                                    image/content sent to ChefOnline from the client if contested by a
                                                    third
                                                    party and shall be the responsibility of the client.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="col-md-12 faq">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Frequently Asked Questions</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3><b>1.</b> How do I use voucher codes?
                                    <li>
                                        </h3>
                                </ul>
                                <ul>
                                    <li>You will find a voucher code field in the payment screen when placing an order
                                        through our website our app. Just put in your special code or voucher, and
                                        you’re good to go.</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3><b>2.</b> How long is my discount/voucher valid?
                                    <li>
                                        </h3>
                                </ul>
                                <ul>
                                    <li>Each discount/voucher has a specific validity date. Please check our full <a
                                            href="https://www.chefonline.co.uk/terms-and-conditions"
                                            target="_blank">Terms & Conditions</a> page for detailed information, as
                                        well as the webpage of the restaurant in question.</li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li>
                                        <h3><b>3.</b> Who is this voucher for?
                                    <li>
                                        </h3>
                                </ul>
                                <ul>
                                    <li>Every discount and/or voucher is presented to registered users of ChefOnline.
                                    </li>
                                </ul>

                                <div class="tc"><a href="https://www.chefonline.co.uk/terms-and-conditions"
                                        target="_blank">*Terms & Conditions</a> apply.</div class="tc">
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-md-12 text-center btn-started">
                        <a class="btn btn-danger" href="https://www.chefonline.co.uk/">Get started</a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

</section>