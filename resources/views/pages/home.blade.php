@extends('master')
@section('content')
<div class="row custom-page-content">
    <div class="row custom-page-background"></div>
    <div class="col-md-2"></div>
    <div class="col-md-8 content">
        <div class="main-content">
            <section ng-controller="">
                <div class="menu-top">
                    <ul>
                        <li  ng-class="{active:panel.isSelected('description')}"><a  class="menu-title" ng-click="panel.setTab('description')" href="#" style="padding-top: 25px;">GAME PLATFORM</a></li>
                        <li  ng-class="{active:panel.isSelected('specification')}"><a ng-click="panel.setTab('specification')" href><img src="../../images/steam.png"><span class="text-menu-header" >Stream</span></a></li>
                        <li  ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" href><img src="../../images/Origin.png"><span class="text-menu-header">Origin</span> </a></li>
                        <li  ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" href><img src="../../images/Uplay-icon.png"><span class="text-menu-header">UPlay</span></a></li>
                        <li  ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" href><img src="../../images/Ubisoft_logo.png"><span class="text-menu-header">Obisoft</span> </a></li>
                        <li  ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" href><img src="../../images/gog.png"><span class="text-menu-header">GOG</span> </a></li>
                        <li  ng-class="{active:panel.isSelected('review')}" style="width:16.5%;"><a style="padding-top:25px;" ng-click="panel.setTab('review')" href><img src="../../images/Blizzard-logo.png"><span class="text-menu-header">Blizzard</span> </a></li>
                    </ul>
                </div>


            </section>

            <div class="wrappre-order clearfix">
                <div class="order-button">
                    <button class="btn btn-primary">Sắp xếp theo</button>
                    <select class="selectpicker custom-select">
                        <option>Mặc định</option>
                        <option>Từ cao xuống thấp</option>
                        <option>Từ thấp lên cao</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                   <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                   <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item  col-sm-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                        <div class="main-content-item">
                            <div class="info-game">
                                <ul>
                                    <li><span class="name-game">Battlegrounds</span></li>
                                    <li><span class="text-price-old">Giá cũ</span></li>
                                    <li><span class="text-price-now">Giá now</span></li>
                                </ul>
                            </div>
                            <div class="user-action">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="bottom-content">
            <div class="wrapper-content">
               <section ng-controller="">
                     <div class="menu-top">
                        <ul>
                            <div class="row">
                                <li class="col-sm-4" ng-class="{active:panel.isSelected('description')}"><a  ng-click="panel.setTab('description')" style="padding-top: 25px;">TOP GAME THUE NHIEU</a></li>
                                <li class="col-sm-5" ng-class="{active:panel.isSelected('specification')}"><a ng-click="panel.setTab('specification')" style="padding-top: 25px;"  >TOP GAME MOI DUOC THUE GAN NHAT</a></li>
                                <li class="col-sm-3" ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" style="padding-top: 25px;"  >TOP GAME MOI NHAT</a></li>
                            </div>
                        </ul>
                    </div>
            </section>

                <div class="row list-group clearfix">
                    <div class="item  col-sm-12">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../../images/slider-home.png" alt="Los Angeles">
                                </div>

                                <div class="item">
                                    <img src="../../images/slider-home.png" alt="Chicago">
                                </div>

                                <div class="item">
                                    <img src="../../images/slider-home.png" alt="New York">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                       <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                        <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                        <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                        <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                        <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item  col-sm-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="../../images/game_previrew_ex.png" alt="" />
                            <div class="main-content-item">
                                <div class="info-game">
                                    <ul>
                                        <li><span class="name-game">Battlegrounds</span></li>
                                        <li><span class="text-price-old">Giá cũ</span></li>
                                        <li><span class="text-price-now">Giá now</span></li>
                                    </ul>
                                </div>
                                <div class="user-action">
                                    <ul>
                                        <li>
                                        <button class="btn btn-primary btn-add">Thuê game
                                                <a><span class="glyphicon glyphicon-heart"  aria-hidden="true" >
                                                    <div class="content-like">Thêm vào yêu thích</div>
                                                    </span>
                                                </a>
                                        </button>

                                    </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="order-button">
                        <a href="">XEM TẤT >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8"></div>
</div>
@endsection

