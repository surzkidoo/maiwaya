<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="asset/m_logo.png" class="logo" alt="" set="">
            <h1 class="brand-name">Maiwaya</h1>
        </div>

        <div class="menu-container">
            <img class="menu-cancel" src="asset/cancel.png" alt="" srcset="">
            <li class="menu-item">Why Maiwaya?</li>
            <li class="menu-item">Contact us</li>
            <li class="menu-item">How we works</li>
            <li class="menu-item">About</li>
            <li class="menu-item">Return policies</li>
        </div>

        <div class="contact-support-container">
            <img src="asset/w-logo.png" class="contact-support-logo" alt="">
            <button class="contact-support-btn">Contact Support</button>
        </div>

        <img src="asset/Group 16.png" class="menu-icon" alt="">
    </header>

<div class="search-container">

    <div class="product-container">
    
        <div class="product-list-container">
         
            <form method="post" action="/add-product" enctype="multipart/form-data">
                @csrf
                <p>name</p>
                <input type="text" name="name">
                <p>colour</p>
                <input type="text" name="color">

                <p>price</p>
                <input type="text" name="price">

                <p>battery</p>
                <input type="text" name="battery">

                <p>storage</p>
                <input type="text" name="storage">

                <p>brand</p>
                <select name="brand_id" id="">
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>

                <p>condition</p>
                <select name="condition" id="">
                    <option value="New">New</option>
                    <option value="UK">UK</option>
                    <option value="Second">SECOND</option>
                </select>

                <p>image</p>
                <input type="file" name="image" id="">

                <p>description</p>
                <textarea name="description" id="" cols="30" rows="10"></textarea>

<br>
                <input type="submit" value="submit" >
            </form>

            <h4>ORDERS</h4>
            <div  style="overflow-x:auto;">

            <table style="overflow:scroll;">
                <th>Id</th>
                <th>Name</th>
                <th>product Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Payment Id</th>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->payment_id}}</td>
                </tr>
                @endforeach

               

            </table>
        </div>
        
        </div>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="footer-address-container">
            <div class="footer-logo-container">
                <img class="footer-logo" src="asset/m_logo2.png" alt="" srcset="">
                <h2 class="footer-title">Maiwaya</h2>
            </div>

            <p class="footer-address">NO. 22 Arkilla behind umar ali shinkafi polytechnic Sokoto, Nigeria. </p>
        </div>

        <div>
            <h2 class="footer-title">Contact</h2>
            <div class="contact-contents">
                <div class="contact-content">
                    <img class="contact-img" src="asset/Vector.png" alt="" srcset="">
                    <p>@Maiwaya</p>
                </div>
                <div class="contact-content">
                    <img class="contact-img" src="asset/Vector1.png" alt="" srcset="">
                    <p>+234080600070664</p>
                </div>
            </div>

        </div>

        <div>
            <h2 class="footer-title">Links</h2>
            <div class="footer-link-container">
                <p class="footer-link">Terms & Condition</p>
                <p class="footer-link">Why us?</p>
                <p class="footer-link">Return Policy</p>
                <p class="footer-link">How we work</p>
            </div>

        </div>
    </div>

    <p class="footer-copy">@ 2023 Maiwaya All Right Reserved</p>

</footer>
</body>
</html>
<style>
    table  {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

td,  th {
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #4CAF50;
color: white;
}
    </style>
