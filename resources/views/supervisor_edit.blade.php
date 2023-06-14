@extends('layouts.admin')
@section('title','Edit Supervisor Details')
@section('content') 

<section class="home-section" style="background-color:#F2F6F8;">
<br>
    <header class="try" style="background-color: #11101D;">
        <div style="color: #fff; font-size:x-large;">
            Dust Buster
        </div>
        <div class="navi">
            <ul class="menu">
                <div class="close-btn"></div>
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item">
                    <a class="sub-btn" href="#">
                        <ion-icon name="person-remove-outline"
                            style="width: 50px; font-size: 20px; justify-content:left;">
                        </ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-item"><a href="{{ route('logout') }}">LogOut</a></li>
                        <!-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="button" class="btn btn-primary">Logout</button>
                    </form> -->
                    </ul>
                </li>
                <li class="menu-item">
            </ul>
            </li>
            </ul>
            </li>
            </ul>
        </div>
        <div class="menu-btn"></div>
    </header>
    <br>
    <br>
    <div class="container">
        <div class="title">EDIT SUPERVISOR DETAILS</div>
        <div class="content">
            <form class="form" method="post" action="{{route('supervisor.update',[$supervisorArr[0]->id])}}">
                @csrf
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" class="input" value="{{ $supervisorArr[0]->username }}"
                            placeholder="Enter the UserName here" required>
                        <br>
                        <span style="color:red">@error('username'){{$message}}@enderror</span>
                        <br> 
                    </div>

                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" name="phone" class="input" value="{{ $supervisorArr[0]->phone }}"
                            placeholder="Enter the Contact number here" required>
                        <br>
                        <span style="color:red">@error('phone'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Email-ID</span>
                        <input type="email" name="email" class="input" value="{{  $supervisorArr[0]->email }}"
                            placeholder="Enter the Email-Id here" required />
                        <br>
                        <span style="color:red">@error('email'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Set Password</span>
                        <input type="password" name="password" class="input" placeholder="Enter Password here" />
                    </div>

                </div>


                <div style="display:inline-flex;">
                    <div class="button" style="justify-content:center;">
                        <a href="/supervisor_show">
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
</section>

@endsection