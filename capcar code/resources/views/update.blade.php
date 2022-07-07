@extends('master.layout')


@section('title')
    Update
@endsection

@section('font')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
@endsection


@section('style')
<link rel="stylesheet" href="/css/update.css">
@endsection

@section('content')
    <nav>
        <div class="dlogo">
            <a href="#"><img class="logo" src="/ressources/logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="menuli">
            <li ><a href="/C_annonces">Dashboard</a></li>
            <li class="active"><a href="/CP_annonces">Profile</a></li>
        </div>
        <div class="burmenu">
        <input class="checkbox" type="checkbox" name="" id="" />
                  <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                  </div>
                  <div class="menu-items">
                    <li class="li1"><a href="/CP_annonces">Profile</a></li>
                    <li class="li2"><a href="/C_annonces">Dashboard</a></li>
                    <li class="li2"><a href="logout">Log Out</a></li>
                    <li class="footer">© 2022 capcar.fr</li>
                  </div>
        </div>
    </nav>
    @foreach ($fill as $item)
    <div class="update">
        <div class="addPost" >
        <div>
          <h2>Update Your Post</h2>
          <hr>
          </div>
          <div>
            <form action="/fupdate" method="post">
            @csrf
            <input type="text" name="id" value="{{$item->id}}" hidden><br>
            <select id="typeP" onchange="display()" name="type">
            <option value="" selected>Select Type of Post</option>
            <option value="Annonce" {{$item->type == "Annonce"  ? 'selected' : ''}}>Annonce</option>
            <option value="Ordre" {{$item->type == "Ordre"  ? 'selected' : ''}}>Ordre</option>
          </select><br>
          <select name="typeC">
            <option value="" selected>Select Type of vehicule</option>
            <option  value="moto" {{$item->typeC == "moto"  ? 'selected' : ''}}>moto</option>
            <option value="compact" {{$item->typeC == "compact"  ? 'selected' : ''}}>compact</option>
            <option value="citadin" {{$item->typeC == "citadin"  ? 'selected' : ''}}>citadin</option>
            <option value="sedan" {{$item->typeC == "sedan"  ? 'selected' : ''}}>sedan</option>
            <option value="utilitaire" {{$item->typeC == "utilitaire"  ? 'selected' : ''}}>utilitaire</option>
          </select><br>
          <input class="inputPrice" type="text" id="price" name="price" placeholder="enter the price : $" value="{{$item->price}}" required/><br>
          <input id="Postpic" name="pic" type="file" class="picture" name="picture" value="nopic" required><br>
          <textarea name="desc" type="text" class="form-control" cols = "10" rows="5" maxlength = "4000" placeholder="Enter Description" name="desc"  required>{{$item->dsec}}</textarea><br>
          <button class="btnPost" type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endforeach
    @endsection

@section('script')
<script>
    function display() {
  choice = document.getElementById("typeP").value;

  if (choice == "Ordre"){
    document.getElementById("Postpic").setAttribute("disabled", false);
    document.getElementById("price").setAttribute("disabled", false);
  }else{
    document.getElementById("Postpic").removeAttribute("disabled");
    document.getElementById("price").removeAttribute("disabled");

  }
}
</script>
@endsection



