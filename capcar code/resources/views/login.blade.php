@extends('master.layout')


@section('title')
    Accueil
@endsection


@section('font')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
@endsection


@section('style')
    <style>
        body{
            background: linear-gradient(to top,rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),url(../ressources/back.jpg);
            min-height: 95vh;
            background-repeat: no-repeat !important;
            background-size: cover;
            margin: 0;
            padding: 0;
            background-position: center;
            background-size: cover;
            object-fit: cover;
            overflow-y:hidden;
        }
        nav{
            display:flex;
            justify-content: space-between;
            margin-top:2%;
        }
        .logo{
            width:18%;
            height:auto;
            margin-left:2%;
        }
        .login{
            border:none;
            border-radius:20px;
            background-color:white;
            height:72%;
            width: 37%;
            font-family: 'Iceberg', cursive;
            font-size:15px;
            cursor:pointer;
            
        }
        .login a{
            text-decoration: none;
            color:black;
        }
        .signUp{
            border:2px solid white;
            border-radius:20px;
            background:none;
            height:72%;
            width: 37%;
            color:white;
            margin-left: 15px;
            font-family: 'Iceberg', cursive;
            font-size:15px;
            cursor:pointer;
        }
        .btn{
            width:30%;
        }
        .content{
            color:white;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Iceberg', cursive;
            font-size:20px;
        }
        .p3{
            text-align: center;
            font-size:20px;
            margin-top:-2%;
        }
        .p1{
            font-size:50px;
            font-weight:500;
            margin-top:7%;
        }
        .p2{
            font-size:30px;
            font-weight:300;
            margin-top:-1%;
        }
        .join{
            border:2px solid red;
            border-radius:20px;
            background:none;
            height:40px;
            width: 15%;
            color:white;
            margin-left: 15px;
            font-family: 'Iceberg', cursive;
            font-size:15px;
            cursor:pointer;
        }
        .p2 span{
            color:red;
        }
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .logoF{
            width: 70px;
            height:auto;
            padding:10px;
        }
        .coper{
            color:white;
            width: 30%;
            display:flex;
            align-items: center;
        }
        .coper p{
            margin-left:1%;
            font-family: 'Iceberg', cursive;
        }
        .sociaux{
            width: 100px;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .sociaux img{
            width: 20px;
        }
        .follow{
            color:white;
            display: flex;
            align-items: center;
            font-family: 'Iceberg', cursive;
        }

        #popwrap, #popwrap * {
            box-sizing: border-box; 
        }
        #popwrap {
        position: fixed;
        top: 0; left: 0; z-index: 99;
        width: 100vw; height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0; visibility: hidden;
        transition: opacity 0.2s;
        }

        #popwrap.open {
        opacity: 1; visibility: visible;
        }


        #popbox {
        position: absolute;
        top: 50%; 
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40%;
        min-width: 320px; 
        max-width: 600px;
        }

        #poptitle { 
            border-bottom:solid 2px black; 
            background:white;
            color:black;
            font-family: 'Iceberg', cursive;
            text-align: center;
        }
        #poptext { 
            background: #fff; 
        }
        #poptitle, #poptext {
            padding: 15px; 
            margin: 0; 
        }
        #poptext{
            border-radius: 0 0 10px 10px;
        }

        #poptitle, #popclose { 
            font-size: 20px;
            border-radius: 10px 10px 0 0;
        }
        #popclose {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        }
        .row1 input{
            width:49%;
            border:solid 2px;
            border-radius:5px;
            padding-left:2%;
            height:30px;
        }
        .row1{
            display: flex;
            justify-content: space-between;
        }
        .row2{
            margin-top:2%;
        }
        .row3{
            margin-top:5%;
        }
        .row3 input, .row2 input{
            width:100%;
            border:solid 2px;
            border-radius:5px;
            padding-left:2%;
            height:30px;
        }
        .creer{
            border:2px solid black;
            border-radius:10px;
            background:none;
            height:30px;
            width: 37%;
            color:black;
            margin-left: 15px;
            font-family: 'Iceberg', cursive;
            font-size:15px;
            cursor:pointer;
            margin-top:3%;
            margin-left: 32%;
        }

        @media only screen and (max-width: 600px) {
            body{
                min-height: 100vh;
            }
            nav{
                flex-direction: column;
            }
            .sociaux img {
                width: 16px;
            }
            ;logoF {
                width: 50px;
            }
            .coper p{
                font-size: 12px;
            }
            .sociaux {
                width: 80px;
            }
            .p1 {
                font-size: 35px;
                text-align: center;
            }
            .join{
                width: 60%;
            }
            .content{
                margin-top: 21%;
            }
            .signUp{
                height: 44px;
                width: 135%;
            }
            .login{
                height: 44px;
                width: 135%;
            }
            .btn {
                width: 90%;
                display: flex;
                margin-top:10%;
                margin-left:5%;
            }
            .logo {
                width: 25%;
            }
            



        }


        
        
    </style>
