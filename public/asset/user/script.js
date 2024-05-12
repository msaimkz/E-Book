//product card
let product = [
    {
        id:1,
        img: "./images/1077269",
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
        category:"Geysers",
        download:"./docx/Product-detail.docx",

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
        discount:"4%",
        download:"./docx/Product-detail.docx",
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
        discount:"20%",
        download:"./docx/Product-detail.docx",
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
        discount:"10%",
        download:"./docx/Product-detail.docx",
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
        download:"./docx/Product-detail.docx",
        discount:"22%",
        category:"Fridge"

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
           <div  onmouseover="imgHover(this)">
                  <img src="${result[0].subimg1}" alt="" width="50px"  class="img-list">
              </div>
              <div onmouseover="imgHover(this)">
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
    <button class="addtocart"><i class="fa-solid fa-cart-shopping dark-anchor"></i></button>

              </div>
          </div>
      </div>
    </div>
  </div>`
} 

function imgHover(anything){
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
        title:"Still stuck with those flickering tube lights? Its time to switch to LED Battens",
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
                <button id="btn5"type="button" onclick='modal_blog(${index})' data-bs-toggle="modal" data-bs-target="#exampleModal">Read More <i class="fa-solid fa-arrow-right-long"></i></button>
            </form>
    </div>
</div>`

}

//section6 card
let section6_card = [
    {
        img: "./image/fridge1.jpg",
        datail: "DAWLANCE REFRIGERATOR  ",
        sellprice: "$550.00",
        price:"$650.00",
        discount:"22%"
    },
    {
        img: "./image/geysers4.jpg",
        datail: "Canon  Geyser",
        sellprice: "$200.00",
        price:"$230.00",
        discount:"15%"
    },
]
let sec6_card_container = document.querySelector(".sec6-card-container ")
for (let index = 0; index < section6_card.length; index++) {
     sec6_card_container.innerHTML += `
     <div class="sec6-card" data-aos="fade-" data-aos-duration="2500">
     <div class="discount-poster">
         <span>${section6_card[index].discount}</span>
     </div>
     <div class="discount-poster" id="sale">
         <span>Sale</span>
     </div>
     <img src="${section6_card[index].img}" alt="">
     <h2>${section6_card[index].datail}</h2>
     <div class="discount">
     <span id="spa">${section6_card[index].price}</span>
     <span>${section6_card[index].sellprice}</span>
     </div>
     <button  type="button" onclick='modal_read(${index})'  data-bs-toggle="modal" data-bs-target="#exampleModal"><span>View More</span></button>
 </div>`
}

//sec6 modal 
let sec6_modal = [
    {
        img: "./image/fridge1.jpg",
       name:"Dawnlance Refrigerator",
        datail: "DAWLANCE REFRIGERATOR 9140WB CHROME HAIRLINE BLACK 8 CUFT ",
        sellprice: "$600.00",
        price:"$500.00",
        discount:"10%",
        download:"./docx/Product-detail.docx",
        subimg1:"./image/Sub images/fridge2 1.webp",
        subimg2:"./image/Sub images/fridge2  2.webp",
    },
    {
        img: "./image/geysers4.jpg",
        name:"Cannon Geysers",
        datail: "Canon Electric Water Geyser - KE-SIE-10 CL - Supreme-Steel black color ",
        sellprice: "$200.00",
        download:"./docx/Product-detail.docx",
        price:"$230.00",
        discount:"15%",
        subimg1:"./image/geysers4.jpg",
        subimg2:"./image/geysers4.jpg",
    },
    
    
]
let sec6_modal_parent=document.querySelector(".modal-dialog")
function modal_read (id){
    modal_parent.innerHTML =` <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="modal-container">
              <div class="modalfirst-content">
          <div class="modal-img-box">
              <img src="${sec6_modal[id].img}" alt="" class="img-slider">
          </div>
          <div class="modal-img-list">
              <div onmouseover="imgSlider('${sec6_modal[id].subimg1}')">
                  <img src="${sec6_modal[id].subimg1}" alt="" width="50px"  class="img-list">
              </div>
              <div onmouseover="imgSlider('${sec6_modal[id].subimg2}')">
                  <img src="${sec6_modal[id].subimg2}" alt="" class="img-list">
              </div>
          </div>
              </div>
              <div class="modal-second-content">
                  <p>${sec6_modal[id].name}</p>
                  <p id="para">${sec6_modal[id].datail}</p>
                  <div class="rating">
                      <div class="rating-star">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                      <i class="fa-solid fa-heart"></i>
                  </div>
                  <span>${sec6_modal[id].sellprice}</span>
                  <div class="span-list">
                      <span id="span1">${sec6_modal[id].price}</span>
                      <span>${sec6_modal[id].discount}</span>
                  </div>
                  <button id="btn">Buy Now</button>
                  <a href="${sec6_modal[id].download}" download><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
              </div>
          </div>
      </div>
    </div>
  </div>`
} 

function imgSlider(anything){
    document.querySelector('.img-slider').src =  anything
}


// counting Animation

let valueDisplays = document.querySelectorAll(".num");
let interval = 3000;

valueDisplays.forEach((valueDisplays) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplays.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function(){
        startValue += 1;
        valueDisplays.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});



// sticky Navbar

window.addEventListener('scroll',function(){
    var header = document.querySelector('nav');
    header.classList.toggle('sticky',window.scrollY > 0);
})

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

// home slider

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop:true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });