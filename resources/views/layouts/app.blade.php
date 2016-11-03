<!DOCTYPE html>
<html lang="es">

@section('header')
    @include('layouts.partials.header')
@show

<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('layouts.partials.mainheader')

    @include('layouts.partials.sidebar')

        <div class="content-wrapper">

        @include('layouts.partials.contentheader')

            <section class="content">
                @yield('main-content')
            </section>
        </div>

        @include('layouts.partials.controlsidebar')

        @include('layouts.partials.footer')

    </div>
</div>
@section('scripts')
    @include('layouts.partials.scripts')
@show
</body>
</html>