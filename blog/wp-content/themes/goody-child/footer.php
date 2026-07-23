<?php
/**
 * The template for displaying the footer
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */
?>
        </div><!-- .site-content -->
<footer id="footer">
           <!--Footer box starts Here -->
           <div class="footer clearfix">
              <div class="container">
                 <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="our-address">
                          <h5>QUICK LINKS</h5>
                          <div class="quick-list">
                             <ul>
                                <li>
                                   <a href="https://www.chefonline.com/faq">FAQ</a>
                                </li>
                                <li>
                                   <a href="https://www.chefonline.com/contact">CONTACT US</a>
                                </li>
                                <li>
                                   <a href="https://www.chefonline.com/blog/">CHEFONLINE BLOG</a>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="our-address">
                          <h5>QUICK LINKS</h5>
                          <div class="quick-list">
                             <ul>
                                <li>
                                   <a href="https://www.chefonline.com/privacy-policy">PRIVACY POLICY</a>
                                </li>
                                <li>
                                   <a href="https://www.chefonline.com/cookie-policy">HOW DO WE USE COOKIES?</a>
                                </li>
                                <li>
                                   <a href="https://www.chefonline.com/terms-conditions">TERMS &amp; CONDITION</a>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div>

<!--                     <div class="col-xs-12 col-sm-6 col-md-3">
                       <div class="our-address">
                          <h5>Company</h5>
                          <div class="quick-list">
                             <ul>
                                <li>
                                   <a target="_blank" href="https://www.chefonline.com/business-registration">Restaurant sign up</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.co.uk/cookies-policy">How do we use cookies?
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.co.uk/mobile-apps">Mobile Apps
                                    </a>
                                </li>
                                <li>
                                    <a href="
                                        https://www.chefonline.co.uk/contact-us">Contact us
                                    </a>
                                </li>
                                <li>
                                   <a href="https://www.chefonline.co.uk/privacy-policy">Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.co.uk/terms-and-conditions">Terms &amp; Conditions
                                    </a>
                                </li>
                                <li>
                                   <b><a href="http://blog.chefonline.com">ChefOnline Blog</a></b>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div> -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="our-address">
                          <h5>SOCIAL MEDIA</h5>
                          <p>FOLLOW US ON</p>
                           <div class="quick-list">
                              <ul class="social">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/ChefOnlinePartners/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/chefonlineuk">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/chefonlineuk">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.pinterest.com/chefonlineuk">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>								  
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCiuWjkTLdvJQ6EJECQa-7Zw">
                                       <i class="fa fa-youtube" aria-hidden="true"></i>

                                    </a>
                                 </li>
								<li>
                                    <a target="_blank" href="https://www.linkedin.com/company/chef-online">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>								  
                              </ul>
                           </div>
                       </div>
                    </div>
              </div>
           </div>
           <!--Footer box ends Here -->
        </div></footer>
        <div class="copyright text-center">
                   <div class="container">
                      <div class="col-xs-12 col-sm-12 copyright-content">
                        Copyright © <?=date('Y')?>
                        <a target="_blank" href="
                            https://www.chefonline.com">ChefOnline
                        </a>. All rights reserved.
                      </div>
                   </div>
                </div>

<?php wp_footer();?>
<style>
	

    footer#footer .footer {
        background-color: #fff;
        border-color: #e9eaee;
        padding-bottom: 15px;
        padding-top: 45px;
        border-top: 1px solid #f7f7f7;
    }
    footer#footer .footer .our-address {
        margin-bottom: 25px;
        overflow: hidden;
    }
    footer#footer .footer h5 {
        color: #000;
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 14px;
        padding-bottom: 15px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.35px;
    }
    footer#footer .footer h5::after {
        background: #ed193a;
        bottom: 0;
        content: "";
        display: block;
        height: 2px;
        left: 0;
        position: absolute;
        width: 20px;
        transition: all 0.3s ease;
    }
    footer#footer .footer h5:hover::after {
        width: 45px;
    }
    footer#footer .quick-list {
        float: left;
    }
    footer#footer .quick-list ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    footer#footer .quick-list ul li {
        border-bottom: 1px solid #ececec;
    }
    footer#footer .quick-list ul li:last-child {
        border: none;
    }
    footer#footer .quick-list li a {
        color: #000;
        display: block;
        padding: 10px 0;
        font-size: 13px;
        -webkit-transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -ms-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
    footer#footer .quick-list li a:hover {
        color: #ed193a;
    }
    footer#footer p {
        color: #000;
        font-size: 13px;
    }
    footer#footer .quick-list {
        float: left;
    }
    footer#footer .quick-list ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    footer#footer .social {
        padding: 0;
        margin: 0;
        list-style-type: none;
        display: inline-block;
    }
    footer#footer .quick-list .social li {
        border: medium none;
        display: inline-block;
        float: left;
        margin-right: 3px;
        text-align: center;
        vertical-align: top;
    }
    footer#footer .quick-list li a {
        color: #000;
        display: block;
        padding: 10px 0;
        -webkit-transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -ms-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
    footer#footer .social li a .fa {
        border-radius: 0;
        color: #ffffff;
        font-size: 13px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        transition: all 0.9s ease 0s;
        width: 30px;
    }
    footer#footer .social li a .fa.fa-linkedin {
        background: #0B74B1;
    }	
    footer#footer .social li a .fa.fa-facebook {
        background: #3b5998;
    }
    footer#footer .social li a .fa.fa-twitter {
        background: #00bdec;
    }
    footer#footer .social li a .fa.fa-pinterest {
        background: #BD081C;
    }
    footer#footer .social li a .fa.fa-instagram {
        background: #D22D8F;
    }
    footer#footer .social li a .fa.fa-youtube {
        background: #FE0002 none repeat scroll 0 0;
    }
    footer#footer .quick-list .social li a {
        padding: 0;
    }
    .copyright {
        background-color: #000;
        border-top: 1px solid #4b4c4d;
        color: #fff;
        display: table;
        padding-bottom: 20px;
        padding-top: 20px;
        width: 100%;
    }
    .copyright-content {
        display: table-cell;
        line-height: 22px;
        vertical-align: middle;
        font-size: 11px;
    }
    .copyright-content a {
        color: #ed193a;
        -webkit-transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -ms-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
</style>
</body>
</html>