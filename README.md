<br />
<p align="center">
  <img src="https://user-images.githubusercontent.com/64909665/129536918-b1b92420-8244-4cd1-9a6f-a34093133289.png" alt="Logo" height="80">

  <h3 align="center">AntiHoax</h3>

  <p align="center">
    MELAPOR DAN MENGECEK HOAKS DI HALAMAN WEB ANTIHOAX
    <br />
    <a href="http://hidden-tundra-44511.herokuapp.com/" target="_blank"><strong>Kunjungi Website »</strong></a>
    <br />
    <br />
  </p>
</p>

### Kelompok 12 - Antihoax

| Nama  | NIM | Kontribusi |
| ------------- | ------------- | ------------- |
| Adelline Kania Setiyawan  |  16520123  | Frontend  |
| Ayub Seipanya  | 16520155  | Backend  |
| Zayd Muhammad K. Z.  | 16520163  | Backend  |
| Rahmat Al Fajri  | 16520171  | Designer  |
| Fadil Fauzani  | 16520180  | Backend  |
| Jova Andres Riski Sirait  | 16520182  | Backend  |
| Hanifah Ghina Nabila  | 16520235  | Frontend  |
| Roby Purnomo  | 16520331  | Frontend  |
| Ahmad Alfani Handoyo  | 16520350  | Designer  |

 <br />

### About Project
Sebuah project yang kami bangun untuk membantu orang mengidentifikasi tingkat kebenaran suatu berita dan juga untuk memenuhi tugas SPARTA 2020.
 <br />
 
### Built With
![laravel](https://user-images.githubusercontent.com/64909665/129547771-78c0580f-aaa2-4e61-9df8-204b0bd33e27.png)
![240px-ArrowHeart svg](https://user-images.githubusercontent.com/64909665/129547993-ed820387-f9dd-49ec-956d-3ec14886616a.png)

 <br />
 
## Getting Started

### Prerequisites
* [PHP >= 7.2.5](https://windows.php.net/download)
* [Composer](https://getcomposer.org/download/)
* [Laravel](https://laravel.com/)
   ```sh
  composer global require laravel/installer
  ```
  
### Installation
1. Clone the repo
```sh
   git clone https://github.com/jovaandres/Milestone02_K12.git
   ```
2. Switch to the repo folder
```sh
   cd Milestone02_K12/src/antihoax_web
   ```
3. Install dependencies
```sh
   composer install
   ```
   or
```sh
   composer update
   ```
4. Generate a new application key
```sh
   php artisan key:generate
   ```
5. Run the database migrations
```sh
   php artisan migrate
   ```
6. Start the local development server
```sh
   php artisan serve
   ```
   
 <br />
 
## Demo

### Melaporkan Berita yang Diragukan Kebenarannya

Masukkan link(harus url) dan juga penjelasan dari anda, lalu submit.

![image](https://user-images.githubusercontent.com/64909665/129545605-d1079601-a6a5-4670-afb1-52a55f7fdaf8.png)


### Mengecek Keakuratan Suatu Berita
Masukkan link(harus url) yang dicurigai ke search-box yang ada.

![image](https://user-images.githubusercontent.com/64909665/129545010-f0d53fd9-27c3-4744-b002-42ecf481c11a.png)

Akan muncul hasil tingkat keakuratan dalam bentuk persentase (Link yang ditampilkan hanya contoh, baca disclaimer).

![image](https://user-images.githubusercontent.com/64909665/129545208-432a6f55-593f-4b73-9999-f36d5c333c9c.png)


### Upvote dan Downvote
Tekan tombol **Benar** jika menurut anda berita tersebut diragukan kebenarannya dan tombol **Hoaks** untuk sebaliknya (Link yang ditampilkan hanya contoh).

![image](https://user-images.githubusercontent.com/64909665/129546251-177f71dc-4419-43cd-9098-e47c7d0812ab.png)
