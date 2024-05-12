@extends('User.master')
@section('content')

<!-- main-content -->
    <!-- About home section  -->
    <div class="about-home-section">
        <div class="about-home-content">
            <h1>About Us</h1>
            <div class="about-content-container">
                <a href="./index.html"><h3>Home</h3></a>
                <i class="fa-solid fa-greater-than"></i>
                <h3>About us</h3>
            </div>
        </div>
    </div>
    <!-- About home section  -->
    <!-- about first section  -->
    <section class="about-container" id="about-shop">
        <div class="about-imgbox">
            <div class="exprineces-box">
                <div class="sub-head-box">
                    <div  id="head4"> 
                <h1 class="num" data-val="10">10</h1>
                <span>+</span>
                </div>
                <p>Years Experience</p>
                </div>
                <img src="{{asset('asset/user/image/daraz.jpg')}}" alt="">
            </div>
            <div class="second-img-box">
                <img src="{{asset('asset/user/image/pak.jpg')}}" alt="">
            </div>
        </div>
        <div class="about-content-box">
            <h2>About us</h2>
            <h1>We Are Best Electrical Store in Town Since 2010</h1>
            <p>Since 2010, our electric shop has been the premier destination for all your electrical needs. We pride ourselves on offering the highest quality products and exceptional customer service.</p>
            <div class="sub-content-box">
                <div class="brand-box">
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>International Brands</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>
                            Have heen certified</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>Quality of our research</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>Breadth of our capabilities</span>
                    </div>
                </div>
                <div class="brand-box">
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>Trustworthy</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>High integrity</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span>Providing The best product</span>
                    </div>
                    <div class="brand-content">
                        <i class="fa-solid fa-check"></i>
                        <span> Global reach of our business</span>
                    </div>
                </div>
            </div>
            <button>About Us</button>
        </div>
    </section>
    <!-- about first section  -->
    <!-- about-second-container  -->
    <section class="about-second-container" id="brands-&-awards">
        <div class="about-card-container">
            <div class="about-card">
                <i class="fa-solid fa-cube"></i>
                <div class="sub-card">
                    <h1 class="num" data-val="1500">0,000</h1>
                    <span>+</span>
                </div>
                <span id="spa1">Brands</span>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-users"></i>
                <div class="sub-card">
                    <h1 class="num" data-val="789">000</h1>
                    <span>+</span>
                </div>
                <span id="spa1">Coustomers</span>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-clipboard"></i>
                <div class="sub-card">
                    <h1 class="num" data-val="799">000</h1>
                    <span>+</span>
                </div>
                <span id="spa1">Products</span>
            </div>
            <div class="about-card">
                <i class="fa-solid fa-award"></i>
                <div class="sub-card">
                    <h1 class="num" data-val="89">00</h1>
                    <span id="span2">+</span>
                </div>
                <span id="spa1">Awards</span>
            </div>
        </div>
    </section>
    <!-- about-second-container  -->
<!-- coustomer cards  -->
<div class="review_cards container" id="customer-reviews">
    <div class="review_cards2">
<div class="review_cards1">
<div class="stars">
    <i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i>
    <i class="fa-solid fa-star-half" style="color: #ecdb18;"></i>
</div>
<div class="profil">
    <img src="{{asset('asset/user/image/profile_1.jpg')}}">
    <div class="profile_name">
    <h5>Kelly Smith</h5>
    <h6>Customers</h6>
</div>
</div>
<div class="review_text">I am very satisfied with my purchase. It's nice that it comes in a white,
    So Thank you for designing a proper tower fan.!!
</div>
</div>
</div>
<div class="review_cards2">
    <div class="review_cards1">
    <div class="stars">
        <i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i>
    </div>
    <div class="profil">
        <img src="{{asset('asset/user/image/profile_2.jpg')}}">
        <div class="profile_name">
        <h5>Devina Tan</h5>
        <h6>Customers</h6>
    </div>
    </div>
    <div class="review_text">I am very satisfied with my purchase. It's nice that it comes in a white,
        So Thank you for designing a proper tower fan.!!
    </div>
    </div>
    </div>
    <div class="review_cards2" id="review-card3">
        <div class="review_cards1">
        <div class="stars">
            <i class="fa-solid fa-star" style="color: #ecdb18;"></i>
            <i class="fa-solid fa-star" style="color: #ecdb18;"></i>
            <i class="fa-solid fa-star" style="color: #ecdb18;"></i>
            <i class="fa-solid fa-star" style="color: #ecdb18;"></i>
            <i class="fa-solid fa-star" style="color: #ecdb18;"></i>
        </div>
        <div class="profil">
            <img src="{{asset('asset/user/image/profile_3.jpg')}}">
            <div class="profile_name">
            <h5>Martin Fred</h5>
            <h6>Customers</h6>
        </div>
        </div>
        <div class="review_text">I am very satisfied with my purchase. It's nice that it comes in a white,
            So Thank you for designing a proper tower fan.!!
        </div>
        </div>
        </div>

</div>

<!-- coustomer cards  -->
<!-- blur img  -->
<div class="blur_img">
    
    <div class="blur_img_text">
    <span>Our Store</span>
    <h2>Get 50% Discount by Becoming a Member</h2>
    <p>
        To become a part of this company,click the botton given below.
    </p>
    <button>JOIN MEMBER</button>
</div>
</div>
<!-- blur img  -->
    <!-- about team crads  -->
    <div class="team-content">
        <h2>Friendly Team</h2>
        <h1>Meet Our Best Team</h1>
    </div>
    <div class="team-card-container" id="teams-meet">
        <div class="team-card" id="team1">
            <div class="team-content-box">
                <span>Vincent Doe</span>
                <h1> Employee</h1>
                <div class="team-icon-box">
                    <div><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                    <div><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></div>
                    <div><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
        <div class="team-card" id="team2">
            <div class="team-content-box">
                <span>Jhon Doe</span>
                <h1> Employee</h1>
                <div class="team-icon-box">
                    <div><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                    <div><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></div>
                    <div><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
        <div class="team-card" id="team3">
            <div class="team-content-box" >
                <span>Gerry Kail</span>
                <h1> Employee</h1>
                <div class="team-icon-box">
                    <div><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                    <div><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></div>
                    <div><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about team crads  -->


@endsection