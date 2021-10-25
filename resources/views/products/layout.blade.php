<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
          font-family:arial;
      }
      .titre{
          display:flex;
          justify-content:space-between;
          align-items:center;
      }
      .contenu{
          width:500px;
          margin:1em auto;
      }
      .contenu input:not(input[type='submit']){
          width:100%;
          height:30px;
          margin-bottom:1em;
          font-size:1.5em;
      }
      
     
    </style>
</head>
<body>
    @yield('header')
    <div class="container">
       @yield('content')
    </div>
</body>
</html>