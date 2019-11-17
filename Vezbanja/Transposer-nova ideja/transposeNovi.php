<!DOCTYPE html>
<html>
    <head>
        <title>Transposer</title>
    </head>

    <body>
        <form action="" method="POST" name="forma">
            <textarea name="text" rows="30" cols="100"></textarea>
            <textarea name="broj" rows="1" cols="5" placeholder="broj"></textarea>
            <button name="btn">Transposuj</button>
        </form>


    <?php
        //napraviti formu
        $broj=0;
        $pesma=0;
        if(isset($_POST['btn']))
        {
            $pesma = $_POST['text'];
            $broj = $_POST['broj'];
        }

        //definisani svi akordi koji se mogu pojaviti
        $akordi=array('C ', 'C# ', 'D ', 'D# ', 'E ', 'F ', 'F# ', 'G ', 'G# ', 'A ', 'B ', 'H ',
                      '  C', '  C#', '  D', '  D#', '  E', '  F', '  F#', '  G', '  G#', '  A', '  B', '  H',
                    ' C/', ' C#/', ' D/', ' D#/', ' E/', ' F/', ' F#/', ' G/', ' G#/', ' A/', ' B/', ' H/',
                                                'Cis','Dis','Fis','Gis', 
                    'Cm', 'C#m', 'Dm', 'D#m', 'Em', 'Fm', 'F#m', 'Gm', 'G#m', 'Am', 'Bm', 'Hm',
                    'C7', 'C#7', 'D7', 'D#7', 'E7', 'F7', 'F#7', 'G7', 'G#7', 'A7', 'B7', 'H7');
        
        //menjamo durove u brojeve
        $pesma = str_replace('C ', 1, $pesma);
        $pesma = str_replace('C# ', 2, $pesma);
        $pesma = str_replace('D ', 3, $pesma);
        $pesma = str_replace('D# ', 4, $pesma);
        $pesma = str_replace('E ', 5, $pesma);
        $pesma = str_replace('F ', 6, $pesma);
        $pesma = str_replace('F# ', 7, $pesma);
        $pesma = str_replace('G ', 8, $pesma);
        $pesma = str_replace('G# ', 9, $pesma);
        $pesma = str_replace('A ', 10, $pesma);
        $pesma = str_replace('B ', 11, $pesma);
        $pesma = str_replace('H ', 12, $pesma);
        
        $pesma = str_replace('  C', 1, $pesma);
        $pesma = str_replace('  C#', 2, $pesma);
        $pesma = str_replace('  D', 3, $pesma);
        $pesma = str_replace('  D#', 4, $pesma);
        $pesma = str_replace('  E', 5, $pesma);
        $pesma = str_replace('  F', 6, $pesma);
        $pesma = str_replace('  F#', 7, $pesma);
        $pesma = str_replace('  G', 8, $pesma);
        $pesma = str_replace('  G#', 9, $pesma);
        $pesma = str_replace('  A', 10, $pesma);
        $pesma = str_replace('  B', 11, $pesma);
        $pesma = str_replace('  H', 12, $pesma);

        $pesma = str_replace('C/', 1, $pesma);
        $pesma = str_replace('C#/', 2, $pesma);
        $pesma = str_replace('D/', 3, $pesma);
        $pesma = str_replace('D#/', 4, $pesma);
        $pesma = str_replace('E/', 5, $pesma);
        $pesma = str_replace('F/', 6, $pesma);
        $pesma = str_replace('F#/', 7, $pesma);
        $pesma = str_replace('G/', 8, $pesma);
        $pesma = str_replace('G#/', 9, $pesma);
        $pesma = str_replace('A/', 10, $pesma);
        $pesma = str_replace('B/', 11, $pesma);
        $pesma = str_replace('H/', 12, $pesma);

        $pesma = str_replace('Cis', 2, $pesma);
        $pesma = str_replace('Dis', 4, $pesma);
        $pesma = str_replace('Fis', 7, $pesma);
        $pesma = str_replace('Gis', 9, $pesma);

        //menjamo molove u brojeve
        $pesma = str_replace('Cm', 21, $pesma);
        $pesma = str_replace('C#m', 22, $pesma);
        $pesma = str_replace('Dm', 23, $pesma);
        $pesma = str_replace('D#m', 24, $pesma);
        $pesma = str_replace('Em', 25, $pesma);
        $pesma = str_replace('Fm', 26, $pesma);
        $pesma = str_replace('F#m', 27, $pesma);
        $pesma = str_replace('Gm', 28, $pesma);
        $pesma = str_replace('G#m', 29, $pesma);
        $pesma = str_replace('Am', 30, $pesma);
        $pesma = str_replace('Bm', 31, $pesma);
        $pesma = str_replace('Hm', 32, $pesma);

        //menjamo sedmice u brojeve
        $pesma = str_replace('C7', 41, $pesma);
        $pesma = str_replace('C#7', 42, $pesma);
        $pesma = str_replace('D7', 43, $pesma);
        $pesma = str_replace('D#7', 44, $pesma);
        $pesma = str_replace('E7', 45, $pesma);
        $pesma = str_replace('F7', 46, $pesma);
        $pesma = str_replace('F#7', 47, $pesma);
        $pesma = str_replace('G7', 48, $pesma);
        $pesma = str_replace('G#7', 49, $pesma);
        $pesma = str_replace('A7', 50, $pesma);
        $pesma = str_replace('B7', 51, $pesma);
        $pesma = str_replace('H7', 52, $pesma);

        var_dump($pesma);
        
        
        
        
    ?>

    </body>
</html>