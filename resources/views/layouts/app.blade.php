<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.head')
</head>
<body>
  @include('layouts.header')
  <div class="p-10">  
    @yield('content')
    @include('layouts.script')
  </div>
</body>
</html>