@extends('User.master')
@section('content')

 <!-- shop-home-section  -->
 <div class="shop-home-section">
        <div class="shop-home-content">
            <h1>Shop Location</h1>
            <div class="shop-container">
               <a href="./index.html"> <h3>Home</h3></a>
                <i class="fa-solid fa-greater-than"></i>
                <h3>Shop Location</h3>
            </div>
        </div>
    </div>
    <!-- contact-home-section  -->

    <h1 id="store">Store Locator</h1>
    <div class="store-locator">
        <div class="store-locator-container">
           
        </div>
        <div class="store-locator-search">
            <input type="search" id="searchBox" onkeyup="handleSearch()">
        </div>
        <div class="store-google-map">
           
        </div>
      
    </div>

    <script src="{{asset('assets/user/./store.js')}}"></script>


@endsection