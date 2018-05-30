<div class="header">
    <nav class="navbar navbar-top custom-navbar-top">
        <div class="container-fluid">
            <div class="navbar-header custom-icon-header">
                <a href="#"><img id="icon-header" src="/images/logo.png"></a>
            </div>
            <ul class="nav navbar-nav custom-btn-header" >
                <li><a href="#"><img src="images/home.png"><span>Home</span></a></li>
                <li class="dropdown custom-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/gamecata.png">
                        <span>Thể loại game</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-header multi-column columns-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#">Hành động</a></li>
                                    <li><a href="#">Bắn súng</a></li>
                                    <li><a href="#">Game ARPG</a></li>
                                    <li><a href="#">Game RPG</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#">Puzzle</a></li>
                                    <li><a href="#">Racing</a></li>
                                    <li><a href="#">Casual</a></li>
                                    <li><a href="#">Strategy</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>

            </ul>
            <div class="custom-search-input">
            <form class="navbar-form navbar-left form-group has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search game">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </form>
            </div>
            <ul class="nav navbar-nav custom-btn-header-right">
                @if(Session::has('username'))
                    <button class="btn btn-info btn-sm"><i class="fas fa-download"></i>Tải phần mềm</button>
                    <div class="btn-group">
                        <button class="btn btn-info btn-sm " type="button" data-toggle="dropdown" style="border-radius: 3px;"><div class="image-bg" ><img style="border-radius: 50%;" src="../../images/user.png" width="20px" height="18px" style="float: left"> <span class="name-user">{{Session::get('username')}}</span></div></button>
                        <div class="dropdown-menu user-dropdown">
                            <div class=" dropdown-item list-item">
                                <a><div class="fix-image"><div class="image-user"><span class="name-user">{{Session::get('username')}}</span></div></div></a>

                            </div>
                            <div class=" dropdown-item list-item">
                                <a><span class="title-dropdown-user">Số dư khả dụng</span> <span class="price-dropdown-user">300.000Đ</span></a>
                            </div>
                            <div class=" dropdown-item list-item">
                                <a><span class="title-dropdown-user">Số dư Pending</span> <span class="price-dropdown-user">700.000Đ</span></a>
                            </div>

                            <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                            <div class="dropdown-item list-item" id="history1"><a>Lịch sử giao dịch<span class='caret caret-right'></span></a>
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

                            <div class="dropdown-item list-item" id="history1"><a>Đăng xuất<span class='caret caret-right'></span></a>
                                <div class="dropdown-popup dropdown-menu">
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                    <div class="dropdown-item list-item" ><a>Quản lý Shop</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="btn btn-info btn-sm"><i class="fas fa-heart"></i>Yêu thích</button>
                @else
                <button class="btn btn-info btn-sm"><i class="fas fa-shopping-cart"></i>  Tạo shop</button>
                <button class="btn btn-info btn-sm"><i class="fas fa-download"></i>Tải phần mềm</button>
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user-circle"></i>Đăng nhập</button>
                <button class="btn btn-info btn-sm"><i class="fas fa-heart"></i>Yêu thích
                                        <div class="fixed-notifi"><div class="notification"><span>1</span></div></div>
                                        </button>
                @endif
            </ul>
        </div>
    </nav>
    @include('pages/login')
</div>
