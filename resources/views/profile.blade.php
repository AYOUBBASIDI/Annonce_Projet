@extends('master.layout')


@section('title')
    Home
@endsection


@section('font')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
@endsection


@section('style')
    <style>
        body{
            background: linear-gradient(to top,rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),url(../ressources/back2.jpg);
            min-height: 95vh;
            background-repeat: no-repeat !important;
            background-size: cover;
            margin: 0;
            padding: 0;
            background-position: center;
            background-size: cover;
            object-fit: cover;
            /* overflow-y:hidden; */
            overflow-x:hidden;
        }
        *::-webkit-scrollbar {
          width: 5px;
          }
          
          *::-webkit-scrollbar-track {
          background: black;
          }
          
          *::-webkit-scrollbar-thumb {
          background-color: rgb(255, 255, 255);
          border-radius: 20px;
          /* border: 2px solid  rgb(0, 0, 0); */
          }
        nav{
            display:flex;
            justify-content: space-between;
            margin-top:2%;
        }
        .dlogo{
            width:9.9%;
        }
        
        .logo{
            width:100%;
            height:auto;
            margin-left:10%;
        }
        nav .menuli {
            display: flex;
            margin-right:6%;
            justify-content: space-between;
            align-items: center;
        }

        nav .menuli li {
            list-style: none;
            margin-left: 50px;
        }

        nav .menuli a {
            text-decoration: none;
            font-weight: 500;
            font-size: 1.2rem;
            padding: 0.7rem;
            color: white;
            font-weight: 500;
            font-size: 1.5rem;
            font-family: 'Iceberg', cursive;
        }
        .burmenu{
            margin-right:3%;
            margin-top: 1%;
        }
        .menu{
            width: 25px;
        }
        .menu-items{
            background-color: white;
            text-decoration: none;
            color: Black;
            padding: 4%;
            width: 7%;
            margin-top: -2%;
            border-radius: 10px 0 10px 10px;
            transition: transform 0.5s ease-in-out;
            transform: translate(40%);
            z-index:1;
            position: absolute;
            text-align:center;
        }
        .menu-items li{
            list-style: none;
        }
        .menu-items a{
            text-decoration: none;
            color: black;
            font-family: 'Iceberg', cursive;
        }
        
.burmenu input[type="checkbox"]:checked ~ .menu-items {
  transform: translate(-88%);
  
}

.burmenu input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
  transform: rotate(45deg);
  background-color: black;

}

.burmenu input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
  transform: scaleY(0);

}

.burmenu input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
  transform: rotate(-45deg);
  background-color: black;

}

/* .burmenu input[type="checkbox"]:checked ~ .logo{
  display: none;
} */
        /* #dropdown{
            display:none;
        }
         */

        .checkbox {
  position: absolute;
  display: block;
  height: 32px;
  width: 32px;
  top: 32px;
    right: 36px;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}

.hamburger-lines {
  display: block;
  height: 26px;
  width: 32px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.hamburger-lines .line {
  display: block;
  height: 4px;
  width: 100%;
  border-radius: 10px;
  background: #ffffff;
}

.hamburger-lines .line1 {
  transform-origin: 0% 0%;
  transition: transform 0.4s ease-in-out;
  z-index:2;
}

.hamburger-lines .line2 {
  transition: transform 0.2s ease-in-out;
  z-index:2;
  background-color: red;
}

.hamburger-lines .line3 {
  transform-origin: 0% 100%;
  transition: transform 0.4s ease-in-out;
  z-index:2;
 
}
.li1{
    margin-top:2%;
}
.li2{
    margin-top:50%;
}
.footer{
    font-family: 'Iceberg', cursive;
    font-size:12px;
    position:absolute;
    bottom: 0;
}
section{
  margin-top: 3%;
  margin-left: 2%;
  display:flex;
  justify-content:space-between;
}
section button{
  border:2px solid white;
  border-radius:10px;
  background:none;
  height: 80%;
  width: 35%;
  color:white;
  margin-left: 15px;
  font-family: 'Iceberg', cursive;
  font-size:15px;
  cursor:pointer;
}
section button a{
  text-decoration:none;
  color:white;
}
.content{
  display: flex;
  margin-left: 3%;
  flex-wrap: wrap;
  color:white;
}
.carte{
    border-radius:10px;
    border:solid 3px white;
    width: 46%;
    height: 280px;
    margin-right:2%;
    margin-top:3%;
    display: flex;
    
}

.cart{
  border-radius:10px;
  border:solid 3px RED;
    width: 30%;
    height: 350px;
    margin-right:2%;
    margin-top:3%;
}
.pic{
  width:50%;
}
.pic img{
  width:100%;
  height:100%;
  object-fit: cover;
  border-radius:5px 0 0 5px; 
}
.contentpost{
  font-family: 'Iceberg', cursive;
  margin-left: 2%;
}
.desc{
  max-width: 240px;
  max-height: 35%;
  overflow: auto;
}
.active{
  border-bottom:solid 2px red;
}
.btnsec{
  width:60%;
}
.addP{
  color: white;
    width: 17%;
    display: flex;
    align-items: center;
    font-family: 'Iceberg', cursive;
}
.addP a{
  width:100%;
}
.addP img{
  width:20px;
  cursor: pointer;
}
.addP p{
  width: 100%;
}
.end{
  background: white;
    color: black;
    border-radius: 10px;
    padding: 10px;
    margin-top: 3%;
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 38%;
    font-family: 'Iceberg', cursive;
    font-weight:bold;
}
.container{
  padding-bottom: 2%;
}

.setting img{
  width: 50%;
    margin-left: 100%;
    margin-top: 40%;
    cursor: pointer;
}
.head{
  display:flex;
  justify-content: space-between;
}
.operContent{
  display: none;
  position: fixed;
    background: white;
    color: black;
    padding: 2%;
    border-radius: 10px;
    font-family: 'Iceberg', cursive;
    margin-left: 32%;
    margin-top: 4%;
}

.choix{
  display: flex;
    flex-direction: column;
    align-items: center;
}
.choix a{
  padding: 2% 33%;
  border-radius: 5px;
  width: 36%;
  cursor: pointer;
  border:solid 2px black;
  margin-top:1%;
}
.choix a:hover{
  background:black;
  color:white;
}
#operclose {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  padding: 6px;
  }

