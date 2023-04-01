 <?php
 use App\Models\Aktakelahiran;
 use App\Models\Aktakematian;
 ?>

 <nav class="navbar navbar-expand-lg fixed-top">
     <div class="container">
         <a class="navbar-brand" href="{{ route('dashboard-user') }}">
             <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100px" />
         </a>
         <div>
             <a href="" class="btn btn-success me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                 aria-controls="offcanvasRight">
                 <i class="bi bi-bell-fill"></i>
             </a>
             <a href="{{ route('logout') }}" class="btn btn-danger">
                 <i class="bi bi-power"></i>
             </a>
         </div>
     </div>
 </nav>

 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
     <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">Notifikasi</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <hr>
         <p>Akta Kelahiran</p>
         <p hidden> {{ $aktakelahiran = Aktakelahiran::where('user_id', auth()->user()->id)->orderBy("id", "desc")->get() }}</p>
         @foreach ($aktakelahiran as $item)
             <div class="card mb-2 px-4 py-3">
                 <p class="mb-0">Pengajuan Akta Kelahiran</p>
                 <span class="fw-bold">{{ $item->namaanak }}</span>
                 <p class="mb-0 ms-auto text-success" {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</p>
                 <p class="mb-0 ms-auto text-danger" {{ $item->is_verification == 0 ? '' : 'hidden' }}>Diproses...</p>
             </div>
         @endforeach
         <hr>
         <p>Akta Kematian</p>
         <p hidden> {{ $aktakematian = AktaKematian::where('user_id', auth()->user()->id)->orderBy("id", "desc")->get() }}</p>
         @foreach ($aktakematian as $item)
             <div class="card mb-2 px-4 py-3">
                 <p class="mb-0">Pengajuan Akta Kematian</p>
                 <span class="fw-bold">{{ $item->namaalm }}</span>
                 <p class="mb-0 ms-auto text-success" {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</p>
                 <p class="mb-0 ms-auto text-danger" {{ $item->is_verification == 0 ? '' : 'hidden' }}>Diproses...</p>
             </div>
         @endforeach
         <hr>
     </div>
 </div>
