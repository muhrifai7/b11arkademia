# Bootscamp Arkdemie 11
## KLOTER 4
### Dalam mengerjakan soal test ini saya mengunakan text editor,browser dan xammp sebagai DBMSnya

### REST API 
- Adalah perangkat lunak yang di dilamnya mendefinisaikan aturan untuk membuat web service
### JSON
- Adalah sebuah file yang dapat di baca manusia dan computer dan sebagai media pertukaran data yang di dalamnya
terdapt key dan value yang berpsangan
### Pembahasan Soal
#### 1 Jawaban soal no 1 berbentunk file php dan returnnya dalam bentuk json 
#### 2 Dalam mengerjakan soal no 2 saya memanfaatkan regex untuk mencari pola huruf yang diinginkan
#### 3 Untuk soal no 3 saya memanfaatkan regex untuk mencari suatu huruf seperti huruf vocal / consonan tertentu yang saya
declare kedalam sebua variabel, sehingga tinggal di pakai dalam function dengan memanfaatkan function match dan map
#### 4 Saya mengunakan  class dengan memanfaatkan method dan get untuk memproses setiap parameternya
#### 5 dan 6  on progres
#### 7 A table Nama 
##### create table Nama
(
  id int primary key auto_increment,
  name varchar(255) not null,
  id_work int not null,
  FOREIGN key(id_work) REFERENCES work(id),
  id_salary int not null,
  FOREIGN key (id_salary) REFERENCES kategori(id)
);
##### table work 
 
create table work
(
  id int primary key auto_increment,
  name varchar(255) not null,
  id_salary int not null,
  FOREIGN key(id_salary) REFERENCES kategori(id),
);
##### table kategori
create table kategori
(
  id int primary key auto_increment,
  salary int(255) not null,
);
### ![img1](https://user-images.githubusercontent.com/48577618/61576895-0e553a80-ab0a-11e9-91af-3aee294317ec.png) 
### ![img2](https://user-images.githubusercontent.com/48577618/61576913-52e0d600-ab0a-11e9-9e67-6ab4e3447869.png)
