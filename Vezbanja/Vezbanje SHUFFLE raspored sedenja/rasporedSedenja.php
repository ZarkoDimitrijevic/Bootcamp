<!DOCTYPE php>
<html>
    <head>
        <style>
            body{width:100%;}
            *{box-sizing:border-box;}
            table {width:80%;
                text-align:center;
                margin-left:auto;
                margin-right:auto;
                border-collapse: separate;
                border-spacing:10px;}
            td.stolica{width:12%;
                    height:120px;
                    text-align:center;
                    vertical-align: middle;
                    font-weight:bold;
                    background-image: url('pravljeno1.png');
                    background-size:100% 120px;
                    background-repeat: no-repeat;}
            img{margin:0;
                padding:0;
                height:120px;
                width:12%;}
            h1, h3 {text-align:center;}
            h3 {margin-bottom:30px;}
            .board {border: 2px solid black;
                    text-align:center;
                    margin:10px auto;
                    padding:2px;
                    width:50%;}
        </style>
    </head>
    <body>
        <h1>IT Bootcamp PHP ciklus II</h1>
        <h3>GENERATOR RASPOREDA SEDENJA</h3>
        <p class="board">SMART BOARD</p>
        <div>
        <table>
        <?php
            $niz=array(1401, 4802, 5903, 7104, 8905, 6506, 7707, 9608, 7809, 4510, 7811, 7112, 6313, 4414, 7415, 8216, 1617, 5418, 6419, 7820, 9921, 6422, 7923, 1524);
            shuffle($niz);
            
            for($i=0; $i<count($niz); $i++) {
            $niz[$i] = "<td class='stolica'>" . $niz[$i] . "</td>";}
            

            for($i=0; $i<count($niz); $i++) {
                if($i%6==0 || $i==0) {
                    echo "<tr>";} 
                echo $niz[$i];
                if(($i+1)%6==0 || $i==5) {
                    echo "</tr>";}
            }

        ?>
        </table>
        </div>

    </body>
</html>