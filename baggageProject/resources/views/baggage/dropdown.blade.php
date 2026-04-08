<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/js/all.min.js"
        integrity="sha512-gBYquPLlR76UWqCwD06/xwal4so02RjIR0oyG1TIhSGwmBTRrIkQbaPehPF8iwuY9jFikDHMGEelt0DtY7jtvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>




</head>

<body>

    <div style="background-color: rgb(121, 218, 243); font-size: small;">
        <div class="container d-flex">
            <div style="padding: 20px 30px; margin-left: 50px;">
                <h1>
                    <b style="color: #ffffff;">B</b><span
                        style="font-weight:1000px; font-size: 30px; font-weight:lighter;">aggage</span>
                </h1>
                <label for="" style="font-size: smaller; letter-spacing: 2px; color: grey;"><b>ONLINE STORE</b></label>
                <div style="text-align:left; font-size: 15px; text-decoration:none; ">
                <a href=""><i class="fa-regular fa-circle-user" style="color: #ffffff;"></i> <span
                        style="color:black; text-decoration: none;">Sign in</span></a>
                <a href=""><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> <span
                        style="color: black">Sign up</span></a>
            </div>
            </div>

        </div>
        <nav class="navbar navbar-expand-lg " style="letter-spacing: 2px; font-weight: 600;">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{route('baggage.home')}}"
                                style="color: #d33c3c;">HOME</a><br>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('baggage.about')}}">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                DROPDOWN
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SERVICES</a></li>
                                <li><a class="dropdown-item" href="#">FEATURES</a></li>
                                <li><a class="dropdown-item" href="#">SINGLE PAGE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('baggage.collection')}}">COLLECTIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('baggage.contact')}}">CONTACT</a>
                        </li>

                    </ul>

                </div>
                <form class="d-flex" role="search" style="right: 100%;">
                    <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" />
                    <button class="btn btn-outline bg-danger" type="submit"><i class="fa-solid fa-magnifying-glass"
                            style="color: #ffffff;"></i></button>
                </form>
            </div>
    </div>

    </nav>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Baggage Product</title>
    </head>

    <body style="margin:0; font-family:Arial; background:#f2f2f2;">

        <div style="display:flex; padding:80px; gap:80px; align-items:center;">

            <!-- Left Side Image -->
            <div style="flex:1;">
                <img src="{{asset('images/'.$product->image)}}" style="width:100%; max-width:450px;">
            </div>

            <!-- Right Side Content -->
            <div style="flex:1;">

                <h2 style="margin-top:0; font-size: medium; font-weight: normal;">{{$product->name}}
                </h2>

                <!-- Price -->
                <h3 style="font-weight:normal; font-size: medium;">
                    Rs. {{$product->price}}
                    <span style="text-decoration:line-through; color:gray;font-size: medium;">599</span>
                    <span style="font-size:14px; margin-left:10px; font-size: small;">Click For Offer</span>
                </h3>

                <!-- Email + Button -->
                <div style="margin:20px 0; display:flex;">
                    <input type="email" placeholder="Enter your email..."
                        style="padding:12px; width:250px; border:1px solid #ccc; border-radius:5px 0 0 5px; outline:none;font-size: medium;">

                    <button
                        style="
                    padding:12px 25px;border:none;background:#7ec0cf;color:white;border-radius:0 5px 5px 0;cursor:pointer;">
                        CHECK
                    </button>
                </div>

                <!-- Wishlist -->
                <p>
                    <a href="#" style="color:#555; text-decoration:underline; font-size:small">
                        LOGIN TO SAVE IN WISHLIST
                    </a>
                </p>

                <!-- Description -->
                <p style="color:#666; line-height:1.6;">
                    {{$product->description}}
                </p>

                <!-- Share -->
                <h4 style="font-size:small; color: #666;">SHARE PRODUCT :</h4>

                <div style="display:flex; gap:25px; margin-top:10px;">

                    <span style="cursor:pointer;"><i class="fa-brands fa-facebook-f"
                            style="color: rgb(26, 70, 214);"></i>Facebook</span>
                    <span style="cursor:pointer;"><i class="fa-brands fa-twitter"
                            style="color: rgb(116, 192, 252);"></i>Twitter</span>
                    <span style="cursor:pointer;"><i class="fa-brands fa-google"
                            style="color: rgb(230, 27, 27);"></i>Google</span>

                </div>
                <!-- button -->
                 <form action="{{route('cart.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value=" {{$product->price}}">
                    <input type="hidden" name="image" value="{{$product->image}}">
                    <input type="hidden" name="quantity" value="1">

                    <button style="padding:12px 25px; border:none; background:#7ec0cf; color:white; border-radius:5px; margin-top:25px;">Add to Cart</button>
                 </form>
       
            </div>

        </div>



        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="font-size:20 px;color: #777;line-height: 20px;letter-spacing: 1px;margin-bottom: 0px;">Lorem ipsum dolor sit amet</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl 
                        ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                    <p>Consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit
                        ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco. labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl
                        ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>




        <body class="bg-light">
            <div class="container py-5">

                <div class="row g-4">
                    <h4 style="font-size: xx-large; font-weight: bolder;">Featured Bags</h4>

                    <!-- Product 1 -->
                    <div class="col-md-3">
                        <div
                            style="border: 1px solid #ddd; padding: 15px 25px; border-radius: 5px; text-align: center; background: #e1e1e1; max-width: 100%; margin-bottom: 20px;">
                            <img src="../b1.jpg" class="img-fluid" alt="Sling Bag">
                            <h5 class="mt-3">SLING BAG</h5>
                            <p>
                                <span style="text-decoration: line-through; color: #888; margin-right: 5px;">$599</span>
                                <span style="font-weight: bold; color: red; ">$475.00</span>
                            </p>
                            <p>
                                <span style=" color: gold;">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                            </p>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-md-3">
                        <div
                            style="border: 1px solid #ddd ; padding: 15px 25px; border-radius: 5px; text-align: center; background: #e1e1e1; margin-bottom: 20px;">
                            <img src="../b2.jpg" class="img-fluid" width="90%" alt="Tote Blue">
                            <h5 class="mt-3">TOTE (BLUE)</h5>
                            <p>
                                <span style="text-decoration: line-through; color: #888; margin-right: 5px;">$799</span>
                                <span style="font-weight: bold; color: red; ">$675.00</span>
                            </p>
                            <p>
                                <span style=" color: gold;">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                            </p>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-md-3">
                        <div
                            style="border: 1px solid #ddd; padding: 15px 25px; border-radius: 5px; text-align: center; background: #e1e1e1; margin-bottom: 20px;">
                            <img src="../b3.jpg" class="img-fluid" width="90%" alt="Messenger Bag">
                            <h5 class="mt-3">MESSENGER BAG</h5>
                            <p>
                                <span style="text-decoration: line-through; color: #888; margin-right: 5px;">$799</span>
                                <span style="font-weight: bold; color: red; ">$675.00</span>
                            </p>
                            <p>
                                <span style=" color: gold;">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                            </p>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col-md-3">
                        <div
                            style="border: 1px solid #ddd; padding: 15px 25px; border-radius: 5px; text-align: center; background: #e1e1e1; margin-bottom: 20px;">
                            <img src="../b4.jpg" width="90%" class="img-fluid" alt="Shoulder Bag Pink">
                            <h5 class="mt-3">SHOULDER BAG (PINK)</h5>
                            <p>
                                <span style="text-decoration: line-through; color: #888; margin-right: 5px;">$799</span>
                                <span style="font-weight: bold; color: red; ">$675.00</span>
                            </p>
                            <p>
                                <span style=" color: gold;">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row g-4">



