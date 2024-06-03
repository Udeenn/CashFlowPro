<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="text-center mt-1 text-white">
        <h3 class="sidebar-mini-hide">{{ config('app.name') }}</h3>
    </div>
<hr style="color: white">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
