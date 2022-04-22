@extends('layout_home')
@section('noidung')
<section class="default-section login-register bg-grey">
<div class="container">
    <div class="row">
         <?php
                    $message= session()->get('message');
                    if ($message) {
                        echo '<div class="alert alert-success" role="alert">
                        '.$message.'
                        </div>';
                        session()->put('message',null);
                    }
                    ?>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="login-wrap form-common">
                 
                <div class="title text-center">
                    <h3 class="text-coffee">Login</h3>
                </div>
                <form class="login-form" action="{{URL::to('checklogin')}}" method="post" name="login">
                   
                     @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="email" placeholder="Username or email address" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="password" name="password" placeholder="********" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label><input type="checkbox" name="chkbox">Remember me</label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <a href="#" class="pull-right">Lost your password</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="submit" name="submit" value="LOGIN" class="button-default button-default-submit">
                        </div>
                    </div>
                </form>
                <div class="divider-login">
                    <hr>
                    <span>Or</span>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#" class="facebook-btn btn-change button-default"><i class="fa fa-facebook"></i>Facebook Connect</a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <a href="#" class="tweeter-btn btn-change button-default"><i class="fa fa-twitter"></i>Twitter Connect</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="register-wrap form-common">
                <div class="title text-center">
                    <h3 class="text-coffee">Register</h3>
                </div>
                <form class="register-form" action="{{URL::to('/register')}}" method="post" name="register">
                     @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="full_name" placeholder="First Name" class="input-fields">
                        </div>
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" placeholder="alitfn58@gmail.com" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="address" placeholder="address" class="input-fields">
                        </div>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="date" name="birthday" placeholder="birthday" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="password" name="password" placeholder=" Password" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="password" name="re_password" placeholder="Confirm Password" class="input-fields">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="submit" name="submit" class="button-default button-default-submit" value="RegIster now">
                        </div>
                    </div>
                </form>
                <p>By clicking on “Register Now” button you are accepting the <a href="terms_condition.html">Terms &amp; Conditions</a></p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection