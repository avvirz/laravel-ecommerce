<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <div class="card-header p-4">
                <div class="float-right">
                    @foreach($order as $orders)
                    <h3 class="mb-0">Invoice No. : {{ $orders->id}}</h3>
                    @endforeach
                    {{ $ldate = date('Y-m-d H:i:s') }}
                </div>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">From:</h5>
                        <h3 class="text-dark mb-1">The Way Shop</h3>
                        <div><b>Head Office,</b></div>
                        <div>703 - Venus Atlantis Corporate Park,</div>
                        <div>100 Feet Rd, near Shell Petrol Pump,Prahlad Nagar,</div>
                        <div>Ahmedabad, Gujarat 380015.</div>
                        <div>Email: customercare@suport.com</div>
                    </div>
                    @foreach ($order as $orders)
                    <div class="col-sm-6 ">
                        <h5 class="mb-3">To:</h5>
                        <h3 class="text-dark mb-1">{{$orders->user->first_name}}</h3>
                        <div>{{ $orders->address->address }}</div>
                        <div>{{ $orders->address->pincode }}</div>
                        <div>Email: {{ $orders->user->email }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th class="right">Price</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        @foreach ($order as $orders)
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong">{{ $orders->product->name }}</td>
                                <td class="left">{{ $orders->product->product_name }}</td>
                                <td class="right">{{ $orders->product->price }}</td>
                                <td class="center">{{$orders->quantity}}</td>
                                <td class="right">{{ $orders->product->price*$orders->quantity}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Subtotal</strong>
                                    </td>
                                    <td class="right">{{ $orders->product->price*$orders->quantity}}/-</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong class="text-dark">{{ $orders->product->price*$orders->quantity}}/-</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p class="mb-0">Thank You For Shopping !</p>
            </div>
        </div>
    </div>

</body>

</html>
