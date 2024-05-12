//product categroy card//
let category = [
    {
        img: "./image/background.png",
        detail:"All Products",
        quantiy:"(20)",
    },
    {
        img: "./image/cable.png",
        detail:" Cables",
        quantiy:"(5)",
    },
   
    {
        img: "./image/AC1.jpg",
        detail:"AC",
        quantiy:"(4)",
    },
   
    {
        img: "./image/Fan1.jfif",
        detail:"Fan",
        quantiy:"(3)",
    },
   
    {
        img: "./image/Fridge1.jpg",
        detail:"Fridge",
        quantiy:"(4)",
    },
   
    {
        img: "./image/geysers1.jpg",
        detail:"Geysers",
        quantiy:"(6)",
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
        <span>${category[index].quantiy}</span>
    </div>
</div>`
}
//blog

let blog_card = [
    {
        img: "./image/bnew1.png",
        title:"Beat the heat the efficient way with Inverter fans and air coolers with ECM technology",
        detail:"Upgrade your cooling arsenal with inverter fans and air coolers equipped with ECM (Electronically Commutated Motor) technology to beat the heat efficiently...",
    },
    {
        img: "./image/bnew2.png",
        title:"When a fan doesn't look like a fan...",
        detail:"At first glance, it appeared to be a simple decorative piece on the wall, but upon closer inspection, it revealed intricate patterns and delicate blades...",
    },
    {
        img: "./image/bnew4.png",
        title:" How about an outdoor air cooler that fits in your car boot?",
        detail:"Introducing the perfect solution for scorching hot summer days, an outdoor air cooler that conveniently fits in your car boot...",
    },
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
    Blog_card_container.innerHTML +=` <div class="blog-card-2" data-aos="fade-up" data-aos-duration="2000">
    <div class="blog-card-img-box">
        <img src="${blog_card[index].img}" alt="">
    </div>
    <div class="blog-card-content-box">
        <h2>${blog_card[index].title}</h2>
        <span><i class="fa-solid fa-clock"></i> April 27,2022</span>
        <p>${blog_card[index].detail}</p>
            <form action="">
                <button id="btn5" type="button" onclick='modal_blog(${index})' data-bs-toggle="modal" data-bs-target="#exampleModal">Read More <i class="fa-solid fa-arrow-right-long"></i></button>
            </form>
    </div>
</div>`

}

//blog modal
let blog_modal = [
    {
        img: "./image/bnew1.png",
        title:"Beat the heat the efficient way with Inverter fans and air coolers with ECM technology",
        detail:"1. Upgrade your cooling arsenal with inverter fans and air coolers equipped with ECM (Electronically Commutated Motor) technology to beat the heat efficiently. These innovative devices optimize energy consumption and provide superior cooling performance.2. Inverter fans with ECM technology offer variable speed control, adjusting the fan speed according to the cooling requirements. This not only saves energy but also ensures a constant and comfortable airflow throughout your space.3. Air coolers integrated with ECM technology are designed to deliver enhanced cooling while consuming less electricity. These coolers efficiently cool the air by utilizing advanced motor control algorithms, resulting in cost-effective and eco-friendly cooling solutions.4. The inverter technology in these fans and air coolers allows for precise control over the cooling output, ensuring that you get the perfect balance between comfort and energy efficiency. You can enjoy a cool and refreshing environment without worrying about high e ectricity bills.5. With inverter fans and air coolers featuring ECM technology, you can create a more sustainable and energy-efficient cooling system for your home or office. Beat the heat effectively by choosing these advanced cooling solutions that provide optimal performance while reducing your carbon footprint. Beat the heat the efficient way with Inverter fans and air coolers with ECM technology",
    },
    {
        img: "./image/bnew2.png",
        title:"When a fan doesn't look like a fan...",
        detail:"1. At first glance, it appeared to be a simple decorative piece on the wall, but upon closer inspection, it revealed intricate patterns and delicate blades. It was a fan in disguise, blending seamlessly with the surroundings.2. It wasn't until the room grew stiflingly hot that I noticed the peculiar contraption in the corner. With its sleek, futuristic design and hidden functionality, the fan had fooled me, turning from an art piece to a savior in an instant.3. Instead of the usual spinning blades, this fan boasted a unique design, resembling more like an elegant sculpture than a cooling device. Its gentle breeze wafted through the room, a charming surprise hiding in plain sight.4. A hushed murmuring caught my attention, and my eyes wandered to a corner where a peculiar object stood. It was an inconspicuous wooden frame, the disguise for a fan that broke the barriers of traditional design with its innovative features.5. In a room filled with buzzing electronics and noisy appliances, my eyes couldn't help but be drawn to an enigmatic object. It seemed like an ordinary photograph frame, but with a flick of a switch, it transformed into a silent fan, cooling the room without a sound",
    },
    {
        img: "./image/bnew4.png",
        title:" How about an outdoor air cooler that fits in your car boot?",
        detail:"1. Introducing the perfect solution for scorching hot summer days, an outdoor air cooler that conveniently fits in your car boot.2. Stay cool on-the-go with our compact and portable outdoor air cooler designed specifically to fit in your car boot for instant relief from heat wherever you are.3. Imagine having the ability to beat the heat even when you're out for a picnic or camping trip - our innovative outdoor air cooler has got you covered!4. With its sleek and space-saving design, this outdoor air cooler is the ideal companion for road trips, ensuring you never have to suffer sweltering temperatures again.5. Don't let the heat ruin your outdoor adventures – bring along our car boot air cooler and enjoy refreshing cool air anytime, anywhere",
    },
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

