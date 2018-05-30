<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="register">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h3 class="lg-title">Đăng ký</h3>
                    <h4 class="lg-title">Become a part of our community!</h4>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form class="registerForm" action="{{route('register')}}" autocomplete="off" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                @if(Session::has('flag'))
                                    <div class="alert alert-{{session()->get('flag')}}">{{session()->get('notification')}}</div>
                                @endif
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                                <span class="help-block"></span>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password-repeat" placeholder="Repeat Password" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="phone-number" placeholder="Phone Number" required>
                                </div>
                                <span class="help-block hidden">Password error</span>
                                <button class="btn btn-primary btn-block btn-register" type="submit">Đăng ký</button>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8"><p class="register-text">Bạn đã có tài khoản ? <a href="#">ĐĂNG NHẬP</a></p></div>
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