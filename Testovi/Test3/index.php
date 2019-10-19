<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scaling=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!--<style>
            *{box-sizing:border-box;}
            
            body {width:100%;
                margin:0px;}
            .starnight {width:100%;
                    background-image: url("./images/starnight.jpg");}
            #naslov {color:white;
                    margin:0px;
                    padding:0px;
                    text-align:center;
                    padding-top:30px;
                    padding-bottom:15px;}
            #podnaslov {color:white;
                        margin:0px;
                        padding:0px;
                        text-align:center;
                        position:relative;
                        bottom: 0px;}
           
           
           
           @media only screen and (min-width: 600px) {
            *{box-sizing:border-box;}
            
            body {width:100%;
                margin:0px;}
            .starnight {width:100%;
                    background-image: url("./images/starnight.jpg");}
            #naslov {color:white;
                    margin:0px;
                    padding:0px;
                    text-align:center;
                    padding-top:30px;
                    padding-bottom:15px;}
            #podnaslov {color:white;
                        margin:0px;
                        padding:0px;
                        text-align:center;
                        position:relative;
                        bottom: 0px;}
            .meni {display:flex;
                  flex-direction: row;
                  justify-content: space-between;
                  background-color:#321bb5;
                  color:white;
                  padding:0px 0px;
                  margin:0px;
                }
            .levipodmeni {display:flex;
                         flex-direction: row;
                         justify-content:space-around;
                         margin-left:0px;
                         padding-left:0px;
                         
                         
                        }
            .desnipodmeni {}
            a {text-decoration: none;
               color:white;
                display:block;}
            li {list-style-type:none;
                margin-left:0px;
                margin-right:10px;
                margin-top:0;
                margin-bottom:0;
                padding-left:0;
                display:block;}
            a:hover {background-color:gray;
                    color: black;}
            .dole {width:100%;
                    text-align:center;
                    background-color:#321bb5;
                    color: white;
                    position: fixed;
                    bottom:0px;}
            .levi {width:75%;
                    margin:10px;}
            .desni {width:25%;
                    margin:10px;}
            .centralnideo {width:100%;
                          display:flex;
                          flex-direction:row;
                          margin:20px;}
        
                          

    

}

                        
            
        </style>-->
    </head>
    <body>
        <header class="starnight">
                <h1 id="naslov">Dobro dosli na moj sajt!</h1>
                <p id="podnaslov">
                    <?php
                        date_default_timezone_set('Europe/Belgrade');
                        echo date('l');
                        echo(", ");
                        echo date('d');
                        echo(". ");
                        echo date('F');
                        echo (' ');
                        echo date('o');
                        echo (".");
                        
                    ?>
                </p>
        </header>
        
        <ul class="meni">
            <div class="levipodmeni">
            <li><a href="#omeni">O meni</a></li>
            <li><a href="#oljubimcu">O mom kucnom ljubimcu</a></li>
            <li><a href="#ointeresovanjima">O mojim interesovanjima</a></li>
            </div>
            <div class="desnipodmeni">
            <li><a href="#oposlu">O mom poslu</a></li>
            </div>
        </ul>
        
        <div class="centralnideo">
        <div class="levi">
            <h2 id="omeni">O meni</h2>
            <p id="prviparagraf">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consequatur doloremque eum quia aperiam quod laudantium, repellendus vel repudiandae illum alias in nesciunt mollitia delectus excepturi reiciendis ex omnis sint molestiae! Blanditiis tenetur magni architecto eaque, nam autem quos quasi eos itaque, et fugit soluta harum voluptatibus perferendis veniam. Distinctio dolores fugit odit et facilis asperiores doloribus nemo nisi. Officiis quaerat sunt unde. Sapiente excepturi, quo sunt quidem dicta sint corporis repellendus deleniti in reprehenderit illum soluta nemo, nihil maiores quaerat facilis porro nisi optio ab eveniet quisquam. Vero dicta illo ullam quas. Possimus quas quos beatae doloribus consequatur fuga.</p>

            <h2 id="oljubimcu">O mom kucnom ljubimcu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consequatur doloremque eum quia aperiam quod laudantium, repellendus vel repudiandae illum alias in nesciunt mollitia delectus excepturi reiciendis ex omnis sint molestiae! Blanditiis tenetur magni architecto eaque, nam autem quos quasi eos itaque, et fugit soluta harum voluptatibus perferendis veniam. Distinctio dolores fugit odit et facilis asperiores doloribus nemo nisi. Officiis quaerat sunt unde. Sapiente excepturi, quo sunt quidem dicta sint corporis repellendus deleniti in reprehenderit illum soluta nemo, nihil maiores quaerat facilis porro nisi optio ab eveniet quisquam. Vero dicta illo ullam quas. Possimus quas quos beatae doloribus consequatur fuga.</p>

            <h2 id="ointeresovanjima">O mojim interesovanjima</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consequatur doloremque eum quia aperiam quod laudantium, repellendus vel repudiandae illum alias in nesciunt mollitia delectus excepturi reiciendis ex omnis sint molestiae! Blanditiis tenetur magni architecto eaque, nam autem quos quasi eos itaque, et fugit soluta harum voluptatibus perferendis veniam. Distinctio dolores fugit odit et facilis asperiores doloribus nemo nisi. Officiis quaerat sunt unde. Sapiente excepturi, quo sunt quidem dicta sint corporis repellendus deleniti in reprehenderit illum soluta nemo, nihil maiores quaerat facilis porro nisi optio ab eveniet quisquam. Vero dicta illo ullam quas. Possimus quas quos beatae doloribus consequatur fuga.</p>

            <h2 id="oposlu">O mom poslu</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat consequatur doloremque eum quia aperiam quod laudantium, repellendus vel repudiandae illum alias in nesciunt mollitia delectus excepturi reiciendis ex omnis sint molestiae! Blanditiis tenetur magni architecto eaque, nam autem quos quasi eos itaque, et fugit soluta harum voluptatibus perferendis veniam. Distinctio dolores fugit odit et facilis asperiores doloribus nemo nisi. Officiis quaerat sunt unde. Sapiente excepturi, quo sunt quidem dicta sint corporis repellendus deleniti in reprehenderit illum soluta nemo, nihil maiores quaerat facilis porro nisi optio ab eveniet quisquam. Vero dicta illo ullam quas. Possimus quas quos beatae doloribus consequatur fuga.</p>

        </div>

        <div class="desni">
            <h2>Moja fotografija</h2>
            <!--Logika za sliku-->
            <?php 
            $x="m";
            if($x=="m") {echo "<div class='slika'><img src='./images/choleric.png'></div>";}
            elseif($x=="z") {echo "<div class='slika'><img src='./images/sanguine.png'></div>";}
            else {echo "<div class='slika'><img src='./images/flegmatic.png'></div>";}
            ?>
        </div>
        </div>

        <footer class="dole">
            <h2>Footer</h2>
        </footer>

    </body>
</html>