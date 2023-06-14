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
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-library icon bx-lg'></i>
            <div class="logo_name">LMS</div>
            <i class='bx bx-menu' id="btn"></i>
            
        </div>
        <ul class="nav-list">
                <?php
                    $email = $capsule['username'];
                    $emailarray = explode('@', $email);
                    $emailSuffix = $emailarray[0];
                ?>
            <li class="list">
                <a href="/SAdashboard">
                    <i class='bx bx-grid-alt bx-lg'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="list">
                <a href="/handleAdminData(SA)">
                <i class='bx bxs-user-detail bx-lg'></i>
                    <span class="links_name">Admin Details</span>
                </a>
                <span class="tooltip">Admin Details</span>
            </li>
            <li class="list">
                <a href="/addAdmin">
                    <i class='bx bx-user-plus bx-lg'></i>
                    <span class="links_name">Add Admin</span>
                </a>
                <span class="tooltip">Add Admin</span>
            </li>
            <li class="list">
                <a href="/financial_year_show(SA)">
                    <i class='bx bx-folder-open bx-lg'></i>
                    <span class="links_name">Financial Year Details</span>
                </a>
                <span class="tooltip">Financial Year Details</span>
            </li>
            <li class="list">
                <a href="/AuditLog(SA)">
                    <i class='bx bx-receipt bx-lg'></i>
                    <span class="links_name">Audit Log</span>
                </a>
                <span class="tooltip">Audit Log</span>
            </li>
            <li class="profile">
                <div class="profile-details">
               <i style="font-size: 43px;margin-left: -9px;margin-right: 10px;" class='bx bx-user-circle'></i>
                <div class="name_job">
                    <div style="font-size: 19px;margin-top: -16px;" class="name">
                        {{$emailSuffix}}
                    </div>
                    <div style="font-size: 14px;" class="job">
                        Superadmin
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
    <header class="try" style="background-color: #11101D;">
            <div style="color: #fff; font-size:x-large;">
                Lawyer Management System
            </div> 
            <div class="navi">
                <ul  class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item" style="padding-top: 10px;"><a href="SAdashboard">Home</a></li>
                    <li class="menu-item">
                        <a class="sub-btn" href="userProfile">
                        <i  style="font-size: 43px;padding-top: 26px;" class='bx bxs-user-circle'></i>
                        </a>
                        <ul class="sub-menu">
                        <?php
                            $email = $capsule['username'];
                            $emailarray = explode('@', $email);
                            $emailSuffix = $emailarray[0];
                        ?>
                            <li class="sub-item"><a href="userProfile">Profile</a></li>
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
            background-color: #11101D; 
            height: 60px; 
            margin-left: 0px;
            font-size: larger;
            padding-top: 10px;
            padding-left: 15px;">
                Nexa Software |
                <small>
                    © 2021Nexa Software — <a href="https://nexasoftware.com/">@nexa_software</a>
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