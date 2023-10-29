<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TodoList</title>
  {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  --}}

   <link href="css/bootstrap.css" rel="stylesheet"> 
</head>
<body>
@include('layout.nav')

  <div class="container mt-5">
    @yield('content')

  </div>

  <footer class="bg-light p-4" style="margin-bottom: -1rem !important">
     <h6 class="text-center">Nazir Ahmad Rahmaty &copy; 2023</h6>
  </footer>
</body>
</html>

