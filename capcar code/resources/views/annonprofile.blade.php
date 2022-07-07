@extends('profile')

@section('type')
@foreach ($info as $item)
@foreach ($postsA as $post)
<div class="carte">
    <div class="pic"><img class="car1" src="/ressources/{{$post->pic}}" alt="car1" id="car1"></div>
    <div class="contentpost">
        <img class="priceimg" src="/ressources/price.png" alt=""><p class="price">{{$post->price}}$</p>
        <div class="head"><p class="creator">Nom: {{$item->fname}} {{$item->lname}}</p><a class="setting" onclick="show({{$post->id}})"><img  src="/ressources/setting.png"></a></div>
        <p class="creator">tel: {{$item->tel}}</p>
        <p class="creator">E-mail: {{$item->email}}</p>
        <p class="typeC">Type : {{$post->typeC}}</p>
        <p class="desc">{{$post->dsec}}</p>
    </div>
</div>
<div id="operation" class="operContent">
<h1>What are you want to do</h1>
<div class="choix">
<a id="upd" href="">Update Your Post</a>
<a id="del" href="">Delete Your Post</a>
</div>
<div id="operclose" onclick="hide()">&times;</div>
</div>


@endforeach
@endforeach

@endsection
