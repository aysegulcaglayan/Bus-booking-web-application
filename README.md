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

![Ana Sayfa](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/976d78d1-832e-4355-b931-ed8a1631b0fd)

### Müşteri Giriş Paneli
Bu sayfa web sitesinin müşteri giriş sayfasını içermektedir.Bu sayfada vertabanından kullanıcı bilgi kontrolü yapılmaktadır.

![Dersler](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/8ef7f29c-e82a-47a4-9e1e-8b0e1a811d0e)

### Müşteri Kayıt Paneli
Projemizin bu sayfasında veritabanına müşteri kaydı yapılmaktadır.

![Ders Programı](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/42afc14d-73bb-47fc-aa48-8f30a81f4328)

### Sefer Seçme Paneli
Projemizin bu sayfasında API ile harita üzerinden başlangıç konumu ve varış konumu seçerek o iki konum arasındaki seferleri içeren sayfaya yönlendirmektedir.

![Öğretmenler](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/c7bcbb14-79aa-435b-9907-5621f9bd4e7d)

### Koltuk Seçim Paneli
Koltuk seçim panelinde çeşitli cinsiyet kısıtlamaları ile kullanıcıya koltuk seçimi yaptırılmaktadır.

![Öğretmen Ekleme](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/68d3e035-9bcf-48ba-88a6-6d0ee9d077ba)

### Bilet Alma Paneli
Projemizin bu sayfasında kullanıcının tipine göre(öğrenci,memur vs.) bilet seçebilmesini ve otobüste rezervasyon işleminin tamamlanmasını sağlamaktayız.

![Kısıtlar](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/c9b692f9-07b2-4426-8386-f71676035a5f)

### Rezervasyon Detyalarını İçeren Sayfa
Bu sayfada rezervasyon detayları bulunmaktadır.Bu sayfa üzerinden ödeme işlemine geçilmektedir.


![Kısıt Ekleme](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/84f39024-1a54-4bac-935b-15cd87a09523)


### Kredi Kartı Kayıt
Kredi kartı ödeme seçeneği için kullanıcıların kart kayıtlarını yapmaları için form oluşturduk.


![Kısıt Ekleme](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/84f39024-1a54-4bac-935b-15cd87a09523)

### Admin Paneli
Admin Paneli üzerinden sefer oluşturma ,otobüs ekleme ,yolcu bilgileri ve ödeme bilgileini kontrol edilebilmektedir.Sayfamızın genel işleyişini bu sayfa ile büyük ölçüde yapabilmekteyiz.


![Kısıt Ekleme](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/84f39024-1a54-4bac-935b-15cd87a09523)



## Veritabanı Tasarımı
MySQL üzerinde tasarladığımız ilişkisel veritabanında normalizasyon kurallarına dikkat ederek oluşturduğumuz tablolar ile çeşitli verileri tablolarımızda tuttuk.Veritabanının projeye entegrasyonu aşamasında WAMP Server kullanılmıştır.

![Veritabanı](https://github.com/AliEmirTuran/Lesson-Program-Project-with-Graph-Coloring/assets/89272211/23d63489-5243-4630-b47f-7dcf43f0c96d)
