@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@include('admin.layouts.topbar')
<div class="page-content">
    @yield('content')
</div>
@include('admin.layouts.footer')