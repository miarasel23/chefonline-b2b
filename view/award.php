<section id="award-hero" style="position: relative; overflow: hidden;">
    <div class="hero-content" style="position: relative; z-index: 2; text-align: center;">
        <h2 style="color: white; font-size: 5rem; font-family: Arial, sans-serif; margin-bottom: 10px;">
            ASIAN RESTAURANT AND TAKEAWAY AWARDS
        </h2>
        <h1 style="color: white; font-size: 10rem; font-family: 'Times New Roman', serif; font-weight: bold; margin: 10px 0;">
            GRAND FINALE & GALA EVENING
        </h1>
        <p style="color: white; font-size: 3rem; margin: 10px 0;">OCT 2024</p>
        <div style="margin: 10px 0;">
            <hr style="width: 50px; margin: 10px auto; border: 1px solid white;">
        </div>
        <p style="color: white; font-family: 'Cursive', sans-serif; font-size: 5rem; font-style: italic;">
            "Oscar Of The Curry Industry"
        </p>
        <p style="color: white; font-size: 3rem; margin-top: 5px;">
            BBC & SKY
        </p>
    </div>

    <!-- Background -->
    <div class="hero-background">
        <video autoplay muted loop playsinline>
            <source src="https://www.chefonline.com/assets/video/award-bg-vdo.mov" type="video/mp4">
            <source src="https://www.chefonline.com/assets/video/award-bg-vdo.mov" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>
</section>


<section id="quotation-section" style="position: relative; overflow: hidden;">
    <div class="quotation-content" style="position: relative; z-index: 2; text-align: center; padding: 80px 20px;">
        <blockquote style="font-family: 'Times New Roman', serif; font-size: 2rem; font-weight: bold; color: white; margin: 0 auto; max-width: 900px; line-height: 1.5;">
            Rewarding excellence, craft, and great taste, the Asian Restaurant & Takeaway Awards (ARTA)
            is a nationwide celebration of British-Asian Cuisine and the individuals involved in its creation.
            This Asian Restaurant & Takeaway Awards asks members of the public to vote for their favourite
            restaurants and takeaway from across the UK. ARTA will then challenge the regional winners to
            a series of live ‘cook offs’, before crowning one overall ‘Champion of Champions’.
        </blockquote>
    </div>

    <!-- Background Image -->
    <!-- <div class="quotation-background">
        <img src="https://www.chefonline.com/assets/images/your-background-image.jpg" alt="Background Image">
    </div> -->
</section>



<section id="chefonline-career" style="position: relative; overflow: hidden;">
    <div class="container" style="position: relative; z-index: 2;">
        <!-- Second Section -->
        <div class="row align-items-center swap-order" style="display: flex; align-items: center; flex-wrap: wrap;">
            <div class="col-md-5 d-flex justify-content-center align-items-center text-center">
                <div>
                    <h1 style="color: gold; font-family: 'Times New Roman', serif; font-weight: bold; font-size: 3rem;">
                        Employee Recognition Award
                    </h1>
                    <p style="color: white; font-family: Arial, sans-serif; font-size: 1.2rem; margin-top: 20px;">
                        Celebrate the outstanding achievements and dedication of our team members with the
                        Employee Recognition Award. This prestigious honour is awarded to employees who
                        go above and beyond, exemplifying excellence in their work and making a positive
                        impact on our organisation.
                    </p>
                </div>
            </div>
            <div class="col-md-7 text-center d-flex justify-content-center align-items-center">
                <img src="https://www.chefonline.com/assets/images/crest.png" alt="Award Icon">
            </div>
        </div>
    </div>
</section>



<!-- CSS for Styling -->
<style>
    #quotation-section {
        position: relative;
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .quotation-content {
        position: relative;
        z-index: 2;
        padding: 50px;
        background: rgba(0, 0, 0, 0.6);
        /* Semi-transparent background to make text more readable */
        border-radius: 10px;
    }

    blockquote {
        font-style: italic;
        quotes: "“" "”" "‘" "’";
    }

    blockquote:before {
        content: open-quote;
        font-size: 3rem;
        color: gold;
    }

    blockquote:after {
        content: close-quote;
        font-size: 3rem;
        color: gold;
    }

    .quotation-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }

    .quotation-background img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.5);
        /* Darkens the background image for readability */
    }

    @media (max-width: 768px) {
        blockquote {
            font-size: 1.5rem;
        }
    }


    #chefonline-career {
        position: relative;
        background-image: url('https://www.chefonline.com/assets/images/arta-bg.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        /* Makes the background image fixed */
        background-repeat: no-repeat;
    }

    #award-hero {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .hero-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
    }

    .hero-background video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 0.9rem;
        }
    }
</style>