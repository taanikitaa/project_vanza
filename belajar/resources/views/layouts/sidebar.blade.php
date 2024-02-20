<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="/dashboard"><img src="{{asset('assets/images/logo2.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="/dashboard"><img src="{{asset('assets/images/logo-mi.png')}}" alt="logo" /></a>
</div>
    <ul class="nav">
        
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <a href="/">
        <ul class="mt-4 pl-0">
                        <li>Administrator</li>
                    </ul>
        </a>
            
        <li class="nav-item">
            <a class="nav-link" href="/user">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Data User</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="/buku">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Data Buku</span>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <div class="nav-link">
                <div class="mt-4">
                    <div class="border-none">
                        <i class="mdi mdi-bell-ring menu-icon"></i>
                        <span class="text-black">Notification</span>
                    </div>
                    <a href="/">
                    <ul class="mt-4 pl-0">
                        <li>Sign Out</li>
                    </ul>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>