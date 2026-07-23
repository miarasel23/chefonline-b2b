<footer>

    <div id="footer-top">
        <div class="content_footer_top container">
            <div id="footer_aboutus_block">
                <div>
                    <div class="phoneno column">
                        <span class="phone-icon icon"></span>
                        <div class="contact_phone">0330 380 1000</div>
                        <div class="contact_phone">0203 598 5956</div>
                    </div>
                    <div class="email column">
                        <span class="email-icon icon"></span>
                        <div class="contact_email-1">
                            <img src="{{ asset('assets/image/catalog/support-email.jpg') }}" alt="Support Email" />
                        </div>
                        <div class="contact_email-2">
                            <img src="{{ asset('assets/image/catalog/info-email.jpg') }}" alt="Info Email" />
                        </div>
                    </div>
                    <ul class="social-link">
                        <li class="facebook social_block">
                            <a target="_blank" href="https://www.facebook.com/ChefOnlinePartners/"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter social_block">
                            <a target="_blank" href="https://twitter.com/ChefOnlineUK"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="linkdin social_block">
                            <a target="_blank" href="https://www.linkedin.com/company/chef-online"><i
                                    class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="container">
        <div class="row">
            <div class="content_footer_left">
                <div>
                    <div class="footer_logo col-sm-3 column">
                        <div class="footerlogo">
                            <a href="{{ url('https://www.chefonline.com/epos/') }}">
                                <img src="{{ asset('assets/image/catalog/footer_logo.png') }}" alt="Footer Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 column">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.chefonline.com/epos/terms">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="https://www.chefonline.com/epos/contact">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-3 column">
                <h5>Categories</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.chefonline.com/epos/package">ChefOnline EPoS Packages</a>
                    </li>
                    <li><a href="https://www.chefonline.com/epos/addon">Add ons</a></li>
                </ul>
            </div>

            <div class="content_footer_right">
                <script>
                    function subscribe() {
                        var emailpattern =
                            /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        var email = $("#txtemail").val();
                        if (email != "") {
                            if (!emailpattern.test(email)) {
                                $(".text-danger").remove();
                                var str = '<span class="error">Invalid Email</span>';
                                $("#txtemail").after(
                                    '<div class="text-danger">Invalid Email</div>'
                                );

                                return false;
                            } else {
                                $.ajax({
                                    url: "index.php?route=extension/module/newsletters/news",
                                    type: "post",
                                    data: "email=" + $("#txtemail").val(),
                                    dataType: "json",

                                    success: function(json) {
                                        $(".text-danger").remove();
                                        $("#txtemail").after(
                                            '<div class="text-danger">' + json.message + "</div>"
                                        );
                                    },
                                });
                                return false;
                            }
                        } else {
                            $(".text-danger").remove();
                            $("#txtemail").after(
                                '<div class="text-danger">Email Is Require</div>'
                            );
                            $(email).focus();

                            return false;
                        }
                    }
                </script>

                <div class="newsletter-container">
                    <div class="newsletter_inner">
                        <div class="newshead">Newsletter</div>
                        <div class="sub_text">
                            <div></div>
                        </div>
                        <div class="newsletter">
                            <form method="post">
                                <div class="form-group required">
                                    <div class="newsletter-box">
                                        <input type="email" name="txtemail" id="txtemail" value=""
                                            placeholder="E-Mail" class="form-control input-lg" />
                                        <button type="submit" class="btn btn-default btn-lg"
                                            onclick="return subscribe();">
                                            subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copy-right">
                <div id="bottom-footer">
                    <div class="powerd">
                        Copyright © chefonline.com {{ date('Y') }}. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function() {
        $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            disableOn: 200,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false,
        });
    });
</script>
</body>

</html>
