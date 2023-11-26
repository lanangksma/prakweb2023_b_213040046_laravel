<div id="sidebarMenu" class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary min-vh-100">
    <div class="bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <i data-feather="home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="/dashboard/posts">
                        <i data-feather="file-text"></i>
                        My Posts
                    </a>
                </li>
            </ul>

            @can('admin')
                <hr class="my-2">
                <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
                    <span>ADMINISTRATOR</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">
                            <i data-feather="grid"></i>
                            Post Categories
                        </a>
                    </li>
                </ul>
            @endcan

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form id="logout" action="/logout" method="post">
                        @csrf
                        <a class="nav-link d-flex align-items-center gap-2" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <i data-feather="log-out"></i>
                            Logout
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
