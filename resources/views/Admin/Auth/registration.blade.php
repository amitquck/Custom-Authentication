@extends('Admin.layout')
@section('content')
    <div class="container">
        <div class="form-header">
            <span>
                Registration
            </span>
        </div>
        <div class="form_body">
            <form action="" method="post" enctype="multipart/form-data">
                {{-- row -1  --}}
                <div class="row">
                    <div class="input_container1">
                        <div class="lable_text">
                            <label for="name">Name</label>
                        </div>
                        <div class="input_box">
                            <input type="text" name="username" id="name" autocomplete="off" placeholder="Enter Your Name">
                        </div>
                    </div>
                    <div class="input_container2">
                        <div class="lable_text">
                            <label for="name">Email</label>
                        </div>
                        <div class="input_box">
                            <input type="email" name="useremail" id="email" autocomplete="off" placeholder="Enter Your Email">
                        </div>
                    </div>
                </div>
                {{-- row -2 --}}
                <div class="row">
                    <div class="input_container1">
                        <div class="lable_text">
                            <label for="profile">Profile</label>
                        </div>
                        <div class="input_box">
                            <input type="file" name="userprofile" id="profile" autocomplete="off">
                        </div>
                    </div>
                    <div class="input_container2">
                        <div class="lable_text">
                            <label for="name">Password</label>
                        </div>
                        <div class="input_box">
                            <input type="password" name="useremail" id="email" autocomplete="off" placeholder="Enter Your Email">
                        </div>
                    </div>
                </div>
                 {{-- row -3 --}}
                 <div class="row">
                    <div class="input_container1">
                        <div class="lable_text">
                            <label for="profile">Profile</label>
                        </div>
                        <div class="input_box">
                            <input type="file" name="userprofile" id="profile" autocomplete="off">
                        </div>
                    </div>
                    <div class="input_container2">
                        <div class="lable_text">
                            <label for="name">Email</label>
                        </div>
                        <div class="input_box">
                            <input type="email" name="useremail" id="email" autocomplete="off" placeholder="Enter Your Email">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
