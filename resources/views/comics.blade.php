{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
<?php

$thumbs = config('data');
 


?>

@extends('layouts.main')

@section('content')

<div class="container my-5">
    <h1>COMICS</h1>
</div>

@endsection

<main>
    <main class="main">
        <div class="imgMain">
          <div class="title">CURRENT SERIES</div>
        </div>
        <div class="containerCards">
          @foreach ($thumbs as $thumb)
              
          @endforeach
          <a href="" class="loadMore">LOAD MORE</a>
        </div>
        
</main>
