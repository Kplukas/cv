@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="btn-group" role="group">
            <a href="#me" type="button" class="btn btn-outline-dark">Apie mane</a>
            <a href="#projects" type="button" class="btn btn-outline-dark">Projektai</a>
            <a href="#contacts" type="button" class="btn btn-outline-dark">Kontaktai</a>
        </div>
    </div>
</div>

<section class="mt-4 ms-5 p-5" id="me">
    <div class="d-inline-block col-4 ms-5 text-end">
        <h2 class="fs-2">Aš esu Kristupas Plukas</h2>
        <p class="fs-4">
            Neseniai baigiau Baltijos technologijų institutą, kur įgyjau jaunesniojo programuotojo kvalifikaciją
            (php programuotojo modulinėje profesinio mokymo programoje).
            Šiuo metu ieškau darbo IT industrijoje, todėl įdomus ir aktualūs visi pasiūlymai.
        </p>
    </div>
    <div class="d-inline-block col-5 ms-5">
        <figure class="figure ms-5">
            <img src="./img/myface.jpg" class="figure-img img-fluid rounded" alt="Kristupas photo">
        </figure>
    </div>
</section>
<section class="border-top" id="projects">
    <div class="container">
        <h2 class="mt-5">MANO PROJEKTAI</h2>
        <div class="row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
        <div class="row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
        <div class="row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
    </div>
</section>
<section class="border-top" id="contacts">
</section>

@endsection
