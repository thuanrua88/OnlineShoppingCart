@extends('layouts.app')
@section('content')
    <div class="our-product-area">
        <div class="container">
            <!-- area title start -->
            <div class="area-title">
                <h2>Giỏ hàng của bạn</h2>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                @foreach($products as $key => $product)
                <tr>
                    <td>#{{ $i }}</td>
                    <td><a href="">{{ $product->name }}</a></td>
                    <td>
                        <img src="{{ pare_url_file($product->attributes->get('avatar')) }}" alt="" style="width: 80px; height: 60px;">
                    </td>
                    <td>{{ number_format($product->price,0,',',',') }} đ</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ number_format($product->quantity * $product->price,0,',',',') }} đ</td>
                    <td>
                        <a href=""><i class="fa fa-pencil"></i> Edit</a>
                        <a href=""><i class="fa fa-trash-o"></i> Delete</a>
                    </td>
                </tr>
                    <?php $i++ ?>
                @endforeach
                </tbody>
            </table>
            <h3 class="pull-right" style="color: darkturquoise">Tổng tiền cần thanh toán {{ number_format(\Cart::getTotal(),0,',',',') }} <a href="" class="btn-success btn">Thanh toán</a></h3>

        </div>
    </div>
@stop
