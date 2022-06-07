<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css-admin.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Kelompok 5</span>
                    <span class="profession">Pemrograman Web</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/admin_dashboard">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/daftar_buku">
                            <i class='bx bx-book icon' ></i>
                            <span class="text nav-text">Daftar Buku</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/daftar_member">
                            <i class='bx bx-group icon' ></i>
                            <span class="text nav-text">Daftar Member</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/daftar_pinjam">
                            <i class='bx bx-calendar icon' ></i>
                            <span class="text nav-text">Daftar Pinjam</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/form_pengembalian">
                            <i class='bx bx-box icon' ></i>
                            <span class="text nav-text">Pengembalian</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/daftar_skorsing">
                            <i class='bx bx-block icon' ></i>
                            <span class="text nav-text">Skorsing</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="#">
                    <a href="login">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    </head>
    <body>
    <section class="home">
        <div class="text">Sistem Informasi Perpustakaan
        </div>
        <div class="text">@yield('content')</div>
    </section>
    </body>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
</body>
</html>
