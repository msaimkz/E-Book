@extends('User.master')
@section('content')

<!-- main-content -->
<!-- section 1 -->
<section class="home section1">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="home-content">
                    <h1>Electronic Products Up TO <span>50%</span> Off</h1>
                    <p>
                        Certainly! Electric shops are retail establishments that specialize in selling a wide range
                        of
                        electrical products and appliances. They offer a convenient one-stop shopping experience for
                        customers looking to purchase items such as televisions, refrigerators, washing machines,
                        computers, and various other electronic devices.
                    </p>
                </div>
                <img src="{{asset('asset/user/image/background.png')}}" alt="">
            </div>
            <div class="swiper-slide">
                <div class=" home-content">
                    <h1 id="free">Free Delivery</h1>
                    <p> Enjoy the convenience of free delivery on all orders, no minimum purchase required
                        Get your items delivered to your doorstep at no additional cost with our free delivery
                        service
                        Take advantage of our special offer free delivery on all orders, so you can shop worry-free
                    </p>
                </div>
                <img src="{{asset('asset/user/image/free8.png')}}" alt="">
            </div>
            <div class="swiper-slide">
                <div class="home-content">
                    <h1>Best <span>Gaming</span> Accessories also available</h1>
                    <p>Gaming headset Enhance your gaming experience with crystal-clear sound and precise audio
                        positioning Our high-performance gaming headsets offer immersive audio and noise
                        cancellation features, allowing you to fully immerse yourself in the game.</p>
                </div>
                <img src="{{asset('asset/user/image/gamingpc.webp')}}" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- section 1 -->

<!-- section 2 -->
<section class="section2 finish-card" id="our-service">
    <div class="sec2-card-container">
        <div class="sec2-card" id="sec2-card1">
            <div class="sec2-sub-card">
                <i class="fas fa-hand-holding-usd"></i>
                <div class="sec2-card-title">
                    <h1> Big Cashback</h1>
                    <p>Over 40% Cashback</p>
                </div>
            </div>
        </div>
        <div class="sec2-card" id="sec2-card2">
            <div class="sec2-sub-card">
                <i class="fa-solid fa-truck-fast"></i>
                <div class="sec2-card-title">
                    <h1> Fast Shipping</h1>
                    <p>Order Over $500,00</p>
                </div>
            </div>
        </div>
        <div class="sec2-card" id="sec2-card3">
            <div class="sec2-sub-card">
                <i class="fa-solid fa-credit-card"></i>
                <div class="sec2-card-title">
                    <h1> Quick Payment</h1>
                    <p>100% Secure</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 2 -->

<!-- section 3 -->
<section class="section3" id="about">
    <div class="sec3-container">
        <h3>About us</h3>
        <p>5000+ Buyers Across The World</p>
        <div class="sec3-content-container">
            <div class="sec3-content">
                <div class="count-num">
                    <h1 class="num" data-val="799">000</h1>
                    <span>+</span>
                </div>
                <span>Happy Coustumers</span>
            </div>
            <div class="sec3-content">
                <div class="count-num">
                    <h1 class="num" data-val="30">000</h1>
                    <span>+</span>
                </div>
                <span>Branches</span>
            </div>
            <div class="sec3-content">
                <div class="count-num">
                    <h1 class="num" data-val="1000">000</h1>
                    <span>+</span>
                </div>
                <span>Product Available</span>
            </div>
        </div>
    </div>
</section>
<!-- section 3 -->

<!-- section 4 -->
<section class="section4 selling-card" id="best-product">>
    <h1>Our Popular Books</h1>
    <div class="sec4-card-container">
        @foreach($products as $product)
        <div class="card">
            <div class="card-image">
                <div class="card-icon">
                    <div><a href="{{url('E-Book/Product-Detail',$product->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a></div>
                    <div><a href=""><i class="fa-regular fa-heart"></i></a></div>
                    <div><a href=""><i class="fa-solid fa-bag-shopping"></i></a></div>
                </div>
                <img src="{{asset('images/'.$product->img)}}" alt="">
            </div>
            <div class="card-content">
                <p>{{$product->name}}</p>
                <h2>{{$product->price}}</h2>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- section 4 -->

