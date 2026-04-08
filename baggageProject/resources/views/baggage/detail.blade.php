<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"/>
</head>

<body>

<!-- HEADER -->
<div style="background-color: rgb(121, 218, 243); font-size: small;">
    <div class="container d-flex justify-content-between align-items-center">
        
        <div style="padding: 20px 30px;">
            <h1>
                <b style="color: #ffffff;">B</b>
                <span style="font-size: 30px; font-weight: lighter;">aggage</span>
            </h1>
            <label style="letter-spacing: 2px; color: grey;"><b>ONLINE STORE</b></label>
        </div>

        <div style="font-size: 15px;">
            <a href="#"><i class="fa-regular fa-circle-user text-white"></i> Sign in</a>
            <a href="#" class="ms-3"><i class="fa-solid fa-pen-to-square text-white"></i> Sign up</a>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg" style="letter-spacing: 2px; font-weight: 600;">
        <div class="container">

            <div class="collapse navbar-collapse show">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="{{route('baggage.home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('baggage.about')}}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('baggage.collection')}}">COLLECTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('baggage.contact')}}">CONTACT</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search...">
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </button>
                </form>
            </div>

        </div>
    </nav>
</div>

<!-- TABLE -->
<div class="container mt-5">

    <h3 class="mb-4">Orders List</h3>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($checkout as $i)

        <tr>
            <td>{{$i->name}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->phone}}</td>
            <td>{{$i->location}}</td>

            <td>
                <button 
                    class="btn btn-success viewBtn"
                    data-bs-toggle="modal" 
                    data-bs-target="#orderModal"

                    data-name="{{$i->name}}"
                    data-email="{{$i->email}}"
                    data-phone="{{$i->phone}}"
                    data-location="{{$i->location}}"
                    data-order='{{$i->order}}'
                >
                    View Detail
                </button>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>

</div>

<!-- SINGLE MODAL -->
<div class="modal fade" id="orderModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Order Detail</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p><b>Name:</b> <span id="m_name"></span></p>
                <p><b>Email:</b> <span id="m_email"></span></p>
                <p><b>Phone:</b> <span id="m_phone"></span></p>
                <p><b>Location:</b> <span id="m_location"></span></p>

                <table class="table table-bordered text-center">
                    <thead class="table-secondary">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody id="productTable"></tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<!-- JS -->
<script>
document.querySelectorAll('.viewBtn').forEach(button => {
    button.addEventListener('click', function () {

        // clear old data
        let table = document.getElementById('productTable');
        table.innerHTML = "";

        // set basic info
        document.getElementById('m_name').innerText = this.dataset.name;
        document.getElementById('m_email').innerText = this.dataset.email;
        document.getElementById('m_phone').innerText = this.dataset.phone;
        document.getElementById('m_location').innerText = this.dataset.location;

        // parse products
        let products = JSON.parse(this.dataset.order);

        // convert object → array
        products = Object.values(products);

        // loop products
        products.forEach(p => {
            table.innerHTML += `
                <tr>
                    <td>${p.name}</td>
                    <td>${p.price}</td>
                    <td>${p.quantity}</td>
                    <td><img src="/images/${p.image}" width="60"></td>
                </tr>
            `;
        });

    });
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>