<html>
   
   <head>
      <title>@yield('title')</title>
      
   </head>
   
   <body>
      <div>
         <div style="width:20%; float:left;">
         @section('sidebar')
         <a href="/ogrenci-listele2">Listele</a><br>
         <a href="/kayit-form2">Kayıt</a><br>
         @show
         </div>
         <div style="width: 80%;float: right;">
            @yield('content')
         </div>
      </div>
   </body>
</html>