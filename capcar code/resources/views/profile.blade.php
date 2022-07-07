@extends('master.layout')


@section('title')
    Profile
@endsection


@section('font')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
@endsection


@section('style')
<link rel="stylesheet" href="/css/profile.css">
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

    <div class="container">
    
      <section>
        <div class="btnsec">
        <button><a href="/CP_annonces">Les Annonces</a></button>
        <button ><a href="/CP_orders">Les Ordres</a></button>
        </div>
        <div class="addP">
        <p>Add New Post</p><a ><img onclick="addShow()" class="add" src="/ressources/add.png"></a>
        </div>
        
      </section>
      <div class="content">
        @yield("type")

        <div id="newPost" class="addPost">
        <div id="operclose" onclick="addHide()">&times;</div>
          <div>
          <h3>Add New Post</h3>
          <hr>
          </div>
          <div>
          <form action="addPost" method="post">
          @csrf
            <input type="text" name="id" value="{{$item->id}}" hidden><br>
          <select id="typeP" onchange="display()" name="type">
            <option value="" selected>Select Type of Post</option>
            <option value="Annonce">Annonce</option>
            <option value="Ordre">Ordre</option>
          </select><br>
          <select name="typeC">
            <option value="" selected>Select Type of vehicule</option>
            <option value="moto">moto</option>
            <option value="compact">compact</option>
            <option value="citadin">citadin</option>
            <option value="sedan">sedan</option>
            <option value="utilitaire">utilitaire</option>
          </select><br>
          <input class="inputPrice" type="text" id="price" name="price" placeholder="enter the price : $" required/><br>
          <input id="Postpic" name="pic" type="file" class="picture" name="picture" value="nopic" required><br>
          <textarea name="desc" type="text" class="form-control" cols = "10" rows="5" maxlength = "4000" placeholder="Enter Description" name="desc" required ></textarea><br>
          <button class="btnPost" type="submit">Submit</button>
          </form>
          </div>
        </div>
        </div>
    </div>
        <div class="end">
        <p>résultat final</p>
    </div>
    </div>
    

@endsection


@section('script')
<script>
function show($id) {
  document.getElementById("operation").classList.toggle("show");
  document.getElementById("del").href="delete/"+$id;
  document.getElementById("upd").href="fill/"+$id;
}
function hide() {
  document.getElementById("operation").classList.remove("show");
}
function addShow() {
  document.getElementById("newPost").classList.toggle("show");
}
function addHide() {
  document.getElementById("newPost").classList.remove("show");
}
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