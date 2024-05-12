@extends('User.master')
@section('content')

<!-- main content  -->
<!-- product-home section -->
<div class="product-home-section">
    <div class="product-home-content">
        <h1>Shop</h1>
        <div class="product-content-container">
         <a href="./index.html"><h3>Home</h3></a>
            <i class="fa-solid fa-greater-than"></i>
            <h3>Shop</h3>
        </div>
    </div>
</div>
<!-- product-home section -->

<!-- category-card-section -->
<section class="product-category" id="categories">
<h1>Product Categories</h1>
<div class="category-container">
</div>
</section>
<!-- category-card-section -->
<!-- gadjet  -->
<div class="container" id="other">
    <div class="row">
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="{{asset('asset/user/image/c3-removebg.png')}}" alt="">
          <div class="card-img-overlay">
            <h3>Home Gadget</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="{{asset('asset/user/image/c4.png')}}" alt="">
          <div class="card-img-overlay">
            <h3>Gaming Gadget</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="{{asset('asset/user/image/c5.png')}}" alt="">
          <div class="card-img-overlay">
            <h3>Electronic Gadget</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- gadjet  -->
<!-- product card -->
<section class="section4 " id="best-product">
    <h3 id="our-product">Our Products</h3>
    <select \ onchange="handleChange()" id="dropDown">
        <option value="All">All</option>
        <option value="Fans">Fans</option>
        <option value="LED">LED</option>
        <option value="Geysers">Geysers</option>
        <option value="Fridge">Fridge</option>
        <option value="AC">AC</option>
        <option value="Gaming">Gaming</option>
        <option value="Mobile Phone & Ipad">Mobile Phone & Ipad</option>
        <option value="Microwave">Microwave</option>

    </select>
    <div class="sec4-card-container"></div>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        </div>
      </div>
    <!-- end modal -->
</section>
<!-- product card -->
<!-- download button  -->
<div class="download-button">
    <h2>Download All Product Price List</h2>
    <a  href="./docx/price list.xlsx" download="Price List">Click Here</a>
</div>
<!-- download button  -->
<!-- product offer card -->
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
<!-- product offer card -->

<!-- product blog card  -->
<div class="b_heading">
    <h6>Our Blog</h6>
    <h1>Lastest Blog & Articles</h1>
</div>

<div class="blog-card-container-2" id="blogs">
</div>
<!-- product blog card  -->

<!-- product contact -->
<!-- product contact -->

@endsection