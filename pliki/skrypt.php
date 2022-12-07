<?php
touch("nazwisko_i_imie.txt");
touch("doSkasowania.txt");
if(file_exists("doSkasowania.txt"))
unlink("doSkasowania.txt");
mkdir("Pierzchalski",0700);

fopen('Pierzchalski\nazwisko_i_imie.txt', 'w');
