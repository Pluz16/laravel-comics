@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Benvenuti su <span class="text-primary"></span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet sapien vel dolor ultricies aliquet eget non dolor.</p>
          <a href="#" class="btn btn-primary btn-lg">Scopri di più</a>
        </div>
        <div class="col-md-6">
          <img src="/images/hero.jpg" alt="Immagine di copertina" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="featured">
    <div class="container">
      <h2>In evidenza</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="/images/featured-1.jpg" alt="Immagine di evidenza" class="card-img-top">
            <div class="card-body">
              <h3>Titolo fumetto</h3>
              <p>Autore</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/images/featured-2.jpg" alt="Immagine di evidenza" class="card-img-top">
            <div class="card-body">
              <h3>Titolo fumetto</h3>
              <p>Autore</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/images/featured-3.jpg" alt="Immagine di evidenza" class="card-img-top">
            <div class="card-body">
              <h3>Titolo fumetto</h3>
              <p>Autore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h3>Iscriviti alla nostra newsletter per rimanere sempre aggiornato</h3>
        </div>
        <div class="col-md-4">
          <a href="#" class="btn btn-primary btn-lg btn-block">Iscriviti ora</a>
        </div>
      </div>
    </div>
  </section>
@endsection
