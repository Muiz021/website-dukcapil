 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard-admin') }}" class="app-brand-link">
             <img src="{{ asset('assets/img/imglogin.png') }}" alt="" width="40px">
             <span class="app-brand-text demo menu-text fw-bolder ms-2">sidak</span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1">
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Dashboard</span>
         </li>
         <li class="menu-item {{ $title == 'Dashboard Admin' ? 'active' : '' }}">
             <a href="{{ route('dashboard-admin') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-home-circle"></i>
                 <div data-i18n="Analytics">Dashboard</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Data Kartu Keluarga</span>
         </li>
         <li class="menu-item {{ $title == 'Kartu Keluarga' ? 'active' : '' }}">
             <a href="{{ route('kk.index') }}" class="menu-link">
                 <i class="menu-icon bi bi-people"></i>
                 <div data-i18n="Analytics">Kartu Keluarga</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Pages</span>
         </li>
         <li
             class="menu-item {{ ($title == 'Data Akta Kelahiran' ? 'active' : '' || $title == 'Detail Data Akta Kelahiran') ? 'active' : '' }}">
             <a href="{{ route('datakelahiran.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-body'></i>
                 <div data-i18n="Analytics">Akta Kelahiran</div>
             </a>
         </li>
         <li
             class="menu-item {{ ($title == 'Data Akta Kematian' ? 'active' : '' || $title == 'Detail Data Akta Kematian') ? 'active' : '' }}">
             <a href="{{ route('datakematian.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-accessibility'></i>
                 <div data-i18n="Analytics">Akta Kematian</div>
             </a>
         </li>
         <li class="menu-header small text-uppercase">
             <span class="menu-header-text">Pendaftar</span>
         </li>
         <li class="menu-item {{ $title == 'Data Masyarakat' ? 'active' : '' }}">
             <a href="{{ route('datamasyarakat.index') }}" class="menu-link">
                 <i class='menu-icon bx bx-group'></i>
                 <div data-i18n="Analytics">Data Masyarakat</div>
             </a>
         </li>
     </ul>
 </aside>
