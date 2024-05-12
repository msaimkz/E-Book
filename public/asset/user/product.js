//product categroy card//
let category = [
    {
        img: "./image/background.png",
        detail:"All Products",
        quantiy:"(20)",
    },
    {
        img: "./image/gaming.png",
        detail:" Gaming",
        quantiy:"(7)",
    },
   
    {
        img: "./image/AC1.jpg",
        detail:"AC",
        quantiy:"(2)",
    },
   
    {
        img: "./image/Fan1.jfif",
        detail:"Fan",
        quantiy:"(3)",
    },
   
    {
        img: "./image/Fridge1.jpg",
        detail:"Fridge",
        quantiy:"(2)",
    },
   
    {
        img: "./image/geysers1.jpg",
        detail:"Geysers",
        quantiy:"(4)",
    },
   

    
]
 let Category_container = document.querySelector(".category-container")
for (let index = 0; index < category.length; index++) {
    Category_container.innerHTML += ` <div class="category-card" data-aos="fade-up" data-aos-duration="1000">
    <div class="category-img-box">
        <img src="${category[index].img}" alt="">
    </div>
    <div class="category-content-box">
        <span>${category[index].detail}</span>
    </div>
</div>`
}

//product card
let product = [
    {
        id:1,
        img: "./image/led1.jpg",
        name: "Ecostar LED",
        sellprice: "$175.00",
        price:"$216.00",
        discount:"22%",
        category:"LED",
        subimg1:"./image/Sub images/led1 SUB3.jpg",
        subimg2:"./image/Sub images/led1 sub 1.webp ",
        datail: "Ecostar CX-32U871 A+ 32 Inch Andoid Led Smart TV Black Full HD",
        download:"./docx/Product-detail.docx",
    },
    {
        id:2,
        img: "./image/AC1.jpg",
        name:"Dawnlance Air Conditioner",
        datail: "Dawlance Air Conditioner Mega T+ 10 DC Inverter",
        subimg1:"./image/Sub images/AC1.jpg",
        subimg2:"./image/Sub images/AC1 1.jpg ",
        sellprice: "$388.00",
        price:"$446.00",
        discount:"13%",
        category:"AC",
        download:"./docx/Product-detail.docx",



    },
    {
        id:3,
        img: "./image/geysers1.jpg",
        name:"Hanco Geysers",
        datail: "Hanco Instant Water Heater Imported - Tempered Glass Geyser 7 litre - Gas Type NG or LPG",
        subimg1:"./image/Sub images/geysers1.jpg",
        subimg2:"./image/Sub images/geysers1.jpg ",
        sellprice: "$70.00",
        price:"$80.00",
        discount:"12%",
        download:"./docx/Product-detail.docx",
        category:"Geysers"

    },
    {
        id:4,
        img: "./image/fridge3.jpg",
        name:"Haier Inverter",
        datail: "Haier 19 Cu Ft-Digital Inverter-HRF-538TIFRA",
        subimg1:"./image/Sub images/fridge1 1.webp",
        subimg2:"./image/Sub images/frige1 2.jpg ",
        sellprice: "$500.00",
        price:"$520.00",
        download:"./docx/Product-detail.docx",
        discount:"4%",
        category:"Fridge"

        
    },
    {
        id:5,
        img: "./image/led5.jpg",
        name:"Haier LED",
        datail: "Haier 32 H-CAST series LED TV 32 Inch - H32D2M (Mobile Sharing)v",
        subimg1:"./image/Sub images/led2.jpg",
        subimg2:"./image/Sub images/led2 sub 1.webp ",
        sellprice: "$720.00",
        price:"$900.00",
        download:"./docx/Product-detail.docx",
        discount:"20%",
        category:"LED"

    },
    {
        id:6,
        img: "./image/Sogo.webp",
        name:" Sogo Rechargeable Fan",
        datail: "Sogo Rechargeable Telescopic Foldable Fan 6 inch (JPN-523)",
        subimg1:"./image/Sogo.webp",
        subimg2:"./image/sogo1.webp ",
        sellprice: "$35.00",
        price:"$40.00",
        discount:"5%",
        download:"./docx/Product-detail.docx",
        category:"Fans"

    },
    {
        id:7,
        img: "./image/fan2.jpg",
        name:"Royal Celling Fan",
        datail: "Royal Fans Ceiling Fan - Deluxe Model - Copper Winding - 36 inches - White",
        subimg1:"./image/fan2.jpg",
        subimg2:"./image/fan2.jpg ",
        sellprice: "$70.00",
        price:"$80.00",
        download:"./docx/Product-detail.docx",
        discount:"10%",
        category:"Fans",

    },
    {
        id:8,
        img: "./image/geysers2.jpg",
        name:"Boss Geysers",
        datail: "Boss Electric Water Geyser - KE-SIE-10 CL - Supreme-Steel",
        subimg1:"./image/geysers2.jpg",
        subimg2:"./image/Sub images/geysers1 1.webp ",
        sellprice: "$155.00",
        price:"$160.00",
        discount:"5%",
        download:"./docx/Product-detail.docx",
        category:"Geysers"

    },
    {
        id:9,
        img: "./image/led3.jpg",
        name:"Universal LED",
        datail: "Universal Eagle U24 Inch - HD LED TV - 24 - Black",
        subimg1:"./image/led3.jpg",
        subimg2:"./image/led3.jpg ",
        sellprice: "$50.00",
        price:"$60.00",
        discount:"22%",
        download:"./docx/Product-detail.docx",
        category:"LED"


    },
    {
        id:10,
        img: "./image/Ac2.jpg",
        name:"Kenwood Inverter",
        datail: " KENWOOD Inverter AC 1.5 Ton e Luxury KEL-1844S - 75% Energy Saving - with Wi-Fi Free Voice Control",
        subimg1:"./image/AC2.jpg",
        subimg2:"./image/Ac2.jpg ",
        sellprice: "$180.00",
        price:"$190.00",
        discount:"10%",
        download:"./docx/Product-detail.docx",
        category:"AC",

    },
    {
        id:11,
        img: "./image/geysers6.jpg",
        name:"Sogo Gerysers",
        datail: "Sogo by Splash Instant Water Heater Geyser 6 Liters Imported - Natural Gas Geyser - 6 Ltr",
        subimg1:"./image/geysers6.jpg",
        subimg2:"./image/geysers6.jpg ",
        sellprice: "$190.00",
        price:"$230.00",
        discount:"20%",
        download:"./docx/Product-detail.docx",
        category:"Geysers"

    },
    {
        id:12,
        img: "./image/fridge1.jpg",
        name:"Dawlance Refrigerator",
        datail: "DAWLANCE REFRIGERATOR 9140WB CHROME HAIRLINE BLACK 8 CUFT ",
        subimg1:"./image/Sub images/fridge2 1.webp",
        subimg2:"./image/Sub images/fridge2  2.webp",
        sellprice: "$550.00",
        price:"$650.00",
        discount:"22%",
        download:"./docx/Product-detail.docx",
        category:"Fridge"

    },
    {
        id:13,
        img: "./image/heaset1.jpg",
        name:"Gaming Ear headphones",
        datail: "Eksa E3000 Gaming Wired On Ear Headphones With Mic With Stereo Surround, Gaming Chat With Noise Cancelling, Led Light For Mobile , Laptop, Pc, Ps4, Ps5, Ps3, Ps4, Ps5 Xbox One, Xbox x, Xbox S, Mobile, Nintendo Switch, Pc, Mac, Laptop mOBILE (Black",
        subimg1:"./image/heaset1.jpg",
        subimg2:"./image/headset.jpg",
        sellprice: "$15.00",
        price:"$17.00",
        discount:"2%",
        download:"./docx/Product-detail.docx",
        category:"Gaming"

    },
    {
        id:14,
        img: "./image/gamingpc.webp",
        name:"Gaming Pc",
        datail: "NEW GAMING PC - CORE I5 10400F - 10TH GEN BOOST UPTO 4.30GHZ - RAM 16GB DDR4 - 256GB SSD - 500GB HARD - SIDE GLASS RGB CASE - GTX1660 GDDR5 6GB GRAPHICS CARD",
        subimg1:"./image/gamingpc.webp",
        subimg2:"./image/gamingpc1.webp",
        sellprice: "$500.00",
        price:"$600.00",
        discount:"10%",
        download:"./docx/Product-detail.docx",
        category:"Gaming"

    },
    {
        id:15,
        img: "./image/keyboard_mouse.webp",
        name:"Gaming Keyboard & Mouse",
        datail: " Gaming Keyboard RGB - Cheap mechanical feeling, Membrane Back Light Key Board in Low Price (glowing luminous buttons) - Wired for mobile pubg Laptop PC Game - 112 Keys - By FunBug and free Gaming Mouse",
        subimg1:"./image/keyboard.webp",
        subimg2:"./image/mouse.webp",
        sellprice: "$9.00",
        price:"$35.00",
        discount:"75%",
        download:"./docx/Product-detail.docx",
        category:"Gaming"

    },
    {
        id:16,
        img: "./image/laptop.webp",
        name:"Gaming Laptop",
        datail: "Acer Predator Helios Neo 16 PHN16-71-75FC Gaming Laptop 13th Gen Core i7-13700HX 16GB DDR5 1TB SSD NVIDIA RTX 4060 8GB Graphics RGB Keyboard 16 WQXGA IPS 165Hz, Windows 11 Home 1 Year Local Warranty",
        subimg1:"./image/laptop.webp",
        subimg2:"./image/laptop2.webp",
        sellprice: "$1520.00",
        price:"$1900.00",
        discount:"20%",
        category:"Gaming",
        download:"./docx/Product-detail.docx",

    },
    {
        id:17,
        img: "./image/gled.webp",
        name:"Gaming LED",
        datail: "Borderless Gaming LCD Monitor For PC 22 inches IPS Panel",
        subimg1:"./image/gled.webp",
        subimg2:"./image/gled1.webp",
        sellprice: "$36.00",
        price:"$40.00",
        discount:"10%",
        download:"./docx/Product-detail.docx",
        category:"Gaming"

    },
    {
        id:18,
        img: "./image/phone.webp",
        name:"Samsung Flip 5",
        datail: "Samsung Flip 5 - 8GB/512GB - 6.7 Main Display - Android 13",
        subimg1:"./image/phone.webp",
        subimg2:"./image/phone2.webp",
        sellprice: "$780.00",
        price:"$1200.00",
        discount:"35%",
        download:"./docx/Product-detail.docx",
        category:"Mobile Phone & Ipad"

    },
    {
        id:19,
        img: "./image/ipad.webp",
        name:"Apple Ipad",
        datail: "Apple iPad Pro 12.9 inches (2018) - 256GB - (Retina Display) Wi-Fi (3rd Generation) - 12.9 - WIFI - USED - GREY",
        subimg1:"./image/ipad.webp",
        subimg2:"./image/ipsd1.webp",
        sellprice: "$666.00",
        price:"$680.00",
        discount:"2%",
        download:"./docx/Product-detail.docx",
        category:"Mobile Phone & Ipad"

    },
    {
        id:20,
        img: "./image/spaker.webp",
        name:"Gaming Speaker",
        datail: "Audionic OCTANE U-30 Fousion of RGB Lights - Sound Mini Mobile Speaker - Audionic Speaker - PC speaker - bt Speaker - Speaker for mobile - laptop speaker -Audionic Laptop Speakers Octane U30 Warranted Gaming Dual Super Quality Bass Woofer Stereo Acoustic",
        subimg1:"./image/spaker.webp",
        subimg2:"./image/speaker.webp",
        sellprice: "$14.00",
        price:"$7.00",
        discount:"50%",
        download:"./docx/Product-detail.docx",
        category:"Gaming"

    },
    {
        id:21,
        img: "./image/iphone.webp",
        name:"Iphone 15 Pro Max",
        datail: "Apple iPhone 15 Pro Max 5G || PTA Approved One Year Official Brand Warranty",
        subimg1:"./image/iphone.webp",
        subimg2:"./image/iphone.webp",
        sellprice: "$2040.00",
        price:"$2400.00",
        discount:"15%",
        download:"./docx/Product-detail.docx",
        category:"Mobile Phone & Ipad"

    },
    {
        id:22,
        img: "./image/microwave1.webp",
        name:"Dawnlance Microwave",
        datail: "Dawlance Microwave Oven DW-MD4N Digital Control Timer Speed Defrost / Power 700W | 1 Year Official Warranty",
        subimg1:"./image/microwave1.webp",
        subimg2:"./image/microwave1.1.webp",
        sellprice: "$2040.00",
        price:"$2400.00",
        discount:"15%",
        download:"./docx/Product-detail.docx",
        category:"Microwave"

    },
    {
        id:23,
        img: "./image/microwave2.2.webp",
        name:"Haier Microwave",
        datail: "Haier 30L/Rotisserie/Grill/Convection/HGL-30100 (Digital Control/Baking/Steam Clean) /Microwave Oven/1 Year Warranty",
        subimg1:"./image/microwave2.webp",
        subimg2:"./image/microwave2.1.webp",
        sellprice: "$2040.00",
        price:"$2400.00",
        discount:"15%",
        download:"./docx/Product-detail.docx",
        category:"Microwave"

    },
    {
        id:24,
        img: "./image/microwave3.webp",
        name:"Westpoint Microwave",
        datail: "Westpoint WF-1800 R - Rotisserie Oven - Black - 1200 Watts",
        subimg1:"./image/microwave3.webp",
        subimg2:"./image/microwave3.webp",
        sellprice: "$2040.00",
        price:"$2400.00",
        discount:"15%",
        download:"./docx/Product-detail.docx",
        category:"Microwave"

    },
]
//dropdown filter
function handleChange(){
    let getVal =   document.getElementById("dropDown").value;
    if(getVal=== "All"){
      renderProduct(product)
    }
    else{
      let result = product.filter(data=> data.category === getVal)
      renderProduct(result)
  
    }
    
  }