.addPost{
  background:white;
  border-radius:10px;
  color:black;
  display:flex;
  flex-direction: column;
  padding: 15px;
  width: 35%;
  margin-left: 27.5%;
  position:fixed;
  top: 20%;
  display: none;
}
.addPost form{
  display:flex;
  flex-direction: column;
  
}
.addPost h3{
  text-align: center;
  font-family: 'Iceberg', cursive;
}
.addPost form select{
  padding: 5px 8px;
    width: 100%;
    box-shadow: none;
    background: transparent;
    -webkit-appearance: none;
    border: 2px solid black;
    border-radius: 10px;
    overflow: hidden;
    background: none;
}
.addPost form textarea{
  padding: 5px 8px;
    max-width: 95%;
    min-width: 95%;
    box-shadow: none;
    -webkit-appearance: none;
    border: 2px solid black;
    border-radius: 10px;
    overflow: hidden;
    color: black;
    background: none;
}
.profile{
  border-radius:10px;
  border:solid 2px white;
  color:white;
  display: flex;
    justify-content: space-between;
    padding:1%;
    margin-top:2%;
    margin-left:2%;
    width:94%;
    font-family: 'Iceberg', cursive;
}
.btnPost{
  border: 2px solid black;
    border-radius: 20px;
    background: none;
    /* height: 72%; */
    width: 37%;
    color: black;
    margin-left: 33%;
    font-family: 'Iceberg', cursive;
    font-size: 15px;
    cursor: pointer;
    align-items: center;
}
.show {display:block;}



    </style>

@endsection



@section('content')
    <nav>
        <div class="dlogo">
            <a href="#"><img class="logo" src="/ressources/logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="menuli">
            <li ><a href="/annonces">Dashboard</a></li>
            <li class="active"><a href="/yourannonce">Profile</a></li>
        </div>
        <div class="burmenu">
        <input class="checkbox" type="checkbox" name="" id="" />
                  <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                  </div>
                  <div class="menu-items">
                    <li class="li1"><a href="/yourannonce">Profile</a></li>
                    <li class="li2"><a href="/annonces">Dashboard</a></li>
                    <li class="li2"><a href="logout">Log Out</a></li>
                    <li class="footer">© 2022 capcar.fr</li>
                  </div>
        </div>
    </nav>

    <div class="container">
    
      <section>
        <div class="btnsec">
        <button><a href="/yourannonce">Les Annonces</a></button>
        <button ><a href="/yourorder">Les Ordres</a></button>
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
            <input type="text" name="fname" placeholder="enter your name"><br>
          <select name="type">
            <option  value="" selected>Select Type of Post</option>
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
          <input name="pic" type="file" class="form-control" name="picture" required><br>
          <textarea name="desc" type="text" class="form-control" cols = "26" rows="5" maxlength = "40" placeholder="Enter Description" name="desc" required ></textarea><br>
          <button class="btnPost" type="submit">Submit</button>
          </form>
          </div>
        </div>

        <div class="end">
        <p>résultat final</p>
    </div>
    </div>
    

@endsection


@section('script')
<script>
function show() {
  document.getElementById("operation").classList.toggle("show");
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
</script>
@endsection