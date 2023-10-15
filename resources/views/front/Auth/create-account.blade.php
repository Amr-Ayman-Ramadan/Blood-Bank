        @extends("front.master")
        @section("content")
          <!--form-->
          <div class="form">
            <div class="container">
                <div class="path">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-ltr.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create new account</li>
                        </ol>
                    </nav>
                </div>
                <div class="account-form">
                    <form action="{{route("register")}}" method="POST">
                        @csrf
                        <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        <input placeholder="Birth date" name="d_o_b" class="form-control" type="text" name="d_o_b" onfocus="(this.type='date')" id="date">
                        <select name="blood_type_id" class="form-control" id="">
                            <option selected>BloodType</option>
                            @foreach ($bloodTypes as $bloodType )
                            <option value="{{$bloodType->id}}">{{$bloodType->name}}</option>
                            @endforeach
                        </select>                        
                        <select class="form-control" name="Governorates">
                            <option selected>Governorate</option>
                            @foreach ($governorates as $governorate )
                            <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                            @endforeach
                        </select>
                        <select class="form-control" name="city_id">
                            <option selected>City</option>
                            @foreach ($cities as $city )
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                
                        </select>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone number">
                        <input placeholder="Last date for donation" name="last_donation_date" class="form-control" type="text" onfocus="(this.type='date')" id="date">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                        <input type="password" name="password_conformation" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
                        <div class="create-btn">
                            {{-- <input type="submit" value="Creat"> --}}
                            <button type="submit">Creat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        
      