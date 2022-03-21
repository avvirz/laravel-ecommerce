<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css"
        integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" src="{{ asset('thewayshop/css/userpdfinvoice.css') }}">
</head>

<body class="body-bg-color">

    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            @php
                use App\Http\Controllers\admin\SettingsController;
                use App\Models\Settings;
                $dynamicData = SettingsController::dynamicContent();
            @endphp
            <div class="card-header p-4">
                <div class="float-right">
                    <h3 class="mb-0">Invoice #{{ $orders->id }}</h3>
                    {{ $ldate = date('Y-m-d H:i:s') }}
                </div>
            </div>
            @foreach ($dynamicData as $data)
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-3">From:</h5>
                            <h3 class="text-dark mb-1">TheWayShop</h3>
                            <div><b>Head Office:</b></div>
                            <div>{{ $data->address }}</div>
                            <div>Email: {{ $data->email }}</div>
                            <div>Phone: {{ $data->phone }}</div>
                        </div>
            @endforeach
            <div class="col-sm-6 ">
                To:<h3 class="text-dark mb-1">{{ $orders->user->name }}</h3>
                <div>{{ $orders->address->address }}</div>
                <div>{{ $orders->address->pincode }}</div>
                <div>Email: {{ $orders->user->email }}</div>
            </div>
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
                <tbody>
                    <tr>
                        <td class="center">1</td>
                        <td class="left strong">{{ $orders->product->name }}</td>
                        <td class="left">{{ $orders->product->product_name }}</td>
                        <td class="right"> Rs.{{ $orders->product->discount_price }}</td>
                        <td class="center">{{ $orders->quantity }}</td>
                        <td class="right">Rs. {{ $orders->grand_total }}</td>
                    </tr>

                </tbody>
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
                                <strong class="text-dark">Total : </strong>
                            </td>
                            <td class="right">
                                <strong class="text-dark">Rs. {{ $orders->grand_total }}</strong>
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
{{-- <style>
    .body-bg-color {
        background-color: white;
    }

    .padding {
        padding: 2rem !important
    }

    .card {
        margin-bottom: 30px;
        border: none;
        -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
    }

    .card-header {
        background-color: #fff;
        border-bottom: 1px solid #e6e6f2
    }

    h3 {
        font-size: 20px
    }

    h5 {
        font-size: 15px;
        line-height: 26px;
        color: #3d405c;
        margin: 0px 0px 15px 0px;
        font-family: 'Circular Std Medium'
    }

    .text-dark {
        color: #3d405c !important
    }

</style> --}}

</html>
