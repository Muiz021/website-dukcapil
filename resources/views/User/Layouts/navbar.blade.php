 <nav class="card mt-3" id="layout-navbar">
     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
         <p class="mb-0 ms-3 fs-6 fw-bold">Kucata'ki Jeneponto

         </p>
         <ul class="navbar-nav flex-row align-items-center ms-auto">

             <!-- User -->
             <li class="nav-item navbar-dropdown dropdown-user dropdown me-3">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <div class="avatar avatar-online">
                         <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                     </div>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                         <a class="dropdown-item" href="#">
                             <div class="d-flex">
                                 <div class="flex-shrink-0 me-3">
                                     <div class="avatar avatar-online">
                                         <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                             class="w-px-40 h-auto rounded-circle" />
                                     </div>
                                 </div>
                                 <div class="flex-grow-1">
                                     <span class="fw-semibold d-block">{{ auth()->user()->username }}</span>
                                     <small class="text-muted">User</small>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <li>
                         <a class="dropdown-item" href="{{ route('logout') }}">
                             <i class="bx bx-power-off me-2"></i>
                             <span class="align-middle">Log Out</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <!--/ User -->
         </ul>
     </div>
 </nav>
