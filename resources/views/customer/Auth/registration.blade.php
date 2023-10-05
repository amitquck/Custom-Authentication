<style>
    body
    {
        background: url('{{asset('asset/customer/image/background/image10.jpg')}}') no-repeat fixed center;
        background-size:cover;
    }
</style>
@extends('customer.layout')
@section('content')

    <div class="container">
        <div class="form-header">
            <span>
                Registration
            </span>
        </div>
        <div class="form_body">
            <form action="{{route('submit.registration')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- row -1  --}}
                <div class="row">
                    <div class="input_container1">
                        <div class="lable_text">
                            <label for="name">Name</label>
                        </div>
                        <div class="input_box">
                            <input type="text" name="username" id="name" autocomplete="off" placeholder="Enter Your Name" value="{{old('username')}}">
                        </div>
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="input_container2">
                        <div class="lable_text">
                            <label for="name">Email</label>
                        </div>
                        <div class="input_box">
                            <input type="email" name="useremail" id="email" autocomplete="off" placeholder="Enter Your Email" value="{{old('useremail')}}">
                        </div>
                        @if ($errors->has('useremail'))
                            <span class="text-danger">{{ $errors->first('useremail') }}</span>
                        @endif
                    </div>
                </div>
                {{-- row -2 --}}
                <div class="row">
                    <div class="input_container1">
                        <div class="lable_text">
                            <label for="profile">Profile</label>
                        </div>
                        <div class="input_box">
                            <input type="file" name="userprofile" id="profile" autocomplete="off" value="{{old('userprofile')}}">
                        </div>
                        @if ($errors->has('useremail'))
                            <span class="text-danger">{{ $errors->first('useremail') }}</span>
                        @endif
                    </div>
                    <div class="input_container2">
                        <div class="lable_text">
                            <label for="name">Password</label>
                        </div>
                        <div class="input_box">
                            <input type="password" name="userpassword" id="password" autocomplete="off" placeholder="Create New Password" value="{{old('userpassword')}}">
                        </div>
                        @if ($errors->has('userpassword'))
                            <span class="text-danger">{{ $errors->first('userpassword') }}</span>
                        @endif
                    </div>
                </div>
                 {{-- row -3 --}}
                 <div class="row_button">
                    <div class="input_container3">
                        <div class="input_box">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
