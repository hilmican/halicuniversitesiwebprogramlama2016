<?php

if(mail("hilmi@hilmibaycan.com","Deneme Maili", "Bu bir deneme mailidir"))
{
	echo "Mail başarılı şekilde gönderildi.";
}
else
{
	echo "Mail gönderilirken bir hata oluştu.";
}

?>