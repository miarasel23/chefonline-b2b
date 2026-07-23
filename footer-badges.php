<?php
if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    if (preg_match('/\/apps$/', $scriptDir)) {
        $projectDir = substr($scriptDir, 0, -5);
    } else {
        $projectDir = $scriptDir;
    }
    define('BASE_URL', $protocol . $domainName . $projectDir);
}
?>

<style type="text/css">
    .footer-trust-badges {
        background-color: #ffffff;
        color: #333333;
        padding: 40px 0;
        font-family: 'Poppins', sans-serif;
        border-top: 1px solid #cccccc;
        margin-top: 20px;
    }

    .footer-trust-badges .section-divider {
        border-top: 1px solid #cccccc;
        margin: 30px 0;
    }

    .footer-trust-badges .top-partners {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .footer-trust-badges .partner-col {
        flex: 1;
        min-width: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 0;
    }

    .footer-trust-badges .partner-col:not(:last-child) {
        border-right: 1px solid #cccccc;
    }

    .footer-trust-badges .partner-img {
        height: 140px;
        width: auto;
    }

    .footer-trust-badges .mid-sections {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .footer-trust-badges .mid-col {
        flex: 1;
        min-width: 300px;
        padding: 0 20px;
        text-align: center;
    }

    .footer-trust-badges .mid-col:not(:last-child) {
        border-right: 1px solid #cccccc;
    }

    .footer-trust-badges .mid-col h4 {
        font-size: 11px;
        font-weight: 700;
        color: #222222;
        letter-spacing: 1px;
        margin-bottom: 8px;
        text-transform: uppercase;
    }

    .footer-trust-badges .badge-grid-triple {
        display: flex;
        flex-direction: column;
        gap: 15px;
        align-items: center;
    }

    .footer-trust-badges .badge-row {
        display: flex;
        justify-content: center;
        gap: 15px;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-trust-badges .badge-item {
        height: 30px;
        width: auto;
    }

    .footer-trust-badges .badge-item-lg {
        height: 40px;
        width: auto;
    }

    .footer-trust-badges .payment-container {
        width: 100%;
        max-width: 340px;
        margin: 0 auto;
    }

    .footer-trust-badges .payment-top-row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        width: 100%;
    }

    .footer-trust-badges .payment-top-row img:first-child {
        height: 52px;
        width: auto;
    }

    .footer-trust-badges .payment-top-row span {
        color: #ccc;
        font-size: 20px;
    }

    .footer-trust-badges .payment-top-row img:last-child {
        height: 40px;
        width: auto;
    }

    .footer-trust-badges .payment-cards-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px 10px;
        align-items: center;
        width: 100%;
        margin-top: 15px;
    }

    .footer-trust-badges .payment-cards-grid .badge-item {
        box-sizing: border-box;
        width: 90px;
        height: 52px;
        padding: 0;
        border: 1px solid #b0b0b0;
        border-radius: 6px;
        background-color: #ffffff;
        object-fit: contain;
        display: block;
    }

    .footer-trust-badges .payment-cards-grid .badge-item:nth-child(3n+1) {
        justify-self: start;
    }

    .footer-trust-badges .payment-cards-grid .badge-item:nth-child(3n+2) {
        justify-self: center;
    }

    .footer-trust-badges .payment-cards-grid .badge-item:nth-child(3n) {
        justify-self: end;
    }

    .footer-trust-badges .payment-cards-grid .badge-item.amex-badge {
        width: 90px;
        object-fit: cover;
    }

    .footer-trust-badges .payment-cards-grid .badge-item.amex-safekey-badge {
        width: 90px;
        object-fit: contain;
    }

    .footer-trust-badges .badges-grid-2x2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px 20px;
        align-items: center;
        width: 100%;
        max-width: 220px;
        margin: 10px auto 0;
    }

    .footer-trust-badges .badges-grid-2x2 .badge-item-lg {
        height: 60px;
        width: auto;
        max-width: 100px;
        object-fit: contain;
    }

    .footer-trust-badges .badges-grid-2x2 img:nth-child(2n+1) {
        justify-self: start;
    }

    .footer-trust-badges .badges-grid-2x2 img:nth-child(2n) {
        justify-self: end;
    }

    .footer-trust-badges .badges-grid-2x2 img.cyber-essentials-badge {
        height: 68px;
    }

    .footer-trust-badges .support-section {
        text-align: center;
        margin-top: 40px;
    }

    .footer-trust-badges .support-section h4 {
        font-size: 11px;
        font-weight: 700;
        color: #222222;
        letter-spacing: 1px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .footer-trust-badges .support-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .footer-trust-badges .support-logo-img {
        height: 40px;
        width: auto;
    }

    @media (max-width: 768px) {
        .footer-trust-badges .top-partners {
            flex-direction: row !important;
            justify-content: space-between !important;
            gap: 10px !important;
        }

        .footer-trust-badges .partner-col {
            flex: 1 !important;
            min-width: 0 !important;
            padding: 5px 0 !important;
            border-bottom: none !important;
            border-right: none !important;
        }

        .footer-trust-badges .partner-img {
            height: auto !important;
            max-height: 90px !important;
            width: auto !important;
            max-width: 100% !important;
        }

        .footer-trust-badges .mid-col {
            border-right: none !important;
            margin-bottom: 30px;
            padding: 0 10px !important;
        }

        .footer-trust-badges .payment-cards-grid {
            grid-template-columns: repeat(6, 1fr) !important;
            gap: 5px !important;
            max-width: 100% !important;
        }

        .footer-trust-badges .payment-cards-grid .badge-item {
            width: 100% !important;
            height: auto !important;
            aspect-ratio: 90/52;
        }

        .footer-trust-badges .payment-cards-grid .badge-item.amex-badge,
        .footer-trust-badges .payment-cards-grid .badge-item.amex-safekey-badge {
            width: 100% !important;
        }

        .footer-trust-badges .badges-grid-2x2 {
            grid-template-columns: repeat(4, 1fr) !important;
            gap: 10px !important;
            max-width: 100% !important;
        }

        .footer-trust-badges .badges-grid-2x2 .badge-item-lg {
            width: 100% !important;
            height: auto !important;
            max-width: 100% !important;
            aspect-ratio: auto;
        }

        .footer-trust-badges .badges-grid-2x2 img.cyber-essentials-badge {
            height: auto !important;
            max-height: 40px !important;
        }
    }
</style>

<div class="footer-trust-badges">
    <div class="container">
        <!-- Top Partners -->
        <div class="top-partners">
            <div class="partner-col">
                <img src="<?php echo BASE_URL; ?>/assets/new-assets/trust-pilot.svg" alt="Trustpilot"
                    class="partner-img" />
            </div>
            <div class="partner-col">
                <img src="<?php echo BASE_URL; ?>/assets/new-assets/google-partner.svg" alt="Google Partner"
                    class="partner-img" />
            </div>
            <div class="partner-col">
                <img src="<?php echo BASE_URL; ?>/assets/new-assets/meta-partner.svg" alt="Meta Business Partner"
                    class="partner-img" />
            </div>
        </div>

        <div class="section-divider"></div>

        <!-- Middle Columns -->
        <div class="mid-sections">
            <!-- Secure Payments -->
            <div class="mid-col">
                <h4>Secure Payments Via</h4>
                <div class="payment-container">
                    <div class="payment-top-row">
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/barclay-card.svg" alt="Barclaycard" />
                        <span>|</span>
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/ryft.svg" alt="Ryft" />
                    </div>
                    <div class="payment-cards-grid">
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/visa.svg" alt="Visa" class="badge-item" />
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/master-card.svg" alt="Mastercard"
                            class="badge-item" />
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/american-express.svg" alt="American Express"
                            class="badge-item amex-badge" />
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/verified-by-visa.svg" alt="Verified by Visa"
                            class="badge-item" />
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/master-card-secure-code.svg"
                            alt="Mastercard SecureCode" class="badge-item" />
                        <img src="<?php echo BASE_URL; ?>/assets/new-assets/american-express-safe-key.svg" alt="SafeKey"
                            class="badge-item amex-safekey-badge" />
                    </div>
                </div>
            </div>

            <!-- Secured By -->
            <div class="mid-col">
                <h4>Secured By</h4>
                <div class="badges-grid-2x2">
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/security-mactis-pcidss.svg"
                        alt="SecurityMetrics PCI DSS" class="badge-item-lg" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/security-metrics-debit-card.svg"
                        alt="SecurityMetrics Credit Card Safe" class="badge-item-lg" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/cyber-essentials.svg" alt="Cyber Essentials"
                        class="badge-item-lg cyber-essentials-badge" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/cloud-fare.svg" alt="Cloudflare"
                        class="badge-item-lg" />
                </div>
            </div>

            <!-- Service Standard -->
            <div class="mid-col">
                <h4>Service Standard</h4>
                <div class="badges-grid-2x2">
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/ascb.svg" alt="ASCB" class="badge-item-lg" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/irqao.svg" alt="IRQAO" class="badge-item-lg" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/iso-9001.svg" alt="ISO 9001"
                        class="badge-item-lg" />
                    <img src="<?php echo BASE_URL; ?>/assets/new-assets/iso-27001.svg" alt="ISO/IEC 27001"
                        class="badge-item-lg" />
                </div>
            </div>
        </div>

        <div class="section-divider"></div>

        <!-- Proud to Support -->
        <div class="support-section">
            <h4>Proud to Support</h4>
            <div class="support-logos">
                <img src="<?php echo BASE_URL; ?>/assets/new-assets/chefonline-foundation.svg"
                    alt="ChefOnline Foundation" class="support-logo-img" />
                <img src="<?php echo BASE_URL; ?>/assets/new-assets/change-to-sing.svg" alt="Chance to Shine"
                    class="support-logo-img" />

                <!-- Oxfam Green icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 40" class="support-logo-img"
                    style="height: 38px; width: auto;">
                    <rect width="120" height="40" fill="transparent" />
                    <path
                        d="M22,12 C18,12 15,15 15,19 C15,23 18,26 22,26 C26,26 29,23 29,19 C29,15 26,12 22,12 Z M22,10 C27,10 31,14 31,19 C31,24 27,28 22,28 C17,28 13,24 13,19 C13,14 17,10 22,10 Z"
                        fill="#65B32E" />
                    <circle cx="22" cy="19" r="3" fill="#65B32E" />
                    <path d="M22,6 L22,10 M22,28 L22,32 M9,19 L13,19 M31,19 L35,19" stroke="#65B32E" stroke-width="2" />
                    <text x="42" y="27" font-family="'Poppins', sans-serif" font-weight="900" font-size="18"
                        fill="#65B32E" letter-spacing="1">OXFAM</text>
                </svg>

                <!-- Tapas & Beers -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 40" class="support-logo-img"
                    style="height: 38px; width: auto;">
                    <text x="10" y="20" font-family="'Montserrat', sans-serif" font-weight="800" font-size="11"
                        fill="#111111" letter-spacing="2.5">TAPAS &amp; BEERS</text>
                    <path d="M10,26 Q70,31 130,26" stroke="#ed1b34" stroke-width="2" fill="none" />
                </svg>

                <!-- Love NHS -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 40" class="support-logo-img"
                    style="height: 38px; width: auto;">
                    <text x="5" y="16" font-family="'Poppins', sans-serif" font-weight="700" font-size="9"
                        fill="#005EB8">LOVE for</text>
                    <rect x="5" y="20" width="42" height="15" rx="2" fill="#005EB8" />
                    <text x="9" y="32" font-family="'Arial Black', sans-serif" font-weight="900" font-size="11"
                        fill="#FFFFFF" font-style="italic">NHS</text>
                </svg>
            </div>
        </div>
    </div>
</div>