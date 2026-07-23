@extends('frontend.layouts.main')

@section('title', 'ChefOnline Terms & Conditions of Service | CheOnline Epos')

@section('description', 'Read full terms & conditions for purchasing, warranties, delivery, payments, and liability when using ChefOnline’s products and services in UK | ChefOnline Epos')

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
                    <h1 class="page-title">Terms and Conditions</h1>
                    <br><br>
                    <p><b>TERMS &amp; CONDITIONS:</b></p>
                    <p>These conditions are the only contractual terms upon which Le Chef Plc trading as chefonline.co.uk
                        whose registered office is at 218A Brick Lane, London E1 6SA (registered with company number
                        09273766 and registered for VAT purposes with number GB230479517) (the “Company”) is prepared to
                        deal with its customers (whether they are based within or outside the UK) and these terms will
                        govern all contracts for the supply of goods and/or software formed by our acceptance of a customer
                        order or a customer’s acceptance of our quotation to the exclusion of any other contractual terms
                        including any which a customer attempts to introduce.</p>

                    <b>1. GENERAL</b><br><br>
                    <p>1.1 In these conditions:</p>
                    <p>1.1.1 “you/ your” means the person submitting an order for Products.</p>
                    <p>1.1.2 “Goods” means computer equipment and/or other equipment to be supplied under these conditions
                        as stated on our quotation or order acknowledgement, as appropriate.</p>
                    <p>1.1.3 “Products” means Goods and/or Software.</p>
                    <p>1.1.4 “Software” means the computer programs to be supplied under these conditions as stated on our
                        quotation or order acknowledgement, as appropriate.</p>
                    <p>1.2 The contract for our supply of Products to you (“Contract”) will be formed upon your acceptance
                        of our quotation or our acceptance of your order. However, we only agree to sell products to you
                        subject to their availability and accordingly the contract may be cancelled by us in writing without
                        liability to you if products cannot within a reasonable period be acquired by us for resale.
                        Acceptance of an order by us can only be made in writing whether in hard form or electronically.</p>
                    <p>1.3 We may prior to accepting any order carry out a credit check and then will only accept your order
                        if we are satisfied with the results of such check. You confirm that you are happy for us to carry
                        out such check.</p>
                    <p>1.4 These conditions may only be modified by a written variation signed by one of our directors. No
                        other action by us (including delivery of Products) is to be construed as our acceptance of any
                        other conditions, whether set out in your general conditions of purchase or in any other documents.
                    </p>
                    <p>1.5 These conditions together with any matters referred to on our quotation or order acknowledgement
                        (as appropriate) embody the entire understanding of the parties and supersede any prior promises,
                        representations, undertakings or implications.</p>
                    <p>1.6 Any omission or error in any sales literature, web page or site, order form, quotation, price
                        list, order acknowledgement, dispatch note, invoice or other document (whether written, oral or in
                        electronic form) issued by us may be corrected by us without liability.</p>
                    <p>1.7 The provisions of the Contracts (Rights of Third Parties) Act 1999 are expressly excluded from
                        the Contract.</p>
                    <p>1.8 Clause headings are for convenience only and do not affect the interpretation of these
                        conditions. Reference in these conditions to a statutory provision will be construed as a reference
                        to that provision as amended, re-enacted or extended at the relevant time. Words in the singular
                        include the plural and vice versa.</p>
                    <p>1.9 The carrying out by us of any support and maintenance of Goods will be governed by our standard
                        support terms to the exclusion of any other terms.</p>
                    <p>1.10 Your attention is in particular drawn to conditions 2, 3, 8 and 9.</p>
                    <br><b>2. WARRANTY</b>
                    <br><br>
                    <p>2.1 We warrant that goods will at the time of delivery be free from defects in workmanship and
                        materials and correspond in all material respects with the relevant product specification. If any
                        goods do not conform to this warranty then we will at our option either remedy the defect in
                        question, replace the defective Goods or refund the price of the defective Goods. This remedy is the
                        only remedy available to you for a breach of this warranty and is only available on condition that:
                    </p>
                    <p>2.1.1 you notify us in writing of the defect within 7 days of delivery or, in the case of defects not
                        apparent on reasonable inspection, within 1 month of delivery;</p>
                    <p>2.1.2 defective Goods are returned to us within 7 days of written notification referred to in
                        condition 2.1.1 or, in the case of defects not apparent on reasonable inspection, within 3 months of
                        delivery; and,</p>
                    <p>2.1.3 our examination of defective Goods at our premises discloses to our satisfaction that the
                        defect has not been caused by (a) your misuse, neglect, failure or inadequate maintenance, accident,
                        improper storage, installation or handling, or (b) repair or alteration by a third party. You will
                        refund to us the cost of any such examination where the remedy referred to under this condition is
                        not available together with, at our option and discretion, a “restocking fee” of up to 20% of the
                        price of the Goods to cover our administrative expenses.</p>
                    <p>2.2 We will so far as we are reasonably able to pass on to you the benefit of all warranties received
                        by us from the manufacturer of the products.
                    </p>
                    <p>2.3 Where Goods are returned under condition 2.1:</p>
                    <p>2.3.1 we will bear the cost of delivering any repaired or replacement Goods to you (subject to levy
                        of any repacking fee due under condition 2.4);</p>
                    <p>2.3.2 the risk in the returned Goods shall pass to us upon delivery back to us of the relevant goods.
                    </p>
                    <p>2.4 Goods returned by you to us for any reason must be returned in their original packaging in
                        substantially the same condition as they were delivered to you and must bear a return identification
                        number clearly visible on the exterior (such number to be obtained from us prior to the return of
                        Goods by you). We will not accept liability for Goods returned without such identification number.
                        We may levy a fee for repackaging Goods returned to us in a poorly packaged state.</p>
                    <p>2.5 Software (and its use) will be subject to the terms of the manufacturer’s license contained
                        within the software itself (and accessed upon loading) or within or upon the packaging of the
                        software. Such license will state the extent of the manufacturer’s liability for the software. We
                        cannot accept any liability whatsoever for any defect or error in the same other than where this has
                        been caused by our negligence or default.</p><br>
                    <b>3. LIMITATION OF LIABILITY</b>
                    <br><br>
                    <p>3.1 Nothing in these conditions affects the statutory rights of a consumer as defined under the
                        Unfair Contract Terms Act 1977. All conditions, warranties or representations not contained in these
                        conditions and implied by statute or law are excluded or restricted to the fullest extent permitted.
                    </p>
                    <p>3.2 This condition and condition 2 states our only liability to you under or in connection with the
                        contract.</p>
                    <p>3.3 Without prejudice to condition 3.4, we will not be liable to you by way of representation (unless
                        fraudulent), common law duty or under any express or implied term of the contract for:</p>
                    <p>3.3.1 any indirect, special or consequential loss or damage or loss of profits (whether caused by our
                        negligence or that of our employee’s agents or otherwise) arising in connection with the supply of
                        products and related services or their use by you.</p>
                    <p>3.3.2 any loss or retrieval of data, it is your responsibility to keep adequate back-up copies of
                        data and programs held or used by you or on your behalf.</p>
                    <p>3.4 Our entire liability in connection with the contract will not exceed the purchase price of the
                        products in question.</p>
                    <p>3.5 Notwithstanding any other term of these conditions our liability to you for</p>:
                    <p>3.5.1 death or personal injury resulting from our negligence or fraud or that of our employees,
                        agents or subcontractors; and,</p>
                    <p>3.5.2 damage for which we are liable to you under Part 1 of the Consumer Protection Act 1987 is not
                        limited save that this condition 3 shall not confer a right or remedy on you to which you would not
                        otherwise be entitled.</p><br>
                    <b>4. PRICES</b>
                    <br><br>
                    <p>4.1 The price that you pay for the Products will be the price stated on our relevant quotation or
                        order acknowledgement (as appropriate) or, if no price is stated, our list price last published on
                        the date upon which Products are dispatched to you. We may at our discretion vary the price from the
                        price within the quotation or order acknowledgement only to the extent that the cost to us of
                        acquiring or supplying Products has increased between the date of quotation or order acknowledgement
                        and delivery of those Products to you, that being a result of (without limitation) increases in the
                        costs of carriage, packaging, insurance, or arising from a change in exchange rate, a change in
                        delivery dates, delivery quantities, or specifications for Products requested by you, or any delay
                        caused by our acting further to your instructions. Whilst you may sell the Products at whatever
                        price you deem fit, you will not advertise that price anywhere online including upon either your
                        website or a third-party website.</p>
                    <p>4.2 Prices quoted by us are unless otherwise stated exclusive of (a) value added tax or any similar
                        taxes, levies or duties, (b) the costs of carriage, delivery, packaging and insurance, and (c) our
                        handling charges, all of which will be added to or charged on invoices at the appropriate rates and
                        paid by you.</p><br>
                    <b>5. PAYMENT</b>
                    <br><br>
                    <p>5.1 Unless otherwise agreed in writing, you must pay for Products prior to their dispatch to you by
                        such means as we may notify you of. Where the Products are supplied on credit terms granted at our
                        discretion, payment will be made by you within thirty days of the invoice date. Payment by cheque is
                        deemed to have been made only upon such cheque being met on first presentation.</p>
                    <p>5.2 Where any payment to be made by you under the Contract is not made by its due date then, without
                        prejudice to our other rights and remedies, we may:</p>
                    <p>5.2.1 charge interest on the outstanding amount (as well after as before judgement) on a day to day
                        basis at the statutory rate from time to time applicable until the sum due is paid.</p>
                    <p>5.2.2 withhold further deliveries, suspend performance of the Contract, cancel any credit terms
                        granted by us to you and/or withhold guarantees on previously supplied Products until arrangements
                        as to payment or credit have been established on terms which are satisfactory to us.</p><br>
                    <b>6. TERMINATION</b>
                    <br><br>
                    <p>Where Products are to be delivered in instalments, each delivery constitutes a separate contract and
                        failure by us to deliver any one or more of the instalments in accordance with these conditions or
                        any claim by you in respect of any one or more instalments will not entitle you to treat the
                        Contract as a whole as repudiated.</p>
                    <b>7. ACCOUNT OPENING</b>
                    <br><br>
                    <p>The payment of our first invoice will be required in advance after the opening of any new account.
                        Each new client shall fill in the account opening form and provide the Company with a signed copy of
                        these terms and conditions, details of any relevant bank account and a blank copy of your
                        letterhead.</p><br>
                    <b>8. DELIVERY</b>
                    <br><br>
                    <p>8.1 Delivery of Products shall be made by us to the place designated by you in the accepted order or
                        quotation, as appropriate. Delivery will be made during normal business hours.</p>
                    <p>8.2 Unless otherwise expressly agreed in writing, any delivery date or time specified by us in any
                        quotation, dispatch note or otherwise is a best estimate only and we will not be liable to you for
                        any loss or damage sustained by you as a result of our failure to comply with such time scale.</p>
                    <p>8.3 If you pass or have a resolution passed for your winding-up, a receiver is appointed over the
                        whole or any part of your undertaking, an administration order is made against you, you enter into
                        or propose to enter into any arrangement with your creditors, become unable to pay your debts (or
                        have no reasonable prospect of so doing), suffer a bankruptcy order or commit a material breach of
                        the Contract, then we may without prejudice to any other right immediately terminate the Contract,
                        suspend or cancel further delivery and/or recover Products from you for which payment in full has
                        not been received.</p><br>
                    <b>9. RISK AND TITLE</b>
                    <br><br>
                    <p>9.1 Risk in Products shall pass to you upon delivery.</p>
                    <p>9.2 Title to Software shall not pass to you. Title to Goods shall not pass to you until their full
                        price and the price of any other goods which are the subject of any other contract between you and
                        us has been paid. Until title passes, Goods shall be: -</p>
                    <p>9.2.1 stored by you at your premises in such a manner that they are clearly identifiable as being our
                        property and be kept separate from any other goods whether or not supplied by us;</p>
                    <p>9.2.2 handed over to us on demand. We may re-take possession of such Goods and may enter onto your
                        premises for such purpose.</p>
                    <p>9.3 If you fail to pay for any Products in accordance with these conditions we may bring action
                        against you for the price of the Products at any time notwithstanding that title in Products has not
                        passed to you.</p><br>
                    <b>10. DAMAGE OR LOSS IN TRANSIT</b>
                    <br><br>
                    <p>We shall repair or replace, free of charge any Products damaged or lost in transit where delivery has
                        been made by our carrier, provided that you give us written notification of such damage or loss
                        within 7 days of the date of our invoice (so that we may comply with our carrier’s conditions of
                        carriage).</p><br>
                    <b>11. APPARENT DEFECTS</b>
                    <br><br>
                    <p>11.1 If the quantity of Products delivered does not correspond with the quantity required to be
                        delivered in that consignment you may not reject that consignment and may only: -</p>
                    <p>11.1.1 (if the quantity delivered exceeds the contract quantity) return the excess or retain the
                        whole, in which latter case the price shall be adjusted at the contract rate then prevailing;</p>
                    <p>11.1.2 (if the quantity delivered is less than the contact quantity) require a further delivery of
                        Products to make up for the deficiency or (at our option) a refund of the appropriate part of the
                        purchase price.</p>
                    <p>11.2 These rights are only available however where condition 2.1 is also satisfied.</p>
                    <p>11.3 You shall have no claim for the fact that Products delivered are of the wrong description unless
                        condition 2.1 is also satisfied.</p><br>
                    <b>12. INSTALLATION</b>
                    <br><br>
                    <p>We may for additional charge install and/or commission Products at your premises or elsewhere.
                        Condition 3 shall apply to the provision of any installation or commissioning. Notwithstanding that
                        we may be contractually committed to install and/or commission Products, Products shall be treated
                        as delivered to you when the same are presented by us at the agreed delivery destination.</p><br>
                    <b>13. SPECIFICATION</b>
                    <br><br>
                    <p>13.1 All drawings, photographs, illustrations, specifications, performance data, dimensions and the
                        like used by us in sales literature, on web pages or other documentation have been provided by us in
                        the belief that they accurate. However, they do not constitute a description of the Products, shall
                        not be taken to be representations made by us and are not warranted to be accurate.</p>
                    <p>13.2 The specification for Products may be changed by the manufacturer at any time up to delivery and
                        provided such change does not materially alter the functionality of Products you may not cancel your
                        order. We will not be liable for any loss or damage suffered in connection with any change. We will
                        use our reasonable endeavor’s to advise you of any such impending variation as soon as we are able
                        or upon our receiving notice of the same (as appropriate). You must check specifications for
                        products prior to making an order.</p><br>
                    <b>14. INTELLECTUAL PROPERTY RIGHTS</b>
                    <br><br>
                    <p>No right of intellectual property in any Product is granted to or vested in you other the right to
                        use the same. You will fully indemnify us against all liabilities, costs and expenses resulting from
                        any claim that our use of any specification provided by you in connection with the Contract
                        infringes the rights of any third party.</p><br>
                    <b>15. WEEE Regulations</b>
                    <br><br>
                    <p>You will be responsible for disposing of the Goods at the end of their life at your own cost.</p><br>
                    <b>16. ORDER</b>
                    <br><br>
                    <p>Any order put in by you shall be firm and irrevocable as soon as the Company has received your order
                        form. The minimum amount of any order shall be £100.</p><br>
                    <b>17. FORCE MAJEURE</b>
                    <br><br>
                    <p>We will not have any liability under the Contract and may cancel or reduce the volume of Products to
                        be delivered under it if we are prevented from or delayed in delivering or performing by any
                        circumstances beyond our reasonable control including but not limited to industrial action, war,
                        fire, prohibition or enactment of any kind, or failures or acts on the part of our suppliers or sub-
                        contractors or any other third parties (including your bank).</p><br>
                    <b>18. ASSIGNMENT</b>
                    <br><br>
                    <p>We may freely assign, sub-contract or otherwise transfer in whole or in part the Contract. You may
                        not however do so without our written agreement.</p><br>
                    <b>19. GOVERNING LAW</b>
                    <br><br>
                    <p>19.1 The Contract is governed by the laws of England and the English courts shall have the
                        nonexclusive jurisdiction to resolve any disputes arising out of or under it.</p>
                    <p>19.2 Notices required or permitted to be given under these conditions must be in writing (including
                        without limitation by electronic mail) addressed to the relevant party at its registered office or
                        principal place of business.</p>
                    <p>19.3 No waiver by us of any breach of the Contract by you is considered as a waiver of any subsequent
                        breach of the same or any other provision. If any provision of these Conditions is held by a
                        competent authority to be invalid or unenforceable in whole or in part the validity of the other
                        provisions of these Conditions and the remainder of the provision in question is not affected.</p>
                </div>
            </div>
        </div>
        </div>

    @endsection
