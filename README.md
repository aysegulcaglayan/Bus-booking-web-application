# Otobüs Bilet Rezervasyon Sistemi 

Bu proje, PHP yazılım dili ile geliştirilmiş bir hayali turizm acentesi web sitesidir.

## Kullanılan Teknolojiler

- PHP
- CodeIgniter 4
- HTML
- CSS
- Bootstrap
- MySQL
- JavaScript
### Projede 2 Adet API Kullanılmıştır
- Google Maps API
- Kredi Kartı Ödeme Sistemi API




## Arayüz Tasarımı

### Giriş Paneli
Bu sayfa web sitesinin giriş sayfasıdır. Bu sayfada Kullanıcı girişi ve admin girşleri için iki farklı sekme bizi karşılamaktadır.

![1](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/3bdc95db-050f-4146-8aab-11322e92e891)

### Müşteri Giriş Paneli
Bu sayfa web sitesinin müşteri giriş sayfasını içermektedir.Bu sayfada vertabanından kullanıcı bilgi kontrolü yapılmaktadır.

![2](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/ef3a1f27-e5af-42d0-9c83-95f94a3aa528)


### Müşteri Kayıt Paneli
Projemizin bu sayfasında veritabanına müşteri kaydı yapılmaktadır.

![3](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/797daac3-a7c5-409d-80ac-ac6b84579eff)


### Sefer Seçme Paneli
Projemizin bu sayfasında API ile harita üzerinden başlangıç konumu ve varış konumu seçerek o iki konum arasındaki seferleri içeren sayfaya yönlendirmektedir.

![4](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/098f3db4-7eb1-4665-874f-84b48b86e494)


### Koltuk Seçim Paneli
Koltuk seçim panelinde çeşitli cinsiyet kısıtlamaları ile kullanıcıya koltuk seçimi yaptırılmaktadır.

![5](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/740d1c57-8fcf-42b5-a080-8de83c9e5043)

### Bilet Alma Paneli
Projemizin bu sayfasında kullanıcının tipine göre(öğrenci,memur vs.) bilet seçebilmesini ve otobüste rezervasyon işleminin tamamlanmasını sağlamaktayız.

![6](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/0d6628f0-5aa3-4de4-8610-7868d3b6cd29)


### Rezervasyon Detyalarını İçeren Sayfa
Bu sayfada rezervasyon detayları bulunmaktadır.Bu sayfa üzerinden ödeme işlemine geçilmektedir.


![7](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/2365a421-6a47-4795-9ac6-e0c2b094ea08)



### Kredi Kartı Kayıt
Kredi kartı ödeme seçeneği için kullanıcıların kart kayıtlarını yapmaları için form oluşturduk.


![8](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/f39a380c-5e4b-4e7e-9c50-fd2b5a1a0e86)


### Admin Paneli
Admin Paneli üzerinden sefer oluşturma ,otobüs ekleme ,yolcu bilgileri ve ödeme bilgileini kontrol edilebilmektedir.Sayfamızın genel işleyişini bu sayfa ile büyük ölçüde yapabilmekteyiz.


![Admin Panel 1](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/b2e3dfcd-3d00-40b5-ac16-f12642c67450)



#### Admin Paneli Sefer Bilgisi


![Admin Sefer Bilgisi](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/fe7f9759-9a44-4a04-b5c5-77f45cdee056)


#### Admin Paneli Otobüs Ekleme


![Admin Otobüs Ekleme](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/3f053bfd-e3a2-4c08-8565-8bd93a3d8d11)


#### Admin Paneli Ödeme Bilgileri


![Admin Ödeme Bilgileri](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/ac0ae008-c90b-4592-bb23-a7981e58459b)



#### Admin Paneli Yolcu Bilgileri


![Admin Yolcu Bilgileri](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/a7092b26-7170-4f12-8d83-483fc93ea431)


### Diğer Sayfa Detayları


#### Hakkımzıda Sayfası


![Hakkımızda Sayfası](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/1203fc9d-78fb-4d08-9f21-ac4a32a096df)


#### İletişim Sayfası


![İletişim Sayfası](https://github.com/aysegulcaglayan/bus-booking-web-application/assets/89272211/fa2f7f66-43e5-425c-8aed-d54091da9e35)





## Veritabanı Tasarımı
MySQL üzerinde tasarladığımız ilişkisel veritabanında normalizasyon kurallarına dikkat ederek oluşturduğumuz tablolar ile çeşitli verileri tablolarımızda tuttuk.Veritabanının projeye entegrasyonu aşamasında WAMP Server kullanılmıştır.

![Veritabanı](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/23d63489-5243-4630-b47f-7dcf43f0c96d)
