@extends('User.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
    @charset "UTF-8";
/*********************************************/
/*COLORS*/
/*********************************************/



.productCard_block {
  position: relative;
  max-width: 100vw;
  margin: 50px 0px;
  min-height: 100vh;
  background-color: #fff;
}

/* LEFT SIDE */
.productCard_leftSide{
    width: 500px;
    height: 600px;
    background-color:black;
}
.productCard_leftSide img{
    width: 100%;
    height: 100%;
    /* object-fit:cover; */
}

/*   RIGHT SIDE */
.productCard_rightSide {
  position: relative;
  padding-top: 34px;
  padding-left: 27px;
  padding-right: 40px;
  width: 100%;
  min-height: 600px;
}
.block_name {
  width: 100%;
  color: #263238;
  font-weight: 400;
  line-height: 35px;
}
.block_name__mainName {
  margin: 0;
  padding: 0;
  font-weight: bold;
  font-size: 34px;
}
.block_name__addName {
  margin: 0;
  padding: 0;
  font-size: 24px;
}
.block_descriptionInformation {
  width: 100%;
  margin-top: 10px;
  font-size: 14px;
  font-weight: 400;
  line-height: 23px;
  color: #263238;
}

.block_descriptionCharacteristic {
  position: absolute;
  top: 0;
  left: 100%;
  width: 100%;
  height: 100%;
  z-index: 30;
  transition: left, ease-out, 0.5s;
}
.block_descriptionCharacteristic__active {
  left: 0;
}

@-webkit-keyframes moveCharackeristic {
  0% {
    left: 100%;
  }
  100% {
    left: 0;
  }
}

@keyframes moveCharackeristic {
  0% {
    left: 100%;
  }
  100% {
    left: 0;
  }
}
.block_specificationInformation_table {
  position: relative;
  height: 90%;
  background-color: #fff;
}
.block_specificationInformation_table tr {
  border-collapse: collapse;
  border: 1px solid #000;
}
.block_specificationInformation_table th {
  border: 1px solid #000;
  font-weight: bold;
}
.block_specificationInformation_table td {
  border-collapse: collapse;
  text-align: center;
  border: 1px solid #000;
}

.block_rating {
  width: 100%;
  margin-top: 33px;
}

fieldset, label {
  margin: 0;
  padding: 0;
}

.block_rating__stars {
  border: none;
  float: left;
  width: auto;
  margin: 0;
  padding: 0;
}

input[type=checkbox] + label, input[type=radio] + label {
  margin: 0;
}

.block_rating__stars > input {
  display: none;
}

.block_rating__stars > label:before {
  margin: 5px;
  font-size: 15px;
  font-family: FontAwesome;
  display: inline-block;
  content: "";
}

.block_rating__stars > .half:before {
  content: "";
  position: absolute;
}

.block_rating__stars > label {
  color: #c9c9c9;
  float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/
.block_rating__stars > input:checked ~ label,
.block_rating__stars:not(:checked) > label:hover,
.block_rating__stars:not(:checked) > label:hover ~ label {
  color: #fccf47;
}

/* hover previous stars in list */
.block_rating__stars > input:checked + label:hover,
.block_rating__stars > input:checked ~ label:hover,
.block_rating__stars > label:hover ~ input:checked ~ label,
.block_rating__stars > input:checked ~ label:hover ~ label {
  color: #FFED85;
}

.block_rating__avarage {
  margin-left: 31px;
  color: #f1425d;
  font-size: 15px;
  line-height: 35px;
}

.block_rating__reviews {
  margin-left: 6px;
  color: #656c6f;
  font-size: 13px;
}

.block_price {
  margin-top: 29px;
  width: 100%;
}
.block_price__currency {
  padding: 0;
  margin: 0;
  vertical-align: top;
  color: #f1425d;
  font-size: 26px;
  font-weight: 600;
}
.block_price__shipping {
  padding: 0;
  margin: 0;
  color: #A2A9AD;
  font-size: 12px;
}

.radio_button {
  position: absolute;
  opacity: 0;
}

.block_goodColor {
  margin-top: 29px;
  width: 100%;
}
.block_goodColor__allColors {
  width: 100%;
  margin-top: 14px;
}
.block_goodColor__radio {
  display: inline-block;
  width: 21px;
  height: 21px;
  border-radius: 50%;
  margin-left: 10% !important;
  background-color: #e8e6e3;
  cursor: pointer;
}

.radio_button:checked + .block_goodColor__radio {
  width: 25px;
  height: 25px;
  box-shadow: 0 0 5px 3px rgba(83, 109, 254, 0.5);
  border: 2px solid #fff;
}

.block_goodColor__black {
  background-color: #3c383a;
}

.block_goodColor__silver {
  background-color: silver;
}

.text_specification {
  padding: 0;
  color: #37474f;
  font-size: 13px;
}

.block_quantity {
  position: relative;
  height: 46px;
  margin-top: 45px;
  margin-left: 20px;
}
.block_quantity span {
  display: inline-block;
  float: left;
  margin-top: 15px;
  margin-right: 10px;
}
.quantityButton{
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.block_quantity__chooseBlock {
  vertical-align: top;
  height: 100%;
  margin: 0;
  padding: 0;
}
.block_quantity__number {
  display: inline-block;
  float: left;
  width: 52px;
  height: 46px;
  border: 1px solid #ddd;
  font-size: 18px;
}
.block_quantity__number::-moz-placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__number:-ms-input-placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__number::placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__button {
  display: inline-block;
  position: relative;
  float: left;
  width: 20px;
  height: 50%;
  margin: 0;
  padding: 0;
  margin-left: 11px;
  font-size: 0;
  cursor: pointer;
}
.block_quantity__button:hover, .block_quantity__button:focus {
  background-color: transparent;
}
.block_quantity__button:hover:before, .block_quantity__button:focus:before {
  color: #536dfe;
}
.block_quantity__up:before {
  content: "";
  width: 11px;
  height: 6px;
  font-family: "FontAwesome";
  color: #37474f;
  font-size: 18px;
}
.block_quantity__down:before {
  content: "";
  width: 11px;
  height: 6px;
  font-family: "FontAwesome";
  color: #37474f;
  font-size: 18px;
}
.Product-button{
  display: flex;
  gap: 30px;
  /* background-color: #0d2660;  */
}
.button.button_addToCard {
  width: 147px;
  height: 46px;
  margin-top: 43px;
  margin-bottom: 0;
  display:flex;
  justify-content:center;
  align-items:center;
  padding: 0;
  color: #fff;
  background-color: #1C4B84;
  font-size: 17px;
  transition: all 0.3s;
}
.button.button_addToCard:hover {
  background-color: #1C4B84;
}
</style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="productCard_block">
        <div class="row">
            <div class="small-12 large-6 columns">
                <div class="productCard_leftSide clearfix">
                <img src="{{asset('images/'.$products->img)}}" alt="Book">
                
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="productCard_rightSide">
                    <div class="block_product">
                        <h2 class="block_name block_name__mainName">{{$products->name}}</h2>
                        <h2 class="block_name block_name__addName">By {{$products->arthur}} </h2>

                        <p class="block_product__advantagesProduct">{{$products->category}}</p>

                        <div class="block_informationAboutDevice">
                            <div class="block_descriptionInformation">
                                <span>{{$products->description}}
                                </span>
                            </div>
                            <div class="row ">
                                <div class="large-6 small-12">
                                    <div class="block_price">
                                        <p class="block_price__currency">{{$products->price}}</p>
                                    </div>
                                    <div class="block_quantity clearfix">
                                        <span class="text_specification">Quantity</span>
                                        <div class="block_quantity__chooseBlock">
                                            <input class="block_quantity__number" name="quantityNumber" type="text" min="1" value="1">
                                            <div class="quantityButton">
                                                <button class="block_quantity__button block_quantity__up"></button>
                                                <button class="block_quantity__button block_quantity__down"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" Product-button">
                                    <a class="button button_addToCard">
                                        Add to Cart
                                    </a>
                                    <a class="button button_addToCard">
                                        Buy Now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

window.onload = function () {
/////  QUANTITY ITEMS

    var up = document.getElementsByClassName('block_quantity__up')[0],
        down = document.getElementsByClassName('block_quantity__down')[0],
        input = document.getElementsByClassName('block_quantity__number')[0];

    function getValue() {
        return parseInt(input.value);
    }

    up.onclick = function (event) {
        input.value = getValue() + 1;
    };
    down.onclick = function (event) {
        if (input.value <= 1) {
            return 1;
        } else {
            input.value = getValue() - 1;
        }

    }


};
    </script>
</body>
</html>
@endsection