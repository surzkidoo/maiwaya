<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maiwaya | {{$product->name}}</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="http://maiwaya.ng/asset/m_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="http://maiwaya.ng/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div class="logo-container">
            <img src="http://maiwaya.ng/asset/m_logo.png" class="logo" alt="" set="">
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
            <img src="http://maiwaya.ng/asset/w-logo.png" class="contact-support-logo" alt="">
           <a href="https://wa.me/+23408060070664" style="text-decoration: none"> <button class="contact-support-btn"> Contact Support</button></a>
           
        </div>

        <img src="http://maiwaya.ng/asset/Group 16.png" class="menu-icon" alt="">
    </header>

<div class="product-container-page">
    <p class="product-name-title">{{$product->name}}</p>
    <div class="product-content-container">
        <div class="product-order-container">
 <img class="product-img" src="http://maiwaya.ng/{{$product->image}}" alt="">
        <button class="buy-now-btn">Buy Now!</button>
        </div>
       
        <div class="product-features-container">
            <div class="product-feature-content">
                <div class="product-feature-key">Storage</div>
                <div class="product-feature-value">{{$product->storage}}</div>
            </div>

            <div class="product-feature-content">
                <div class="product-feature-key">Colour</div>
                <div class="product-feature-value">{{$product->color}}</div>
            </div>

            <div class="product-feature-content">
                <div class="product-feature-key">Processor</div>
                <div class="product-feature-value">{{$product->processor}}</div>
            </div>

            <div class="product-feature-content">
                <div class="product-feature-key">Battery</div>
                <div class="product-feature-value">{{$product->battery}} mah</div>
            </div>

            <div class="product-feature-content">
                <div class="product-feature-key">Price</div>
                <div class="product-feature-value"><img class="naira-sign" src="http://maiwaya.ng/asset/vector (1).png" alt=""> {{number_format($product->price)}}</div>
            </div>
            
        </div>

        
    </div>
</div>

<div class="description-container">
    <h4 class="description-header">Description & Features</h4>
    <div class="description-content">
        {{$product->description}}
    </div>
</div>


<div class="product-container">
    <div class="product-header-container">
        <h4 class="description-header">Similar</h4>
        <button class="more-btn">More <img src="http://maiwaya.ng/asset/Arrow 1.png" alt=""></button>
    </div>

    <div class="product-list-container">
        @foreach($similars as $similar)
        <a href="http://maiwaya.ng/product/{{$similar->id}}" class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">{{$similar->name}}</p>
            <p class="product-price"><img class="naira-sign-60" src="http://maiwaya.ng/asset/vector (2).png" alt=""> {{ number_format($similar->price)}}</p>
        </a>
        @endforeach

        <div class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">Samsung A33 128gb Red</p>
            <p class="product-price">N205,000</p>
        </div>
        <div class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">Samsung A33 128gb Red</p>
            <p class="product-price">N205,000</p>
        </div>

        <div class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">Samsung A33 128gb Red</p>
            <p class="product-price">N205,000</p>
        </div>

        <div class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">Samsung A33 128gb Red</p>
            <p class="product-price">N205,000</p>
        </div>

        <div class="product-item">
            <img class="product-image" src="http://maiwaya.ng/{{$similar->image}}" alt="" srcset="">
            <p class="product-name">Samsung A33 128gb Red</p>
            <p class="product-price">N205,000</p>
        </div>


    </div>
</div>
<div class="overlay">
    
    
</div>
<div class="proceed-order-container">
    <div class="order-container">
    <img class="cancel-icon close-form" src="http://maiwaya.ng/asset/cancel.png" alt="" srcset="">
    <h5 class="proceed-order-title">Fill to complete order</h5>
    <div class="form-container">
        <p class="proceed-warning">Please fill in your correct details</p>
        <div class="form-group">
            <label for="" class="form-label">Fullname</label>
            <input type="text" id="fullname" name="name" >
        </div>

        <div class="form-group">
            <label for="" class="form-label">Phone number</label>
            <input type="text" name="number" id="number">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" id="address">
        </div>

        <div class="form-group">
            <label for="" class="form-label">Email <small>(Must if you are paying online)</small></label>
            <input type="email" name="email" id="email">
        </div>

        <input type="hidden" name="id" id="id" value="{{$product->id}}">
        <button class="btn-proceed">
            procced
            <img src="http://maiwaya.ng/asset/ai.png" alt="" height="18px" width="20px">
        </button>

    </div>
    </div>
</div>


<div class="payment-mode-container">
    <div class="order-container">
    <img class="cancel-icon payment-cancel" src="http://maiwaya.ng/asset/cancel.png" alt="" srcset="">
        <h4 class="proceed-order-title" style="margin-bottom: 10px">Choose Payment Method</h4>

        <button class="payment-mode-btn pay-on-delivering-btn">Pay On Delivering</button>
        <button class="payment-mode-btn pay-now-btn">Pay Now</button>
    </div>
</div>


<div class="proceed-confirmation">
    <div class="order-container">
    <img class="cancel-icon summary-cancel" src="http://maiwaya.ng/asset/cancel.png" alt="" srcset="">
    <img class="check-icon" src="http://maiwaya.ng/asset/check.png" alt="" srcset="">
    <p class="order-success">Success</p>
    <p class="order-id">Order ID <span id="order-id"></span></p>
    <div class="order-message">

    </div>

    <p class="order-thank-you">Thank You, <span id="thank-you"></p>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="footer-address-container" id="contact">
            <div class="footer-logo-container">
                <img class="footer-logo" src="http://maiwaya.ng/asset/m_logo2.png" alt="" srcset="">
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
<script src="http://maiwaya.ng/jquery.min.js"></script>
<script>
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
</script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="http://maiwaya.ng/index.js"></script>
<script src="http://maiwaya.ng/product.js"></script>




