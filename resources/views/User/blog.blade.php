@extends('User.master')
@section('content')

<!-- main content  -->
    <!-- blog-home section -->
    <div class="blog-home-section">
    <div class="blog-home-content">
        <h1>Blog</h1>
        <div class="blog-content-container">
       <a href="./index.html"><h3>Home</h3></a>
            <i class="fa-solid fa-greater-than"></i>
            <h3>Blog</h3>
        </div>
    </div>
</div>
<!-- blog-home section -->

<!-- blog-card  -->
<div class="b_heading">
    <h6>Our Blog</h6>
    <h1>Lastest Blog & Articles</h1>
</div>

<div class="blog-card-container-2" id="article">
</div>
<!-- modal  -->
<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    </div>
  </div>
  <!-- modal  -->
<!-- blog card  -->

<!-- blog offer card  -->
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
<!-- blog offer card  -->
 <!-- blog product card  -->
 <section class="product-category" id="categories">
    <h1>Product Categories</h1>
    <div class="category-container">
    </div>
    </section>
 <!-- blog product card  -->


@endsection