


<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('font'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Iceberg&display=swap" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
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
          width: 12px;
          }
          
          *::-webkit-scrollbar-track {
          background: black;
          border-left:solid 2px white;
          border-right:solid 2px white;
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
    margin-left: 39%;
}
section button{
  border:2px solid white;
  border-radius:10px;
  background:none;
  height:10%;
  width: 20%;
  color:white;
  margin-left: 15px;
  font-family: 'Iceberg', cursive;
  font-size:15px;
  cursor:pointer;
}
.content{
  display: flex;
  margin-left: 3%;
  flex-wrap: wrap;
}
.carte{
  background: white;
    width: 30%;
    height: 300px;
    margin-right:3%;
    margin-top:3%;
}
.cart{
  background: red;
    width: 30%;
    height: 300px;
    margin-right:3%;
    margin-top:3%;
}


    </style>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <nav>
        <div class="dlogo">
            <a href="#"><img class="logo" src="/ressources/logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="menuli">
            <li><a href="">Dashboard</a></li>
            <li><a href="">Profile</a></li>
        </div>
        <div class="burmenu">
        <input class="checkbox" type="checkbox" name="" id="" />
                  <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                  </div>
                  <div class="menu-items">
                    <li class="li1"><a href="http://localhost:3000/historique">Profile</a></li>
                    <li class="li2"><a href="http://localhost:3000/dashboard">Dashboard</a></li>
                    <li class="li2"><a href="/">Log Out</a></li>
                    <li class="footer">© 2022 capcar.fr</li>
                  </div>
        </div>
    </nav>

    <div class="container">
      <section>
        <button href="/annonces">Les Annonces</button>
        <button href="/orders">Les Ordres</button>
      </section>
      <div class="content">
        <div class="cart">

        </div>
        <div class="cart">

        </div>
        <div class="cart">

        </div>
        <div class="cart">

        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    

    function dropdown(){
        document.getElementsByClassName("menu-items").style.display=block;
    }

</script>


<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\capcar\resources\views/homedm.blade.php ENDPATH**/ ?>