let product_container = document.querySelector(".sec4-card-container ")
function renderProduct(product){
    product_container.innerHTML = ""
for (let index = 0; index < product.length; index++) {
    product_container.innerHTML +=` <div class="sec4-card" data-aos="fade-up" data-aos-duration="2500">
    <div class="discount-poster">
        <span>${product[index].discount}</span>
    </div>
    <div class="discount-poster" id="sale">
        <span>Sale</span>
    </div>
    <img src="${product[index].img}" alt="">
    <h2>${product[index].name}</h2>
    <div class="discount">
    <span id="spa">${product[index].price}</span>
    <span>${product[index].sellprice}</span>
    </div>
    <button  type="button" onclick='read(${product[index].id})'  data-bs-toggle="modal" data-bs-target="#exampleModal"><span>View More</span></button>
</div>`
}
}
renderProduct(product)
//modal
let modal_parent=document.querySelector(".modal-dialog")
function read (id){
    let result = product.filter(data=> data.id ===id)
    modal_parent.innerHTML =` <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="modal-container">
              <div class="modalfirst-content">
          <div class="modal-img-box">
              <img src="${result[0].img}" alt="" class="img-slider">
          </div>
          <div class="modal-img-list">
           <div  onmouseover="imgSlider(this)">
                  <img src="${result[0].subimg1}" alt="" width="50px"  class="img-list">
              </div>
              <div onmouseover="imgSlider(this)">
                  <img src="${result[0].subimg2}" alt="" class="img-list">
              </div>
          </div>
              </div>
              <div class="modal-second-content">
                  <p>${result[0].name}</p>
                <p id="para">${result[0].datail}</p>
                  <div class="rating">
                      <div class="rating-star">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <i class="fa-regular fa-heart"></i>
                  </div>
                  <span>${result[0].sellprice}</span>
                  <div class="span-list">
                      <span id="span1">${result[0].price}</span>
                      <span>${result[0].discount}</span>
                  </div>
                  <button id="btn">Buy Now</button>
                  <a href="${result[0].download}" download><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
              </div>
          </div>
      </div>
    </div>
  </div>`
} 

