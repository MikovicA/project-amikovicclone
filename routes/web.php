<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Korisnik
class Korisnik {
    public string $name;
    public string $lastName;
    public string $age;
    public string $kupovina;
    public string $email;



    public function __construct($name, $lastName, $age, $kupovina, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->kupovina = $kupovina;
        $this->email = $email;
    }

}
Route::get('/spisakkorisnika', function () {
    return view('spisakkorisnika', [
        "ime" => "Aleksej",
        "prezime" => "Mikovic",
        "users" => [
            ["name" => "John Snow"],

        ],
        "korisnik" => new Korisnik("Lana","Tomanovic", 22, "Planinska krv", "lanatomanovic@gmail.com")

    ]);
});
