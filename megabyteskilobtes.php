<?php
    function printMegaBytesAndKiloBytes(int $kiloBytes){

        if($kiloBytes >= 0){

            /** @var int $megaBytes */
            $megaBytes = round($kiloBytes/1024);

                $kilobytes = $kiloBytes - ($megaBytes * 1024);

                echo $kiloBytes . " KB = " . $megaBytes . " MB and ". $kilobytes . " KB";

            }
        else
        {
            echo ("Invalid Value");
        }

    }

    echo "<br>".printMegaBytesAndKiloBytes(2500);
    echo "<br>".printMegaBytesAndKiloBytes(200);
    echo "<br>".printMegaBytesAndKiloBytes(5000);
    echo "<br>".printMegaBytesAndKiloBytes(-1024);