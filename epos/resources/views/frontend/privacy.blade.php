@extends('frontend.layouts.main')

@section('title', 'ChefOnline mPOS Terms & Conditions | ChefOnline Epos')

@section('description', 'Read full terms and conditions for purchasing, warranties, delivery, payments, and liability when using ChefOnline’s mPOS products and services in the UK | ChefOnline Epos')

@section('content')

<body class="information-information-5 layout-1">

    @include('frontend.layouts.menu')

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

    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1 class="page-title">Terms &amp; Conditions for ChefOnline mPOS</h1>
                <br><br>

                <p><b>Introduction</b></p>
                <p>These terms and conditions (the "Agreement") govern your use of the ChefOnline mPOS (Mobile Point of Sale) system, which is provided by ChefOnline Ltd ("we," "us," "our"). By using our services, you ("Customer," "you," "your") agree to be bound by these terms, which will apply to all transactions between us. Any order or contract accepted by us will be subject to these conditions, excluding any other terms introduced by you.</p>

                <b>1. Definitions</b><br><br>
                <p>1.1 "You/Your" refers to the person or entity submitting an order for the Products.</p>
                <p>1.2 "Products" means the goods (hardware) and/or software we supply under this Agreement.</p>
                <p>1.3 "Software" refers to the computer programs supplied under this Agreement, as specified in our quotation or order acknowledgement.</p>
                <p>1.4 "Goods" refers to the computer equipment and any other products supplied under these terms.</p>
                <p>1.5 "Services" refers to the mPOS system and related offerings, including installation, maintenance, and support.</p>

                <b>2. Formation of Contract</b><br><br>
                <p>2.1 The contract between us will be formed once we accept your order or you accept our quotation. The contract is only binding upon our acceptance of the order in writing, whether electronically or in hard form.</p>
                <p>2.2 We may cancel the contract at any time if the products are unavailable, without any liability to you.</p>
                <p>2.3 Prior to accepting an order, we may conduct a credit check and only accept the order if we are satisfied with the results. By submitting an order, you consent to this check.</p>

                <b>3. Modifications</b><br><br>
                <p>3.1 These terms can only be amended by a written agreement signed by one of our directors. We will not accept any alterations introduced by you unless explicitly agreed upon in writing.</p>

                <b>4. Warranty and Defects</b><br><br>
                <p>4.1 We warrant that the products will be free from defects in materials and workmanship at the time of delivery. If a defect is found, we will, at our discretion, either repair, replace, or refund the defective products, subject to the following conditions:</p>
                <ul>
                    <li>Defects must be reported to us within 7 days of delivery or 1 month for latent defects.</li>
                    <li>The goods must be returned to us within the specified time frame.</li>
                    <li>The defect must not have been caused by misuse, neglect, or improper handling.</li>
                </ul>
                <p>4.2 We will pass on the benefit of any manufacturer’s warranty to you where possible, but our liability for software defects is limited to our negligence.</p>

                <b>5. Liability Limitations</b><br><br>
                <p>5.1 We shall not be liable for any indirect, special, or consequential losses or damages, including loss of profits or data.</p>
                <p>5.2 Our total liability will not exceed the purchase price of the products involved in the claim.</p>
                <p>5.3 Nothing in this Agreement excludes liability for death or personal injury resulting from our negligence.</p>

                <b>6. Prices</b><br><br>
                <p>6.1 The price for the products is as stated in our quotation or order acknowledgement. Any changes in the costs (such as shipping, insurance, or exchange rates) may result in price adjustments.</p>
                <p>6.2 All prices are exclusive of VAT, delivery costs, and other applicable charges, which will be added to the invoice.</p>

                <b>7. Payment Terms</b><br><br>
                <p>7.1 Unless otherwise agreed, payment must be made prior to the dispatch of products.</p>
                <p>7.2 For credit accounts, payment is due within 30 days of the invoice date.</p>
                <p>7.3 If payment is overdue, we may charge interest on the outstanding balance at the statutory rate and suspend delivery until payment is made.</p>

                <b>8. Delivery</b><br><br>
                <p>8.1 Delivery will be made to the address provided in the order. We will aim to deliver during business hours, but we are not liable for any delay.</p>
                <p>8.2 Any delivery timeframes are estimates only.</p>
                <p>8.3 We reserve the right to cancel or suspend delivery if you fail to meet payment obligations or breach any terms of this Agreement.</p>

                <b>9. Risk and Ownership</b><br><br>
                <p>9.1 Risk in the products will pass to you upon delivery.</p>
                <p>9.2 Ownership of the products will not transfer until we have received full payment. You must store the products so they remain identifiable as our property.</p>

                <b>10. Damage or Loss in Transit</b><br><br>
                <p>10.1 If products are damaged or lost in transit, we will repair or replace them free of charge, provided you notify us in writing within 7 days of delivery.</p>

                <b>11. Software License</b><br><br>
                <p>11.1 Software provided is licensed, not sold, and will be subject to the manufacturer’s terms. We accept no responsibility for software defects unless caused by our own negligence.</p>

                <b>12. Termination</b><br><br>
                <p>12.1 Either party may terminate this Agreement by providing written notice in case of a material breach, insolvency, or failure to meet payment obligations.</p>
                <p>12.2 We may terminate or suspend services if we believe the products are being misused or for any other reason specified in the contract.</p>

                <b>13. Force Majeure</b><br><br>
                <p>13.1 We shall not be liable for failure to perform our obligations if we are hindered by causes beyond our reasonable control, including but not limited to fire, flood, industrial disputes, or supplier issues.</p>

                <b>14. Assignment</b><br><br>
                <p>14.1 We reserve the right to assign or subcontract our obligations under this Agreement, while you may not assign your rights without our written consent.</p>

                <b>15. Intellectual Property</b><br><br>
                <p>15.1 All intellectual property rights in the products remain with us or our licensors. You are granted a non-exclusive license to use the products in accordance with this Agreement.</p>

                <b>16. WEEE Regulations</b><br><br>
                <p>16.1 You are responsible for ensuring the proper disposal of goods at the end of their lifecycle, in line with the Waste Electrical and Electronic Equipment (WEEE) regulations.</p>

                <b>17. Notices</b><br><br>
                <p>17.1 Any notices required under this Agreement must be sent in writing to the addresses specified in the order or quotation.</p>

                <b>18. Governing Law</b><br><br>
                <p>18.1 This Agreement will be governed by the laws of England and Wales, and any disputes will be resolved by the English courts.</p>

                <b>19. Entire Agreement</b><br><br>
                <p>19.1 This Agreement constitutes the full understanding between us regarding the supply of products and services, superseding any prior agreements or discussions.</p>

                <b>20. Miscellaneous</b><br><br>
                <p>20.1 If any part of this Agreement is deemed unenforceable, the remainder of the Agreement will remain in effect.</p>
                <p>20.2 The terms of this Agreement apply to all products and services supplied by us, unless otherwise agreed in writing.</p>

            </div>
        </div>
    </div>

@endsection
