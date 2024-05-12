@extends('User.master')
@section('content')

<!-- sitemap-home-section  -->
<div class="sitemap-home-section">
    <div class="sitemap-home-content">
        <h1>Site Map</h1>
        <div class="sitemap-content-container">
           <a href="./index.html"><h3>Home</h3></a>
            <i class="fa-solid fa-greater-than"></i>
            <h3>Site Map</h3>
        </div>
    </div>
</div>
<!-- sitemap-home-section  -->

<!-- site map link container  -->
<div class="site-map-container">
    <a href="./index.html" id="anchor">Home</a>
    <ul>
        <li><a href="./index.html #our-service">Our Service</a></li>
        <li><a href="./index.html #about">About</a></li>
        <li><a href="./index.html #best-product">Best Seller Product</a></li>
        <li><a href="./index.html #best-quality">Quality Product</a></li>
        <li><a href="./index.html #offer-card">Offer Card</a></li>
        <li><a href="./index.html #customer-reviews">Coustomers Reviwe</a></li>
        <li><a href="./index.html #blogs">Blogs</a></li>
    </ul>
    <a href="./about.html" id="anchor">About Us</a>
    <ul>
        <li><a href="./about.html #about-shop">About Shop</a></li>
        <li><a href="./about.html #brands-&-awards">Brand & Awrads</a></li>
        <li><a href="./about.html #customer-reviews">Coustomers Reviwe</a></li>
        <li><a href="./about.html #teams-meet">Meet Our Teams</a></li>
    </ul>
    <a href="./product.html" id="anchor">Shop</a>
    <ul>
        <li><a href="./product.html #categories">Product Category</a></li>
        <li><a href="./product.html #best-product">Best Seller Product</a></li>
        <li><a href="./product.html #offer-card">Offer Crads</a></li>
        <li><a href="./product.html #blogs">Blogs</a></li>
    </ul>
    <a href="./blog.html" id="anchor">Blog</a>
    <ul>
        <li><a href="./blog.html #article">Blog & Article</a></li>
        <li><a href="./blog.html #offer-card">Offer Cards</a></li>
        <li><a href="./blog.html #categories"> Product Category</a></li>
    </ul>
    <a href="./contact.html" id="anchor">Contact Us</a>
    <ul>
        <li><a href="./contact.html #send-email">Send Email</a></li>
        <li><a href="./contact.html #shop-location">Shop Location</a></li>
    </ul>
</div>
<!-- site map link container  -->


@endsection