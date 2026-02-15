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

            </div>
            <div style="text-align:right; font-size: 15px; text-decoration:none; margin-left: 60%;margin-top: 40px; ">
                <a href=""><i class="fa-regular fa-circle-user" style="color: #ffffff;"></i> <span
                        style="color:black; text-decoration: none;">Sign in</span></a>
                <a href=""><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> <span
                        style="color: black">Sign up</span></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg a" style="letter-spacing: 2px; font-weight: 600;">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="{{route(home)}}"
                                style="color: #d33c3c;">HOME</a><br>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
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
                            <a class="nav-link" href="collection.html">COLLECTIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search here..."
                            aria-label="Search" />
                        <button class="btn btn-outline bg-danger" type="submit"><i class="fa-solid fa-magnifying-glass"
                                style="color: #ffffff;"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row" style="display: flex;padding-top: 80px;">
            <div class="col-lg-5" style="margin-left: 8px; padding-left: 101px;">
                <img src="bag1.png" width="110%" alt="">
            </div>
            <div class="col-lg-5 " style="padding: 30px 30px; text-align: left; letter-spacing: 1px; color: #424242;">
                <h3>About Our Baggage</h3>
                <p >Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero.Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque
                    maximus libero.</p>
                    <button style="background-color: red; text-decoration: none; padding: 8px 10px; color: #ffffff;">Read More</button>
            </div>
            
        </div>
    </div>


    <div class="container">
        <div class="row" style="margin-top: 100px; text-align: center;">
            <div class="col-lg-4">
                <h6 style="text-transform: uppercase;">Fast & Free Delivery</h6>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero</p>
            </div>
            <div class="col-lg-4">
                <h6 style="text-transform: uppercase;">Safe & Secure Payments</h6>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero</p>
            </div>
            <div class="col-lg-4">
                <h6 style="text-transform: uppercase;">100% Money Back Guarantee</h6>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-md-6">
                <img src="banner1.jpg" width="135%" alt="">
            </div>
            <div class="col-md-4" style="text-align: center; margin-left: 190px;">
                <h6 style="letter-spacing: 1px; ">Travel Must Haves</h6>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero.</p>
                <a href=""
                    style="background-color: red; text-decoration: none; padding: 8px 10px; color: #ffffff;"><b>SHOP
                        NOW</b></a>
            </div>
        </div>
    </div>


    <div class="container">
        <h1 style="text-align: center; margin-top: 60px;">Safety Meets Style</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="c1.jpg" width="100%" alt="">
            </div>
            <div class="col-md-4" style="text-align: center; letter-spacing: 1px;">
                <h6>Need Extra Space ?</h6>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus
                    libero.</p>
                <a href=""
                    style="background-color: red; text-decoration: none; color: #ffffff; padding: 9px 15px;"><b>SHOP
                        NOW</b></a>
            </div>
            <div class="col-md-4">
                <img src="c2.jpg" width="100%" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row " style="margin-top:100px ;">
            <div class="col-md-6" style="background-image: url(ab1.jpg); padding-top: 250px; min-height: 1px;">
                <h3 style="color: #ffffff;font-weight: 200; ">50% Off Any <br>Women's Bags</h3>
                <a href=""
                    style="background-color: red; text-decoration: none; color: #ffffff; padding: 9px 15px; font-weight: 200; font-size: small;"><b>SHOP
                        NOW</b></a>
            </div>
            <div class="col-md-6"
                style="background-image: url(ab2.jpg);padding-top:250px ; min-height: 1px; text-align: right;padding-bottom: 50px; padding-left: 15px;">
                <h4 style="color: #ffffff; font-weight: 200;">30% Off Any <br>Men's Bags</h4>
                <a href=""
                    style="background-color: red; text-decoration: none; color: #ffffff; padding: 9px 15px; font-weight: 200; font-size: small;"><b>SHOP
                        NOW</b></a>
            </div>

        </div>
    </div>


    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-3" style="text-align: center;">
                <h3>Trending Now</h3>
                <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque
                    maximus libero.</p>
                <a href=""
                    style="background-color: red; text-decoration: none; color: #ffffff; padding: 9px 15px;"><b>SHOP
                        NOW</b></a>
            </div>

            <div class="col-8 pl-5">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="g1.jpg" width="90%" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="g2.jpg" width="90%" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="g3.jpg" width="90%" alt="">
                    </div>
                    <div class="col-lg-4 pt-5">
                        <img src="g4.jpg" width="90%" alt="">
                    </div>
                    <div class="col-lg-4 pt-5">
                        <img src="g5.jpg" width="90%" alt="">
                    </div>
                    <div class="col-lg-4 pt-5">
                        <img src="ab1.jpg" width="100%" alt="" height="190px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <p style="text-align: center; font-size: large; color: darkgray; font-weight:500 ;">Subscribe to the Handbags
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