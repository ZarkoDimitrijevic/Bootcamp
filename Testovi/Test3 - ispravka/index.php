<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scaling=1.0">
        <link rel="stylesheet" type="text/css" href="stil.css">
    </head>

    <body>
        <header>
            <p id="nevidljivi">&nbsp;</p>
            <h1>Dobrodosli na moj sajt!</h1>
            <p id="datumivreme">
               <?php
                    $dan =  date('N');
                    if ($dan == 1) {echo "Danas je: Ponedeljak, ";}
                    elseif ($dan == 2) {echo "Danas je: Utorak, ";}
                    elseif ($dan == 3) {echo "Danas je: Sreda, ";}
                    elseif ($dan == 4) {echo "Danas je: Cetvrtak, ";}
                    elseif ($dan == 5) {echo "Danas je: Petak, ";}
                    elseif ($dan == 6) {echo "Danas je: Subota, ";}
                    else {echo "Danas je: Nedelja, ";}
                    echo date('j');
                    echo ".";
                    echo date('m');
                    echo ".";
                    echo date('o');
                    echo ".";
                ?>
            </p>
        </header>

        <nav>   
            <ul>
                <div>
                    <li class="levimeni"><a href="#omeni">O meni</a></li>
                    <li class="levimeni"><a href="#oljubimcu">O mom kucnom ljubimcu</a></li>
                    <li class="levimeni"><a href="#ointeresovanjima">O mojim interesovanjima</a></li>
                </div>
                <div>
                    <li class="desnimeni"><a href="#oposlu">O mom poslu</a></li>
                </div>
            </ul>
        </nav>

        <section>
            <h2 id="omeni">O meni</h2>
            <p <?php 
                    $pol = "m";
                    if($pol == "m"){echo "class='blue'";}
                     elseif($pol == "z"){echo "class='red'";}
                     else {echo "class='green'";}?>>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus excepturi vel, praesentium beatae incidunt dolor voluptatem nobis numquam at adipisci cum optio temporibus rem consectetur unde ipsa magnam quibusdam magni quasi soluta quo eaque neque impedit. Quas beatae eaque laboriosam corrupti, blanditiis inventore, molestiae soluta deserunt animi earum nulla accusantium, vitae minus similique voluptas modi quasi assumenda illum? Similique officiis dolor libero unde eos laboriosam, inventore, quos placeat illum veritatis cum, laudantium molestias necessitatibus excepturi quod dicta quas. Iste ad accusamus quod tenetur ipsam praesentium quidem perferendis ipsa pariatur? Cumque fugiat non similique beatae. Quaerat delectus pariatur excepturi doloribus nemo.</p>
            
            <h2 id="oljubimcu">O mom kucnom ljubimcu</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque alias, illum repudiandae expedita dignissimos ipsam ipsa harum ullam vel quam earum, quo vero eos sint voluptates placeat quae sunt animi omnis. A repudiandae fugit maiores! Accusamus, neque expedita eaque aut corporis adipisci sunt voluptate quas iusto. Maxime reiciendis dolores quisquam temporibus quas totam repudiandae maiores quasi hic iste vitae inventore dolorum nesciunt assumenda similique ab aperiam accusantium, animi non possimus rerum? Distinctio, culpa obcaecati tenetur debitis labore dolore minima! Aliquid, quia explicabo, temporibus itaque, nesciunt non fugiat in voluptate exercitationem aliquam iste suscipit a odit cupiditate facilis incidunt dolor quibusdam.</p>
            
            <h2 id="ointeresovanjima">O mojim interesovanjima</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nobis magni atque aliquam aut possimus, illum qui pariatur incidunt sequi illo mollitia laboriosam distinctio iusto, provident commodi ea eum culpa fugit? Veritatis, dignissimos neque. Suscipit pariatur ducimus quibusdam vitae dignissimos, eum obcaecati dolor voluptas! Deleniti quibusdam ipsa quia eligendi delectus nihil, alias nemo recusandae suscipit consequuntur, pariatur aliquam. At, necessitatibus, hic beatae impedit enim libero, consequatur corrupti ipsam fugit nemo obcaecati ullam dolores temporibus! Pariatur esse odio deleniti, labore ullam, magni praesentium magnam illum deserunt molestias voluptas cum veniam molestiae. Libero optio laborum similique non, labore iste. Laborum, velit aut.</p>
            
            <h2 id="oposlu">O mom poslu</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita praesentium neque optio, perferendis architecto autem asperiores temporibus! Earum, facilis illo amet laboriosam explicabo dolor consectetur, quaerat numquam laborum voluptates excepturi magnam animi unde ex enim aliquid voluptas! Eos perferendis quae a et labore. Ipsa itaque, minima voluptatibus molestias in accusantium? Repellendus aliquam consequatur accusamus at alias esse. Dignissimos excepturi aperiam, nobis tenetur vel sunt distinctio, quia quod nihil illum praesentium, obcaecati adipisci laudantium voluptas. Optio atque ea, hic velit minima quae soluta perferendis ex sapiente porro, sunt assumenda quia ab quidem laboriosam, rerum esse? Odio inventore officia atque optio exercitationem!</p>
        </section>

        <aside>
            <h3>Moja fotografija</h3>
            <p class="slika">
                <?php
                     
                    if($pol == "m") {echo "<img src='./slike/choleric.png'>";}
                    elseif($pol == "z") {echo "<img src='./slike/sanguine.png'>";}
                    else {echo "<img src='./slike/flegmatic.png'>";}
                ?>
            </p>
        </aside>

        <footer>
            <h4>Footer</h3>
        </footer>
    </body>
</html>