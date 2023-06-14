@extends('layouts.admin')
@section('title','Manager Registration')
@section('content')

<section class="home-section" style="background-color:#F2F6F8;">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="title">MANAGER REGISTRATION</div>
        <div class="content">
            <form class="form" method="post" action="manager_submit">
                <br/>
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" class="input" value="{{ old('username') }}"
                            placeholder="Enter the UserName here" required>
                        <br>
                        <span style="color:red">@error('username'){{$message}}@enderror</span>
                        <br> 
                    </div>

                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" name="phone" class="input" value="{{ old('phone') }}"
                            placeholder="Enter the Contact number here" required>
                        <br>
                        <span style="color:red">@error('phone'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Email-ID</span>
                        <input type="email" name="email" class="input" value="{{ old('email') }}"
                            placeholder="Enter the Email-Id here" required />
                        <br>
                        <span style="color:red">@error('email'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Set Password</span>
                        <input type="password" name="password" class="input" value="{{ old('password') }}"
                            placeholder="Enter Password here" required />
                    </div>

                    
                    
                    
                </div>
                
                <div style="display:inline-flex;">
                    <div class="button" style="justify-content:center;">
                        <a href="manager_show">
                            <input type="button" value="BACK">
                        </a>
                    </div>
                    <div class="button">
                        <input type="submit" value="SUBMIT">
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>


@endsection