<div class="container">
        <p style="text-align: center; font-size: large; color: darkgray; font-weight:500 ; margin-top: 80px;">Subscribe to the
            Handbags
            Store mailing list
            to receive updates on <br> new arrivals,
            special offers and other discount information.

        </p>
        <div class="row" style="margin-top: 40px;width: 100%;">
            <div class="col-md-9">
                <input type="email" name="email" placeholder="Enter Your Email..."
                    style="border: none; letter-spacing: 1px; color: dimgray; border-radius: 2px; box-shadow: 1px 3px 8px 0 dimgray; width: 50%; line-height: 40px; font-size: 16px; margin-left: 35%; ">
            </div>
            <div class="col-md-3">
                <button
                    style="border-radius: 4px; background-color: aqua; border: none; padding: 7px 30px; color: #ffffff; letter-spacing: 1px; margin-right: 30%; text-transform: uppercase; font-weight:600px;">Subscribe</button>
            </div>
        </div>


    </div>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-lg-4" style="background-color: black; text-align: center;">
                <i class="fa-solid fa-truck" style="color: #ff0040; font-size:28px; padding: 30px 20px; "></i>
                <div style="padding-bottom: 15px;">
                    <h3 style="color: #ffffff; font-size: large;">FREE SHIPPING</h3>
                    <p style="color: dimgray;">On all order over $2000</p>
                </div>
            </div>
            <div class="col-lg-4" style=" background-color:dimgray; text-align: center;">
                <i class="fa-solid fa-bullhorn" style="color: #f00000;  font-size:28px; padding: 30px 20px;"></i>
                <div style="padding-bottom: 15px;">
                    <h3 style="color: #ffffff; font-size: large;">FREE RETURN</h3>
                    <p style="color: rgb(171, 170, 170);">On 1st exchange in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4" style="background-color: black; text-align: center;">
                <i class="fa-solid fa-gift" style="color: #ff0000;  font-size:28px; padding: 30px 20px;"></i>
                <div style="padding-bottom: 15px;">
                    <h3 style="color: #ffffff; font-size: large;">MEMBER DISCOUNT</h3>
                    <p style="color: dimgray; ">Register & save up to $29%</p>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-3">
                <h2>Baggage</h2>
                <label for="" style="font-size: x-small; font-weight: bold; color: gray; letter-spacing: 2px;">ONLINE
                    SHOPPING</label>
            </div>
            <div class="col-lg-3">
                <ul style="list-style: none; font-size: x-small; font-weight: bold;">
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none; padding-bottom: 20%; ">
                            <i class="fa-solid fa-angle-right" style="color: #ff0000;"></i>HOME</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>ABOUT </a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>SHOP</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>COLLECTIONS</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3">
                <ul style="list-style: none; font-size: x-small; font-weight: bold;">
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;">
                            <i class="fa-solid fa-angle-right" style="color: #ff0000;"></i>EXTRA PAGE</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>TERMS & CONDITIONS </a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>SHOP SINGLE</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none" ;><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>CONTACT US</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3">
                <ul style="list-style: none; font-size: x-small; font-weight: bold;">
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;">
                            <i class="fa-solid fa-angle-right" style="color: #ff0000;"></i>LOGIN</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>REGISTER</a>
                    </li>
                    <li style="padding-bottom: 30px;">
                        <a href="" style="color: gray; text-decoration: none;"><i class="fa-solid fa-angle-right"
                                style="color: #ff0000;"></i>PRIVICY & POLICY</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>




    <div class="container">
        <h4 style="text-align: center; margin-top: 80px; letter-spacing: 1px; text-shadow: 1px 1px rgb(79, 78, 78);">
            Follow Us</h4>

        <div style="color: black; text-align: center; margin-top: 20px;">


            <a href=""><i class="fa-brands fa-facebook-f"></i> <span
                    style="color: black; text-decoration: none;">Facebook</span></a>

            <a href=""><i class="fa-brands fa-twitter" style="color: #74C0FC;"></i> <span style="color: black;">
                    Twitter</span> </a>
            <a href=""><i class="fa-brands fa-google" style="color: #d33c3c;"></i> <span style="color: black;">
                    Google</span> </a>
            </ul>
        </div>

        

    </div>

    <div style="text-align: center; padding: 20px 20px; font-size: smaller; font-weight: lighter;">
        <a href="#home"><i class="fa-solid fa-angles-up" style="color: #000000;"></i></a>

    </div>


    <div style="background-color: rgb(233, 231, 231);padding: 5px 2px; text-align: center; color: gray;">
        <p>© 2019 Baggage. All rights reserved | Design by <a href=""
                style="color: rgb(174, 174, 174); text-decoration: none;">W3layouts.</a></p>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>