function imgSlider(anything){
    // document.querySelector('.img-slider').src =  anything
    const getImg = anything.childNodes[1].getAttribute("src")
    document.querySelector('.img-slider').setAttribute("src",getImg)
}

//blog cards
let blog_card = [
    {
        img: "./image/bnew6.jpg",
        title:"Lumens per watt. Why does it matter?",
        detail:"Lumens per watt is an important metric because it measures the overall energy efficiency of a lighting system...",
    },
    {
        img: "./image/bnew7.jpg",
        title:"Still stuck with those flickering tube lights? It’s time to switch to LED Battens",
        detail:"Say goodbye to flickering lights, switch to LED battens' glow so bright...",
    },
    {
        img: "./image/bnew5.jpg",
        title:" Air Cooler Buying Guide - Tips to help you choose the right air cooler",
        detail:"Determine the size of the area you want to cool: Before purchasing an air cooler, consider the size of the room you want to cool...",
    },
]

let Blog_card_container = document.querySelector(".blog-card-container-2")
for (let index = 0; index < blog_card.length; index++) {
    Blog_card_container.innerHTML +=` <div class="blog-card-2" data-aos="fade-up" data-aos-duration="2500">
    <div class="blog-card-img-box">
        <img src="${blog_card[index].img}" alt="">
    </div>
    <div class="blog-card-content-box">
        <h2>${blog_card[index].title}</h2>
        <span><i class="fa-solid fa-clock"></i> April 27,2022</span>
        <p>${blog_card[index].detail}</p>
            <form action="">
                <button id="btn5"  type="button" onclick='modal_blog(${index})' data-bs-toggle="modal" data-bs-target="#exampleModal">Read More <i class="fa-solid fa-arrow-right-long"></i></button>
            </form>
    </div>
</div>`

}


