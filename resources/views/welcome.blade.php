@extends('layouts.app')

@section('content')

<div class="buttons-side">
    <a href="#me" class="">Apie mane</a>
    <a href="#projects" class="">Projektai</a>
    <a href="#contacts" class="">Kontaktai</a>
</div>


<section class="p-5 bg-dark bg-gradient" id="me">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-inline-block col-12 col-md-7 col-lg-6 text-end border rounded-3 p-3 me-3 text-light align-self-center">
                <h2 class="">Aš esu Kristupas Plukas</h1>
                    <p class="">
                        Neseniai baigiau Baltijos technologijų institutą, kur įgyjau jaunesniojo programuotojo kvalifikaciją
                        (php programuotojo modulinėje profesinio mokymo programoje).
                        Šiuo metu ieškau darbo IT industrijoje, todėl įdomus ir aktualūs visi pasiūlymai.
                    </p>
            </div>
            <div class="d-inline-block col-12 col-md-3 col-lg-5 align-self-center">
                <figure class="figure">
                    <img src="./img/myface.jpg" class="figure-img img-fluid rounded shadow-lg" alt="Kristupas photo">
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="border-top" id="projects">
    <div class="container mb-5">
        <h2 class="mt-5">MANO PROJEKTAI</h2>
        <div class="shadow-sm row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
        <div class="shadow-sm row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
        <div class="shadow-sm row border rounded p-3 mb-2">
            <a class="btn btn-outline-dark btn-lg d-inline-block col" href="">1 PROJECT NAME</a>
            <p class="d-inline-block">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
    </div>
</section>
<section class="border-top bg-dark bg-gradient text-white" id="contacts">
    <div class="container mt-2  pt-5 pb-5">
        <div class="row justify-content-end">
            <div class="col-4 fs-4 m-2 p-2 border rounded shadow-sm text-center">
                <h3>GitHub: </h3>
                <h3><a href="https://github.com/Kplukas"> Kplukas</a></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 fs-4 m-2 p-2 border rounded shadow-sm text-center">
                <h3>El.paštas:</h3>
                <h3>p.kristupas.p@gmail.com</h3>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-4 fs-4 m-2 p-2 border rounded shadow-sm text-center">
                <h3>Telefono nr.:</h3>
                <h3>+37065539186</h3>
            </div>
        </div>
    </div>
</section>

@endsection
