<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/side_logo.png')}}">
    <title>Sistem Absensi dan tunjangan dinas kehutanan</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css')}}" rel="stylesheet">
    
</head>
    <body style="background: url({{ asset('dashboard/assets/bg_welcome.png')}});">
    <header class="masthead text-center ">
    
      <div class="masthead-content">
        <div class="container">
          <img src="{{ asset('dashboard/assets/dephut.png')}}" height="100px">
          <h1 class="masthead-heading mb-0 text-gray">Sistem Informasi Tunjangan Pegawai</h1>
          <h2 class="masthead-subheading mb-0 text-orange">Dinas Kehutanan Jawa Timur</h2>
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-xl rounded-pill mt-5">Home</a>
                        
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-xl rounded-pill mt-5">Login</a><br>
                        
                        <a href="{{ route('register') }}" class="text-white">Register</a>
                    @endauth
                </div>
            @endif
          
        </div>
      </div>
      
    </header>






    </body>
</html>
