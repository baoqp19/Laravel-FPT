<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        

        @section('title')
            shoppe |
        @show
    </title>
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('admin.layouts.sidebar');
            <div class="col-8 offset-3 p-0 position-relative">
                @include('admin.layouts.header');

                <div class='p-4' style="min-height: 100px">
                    @yield('content')
                </div>
                @include('admin.layouts.footer');
            </div>
        </div>
    </div>
</body>
</html>