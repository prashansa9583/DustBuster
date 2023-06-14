<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    
    <!--Responsive Sidebar Menu -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/style8.css">
    <link rel="stylesheet" href="css/style9.css">
    <link rel="stylesheet" href="css/style10.css">
    <link rel="stylesheet" href="css/style11.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style5.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style8.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style9.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style11.css') }}" rel="stylesheet" >

    <link rel="icon" href="css/advocate-modified.png" type="image/gif" sizes="64x64">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- sidebar -->
    <?php
        $email = $capsule['username'];
        $emailarray = explode('@', $email);
        $emailSuffix = $emailarray[0];
    ?>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-library icon bx-lg'></i>
                <div class="logo_name">Dust Buster</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li class="list">
                <a href="/Adashboard">
                    <i class='bx bx-grid-alt bx-lg'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="list">
                <a href="/bus_show">
                    <i class='bx bx-bus bx-lg'></i>
                    <!-- <i class='bx bx-user bx-lg'></i> -->
                    <span class="links_name">Bus Details</span>
                </a>
                <span class="tooltip">Bus Details</span>
            </li>
            <li class="list">
                <a href="/create_bus">
                    <!-- <i class='bx bx-user-plus bx-lg'></i> -->
                    <i class='bx bx-add-to-queue bx-lg'></i>
                    <span class="links_name">Add Bus</span>
                </a>
                <span class="tooltip">Add Bus</span>
            </li>
            <li class="list">
                <a href="/supervisor_show">
                    <i class='bx bx-folder-open bx-lg'></i>
                    <span class="links_name">Supervisor Details</span>
                </a>
                <span class="tooltip">Supervisor Details</span>
            </li>
            <li class="list">
                <a href="/manager_show">
                    <i class='bx bx-receipt bx-lg'></i>
                    <span class="links_name">Manager Details</span>
                </a>
                <span class="tooltip">Manager Details</span>
            </li>
            <li class="list">
                <a href="/audit_log_show">
                    <i class='bx bx-calendar bx-lg'></i>
                    <span class="links_name">Audit Log</span>
                </a>
                <span class="tooltip">Audit Log</span>
            </li>
            <li class="list">
                <a href="/notification">
                <i class='bx bx-notification'></i>
                    <span class="links_name">Notification</span>
                </a>
                <span class="tooltip">Notification</span>
            </li>
            <li class="list">
                <a href="/setting">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
               <i style="font-size: 43px;margin-left: -9px;margin-right: 10px;" class='bx bx-user-circle'></i>
                <div class="name_job">
                    <div style="font-size: 19px;margin-top: -16px;" class="name">
                        {{$emailSuffix}}
                    </div>
                    <div style="font-size: 14px;" class="job">
                        Admin
                    </div>
                </div>
                </div>
                <a href="{{ url('logout') }}">
                <i  style="font-size: 35px;" title="Logout" class='bx bx-log-out' id="log_out" ></i>
                    <span class="links_name">LogOut</span>
                </a>
                <span class="tooltip">LogOut</span>
            </li>
        </ul>
    </div>

    @yield('content')
<section class="home-section" style="background-color:#F2F6F8;">
    <!-- header -->
    <header class="try " style="background-color: #353535;">
            <div style="color: #fff; font-size:x-large;">
                         Dust Buster
            </div>
            <div class="navi">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item" style="padding-top: 10px;"><a href="/Adashboard">Home</a></li>
                    <li class="menu-item"> 
                        <a class="sub-btn" href="/adminProfile">
                        <i  style="font-size: 43px;padding-top: 26px;" class='bx bxs-user-circle'></i>
                        </a> 
                        <ul class="sub-menu">
                        <?php
                            $emailSuffix = $capsule['username'];
                        ?>
                            <li class="sub-item"><a href="/adminProfile">Profile</a></li>
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

    <!--footer-->
    <div style="color:white; 
            bottom: 0px; 
            margin-bottom: 0px;
            background-color: #353535; 
            height: 60px; 
            text-align:center;
            font-size: larger;
            padding-top: 10px;
            padding-left: 15px;">
                Driven By Data |
                <small>
                    © 2022Driven By Data — @driven_by_data </a>
                    <!-- © 2021Driven By Data — <a href="https://nexasoftware.com/">@nexa_software</a> -->
                </small>

    </div>
</section>

    <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");

            closeBtn.addEventListener("click", () => {
                sidebar.classList.toggle("open");
                menuBtnChange();//calling the function(optional)
            });


            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
                if (sidebar.classList.contains("open")) {
                    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
                } else {
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
                }
            }
        </script>

        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
        <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>