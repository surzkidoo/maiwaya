<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiwaya | Homepage</title>
    <link rel="shortcut icon" href="asset/m_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="asset/m_logo.png" class="logo" alt="" set="">
            <h1 class="brand-name">Maiwaya</h1>
        </div>

        <div class="menu-container">
            <img class="menu-cancel" src="asset/cancel.png" alt="" srcset="">
            <li class="menu-item" ><a href="#why" style="text-decoration: none;color:inherit">Why Maiwaya?</a></li>
            <li class="menu-item" ><a href="#how" style="text-decoration: none;color:inherit">How we works</a></li>
            <li class="menu-item" ><a href="#contact" style="text-decoration: none;color:inherit">Contact us</a></li>
            <li class="menu-item" ><a href="#why" style="text-decoration: none;color:inherit">Terms & condition</a></li>


        </div>

        <div class="contact-support-container">
            <img src="asset/w-logo.png" class="contact-support-logo" alt="">
           <a href="https://wa.me/+23408060070664" style="text-decoration: none"> <button class="contact-support-btn"> Contact Support</button></a>
           
        </div>

        <img src="asset/Group 16.png" class="menu-icon" alt="">
    </header>

    <div class="hero-container">

        <div class="hero-text-container">
            <h3 class="hero-title">Good phone Guarantee a good Life!</h3>
            <p class="hero-desc">Experience seamless shopping : Browse, Choose, and Conquer at our Online Store</p>
           <a href="#rec" style="text-decoration:none;width:inherit;"><button class="hero-btn">Get Started</button></a> 
        </div>

        <div class="hero-search-container" id="#get">

            <div class="hero-search-container-overlay">
                <form class="search-form-container" method="POST" action="/search-model">
                    @csrf
                    <h4 class="search-title-container">Looking for phone to buy?</h4>
                    <div class="input-container">
                        <label class="input-label">Select Brand</label>
                        <div class="cus-input-container">
                            <div class="cus-input-box">
                                <select name="brand" id="" class="cus-input brand-selector">
                                    <option value="" disabled selected>Choose brand</option>
                                    @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}" id="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-container">
                        <label class="input-label">Select Model</label>
                        <div class="cus-input-container">
                            <div class="cus-input-box">
                                <select name="model" id="" class="cus-input model-selector" >
                                    <option value="" selected disabled>Choose Model</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="search-btn">Search</button>

                </form>
            </div>
        </div>

    </div>

    <div class="why-us-container" id="why">
        <h4 class="why-us-heading">Why Maiwaya?</h4>
        <div class="why-us-items-container">

            <div class="why-us-item-container">
                <img src="asset/Group 4.png" class="why-us-image" alt="" srcset="">
                <p class="why-us-text" style="color: #40DB4F;
                ">Free & Fast Delivery</p>
                <p class="why-us-info">Buy phone from Maiwaya and we get to deliver it for free, also you tend to get your order with 1hour.</p>

            </div>

            <div class="why-us-item-container">
                <img src="asset/Group 5.png" class="why-us-image" alt="" srcset="">
                <p class="why-us-text" style="color: #E9C611;
                ">Quality & Cheap</p>
                <p class="why-us-info">The price of our phones is very cheap and affordable and it comes with great quality.</p>


            </div>

            <div class="why-us-item-container">
                <img src="asset/Group 6.png" class="why-us-image" alt="" srcset="">
                <p class="why-us-text" style="color: #F31732;
                ">24/7 support</p>
                <p class="why-us-info">Our customer support is active 24/7 to attends to your needs.</p>


            </div>

        </div>
    </div>

    <div class="product-container" id="rec">
        <div class="product-header-container">
            <h4 class="why-us-heading">Recommended</h4>
            <button class="more-btn">More <img src="asset/Arrow 1.png" alt=""></button>
        </div>

        <div class="product-list-container">
            @foreach ( $recommendeds as $recommended)
            <a href="/product/{{$recommended->id}}" class="product-item">
                <img class="product-image" src="http://maiwaya.ng/{{$recommended->image}}" alt="" srcset="">
                <p class="product-name">{{$recommended->name}}</p>
                <p class="product-price"><img class="naira-sign-60" src="http://maiwaya.ng/asset/vector (2).png" alt=""> {{number_format($recommended->price)}}</p>
            </a>
            @endforeach
        </div>
    </div>


    <div class="product-container">
        <div class="product-header-container">
            <h4 class="why-us-heading">Exclusive</h4>
            <button class="more-btn">More <img src="asset/Arrow 1.png" alt=""></button>
        </div>

        <div class="product-list-container">
            @foreach ( $exclusives as $exclusive)
            <div class="product-item">
                <img class="product-image" src="http://maiwaya.ng/{{$exclusive->image}}" alt="" srcset="">
                <p class="product-name">{{$exclusive->name}}</p>
                <p class="product-price"><img class="naira-sign-60" src="http://maiwaya.ng/asset/vector (2).png" alt=""> {{number_format($exclusive->price)}}</p>
            </div>
            @endforeach

        </div>
    </div>


    <div class="how-container" id="how">
        <p class="why-us-heading" style="color:var(--white)"> How Maiwaya works ></p>
        <div class="how-we-work">
            <div class="how-desc-container">
                <h5 class="how-desc-header">Explore and Order</h5>
                <p class="how-desc">Explore through our Maiwaya to see veriety of phones we have and select the phone you want purchase, click on Buy and fill in the form that popup and then hit on procced, wolla simple!</p>
            </div>

            <img class="how-img" src="asset/undraw_mobile_apps_re_3wjf 1.svg" alt="" srcset="">
        </div>

        <div class="how-we-work row-reverse" >
            <div class="how-desc-container">
                <h5 class="how-desc-header">Taking your Order </h5>
                <p class="how-desc">We will receive your order, upon receiving your order we will contact you to confirm the order, so that we can start processing it immediately
                    the order </p>
            </div>

            <img class="how-img" src="asset/undraw_order_confirmed_re_g0if 1.svg" alt="" srcset="">
        </div>


        <div class="how-we-work">
            <div class="how-desc-container">
                <h5 class="how-desc-header">Delivering & Payment</h5>
                <p class="how-desc">We will deliver your phone at your location, the location you gave us when
                    ordering, you are to make the payment on delivering the product and receipt will be issued to you with the phone</p>
            </div>

            <img class="how-img" src="asset/undraw_delivery_truck_vt6p 1.svg" alt="" srcset="">
        </div>

    </div>

    <div class="our-customer-container">

        <h4 class="our-header">100+ Returning Customers</h4>
    
        <div class="test-container">
            <img class="test-img-dot" src="asset/Group 13.png" alt="">
            <img class="test-img"
                src="asset/pretty-curly-woman-holds-modern-mobile-phone-types-messages-smartphone-device-enjoys-online-communication-downloads-special-app-chatting-smiles-tenderly-isolated-purple-wall.jpg"
                alt="">
            <div class="test-content-container">
                <span>"</span>
                <p class="test-content">Their service is good and i will recommend it</p> <span>""</span>
            </div>
        </div>


        <div class="indicator-container">
            <div class="active indicator"></div>
            <div class="indicator"></div>
            <div class="indicator"></div>
            <div  class="indicator"></div>
        </div>

    </div>

    <div class="faq-container">
        <h4 class="why-us-header">Frequently Asked Questions (FAQs)</h4>

        <div class="faq-content-container">
            <div class="faq-item">
                <h5 class="faq-question">Do you work everyday?</h5>
                <p class="faq-answer">Yes we work on everyday of the week including weekend from 8am-6pm.</p>
            </div>

            <div class="faq-item">
                <h5 class="faq-question">How much do i pay for delivery?</h5>
                <p class="faq-answer">Delivery is free for our customers within Sokoto and you have to pay for delivery
                    if you live outside sokoto.</p>
            </div>

            <div class="faq-item">
                <h5 class="faq-question">How do I pay for the phone?</h5>
                <p class="faq-answer">We accept both Cash and Transfer.</p>
            </div>

            <div class="faq-item">
                <h5 class="faq-question">When do I make payment?</h5>
                <p class="faq-answer">We have two payment option, you can pay before delivery or after delivery, the
                    choice is yours.</p>
            </div>

            <div class="faq-item">
                <h5 class="faq-question">Do I get receipt for the phone?</h5>
                <p class="faq-answer">Yes you do get a receipt.</p>
            </div>
            <div class="faq-item">
                <h5 class="faq-question">What if i can find the phone I want?</h5>
                <p class="faq-answer">Contact our online support to help you.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="footer-address-container" id="contact">
                <div class="footer-logo-container">
                    <img class="footer-logo" src="asset/m_logo2.png" alt="" srcset="">
                    <h2 class="footer-title">Maiwaya</h2>
                </div>
                <span class="footer-motto" style="font-size: 10px;margin:5px 0px;">Good phone good life....</span>
                <div>           
                    <a href="https://wa.me/+23408060070664" style="text-decoration: none;margin-right:3px;"><i class="fa fa-whatsapp" style="color:white; "></i></a>
                    <a href="tel:+2348151799286" style="text-decoration: none;"><i class="fa fa-phone" style="color:white; "></i></a>


                    {{-- <span class="" style="height: 30px;width:30px;border-radius:15px;border: 1px solid white;">s</span> --}}
                </div>
            </div>

            <div>
                <p class="footer-title">Address</p>

                <div class="contact-contents">
                    <div class="address-container">
                        <p class="footer-address">22 Arkilla Behind Umar Ali Shinkafi Polytechnic Sokoto, Nigeria. </p>
                    </div>

                    <div class="address-container">
                        <p class="footer-address">11 Arkilla Behind Umar Ali Shinkafi Polytechnic Sokoto, Nigeria. </p>
                    </div>
                </div>

            </div>

            <div>
                <p class="footer-title">Links</p>
                <div class="footer-link-container">
                    <p class="footer-link">Terms & Condition</p>
                    <p class="footer-link">Why us?</p>
                    <p class="footer-link">Return Policy</p>
                    <p class="footer-link">How we work</p>
                </div>

            </div>
        </div>
        <div class="" style="background-color: rgb(250, 250, 250);margin:10px 0px;height:1px;"></div>
        <p class="footer-copy"><i class="fa fa-copyright" style="margin-left: 3px"></i> 2023 Maiwaya All Right Reserved</p>

    </footer>
    <div class="loader-container"><div class="loader"></div></div>
</body>

</html>
<script src="jquery.min.js"></script>
<script src="index.js"></script>

<script>
$('.brand-selector').on('change',(e)=>{
    let id = e.target.value;
    let loader = document.querySelector('.loader-container')
    jQuery.ajax({
        url: `http://maiwaya.ng/get-model/${id}`,
        method: 'get',
        beforeSend: function() {
            loader.style.display ='flex';
        },
        success: function(data) {
          options =  data.map((option)=>{
            return `<option value="${option.id}">${option.name}</option>`
           })
           $('.model-selector').append(options);
           loader.style.display= 'none';
        },
        error: function(e) {
          console.log(e)
          loader.style.display ='none';
        }
    });
})

</script>
