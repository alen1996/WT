Uradjeno je sve sto se trazi sem uploadanja na openshift.
Baza je mydb sastoji se od 3 tabele admini clanovi i nekretnine.Pritom clanovi i nekretnine
imaju po kolonu nadgleda admin koji je foreign key sa bazom admini.Dodan je i fajl ubacipodatke.php
koji ubacuje sve ono sto nije prisutno u bazi iz xml fajlova.Doradjen je login tako da se podaci 
skidaju iz baze ne iz xmla,kao i stranica ponuda.php koja takodjer sad uzima podatke iz phpa.
Doradjena je stranica p33.php koja sluzi za updateovanje dodavanje i brisanje stanova tako da 
sta god uradimo od to troje radi s e i u xml fajlu i u bazi.
Ime baze je 127_0_0_1.sql,a ako ne radi probati sa mydb.sql
Dodan je i servis.On radi po principu da trazi password admina ukoliko mu dostavimo id 
i ispisuje password u js formatu ukoliko je uneseni id admina validan,ukoliko nije obavjestava
nas da je greska.Jedan od logina je sljedeci
username administrator
password alen1996
