<?php

error_reporting(0);

$cislo = 1;

if(isset($_POST['submit']))
{
    $cislo = $_POST['vloz_cislo'];

    if(($cislo % 3) == 0)
    {
        $text = "Super";
        
        if(($cislo % 15) == 0)
        {
            $text = "SuperFaktura";
        }
        
    }

    elseif(($cislo % 5) == 0)
    {
        $text = "Faktura";
    }

    else
    {
        $text = $cislo;
    }
}

include("inc/head.php");
?>

    <div class="zadanie">
        <span>
            * 1. algoritmická na zahriatie * 
            <br>
            Napíšte algoritmus, ktorý bude iterovať celé čísla od 1 do 100 a:
            <br>
            - ak je číslo deliteľné 3, vypíše na riadku "Super"
            <br>
            - ak je číslo deliteľné 5, vypíše na riadku "Faktura"
            <br>
            - ak je číslo deliteľné 15, vypíše "SuperFaktura"
            <br>
            - ak nesplilo žiadnu z týchto podmienok, vypíše číslo samotné.
        </span>
    </div>
    <br>
    <form class="cislo" method="post" action="">
        <label id="lbl_cislo" for="vloz_cislo">Vlož číslo</label>
        <br>
        <input type="number" id="input_cislo" name="vloz_cislo" value="<?php echo $cislo; ?>" min="1" max="100">
        <br>
        <input type="submit" id="odoslat" name="submit" value="Odoslať">
    </form>
    <br>
    <div class="text">
        
        <?php
        if(isset($text))
        {
            echo $text;
        }
            
        ?>
        
        
    </div>
    
<?php

include("inc/footer.php");

?>