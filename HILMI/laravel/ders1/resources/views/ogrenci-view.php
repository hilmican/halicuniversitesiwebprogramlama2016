<html>
   <head>
      <title>Ogrencileri Listele</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>İsim</td>
            <td>Nuamara</td>
         </tr>
         <?php
         $degisken = Array(Array(1,2),Array(3,5));
         
         $sayac = 0;
         foreach ($degisken as $key) {
            $sayac++;
            echo "$sayac : ".print_r($key)."<br>";
         }

         foreach($ogrenciler as $ogrenci)
         {
            ?>
            <tr>
               <td><?php echo  $ogrenci->id; ?></td>
               <td><?php echo  $ogrenci->isim; ?></td>
               <td><?php echo  $ogrenci->numara; ?></td>
            </tr>
            <?php
         }
         ?>
      </table>
   
   </body>
</html>