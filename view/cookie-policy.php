
<!--banner Section starts Here -->
<div class="title-banner service-banner spacetop">
   <div class="banner-property privacypolicy parallax">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <a href="#" class="shipping">ChefOnline</a>
                  <h1>Cookie Policy</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--banner Section ends Here --> 
<!--Section area starts Here -->
<section id="section">
   <!--Section box starts Here -->
   <div class="section">
      <!-- Features Section starts here -->
      <div class="aboutus-section">
         <div class="container">
            <div class="row padding-bottom">
               <div class="col-md-12">
                     <ul class="breadcrumb">
                        <li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a></li>
                        <li class="active">Cookie Policy</li>
                     </ul>
                  <!-- <div class="heading">
                      <h3>Privacy Policy</h3>
                  </div> -->
               </div>
               <div class="col-md-12">
                  <h2 class="m-b-5 m-t">Cookies Policy</h2>
                <p>We use cookies to improve the quality of our site and service, and to try and make your browsing experience meaningful.</p>
                <p>When you enter our site our web server sends a cookie to your computer which allows us to recognise your computer but not specifically who is using it. By associating the identification numbers in the cookies with other customer information when for example you log-in to the site, then we know that the cookie information relates to you.</p>
                <p>By proceeding beyond this page, you consent to our cookie settings and agree that you understand this Cookies Policy which explains how you can manage your cookie choices and preferences.</p>
                <h4>What are cookies?</h4>
                <p>Cookies are small pieces of information which are issued to your computer when you visit a website and which store and sometimes track information about your use of the site. A number of cookies we use last only for the duration of your web session and expire when you close your browser. Other cookies are only used where you ask us to remember your login details for when you next return to the site and will last for a longer duration.</p>
                <h4>We use the following cookies</h4>
                <hr>
                <p><b>Strictly necessary cookies.</b> These are cookies that are required for secured login, using shopping cart or availing an e-billing service.</p>
                <p><b>Analytical/performance cookies.</b> They allow us to recognise and count the number of visitors and to see how visitors move around our website thus helping us to improve the way our website works.</p>
                <p><b>Functionality cookies.</b> These are used to recognise you when you return to our website. This enables us to personalise our content for you, greet you by name and remember your preferences if any.</p>
                <p><b>Targeting cookies.</b> These cookies record your visit to our website, the pages you have visited and the links you have followed. We will use this information to make our website and the advertising displayed on it more relevant to your interests.</p>
                <p>Please note that third parties (including, for example, advertising networks and providers of external services like web traffic analysis services) may also use cookies, over which we have no control. These cookies are likely to be analytical/performance cookies or targeting cookies.</p>
                <p>You can block cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies. However, if you use your browser settings to block all cookies (including essential cookies) you may not be able to access all or parts of our site.</p>
              </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- Features Section starts here -->
   </div>
   <!--Section box ends Here --> 
</section>
<!--Section area ends Here --> 
<style>
body {
   line-height: 1.8;
}
.policylink li {
   color: #ff0000;
}

.policylink a {
   color: #ff0000;
   text-decoration: underline;
   font-style: italic;
}

.policylink a:hover,
.policylink a:focus {
   text-decoration: none;
}

.policylink2 {
   color: #ff0000;
   text-decoration: underline !important;
   font-style: italic;
}

.policylink2:hover,
.policylink2:focus {
   color: #000 !important;
   text-decoration: none;
}

.highlightcolor {
   color: #ff0000;
   text-decoration: underline;
   font-style: italic;
}

.terms-content.policy li {
   color: #58595b;
}
.terms-area header>h2 {
    color: #58595b;
    margin: 1em 0 0;
    text-transform: uppercase;
    font-size: 2em;
    font-weight: 500
}
.terms-area .terms-content h2 {
    border-bottom: 1px solid #ccc;
    color: #58595b;
    font-size: 1.3em;
    font-weight: 200;
    margin: .3em 0 .6em;
    padding-bottom: .3em
}
.terms-area .terms-content p {
    color: #58595b;
    line-height: 1.5em;
    padding-left: 0;
    text-align: justify;
    margin-bottom: 1em;
    margin-top: 1em
}
</style>
<script>
jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>