<!-- section 5 -->
<section class="section5 best-store">
    <div class="sec5-img-box">
        <img src="{{asset('asset/user/image/home-applainces.jpg')}}" alt="">
    </div>
    <div class="sec5-content-box">
        <div class="sec5-first-title">
            <h1>Compitation Annousment</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi quia facere totam exercitationem
                inventore laboriosam neque deleniti odit itaque veniam, optio tempore delectus, repudiandae praesentium?
                Quod iusto illo saepe ducimus libero laudantium numquam quae? Maxime sapiente optio accusantium eligendi
                accusamus dicta, vitae cupiditate nam, atque esse voluptatem sit harum iste!
            </p>
        </div>
        <div class="timer">
            <div class="border-line">
                <span id="days">00</span>
                <h2 class="sec10-dark-text">Days</h2>
            </div>
            <div class="border-line">
                <span id="hours">00</span>
                <h2 class="sec10-dark-text">Hours</h2>
            </div>
            <div class="border-line">
                <span id="minutes">00</span>
                <h2 class="sec10-dark-text">Minutes</h2>
            </div>
            <div>
                <span id="seconds">00</span>
                <h2 class="sec10-dark-text">Seconds</h2>
            </div>
        </div>
        <div class="sec5-third-title">
            <a href="./product.html #best-product">Explore More</a>
        </div>
    </div>
</section>
<!-- section 5 -->

<!-- section 6 -->
<section class="section6" id="best-quality">
    <div class="sec6-first-container">
        <h3>Additional Product</h3>
        <h2>Best Quality Product</h2>
        <div class="sec6-card-container">
            <div class="sec6-main-card">
                <div class="sec6-content">
                    <h1>Best Product Deals</h1>
                    <p>The best electrical product is a high-quality,
                        energy-efficient smart home automation system that seamlessly controls lighting, appliances,
                        security, and more.</p>
                    <a href="./product.html #best-product">Shop Now</a>
                </div>
                <img src="{{asset('asset/user/image/white blub.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- section 6 -->

<!--main-->
<div class="card12" id="offer-card">
    <div class="card1">
        <div class="img1">
            <img src="{{asset('asset/user/image/image1.png')}}">
        </div>
        <div class="content1">
            <P>New Year Sales</P>
            <h4>50% off Discount From
                Online Shop
            </h4>
            <span>
                Shop Now
            </span>
        </div>
    </div>
    <div class="card2">
        <div class="img1">
            <i class="fa-solid fa-truck-fast" id="fast"></i>
        </div>
        <div class="content1">
            <p>Eid Sale</p>
            <h4>Free Shipping For This
                Month</h4>
            <span>
                Shop Now
            </span>
        </div>
    </div>
</div>
<!--review cards -->
<div class="review_cards" id="customer-reviews">
    <div class="review_cards2">
        <div class="review_cards1">
            <div class="stars">
                <i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star"
                    style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i
                    class="fa-solid fa-star" style="color: #ecdb18;"></i>
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
                <i class="fa-solid fa-star" style="color: #ecdb18;"></i><i class="fa-solid fa-star"
                    style="color: #ecdb18;"></i><i class="fa-solid fa-star" style="color: #ecdb18;"></i><i
                    class="fa-solid fa-star" style="color: #ecdb18;"></i>
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
<!--review cards -->
<!-- Winner Slider  -->
<section class="container">
    <h1>Compitation Winner</h1>
      <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="{{asset('asset/user/image/profile_1.jpg')}}" alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Marnie Lotter</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="{{asset('asset/user/image/profile_1.jpg')}}" alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Marnie Lotter</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src="{{asset('asset/user/image/profile_1.jpg')}}" alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Marnie Lotter</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
<!-- Winner Slider  -->

@endsection