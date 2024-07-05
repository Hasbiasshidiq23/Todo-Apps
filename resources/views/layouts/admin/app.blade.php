<!doctype html>
<html lang="en">

    @include('layouts.admin.meta')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between" style="background-color: rgb(187, 187, 187)">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        @include('layouts.admin.menu')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('layouts.admin.header')
      <!--  Header End -->
      <div class="container-fluid" style="background: url(https://i.pinimg.com/originals/57/ca/98/57ca981288bb93099699264eed00dddd.jpg); background-attachment: fixed;">
        @yield('content')
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  @include('layouts.admin.script')
</body>

</html>
