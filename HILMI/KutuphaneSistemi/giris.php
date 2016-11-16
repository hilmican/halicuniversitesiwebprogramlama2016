<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Kutuphane Sistemi Giriş</title>
  </head>
  <body>
    <table style="width:100%" border="0">
      <tr>
        <td style="width:20%">
        </td>
        <td>
          <center>
            <?php
            if($_GET['islem'] == 'hata')
            {
              echo "HATALI KULLANICI ADI YA DA ŞİFRE";
            }
            ?>
            <form action="http://halicders.mediatriple.net/HILMI/KutuphaneSistemi/giris_islem.php" method="POST">
              <table border="0">
              	<tr>
                	<td>Email</td><td>:</td><td><input type="text" name="email"></td>
                </tr>
                <tr>
              		<td>Şifre</td><td>:</td><td><input type="password" name="sifre"></td>
                </tr>
                <tr>
                  <td></td><td></td><td style="text-align:right;"><input type="submit" value="Gönder"></td>
                </tr>
              </table>
            </form>
          </center>
        </td>
        <td style="width:20%">
        </td>
      </tr>
    </table>
  </body>
</html>