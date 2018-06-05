<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
          <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    </head>

    <body>
         @include('Commons.navbar')
        
        <div class="container">
            @include('Commons.error_messages')
            
            @yield('content')
        </div>
    </body>
</html>