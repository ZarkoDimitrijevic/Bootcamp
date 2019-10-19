<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">      
        <style>
        body {width:100%;
    height:100%;
    margin:0px;
    padding:0px;}
.nav {margin:0px;
     padding: 5px;
     background-color:#34d8eb;
     color:#4c34eb;
     text-align:center;
     display:block;}
ul {margin:5px;
   padding: 0px;}
li {padding:0px;
   margin-bottom:5px;
   list-style-type:ncone;
   background-color:#34d8eb;
   text-align:center;}
a {text-decoration: none;
  display:block;
  margin:0px;
  padding:25px;
  color: #4c34eb;}
li:hover {background-color: red;
           color:white;
           width:95%;
           margin-right:auto;
           margin-left:auto;}
a:hover {color:white;}
.temperatura {margin:0px;
             padding:0px;
             text-align:center;}
.karakter {margin:0px;
          padding:0px;
          text-align:center;}
.slika {margin:0px;
       padding:0px;
       text-align:center;}
.kalorije {margin:0px;
          padding:0px;
          text-align:center;}
.odgovor {margin:0px;
        padding:0px;
        text-align:center;}
.content1 {display:block;}
.content2 {display:block;}
.content3 {display:block;}
        </style>
        <!--<?php /*include './css/style.css'*/?>
        <link rel="stylesheet" type="txt/css" href="./css/style.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="nav">
                <h1>Domaci:16102019</h1>
        </div>
        <ul>
            <li class="navbar" onclick="myFunction1()"><a href="#temperatura">H2O</a></li>

<!--HTML za temperaturu-->        
        <div class="temperatura content1" id="temperatura">
            <h2>Uneti temperaturu vode</h2>
            <form action="" method="GET">
                <label for=""><sup>o</sup>C</label>
                <input type="text" name="stepen" value=0>
                <button type="submit" name="posaljit">Posalji</button>
            </form>

<!--Logika za temperaturu-->
        <?php 
            
            if(isset($_GET['posaljit'])) {
                $x=$_GET['stepen'];
                if($x>=100) {echo "<div class='odgovor'>Voda kljuca!</div>";}
                elseif($x<=0) {echo "<div class='odgovor'>Voda se ledi!</div>";}
                else{echo "<div class='odgovor'>Voda je u tecnom stanju.</div>";}
            }            
        ?>
        </div>
        


            <li class="navbar" onclick="myFunction2()"><a href="#karakter">Vrste karaktera</a></li>
            
<!--HTML za karakter-->
        <div class="karakter content2" id="karakter">
            <h2>Oznaciti tip licnosti</h2>
            <form action="" method="GET">
                <input type="radio" name="temperament" value="sangvinik">Sangvinik
                <input type="radio" name="temperament" value="melanholik">Melanholik
                <input type="radio" name="temperament" value="flegmatik">Flegmatik
                <input type="radio" name="temperament" value="kolerik">Kolerik
                <p><button type="submit" name="posaljik">Prosledi</button></p>
            </form>
<!--Logika za karakter-->
        <?php
            if(isset($_GET['posaljik'])) {
                $temperament=$_GET['temperament'];
                if($temperament == "sangvinik") {echo "<div class='slika'><img src='./images/sanguine.png'></div>";}
                elseif($temperament == "melanholik") {echo "<div class='slika'><img src='./images/melanholic.png'></div>";}
                elseif($temperament == "flegmatik") {echo "<div class='slika'><img src='./images/flegmatic.png'></div>";}
                elseif($temperament == "kolerik") {echo "<div class='slika'><img src='./images/choleric.png'></div>";}   
            }
        ?>
        </div>


            <li class="navbar" onclick="myFunction3()"><a href="#kalorije">Provera nivoa kalorija</a></li>
        </ul>
<!--HTML za kalorije-->
        <div class="kalorije content3" id="kalorije">
            <h2>Uneti vrednost kalorija (kcal)</h2>
            <form action="" method="GET">
                <label for="">(kcal)</label>
                <input type="number" name="kalorije" value=0>
                <button type="submit" name="posaljikal">Izvrsi upit</button>
            </form>
<!--Logika za kalorije-->
        <?php
            if(isset($_GET['posaljikal'])) {
                $kcal=$_GET['kalorije'];
                $kj=$kcal*4.1868;
                if($kj<2000) {echo "<div class='odgovor'>Povecajte dnevni unos!</div>";}
                elseif($kj<4000) {echo "<div class='odgovor'>Smanjite dnevni unos!</div>";}
                else {echo "<div class='odgovor'>Dnevni unos je u redu.</div>";}
            }
        ?>

        </div>
<script>
    function myFunction1() {
        var x = document.getElementsByClassName("content1")[0];
        if (x.style.display === "none") {x.style.display = "block";} 
        else {x.style.display = "none";}
    }

    function myFunction2() {
        var y = document.getElementsByClassName("content2")[0];
        if(y.style.display === "none") {y.style.display = "block";}
        else {y.style.display = "none";}
    }

    function myFunction3() {
        var z = document.getElementsByClassName("content3")[0];
        if(z.style.display === "none") {z.style.display = "block";}
        else {z.style.display = "none";}
    }

</script>


    </body>

</html>