@endsection

@section('content')
    <nav>
        <div>
            <a href="#"><img class="logo" src="/ressources/logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="btn">
           <button onclick="pop1.open()" class="login">Se connecte</button>
           <button onclick="pop.open()" class="signUp">S'identifier</button>
        </div>
    </nav>
    <div class="content">
        <p class="p1">Achetez une voiture d'occasion</p>
        <p class="p2">Bienvenue chez <span>CapCar<span></p>
        <p class="p3">Ici vous pouvez poster une annonce gratuite pour votre véhicule<br/>&<br/>trouver de nombreuses voitures à vendre</p>
        <button class="join">REJOIGNEZ-NOUS</button>
    </div>

    <div id="popwrap">
    <div id="popbox">
      <h1 id="poptitle"></h1>
      <div id="poptext"></div>
      <div id="popclose" onclick="pop.close()">&#9746;</div>
    </div>
        </div>
    </div>

    
    

    <footer>
        <div class="coper">
            <a href="#"><img class="logoF" src="/ressources/logo2.png" alt="logo" id="logo"></a>
            <p>© 2022 capcar.fr</p>
        </div>
        <div class="follow">
        <p>Suivez-nous sur:</p>
        <div class="sociaux">
          <div>
            <img src="/ressources/fb.png" alt />
          </div>
          <div>
            <img src="/ressources/in.png" alt />
          </div>
          <div>
            <img src="/ressources/lin.png" alt />
          </div>
        </div>
        </div>
    </footer>
@endsection

@section('script')
<script>
var pop = {

  init : () => {
    pop.pWrap = document.createElement("div");
    pop.pWrap.id = "popwrap";
    document.body.appendChild(pop.pWrap);

    pop.pWrap.innerHTML =
    `<div id="popbox">
      <h1 id="poptitle">CRÉEZ VOTRE COMPTE</h1>
      <div id="poptext">
      <form action="addUser" method="POST"> className/methode/parame 
        @if(Session::get('success'))
        <div>
        {{Session::get('success')}}
        </div>
        @endif
        @if(Session::get('fail'))
        <div>
        {{Session::get('fail')}}
        </div>
        @endif
      @csrf
      <div class="row1"><input type="text" placeholder="Nom" name="nom" required/>
      <input type="text" placeholder="Prenom" name="prenom" required/></div>
      <div class="row2"><input type="email" placeholder="E-mail" name="email" required/></div>
      <div class="row2"><input type="tel" placeholder="Telephone" name="telephone" required/></div>
      <div class="row2"><input type="password" placeholder="passe" name="passe" required/></div>
      <button class="creer" type="submit">Creez</button>
      </form>
      </div>
      <div id="popclose" onclick="pop.close()">&times;</div>
    </div>`;
    pop.pTitle = document.getElementById("poptitle");
    pop.pText = document.getElementById("poptext");
  },

  open : () => { 
    pop.pWrap.classList.add("open");
  },

  // (C) CLOSE POPUP
  close : () => { 
    pop.pWrap.classList.remove("open");
    pop1.pWrap.classList.remove("open"); 
}
};
window.addEventListener("DOMContentLoaded", pop.init);
var pop1 = {

init : () => {
  pop1.pWrap = document.createElement("div");
  pop1.pWrap.id = "popwrap";
  document.body.appendChild(pop1.pWrap);

  pop1.pWrap.innerHTML =
  `<div id="popbox">
    <h1 id="poptitle">CRÉEZ VOTRE COMPTE</h1>
    <div id="poptext">
    <form action="loginUser" method="post">
    @csrf
    <div class="row3"><input type="email" placeholder="E-mail" name="email" required/></div>
    <div class="row3"><input type="password" placeholder="Mot de passe" name="passe" required/></div>
    <button class="creer" type="submit">Valider</button>
    </form>
    </div>
    <div id="popclose" onclick="pop.close()">&times;</div>
  </div>`;
  pop1.pTitle = document.getElementById("poptitle");
  pop1.pText = document.getElementById("poptext");
},

open : () => { 
  pop1.pWrap.classList.add("open");
},

};
window.addEventListener("DOMContentLoaded", pop1.init);
</script>
@endsection