@extends('master')
@section('content')
<div class="wrapper">
    <div class="container">
        <div class="content">
            <div class="inner-content">
                <div class="menu-content">
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Basic dropdown</button>

                        <div class="dropdown-menu user-dropdown">
                            <div class="row dropdown-item list-item">
                                <a><div class="fix-image"><div class="image-user"><span class="name-user">Tên user</span></div></div></a>

                            </div>
                            <div class="row dropdown-item list-item">
                                <a><span class="title-dropdown-user">Số dư khả dụng</span> <span class="price-dropdown-user">300.000Đ</span></a>
                            </div>
                            <div class="row dropdown-item list-item">
                                <a><span class="title-dropdown-user">Số dư Pending</span> <span class="price-dropdown-user">700.000Đ</span></a>
                            </div>

                            <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>

                            <div class="dropdown-item list-item" id="history1"><a>Lịch sử giao dịch<span class='caret caret-right'></span></a></a>
                                <div class="dropdown-popup dropdown-menu">
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                </div>

                            </div>

                            <div class="dropdown-item list-item" id="history1"><a>Nạp tiền<span class='caret caret-right'></span></a>
                                <div class="dropdown-popup dropdown-menu">
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                </div>
                            </div>
                            <div class="dropdown-item list-item" id="history1"><a>Đăng xuất<span class='caret caret-right'></span></a></a>
                                <div class="dropdown-popup dropdown-menu">
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-content">
                    <img src="https://anhdephd.com/wp-content/uploads/2017/05/hinh-nen-yasuo-dep-nhat.jpg" >
                    <div class="item">
                        <div class="inner-item">
                            <table>
                                <tr>
                                    <td>
                                        <img src="https://vignette.wikia.nocookie.net/inazuma-eleven/images/8/8c/Saruyuu.png/revision/latest?cb=20130829025426&path-prefix=vi">
                                    </td>
                                    <td>

                                        <div class="detail-game">
                                            <h3>God of war (2018) <span class="sale-number" >-70%</span></h3>
                                            <div><span>* * * * *</span></div>
                                            <div><span class="text-price-old">Giá cũ</span></div>
                                            <div><span class="text-price-now">Giá mới</span></div>
                                            <button class="button-rent">Thuê game</button><button class="button-rent">3000đ/3h</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection