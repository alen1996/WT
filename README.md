Uradjeno je sljedece:
Napravljena je login na koju se trenutno mogu logovati samo administratori(ima ih dvojica).
Jedan od accounta admina je sljedeci 
username:administrator
password:alen1996;
Posto ima puno fileova u folderu ukljucujuci veliki broj onih potrebnih za fpdf vrijedi napomenuti da su 
ovi fajlovi bitni ya spiralu
Home.php
Informacije.php.
Kontakt.php
Ponuda.php
p33.php mijenjanje artikala tj stanova
a tu su jos i livesearch.php sluzi za pretragu sa sugestijama
pdffile.php
kao i fajl za skidanje csv podataka
Ukoliko se korisnik loguje kao administrator moze skinuti csv file dok pdf file se otvara svakom bez obzira bio admin ili ne.
Ukoliko je logovan kao admin korisniku se pruza mogucnost da promijeni informacije o stanovima
tj sliku opis i cijenu.Ukoliko je korisnik  logovan kao admin,stvara se nova opcija editovanje na Home.php
u lijevom meniju kao i mogucnost skidanja csv filea s desne strane takodjer na Home.php
Ukoliko korisnik koji nije admin nekako sazna da je ime stranice gdje se mijenjaju podaci p33.php a nije admin i proba
joj pristupiti bice redirectan na Home.php.U p33.php admin ima mogucnost da izmijeni
fajl nekretine.xml.Ukoliko zeli da updateuje postojece nekretnine dovoljno j e da promijeni 
podatke u nekom od textboxova ili broj koji predstavlja cijenu.Za brisanje se unosi id
odgovarajuce nekretnine,a za dodavanje se popune 3 prazna polja i klikne na dodaj.
Takodjer da bi se nova nekretnina dodala u fajl nekretnine.xml  mora da bude odgovarajuca
slika u  direktorijumu.Tako npr ako probamo dodati ili upadteovati neku nekretninu
a pritom unesemo u textbox slika neki file koji ne postoji dolazi do greske i sistem nas
obavjestava da nije doslo ni do kakvih promjena.Dakle ako zelimo dodati novu nekretninu prvo moramo staviti odgovarajucu sliku
u direktorij staviti cijenu koja mora biti broj i kratak opis koji moze biti bilo sta
I pdf file i csv file se skidaju s Home.php 
zadnji desni oblacic  s tim sto csv samo admin moze skinuti.Takodjer zastita od xssa je postignuta na sljedeci nacin
da ne bih morao to da radim za svaku varijablu pojedinacno kada se salje forma na istu stranicu na kojoj se i nalazi koristio sam
u okviru forme  akciju ?ph p ec ho htmlspecialchars($_SERVE R["PHP_SE LF"]);?>" method="post">
kako ne bi doslo do xss napada
OPenshift file
http://ade-assdds.44fs.preview.openshiftapps.com/
Na openshiftu sam uploadovao ovaj repositorij https://github.com/alen1996/ness koji je isti kao i ovdje spirala3prava samo sto sam obrisao html fajlove da bi mogao uploadati na openshift
Moguce j e da se pojavi bug ukoliko se u polje pretraga unosi puno praznih spaceova mada mislim da sam rijesio taj problem
