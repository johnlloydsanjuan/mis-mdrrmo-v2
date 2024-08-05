@extends('publiclayout')
@section('public_content')
    <section class="home-title">
        <div class="container-xl wrapper">
            <div class="title-section">
                <center>
                    <h1>This is the official website of</h1>
                    <h1>Municipal Disaster Risk Reduction and Management Office</h1>
                    <h1>Morong, Rizal</h1>
                </center>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container-xl wrapper home-about-flexbox">
            <div class="home-about-image">
                <img src="{{ asset('images/publicpics/mdrrmopic3.jpg') }}" alt="abtpic">
            </div>
            <div class="home-about-text">
                <h3>About MDRRMO Morong, Rizal.</h3>
                <p>The primary objective MDRRMO is to ensure effective and efficient implementation of civil protection
                    programme through an integrated, multi-sectoral and community based approach and strategies for the
                    protection and preservation of life, property and environment.</p>
                <a class="btn btn-secondary home-about-btn mt-3" href="/about">READ MORE</a>
            </div>
        </div>
    </section>

    <section class="home-services">
        <div class="container-xl wrapper">
            <center class="home-services-text">
                <h1>Services</h1>
                <p>At the Municipality Disaster Risk Reduction and Management Office of Morong Rizal, we pride ourselves on
                    providing comprehensive emergency response services
                    to ensure the safety, health, and well-being of our community. Our dedicated team is equipped and ready
                    to handle a wide range of emergency situations, offering the different kind of safety critical services.
                </p>
                <a class="btn btn-primary home-services-btn" href="/services">CHECK OUR SERVICES</a>
            </center>
            <div class="home-services-images">
                <img src="{{ asset('images/publicpics/alarm.png') }}" alt="">
                <img src="{{ asset('images/publicpics/first-aid-kit.png') }}" alt="">
                <img src="{{ asset('images/publicpics/disaster.png') }}" alt="">
                <img src="{{ asset('images/publicpics/rescue.png') }}" alt="">
                <img src="{{ asset('images/publicpics/ambulance.png') }}" alt="">
                <img src="{{ asset('images/publicpics/training.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="home-sitemap">
        <div class="container-xl wrapper home-sitemap-flexbox">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="/services">SERVICES</a></li>
                <li><a href="/faqs">FAQS</a></li>
                <li><a href="/announcements">ANNOUNCEMENTS</a></li>
            </ul>
            <ul>
                <li>
                    <h6>
                        If you need more information about contacts or have specific questions, please check our
                        <a href="/faqs">FAQs</a>.
                        Our Frequently Asked Questions section is designed to provide you with quick and easy access to the
                        most
                        commonly asked questions and detailed answers. Whether you're looking for contact information,
                        seeking assistance, or simply curious about our services, our FAQs are here to help.
                    </h6>
                </li>
            </ul>
            <ul>
                <li>
                    <p>Contact Info:</p>
                </li>
                <li>
                    <p>MDRRMO Morong, Rizal</p>
                </li>
                <li>
                    <p><i class="bi bi-telephone-fill"></i> : 0919-081-7181/(027)212-5741</p>
                </li>
                <li>
                    <p><i class="bi bi-envelope-at-fill"></i> :  mdrrmo.morongrizal1@gmail.com</p>
                </li>
            </ul>
        </div>
    </section>
@endsection