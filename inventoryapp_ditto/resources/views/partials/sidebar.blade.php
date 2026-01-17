    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('template/src/assets/images/logos/logo-light.svg')}}" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>


        @auth
        <div class="px-3 mt-3 mb-4">
          <div class="d-flex align-items-center p-3 rounded-3 shadow-sm bg-light">
            
            <!-- Avatar -->
            <div class="me-3">
              <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                  style="width: 45px; height: 45px; font-weight: 600;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
              </div>
            </div>

            <!-- User Info -->
            <div class="flex-grow-1">
              <div class="fw-semibold text-dark">
                {{ Auth::user()->name }}
              </div>
              <div class="text-muted small">
                ID: {{ Auth::user()->id }}
                • {{ ucfirst(Auth::user()->role) }}
              </div>
            </div>

          </div>
        </div>
        @endauth






        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                  <iconify-icon icon="lucide:home" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>


            <li class="nav-small-cap">
              <iconify-icon icon="lucide:user-plus" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
              <span class="hide-menu">AUTH</span>
            </li>

            {{-- Tombol Sidebar Daftar --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="/daftar" aria-expanded="false">
                <span>
                  <iconify-icon icon="lucide:user-plus" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <iconify-icon icon="lucide:user-plus" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
              <span class="hide-menu">INVENTORY</span>
            </li>

            @auth
              @if (Auth::check() && Auth::user()->role === 'admin')
              {{-- Tombol Sidebar Categories --}}
              <li class="sidebar-item">
                <a class="sidebar-link" href="/categories" aria-expanded="false">
                  <span>
                    <iconify-icon icon="lucide:clipboard-list" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu">Categories</span>
                </a>
              </li>
              @endif
            @endauth

            {{-- Tombol Sidebar Products --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="/products" aria-expanded="false">
                <span>
                  <iconify-icon icon="lucide:layout-list" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Products</span>
              </a>
            </li>


            <li class="sidebar-item">
              <a class="sidebar-link" href="/transactions" aria-expanded="false">
                <span>
                  <iconify-icon icon="mdi-light:cart" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Transactions</span>
              </a>
            </li>

          </ul>
    </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>