<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harvel Elctric</title>
    <!-- fontawsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootsrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootsrap cdn -->
    <!-- css link -->
    <link rel="stylesheet" href="{{asset('asset/user/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/user/style.css')}}">
    <!-- css link -->
    <!-- Swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Swiper cdn link -->
    <!-- animation link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation link  -->
    <!-- faviicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/user/image/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/user/image/favicon-32x32.png')}}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/user/image/favicon-16x16.png')}}">
    <!-- faviicon  -->
    <!-- boxicon cdn link  -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <!-- boxicon cdn link  -->


</head>

<body>
<div class="nav">
            <div class="Menu-bar">
                <div><i class="fa-solid fa-bars"></i></div>
            </div>
            <div class="logo">
                <h1>E-book</h1>
            </div>
            <div class="nav-icon">
                <div id="search"><i class="fa-solid fa-magnifying-glass"></i></div>
                <div>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </div>
                <div class="profile-dropdown">
                    <div onclick="toggle()" class="profile-dropdown-btn">
                        <div class="profile-img">
                              R
                        </div>

                        <span>{{Auth::user()->name}}
                            <i class="fa-solid fa-angle-down"></i>
                        </span>
                    </div>

                    <ul class="profile-dropdown-list">
                        <li class="profile-dropdown-list-item">
                            <a href="#">
                            <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                            </a>
                        </li>


                        <hr />

                        <li class="profile-dropdown-list-item">
                            <a href="#">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Side-Bar">
            <div class="cross">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
            <div class="side-logo">
                <h1>E-books</h1>
            </div>
            <div class="nav-links">
                <div class="link">
                    <h2><a href="{{url('E-Book/Home')}}">Home</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/About-Us')}}">About Us</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/Shop')}}">Shop</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/Contact-Us')}}">Contact Us</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/Blog')}}">Blog</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/Store-Locator')}}">Shop Locator</a></h2>
                </div>
                <div class="link">
                    <h2><a href="{{url('E-Book/Site-Map')}}">Site Map</a></h2>
                </div>
            </div>
        </div>
        <div class="Search-Bar">
            <div class="search-cross">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
            <siv class="search-input">
                <input type="text" placeholder="Search Our Product">
                <i class="fa-solid fa-magnifying-glass"></i>
            </siv>
        </div>

    @yield('content')

    <!--footer-->
    <div class="footer1 ">
        <div class="footer">
            <div class="col-1">
                <h5>Useful Links</h5><br>

                <p> Privacy Policy<br></p>
                <p> Terms and Conditions<br></p>
                <p> Disclaimer<br></p>
                <p> Support<br></p>
                <p> FAQ<br>
                </p>
            </div>
            <div class="col-2">
                <h1>Harvel Electric</h1>
                <P>We pride ourselves on building long term relationships by providing a high level of customer service.
                    We are a local Vancouver based business with our office located here in the city.</P>
                <span id="spa3"><i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-x-twitter"></i> <i
                        class="fa-brands fa-instagram"></i> <i class="fa-brands fa-youtube"></i></span>
                <div class="loc">
                    <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Drigh Colony, Shah Faisal Colony
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i> ezetric@domain.com
                    <i class="fa-solid fa-phone" style="color: #ffffff;"></i>(+62)81 2345 1234
                </div>
            </div>
            <div class="col-3">
                <h5>Quick Links</h5><br>
                <P> About Us <br></P>
                <p> Shop<br></p>
                <p>FQA<br></p>
                <p> Contact<br>
                </P>
            </div>
        </div>
    </div>
</div>

    <!-- main-content-->

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- swiper js -->
<!-- jquery script link -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- jquery script link -->
    <!-- java script link -->
    <script src="{{asset('asset/user/./script.js')}}"></script>
    <!-- java script link -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--bootsrap js-->
    <script>
         const search = document.querySelector("#search")  
    const SeaCls = document.querySelector(".search-cross")  
    const body = document.querySelector("body")  

    search.addEventListener("click",function(){
        body.classList.toggle("Search-active")
    })
    SeaCls.addEventListener("click",function(){
        body.classList.toggle("Search-active")
    })
    const Navbar = document.querySelector(".Menu-bar")  
    const NavCls = document.querySelector(".cross")  

    Navbar.addEventListener("click",function(){
        body.classList.toggle("Side-active")
    })
    NavCls.addEventListener("click",function(){
        body.classList.toggle("Side-active")
    })
    let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});

const UserName = `{{Auth::user()->name}}` ;
document.querySelector(".profile-img").innerHTML = UserName[0]
    </script>

</body>

</html>