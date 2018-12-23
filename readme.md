Gerekli dosyaları boş bir laravel projesinin üstüne atıyoruz. <br>
Dosyaların olduğu yola komut istemcisinden giriyoruz. <br>
Boş bir veritabanı oluşturup .env  dosyasından ayarlarını yapmanız gerekmekte. <br>
php artisan serve ile localhostta çalıştırdıktan sonra, <br>
Veritabanını kurmak için  <br> 
php artisan migrate:install  <br>
php artisan migrate <br>
Veritabanı kurulduktan sonra localhostta hatırlatma işlemi yapılabilir form gönderildikten sonra aşağıdaki komut ile kontrol sağlanıp mail gönderiliyor. <br>
php artisan schedule:run
