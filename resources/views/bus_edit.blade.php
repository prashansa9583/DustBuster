@extends('layouts.admin')
@section('title','Edit Bus Details')
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
        <div class="title">EDIT BUS DETAILS</div>
        <div class="content">
            <form class="form" method="post" action="{{route('bus.update',[$busArr[0]->id])}}">
                @csrf
                <div class="user-details">

                    <div class="input-box">
                        <span class="details">Registration Plate Number</span>
                        <input type="text" name="reg_plate" class="input" value="{{ $busArr[0]->reg_plate }}"
                            placeholder="Enter the Registration Plate Number here" required>
                        <br>
                        <span style="color:red">@error('reg_plate'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Bus Model</span>
                        <select required name="model" value ="{{$busArr[0]->model}}">
                            <option value="">Select</option>
                            <option value="Model 1">Model 1</option>
                            <option value="Model 2">Model2 </option>
                        </select>
                    </div>
                </div>


                <div style="display:inline-flex;">
                    <div class="button" style="justify-content:center;">
                        <a href="/bus_show">
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
</section>

@endsection