        @extends("front.master")
        @section("content")      
        <!--form-->
        <div class="form">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-ltr.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                        </ol>
                    </nav>
                </div>
                <div class="signin-form">
                    <form action="{{route("login")}}" method="POST">
                        @csrf
                        <div class="logo">
                            <img src="{{asset("front/imgs/logo.png")}}">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone number">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder=" Password">
                        </div>
                        <div class="row options">
                            <div class="col-md-6 remember">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 forgot">
                                <img src="imgs/complain.png">
                                <a href="#">Forgot password</a>
                            </div> --}}
                        </div>
                        <div class="row buttons">
                            <div class="col-md-6 right">
                                {{-- <a href="{{url("login")}}">Sign in</a> --}}
                                <button type="submit">Sign in</button>
                            </div>
                            <div class="col-md-6 left">
                                <a href="{{url("register")}}">create new account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        
      