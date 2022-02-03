<?php

include ("Queue.php");
$q = new Queue();

class Student {
    var string $ime;
    var string $prezime;
    var int $god_rodjenja;
}

for ($i = 0; $i < 5; $i++){
    $student = new Student();
    $student->ime = readline("Ucitaj ime " . $i + 1 .". studenta: ");
    $student->prezime = readline ("Ucitaj prezime " . $i + 1 .". studenta: ");
    $student->god_rodjenja = readline("Ucitaj godinu rodjenja: ");
    $q->Enqueue($student);
}

$file = "C:\Beni\OneDrive - Visoko uciliste Algebra\Benjamin_Babić_1RM2\Programiranje\PHP\Primjeri_Ispitnih_Pitanja\M2_Primjeri_Ispitnih_Pitanja\I6_Studenti.txt";
$fp = fopen($file, "a+");

while ($podatak = $q->Dequeue()){
    fprintf($fp, "%-10s%-15s%4d\n", $podatak->ime, $podatak->prezime, $podatak->god_rodjenja);
}


