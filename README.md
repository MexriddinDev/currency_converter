# Currency Converter and Weather Info Project

Bu loyiha PHP yordamida yaratilgan valyuta konvertori va ob-havo ma'lumotlarini ko‘rsatuvchi dasturdir. Valyuta kurslari O‘zbekiston Respublikasi Markaziy bankining API'sidan olinadi, va ob-havo ma'lumotlari Weatherman saytining API orqali ko‘rsatiladi. Ushbu loyiha HTML va CSS yordamida interfeys yaratib, foydalanuvchilarga soddalik va qulaylikni ta'minlaydi.

## Loyiha Xususiyatlari

- **Valyuta Konvertori**: Foydalanuvchilar kiritilgan miqdorni bir valyutadan boshqasiga tez va oson konvertatsiya qilishlari mumkin. Kurslar avtomatik ravishda Markaziy bank API'sidan yangilanadi.
- **Ob-havo Ma'lumotlari**: Maxsus tugma bosilganda, yangi oynada ob-havo haqida ma'lumot ko‘rsatiladi. Bu ma'lumotlar Weatherman API yordamida olinadi.
- **Interfeys**: Soddalashtirilgan va foydalanish uchun qulay HTML va CSS bilan bezatilgan interfeys.

## Texnologiyalar

- **PHP**: Backend uchun ishlatilgan (versiya 8.2.12)
- **HTML**: Frontend markap
- **CSS**: Sahifa ko‘rinishini boshqarish uchun
- **API**: Ma'lumotlarni olish uchun ishlatilgan

## API Ma'lumotlari

### 1. Markaziy Bank API
Valyuta kurslarini olish uchun quyidagi API URL'idan foydalaniladi:

API_url=https://cbu.uz/uz/arkhiv-kursov-valyut/json/


- **JSON Format**: API JSON formatda ma'lumot beradi.
- **Yangilanish**: Kurslar muntazam ravishda yangilanadi va turli valyutalarning so‘mdagi qiymatini taqdim etadi.

### 2. Weatherman API
Ob-havo ma'lumotlarini olish uchun quyidagi API URL'idan foydalaniladi:

https://api.weatherman.com/v1/weather<-> shu saytdan weaatherni API adresini oladi


- **JSON Format**: API ob-havo ma'lumotlarini JSON formatda taqdim etadi.
- **Ma'lumotlar**: Hozirgi havo harorati, namlik, shamol tezligi va boshqa tafsilotlar mavjud.

## O‘rnatish va Ishga Tushirish

1. PHP server dasturini (masalan, `XAMPP` yoki `WAMP`) o‘rnating.
2. Loyihani `htdocs` (yoki `www`) papkangizga joylashtiring.
3. **API Sozlamalari**: `config.php` faylini tahrirlab, kerakli API URL'larini kiriting.
4. Brauzeringizda quyidagi manzilni oching: `http://localhost/currency-converter`

## Loyihani Ishlatish

- **Valyuta Konvertori**:
  1. Konvertatsiya qilish miqdorini kiriting.
  2. Valyutalarni tanlang va "Konvertatsiya qilish" tugmasini bosing.
  3. Natijalar darhol ko‘rsatiladi.
- **Ob-havo Ma'lumotlari**:
  1. "Ob-havo ma'lumotlari" tugmasini bosing.
  2. Yangi oynada ob-havo haqidagi to‘liq ma'lumot ochiladi.

## Maqsad va Foydasi

- **Maqsad**: Valyutalarni tez va ishonchli konvertatsiya qilish, shuningdek, foydalanuvchilarga hozirgi ob-havo ma'lumotlarini taqdim etish.
- **Foydasi**: Dastur qulay interfeys va real vaqt rejimida ma'lumot yangilanishi bilan ajralib turadi.

## Masalalar va Qayta Aloqa

Agar muammolarga duch kelsangiz yoki loyihani takomillashtirish bo‘yicha takliflaringiz bo‘lsa, quyidagi manzil orqali menga bog‘lanishingiz mumkin:

- **GitHub Issues**: Loyihadagi muammolarni ko‘rsatish uchun
- **Telegram**: @Mexriddin_Nuriddinov orqali fikr-mulohaza bildiring

## Hissa Qo‘shish

Loyiha ochiq manba bo‘lib, hissa qo‘shmoqchi bo‘lsangiz, pull request yuborishingiz mumkin. Har qanday takliflar va yangilanishlar uchun oldindan rahmat!

## Litsenziya

Ushbu loyiha ochiq manbali va ochiq foydalanishga mo‘ljallangan. Barcha huquqlar saqlangan.

GitHubdagi loyiha uchun manzil: [MexriddinDev GitHub](https://github.com/MexriddinDev)
