@extends('User.master')
@section('content')

<!-- main content  -->
    <!-- contact-home-section  -->
    <div class="contact-home-section">
        <div class="contact-home-content">
            <h1>Contact</h1>
            <div class="contact-content-container">
               <a href="./index.html"> <h3>Home</h3></a>
                <i class="fa-solid fa-greater-than"></i>
                <h3>Contact</h3>
            </div>
        </div>
    </div>
    <!-- contact-home-section  -->

    <section class="email-container" id="send-email">
        <div class="email-content">
            <h2>Got Any Questions?</h2>
            <h1>Get In Touch</h1>
            <p>Contact us now to experience the game-changing features of our product and revolutionize the way you work.</p>

            <div class="email-card-container">
                <div class="email-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-location-dot"></i>
                        <h1>Location</h1>
                    </div>
                    <p> Cantonment Rd, Drigh Colony Shah Faisal Colony, Karachi</p>
                </div>
                <div class="email-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-phone"></i>
                        <h1>Phone</h1>
                    </div>
                    <p>(+62) 81 234 1234</p>
                </div>
                <div class="email-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-envelope"></i>
                        <h1>Email</h1>
                    </div>
                    <p>electric@domain.com</p>
                </div>
                <div class="email-card" data-aos="fade-right" data-aos-duration="1700">
                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                        <h1>Opening</h1>
                    </div>
                    <p>Mon-Sat 10:00Am-11:00PM</p>
                </div>
            </div>
            <div class="socail-content-box">
                <span>Our Social Media</span>
                <div class="socail-icon">
                    <div><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                    <div><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></div>
                    <div><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                    <div><a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></div>
                </div>
            </div>
        </div>
        <div class="email-input-box">
            <form action="">
            <span>Name</span>
            <input type="text" placeholder="Your Name" required pattern="[A-Z a-z]{3,20}" title="Insert only Alphabets">
            <span>Email</span>
            <input type="email" placeholder="Email@yourmail.com" required title="Insert Your Email Id">
            <span>Subject</span>
            <input type="text" placeholder="Subject" required pattern="[A-Z a-z]{3,30}" title="Insert only Alphabets">
            <span>Message</span>
            <textarea name="" id="" cols="40" rows="40"></textarea >
            <button>Send Message</button>
            </form>
        </div>
    </section>
    <div class="google-map" id="shop-location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.4014203473353!2d67.12925429999999!3d24.884285599999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3396d8dd9916d%3A0x8747518db9005d10!2sHarvel%20Electric!5e0!3m2!1sen!2s!4v1699420223038!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


@endsection