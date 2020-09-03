<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css/app.css')}}" rel="stylesheet">

<body >
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form  method="post">
                            {{csrf_field() }}
                            <h3 class="text-center text-info">เข้าสู่ระบบเว็บไซต์การประชุม</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">ผู้ใช้งาน :</label><br>
                                <input type="text" name="OF_user"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">รหัสผ่าน :</label><br>
                                <input type="text" name="OF_pass"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input  class="col-md-12 btn btn-info"  type="submit"  name="submit"    value="submit" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>