<!-- Model-->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="login">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h3 class="lg-title">Đăng nhập</h3>
                    <h4 class="lg-title">Become a part of our community!</h4>
                    <p class="lg-title">with your social network</p>
                    <div class="row socialButtons">
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-block btn-google">
                                    <i class="fab fa-google-plus-g"></i>
                                    <span class="hidden-xs">Google+</span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-block btn-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="hidden-xs">Facebook</span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="btn btn-block btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                    <span class="hidden-xs">Twitter</span>
                                </a>
                            </div>
                    </div>
                    <div class="row loginOr">
                        <i>or</i>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form class="loginForm" action="{{route('login')}}" autocomplete="off" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                @if(Session::has('flag'))
                                    <div class="alert alert-{{session()->get('flag')}}">{{session()->get('notification')}}</div>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username or email" required>
                                </div>
                                <span class="help-block"></span>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <span class="help-block hidden">Password error</span>
                                <div class="remember-me">
                                    <label class="checkbox">
                                        <input type="checkbox" value="remember-me"> <p>Keep me signed in</p>
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-block btn-login" type="submit">Đăng nhập</button>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8"><p class="register-text">Chưa có tài khoản? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">ĐĂNG KÝ</a></p></div>
                        <div class="col-sm-4"><a>Khôi phục mật khẩu</a></div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('pages.register')