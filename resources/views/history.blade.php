<?php
function format_rp($number)
{
    return 'Rp ' . number_format($number, 0, '.', '.');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="images/kosmetik1.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="css/tiny-slider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Beauty Cosmetics</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    @include('partials.nav')
    <!-- End Header/Navigation -->
    <!-- Start history checkout section -->
    <section class="history-checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">History Checkout</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $order->invoice }}</td>
                                <td>{{ format_rp($order->subtotal) }}</td>
                                <td>
                                    @if($order->status == 1)
                                    Menunggu Pembayaran
                                    @else
                                    Sudah Dibayar
                                    @endif
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <a href="{{ route('order.show', $order->invoice) }}" class="btn btn-primary">Detail</a>
                                    @if($order->status == 1)
                                    <a href="{{ route('order.edit', $order->invoice) }}" class="btn btn-success">Bayar</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    <!-- Start history Section -->


    <!-- Start Footer Section -->
    @include('partials.footer')
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
