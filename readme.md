Gerekli dosyaları boş bir laravel projesinin üstüne atıyoruz. <br>
Dosyaların olduğu yola komut istemcisinden giriyoruz. <br>
Boş bir veritabanı oluşturup .env  dosyasından ayarlarını yapmanız gerekmekte. <br>
<code>php artisan serve</code> ile localhostta çalıştırdıktan sonra, <br>
Veritabanını kurmak için  <br> 
<code>php artisan migrate:install</code>  <br>
<code>php artisan migrate</code> <br>
Veritabanı kurulduktan sonra localhostta hatırlatma işlemi yapılabilir form gönderildikten sonra aşağıdaki komut ile kontrol sağlanıp mail gönderiliyor. <br>
<code>php artisan schedule:run</code>
