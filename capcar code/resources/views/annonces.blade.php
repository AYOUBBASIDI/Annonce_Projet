@extends('home')

@section('type')
@foreach ($info as $item)
@foreach ($postsA as $post)
<div class="carte">
    <div class="pic"><img class="car1" src="/ressources/{{$post->pic}}" alt="car1" id="car1"></div>
    <div class="contentpost">
        <img class="priceimg" src="/ressources/price.png" alt=""><p class="price">{{$post->price}}$</p>
        <p class="creator">Nom: {{$post->fname}} {{$post->lname}}</p>
        <p class="creator">tel: {{$post->tel}}</p>
        <p class="creator">E-mail: ayoubbsd@gmail.com</p>
        <p class="typeC">Type : {{$post->typeC}}</p>
        <p class="desc">{{$post->dsec}}</p>
        
    </div>
</div>
@endforeach
@endforeach

@endsection
