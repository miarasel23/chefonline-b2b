<style type="text/css">
    .footer-contact .add-area a:hover {
        text-decoration: none;
    }
</style>

<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Success
                    <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for contacting us. We will get back to you
                    soon.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<style type="text/css">
    .new-footer {
        background-color: #ffffff;
        color: #333333;
        font-family: 'Poppins', sans-serif;
        padding-top: 40px;
        padding-bottom: 20px;
    }

    .newsletter-bar {
        background-color: #FDF9FA;
        border: 1px solid #F3E5E8;
        border-radius: 8px;
        padding: 25px;
        text-align: center;
        margin-bottom: 50px;
    }

    .newsletter-bar p {
        font-size: 15px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .newsletter-bar form {
        display: inline-flex;
        justify-content: center;
        gap: 15px;
        width: 100%;
        max-width: 500px;
    }

    .newsletter-bar input[type="email"] {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        outline: none;
        font-size: 14px;
        background-color: #ffffff;
    }

    .newsletter-bar button {
        background-color: #E21B36;
        color: #ffffff;
        border: none;
        padding: 10px 30px;
        font-size: 14px;
        font-weight: bold;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .newsletter-bar button:hover {
        background-color: #c8162e;
    }

    .footer-links-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }

    .footer-link-col h4 {
        font-size: 14px;
        font-weight: 700;
        color: #111;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .footer-link-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-link-col ul li {
        margin-bottom: 12px;
        border-bottom: 1px solid #cccccc;
        padding-bottom: 6px;
    }

    .footer-link-col ul li:last-child {
        border-bottom: none;
    }

    .footer-link-col ul li a {
        color: #444;
        font-size: 13px;
        text-decoration: none;
        transition: color 0.2s;
    }

    .footer-link-col ul li a:hover {
        color: #E21B36;
    }

    .social-header {
        font-size: 14px;
        font-weight: 700;
        color: #111;
        margin-top: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .social-icons-row {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .social-icon-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 4px;
        color: #ffffff !important;
        font-size: 16px;
        transition: opacity 0.2s;
    }

    .social-icon-btn:hover {
        opacity: 0.85;
    }

    .social-facebook {
        background-color: #3b5998;
    }

    .social-twitter {
        background-color: #000000;
    }

    .social-instagram {
        background-color: #c13584;
    }

    .social-youtube {
        background-color: #ff0000;
    }

    .social-pinterest {
        background-color: #bd081c;
    }

    .social-linkedin {
        background-color: #0077b5;
    }

    @media (max-width: 768px) {
        .footer-links-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 40px 30px;
            width: 100%;
        }

        .footer-links-grid .footer-link-col {
            min-width: 0;
            width: 100%;
        }

        .footer-links-grid .cuisines-col {
            grid-column: 1;
            grid-row: 1;
        }

        .footer-links-grid .areas-col {
            grid-column: 2;
            grid-row: 1;
        }

        .footer-links-grid .company-col {
            grid-column: 1;
            grid-row: 2;
        }

        .footer-links-grid .legal-col {
            grid-column: 2;
            grid-row: 2;
        }

        .newsletter-bar form {
            flex-direction: column;
        }
    }
</style>

<footer id="footer" class="new-footer">
    <div class="container">
        <!-- Newsletter Signup Bar -->


        <?php include __DIR__ . '/footer-badges.php'; ?>

        <div class="newsletter-bar">
            <p>Don't Miss Out! Join Our Newsletter For Exclusive Updates Delivered Straight To Your Inbox</p>
            <form onsubmit="subscribe(event);">
                <input type="email" placeholder="Enter your e-mail" maxlength="100" name="subscription_email"
                    id="subscription_email" required="required">
                <button type="submit">Subscribe</button>
            </form>
            <div id="return_msg" style="margin-top: 10px;">&nbsp;</div>
        </div>

        <!-- Links Grid -->
        <div class="footer-links-grid">
            <!-- Top Cuisines -->
            <div class="footer-link-col cuisines-col">
                <h4>Top Cuisines</h4>
                <ul>
                    <li><a target="_blank" href="https://www.chefonline.com/indian">Indian</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/bangladeshi">Bangladeshi</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/fast-food">Fast Food</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/thai">Thai</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/pizza">Pizza</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/italian">Italian</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/cuisines">View all cuisines</a></li>
                </ul>
            </div>

            <!-- Serving Areas -->
            <div class="footer-link-col areas-col">
                <h4>Serving Areas</h4>
                <ul>
                    <li><a target="_blank" href="https://www.chefonline.com/london">London</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/newcastle">Newcastle</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/rochester">Rochester</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/watford">Watford</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/liverpool">Liverpool</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/oxford">Oxford</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/takeaways">View all locations</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="footer-link-col company-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="faq">Faq</a></li>
                    <li><a href="about-us">About us</a></li>
                    <li><a href="contact">Contact us</a></li>
                    <li><a target="_blank" href="https://www.chefonline.com/blog/">ChefOnline Blog</a></li>
                    <li><a target="_blank" href="https://www.chefonline.co.uk/partner">Restaurant sign up</a></li>
                </ul>
            </div>

            <!-- Legal & Social -->
            <div class="footer-link-col legal-col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="terms-conditions">Terms & Conditions</a></li>
                    <li><a href="terms-of-use">Terms of Use</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                    <li><a href="cookie-policy">How do we use cookies?</a></li>
                </ul>

                <h4 class="social-header">Follow Us</h4>
                <div class="social-icons-row">
                    <a href="https://www.facebook.com/ChefOnlinePartners/" target="_blank"
                        class="social-icon-btn social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/SRS_ChefOnline" target="_blank"
                        class="social-icon-btn social-twitter"><i class="fa fa-close"></i></a>
                    <a href="https://www.instagram.com/chefonlineuk" target="_blank"
                        class="social-icon-btn social-instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UC8rNSm4umip2dGbmlR7ph6g" target="_blank"
                        class="social-icon-btn social-youtube"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.pinterest.com/chefonlineuk" target="_blank"
                        class="social-icon-btn social-pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="https://www.linkedin.com/company/chef-online" target="_blank"
                        class="social-icon-btn social-linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center">
    <div class="container">
        <div class="col-xs-12 col-sm-12 copyright-content">
            Copyright &copy; <?php echo date("Y"); ?> ChefOnline. All rights reserved.
        </div>
    </div>
</div>
<!--Footer area ends Here -->
</div>
<!--Wrapper Section Ends Here -->

<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-ui.js">
</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/owl.carousel.js">
</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/validation.min.js">
</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootval.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/site.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- <script type="text/jscript" language="javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.isotope.min.js"></script> -->
<script src="<?php echo BASE_URL; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/custom.js"></script>
<script>
    new WOW().init();
</script>
<script src='<?php echo BASE_URL; ?>/assets/js/jquery.justifiedGallery.min.js' type='text/javascript'></script>
<link href='<?php echo BASE_URL; ?>/assets/css/justifiedGallery.min.css' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/livicons-1.4.min.js">
</script>
<script src="<?php echo BASE_URL; ?>/assets/js/raphael.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/main.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/businessform.script.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/blackFridayScript.js"></script>

<script type="text/javascript">
    function subscribe(e) {

        e.preventDefault();
        var email = document.getElementById('subscription_email').value;
        var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

        if (pattern.test(email)) {
            document.getElementById('return_msg').innerHTML =
                "<img src='http://www.gtechsolution.co.uk/assets/images/loader.gif' height='16' width='16'>";
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (xmlhttp.responseText == 1) {
                        document.getElementById('return_msg').innerHTML = 'You are successfully subscribed.';
                    } else if (xmlhttp.responseText == 2) {
                        document.getElementById('return_msg').innerHTML = 'Your email already in subscription list.';
                    } else {
                        document.getElementById('return_msg').innerHTML = 'Subscription Failed. Please Try Later';
                    }
                    document.getElementById('subscription_email').value = "";
                }
            }
            xmlhttp.open("POST", "subscribe.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + email);
        } else {
            document.getElementById('return_msg').innerHTML = "Invalid E-mail Address";
        }

    }
    // jQuery(document).ready(function() { 
    //     var containerEl = document.querySelector('.grapgic-wrapper');

    //     var mixer = mixitup(containerEl);
    // }); 
</script>

<script>
    jQuery(document).ready(function ($) {
        $(".read-more-content").click(function () {
            $(".more-content").show();
            $(".read-less-content").show();
            $(".read-more-content").hide();
        });

        $(".read-less-content").click(function () {
            $(".more-content").hide();
            $(".read-more-content").show();
            $(this).hide();
        });
    });
</script>

</body>

</html>