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



        <table  style="width:80%; margin:40px auto; box-shadow:0 4px 10px rgba(0,0,0,0.1); border-radius:10px; ">

    <thead style="background:#2c3e50; color:white;text-align:center;">
        <tr>
            <th style="padding:12px;">Name</th>
            <th style="padding:12px;">Price</th>
            <th style="padding:12px;">Image</th>
            <th style="padding:12px;">Quantity</th>
        </tr>
    </thead>

    <tbody>
        @foreach($product as $i)
        <tr style="text-align:center; border-bottom:1px solid #ddd;">
            <td style="padding:12px;">{{$i['name']}}</td>
            <td style="padding:12px;">{{$i['price']}}</td>

            <td style="padding:12px;">
                <img src="{{ asset('images/'.$i['image']) }}" 
                     style="width:60px; height:60px; border-radius:6px;">
            </td>

            <td style="padding:12px;">{{$i['quantity']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>


 <a href="{{route('baggage.checkout')}}" style="display:block; margin:20px 550px; padding:12px 20px; text-align:center;
  border:none; background:#6fb3c1; color:white; border-radius:8px; font-size:16px;text-decoration:none; ">checkout</a>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</body>
</html>