//blog-modal
let blog_modal = [
    {
        img: "./image/bnew6.jpg",
        title:"Lumens per watt. Why does it matter?",
        detail:"1. Lumens per watt is an important metric because it measures the overall energy efficiency of a lighting system. It tells us how much light output we can expect in relation to the amount of energy. 2. A higher lumens per watt value indicates that a lighting system is more efficient, as it produces more light output for every unit of energy consumed. This can lead to significant energy savings and reduced electricity costs over time. 3. Lumens per watt also plays a crucial role in sustainability and environmental impact. By choosing lighting fixtures with higher efficiency, we can reduce greenhouse gas emissions and our carbon footprint, contributing to a greener and more sustainable future. 4. Higher lumens per watt can lead to improved visual comfort and better lighting quality. Lighting systems with higher efficiency can often provide brighter, more uniform, and more pleasant illumination, enhancing productivity, safety, and overall well-being in various spaces. 5. Lastly, lumens per watt is an important consideration for regulations and standards. Many countries have set energy efficiency requirements for lighting products, and lumens per watt is often used as a basis for these regulations. Compliane with these standards ensures that lighting products meet minimum performance criteria and contribute to energy conservation initiatives.",
    },
    {
        img: "./image/bnew7.jpg",
        title:"Still stuck with those flickering tube lights? It’s time to switch to LED Battens",
        detail:"1. Say goodbye to flickering lights, switch to LED battens' glow so bright.2. Don't be stuck in the past, LED battens will make your space shine vast.3. End the frustration of flickering tubes with LED battens, a lighting solution that suits.4. Replace those old tubes, LED battens are the choice that guarantees no more fuses.5. Upgrade your lighting with LED battens and see how your space brightens.",
    },
    {
        img: "./image/bnew5.jpg",
        title:" Air Cooler Buying Guide - Tips to help you choose the right air cooler",
        detail:"1. Determine the size of the area you want to cool: Before purchasing an air cooler, consider the size of the room you want to cool. Air cooler capacities are measured in CFM (cubic feet per minute), so choose one with a suitable CFM for your room size.2. Consider the climate of your area: Different air coolers are designed for different climates. If you live in a dry climate, a desert cooler with a high airflow and large water tank would be more effective. For areas with high humidity, consider an air cooler with a higher cooling efficiency.3. Look for energy efficiency: Energy efficiency is an important aspect to consider when buying an air cooler. Look for models with an energy star rating or inverter technology, as these can save you money on electricity bills in the long run.4. Check the noise levels: Some air coolers can be noisy, which can be quite bothersome. Look for models that have noise reduction features or operate at lower noise levels to ensure a peaceful environment 5. Consider additional features: Some air coolers come with additional features like remote control, timer settings, or air purifying capabilities. Depending on your preferences, choose an air cooler with the features that will enhance your overall cooling experience.",
    },
]
let blog_modal_parent=document.querySelector(".modal-dialog-centered")
function modal_blog (id){
    blog_modal_parent.innerHTML = ` <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body blog-moad-body">
        <div class="blog-modal-img">
          <img src="${blog_modal[id].img}" alt="">
        </div>
        <div class="blog-modal-content">
          <h1>${blog_modal[id].title}</h1>
          <p>${blog_modal[id].detail}</p>
        </div>
      </div>
    </div>
  </div>`
}
AOS.init();


