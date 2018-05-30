@extends('master')
@section('content')
<div class="row custom-page-content2  clearfix " ng-app="Store" >
        <div class="col-md-2"></div>
        <div class="col-md-8 content-detail" >
            <!-- content-->
            <div class="top-content ">
                <div class="image-bg"><div class="image-detail"></div></div>
                
                <div class="item-detail">
                    <div class="inner-item">
                        <table>
                            <tr>
                                <td>
                                    <div class="image-bg"><img src="https://vignette.wikia.nocookie.net/inazuma-eleven/images/8/8c/Saruyuu.png/revision/latest?cb=20130829025426&path-prefix=vi"></div>
                                    
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
                <div class="like">
                    <!-- <a href="href">Like</a> -->
                </div>
            </div> 
            <!-- bottom content-->
            
            <div class="bottom-content">
                <section ng-controller="PanelController as panel">
                     <div class="menu-bottom">
                    <ul>
                        <li  ng-class="{active:panel.isSelected('description')}"><a  ng-click="panel.setTab('description')" href>CHI TIẾT SẢN PHẨM</a></li>
                        <li  ng-class="{active:panel.isSelected('specification')}"><a ng-click="panel.setTab('specification')" href>THÔNG TIN CẤU HÌNH</a></li>
                        <li  ng-class="{active:panel.isSelected('review')}"><a ng-click="panel.setTab('review')" href>ĐÁNH GIÁ (<span>0</span>) </a></li>
                    </ul>
                    </div>
                
                <div  class="panel custom-panel" ng-show="panel.isSelected('description')">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos provident vel quo deserunt et soluta, similique doloremque nobis accusantium, sequi veritatis error natus necessitatibus officiis consectetur nulla qui unde voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos provident vel quo deserunt et soluta, similique doloremque nobis accusantium, sequi veritatis error natus necessitatibus officiis consectetur nulla qui unde voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos provident vel quo deserunt et soluta, similique doloremque nobis accusantium, sequi veritatis error natus necessitatibus officiis consectetur nulla qui unde voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing elit. Quos provident vel quo deserunt et soluta, similique doloremque nobis accusantium, sequi veritatis error natus necessitatibus officiis consectetur nulla qui unde voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos provident vel quo deserunt et soluta, similique doloremque nobis accusantium, sequi veritatis error natus necessitatibus officiis consectetur nulla qui unde voluptas!</p>
                </div>
                <div class="panel custom-panel" ng-show="panel.isSelected('specification')"><p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum praesentium ipsa vero consequuntur sunt porro vitae, a sed fuga debitis ratione, quas mollitia voluptate, ad voluptatum repellat voluptates! At, doloribus.
                    </p>
                </div>
                <div class="panel custom-panel" ng-show="panel.isSelected('review')">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum aliquid vitae, consequuntur error! Eius ipsa dolores quam, quas illo molestiae iste ab distinctio unde eveniet mollitia libero tenetur et.</p>
                </div>
            </section>
               
               <div class="wrapper-list-item">
                    <a href="" style="font-size: 15px;margin-left: 10px;">GAME CUNG THE LOAI </a>
                    
                    <div class="list-item-same">
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
                        </div>
                    </div>
               </div>
            </div>

            <!--end bottom contetn-->

        </div>
            <div class="col-md-2"></div>
    </div>
@endsection