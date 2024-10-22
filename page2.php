<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans+Condensed:wght@200..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="index.css" />
    <title>Main</title>
</head>

<body>
    <div class="header">
        <h1>PHP 7-12</h1>
    </div>

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <ul>
                <a href="index.php">
                    <li>1 - 6</li>
                </a>
                <a href="page1.php">
                    <li>7 - 12</li>
                </a>
                <a href="page2.php">
                    <li>13 - 18</li>
                </a>
                <a href="page3.php">
                    <li>19 - 24</li>
                </a>
                <a href="page4.php">
                    <li>25 - 30</li>
                </a>
                <a href="page5.php">
                    <li>31 - 36</li>
                </a>
                <a href="page6.php">
                    <li>37 - 42</li>
                </a>
                <a class="koodifixaus" href="koodifixaus.php">
                    <li>HTML KOODI -> KOODI HTML BLOCK</li>
                </a>
                <a class="koodifixaus" href="koodifixaus2.php">
                    <li>HTML KOODI -> PHP ECHO</li>
                </a>
            </ul>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 13 ALKU ---------------------------------------------------------------->
        <div class="col-9 col-s-9">

            <h3> Tehtävä 13 </h3>
            <p> Laskee ympyrän kehän mitat, pinta-alan ja tilavuuden käyttäen muuttujaa </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-13">
&LT?php
$sade = 3.21;
$keha = 2*pi()*$sade;
$pintaala = 4*pi()*pow($sade, 2);
$tilavuus = (4*pi()*pow($sade, 3))/3;

echo "&LTp>Ympyrän pinta-ala ".$pintaala."&LT/p>";
echo "&LTp>Ympyrän tilavuus ".$tilavuus."&LT/p>";
echo "&LTp>Ympyrän kehä ".$keha."&LT/p>";
echo "&LTp>Ympyrän säde ".$sade."&LT/p>";  
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-13">
                <?php
$sade = 3.21;
$keha = 2*pi()*$sade;
$pintaala = 4*pi()*pow($sade, 2);
$tilavuus = (4*pi()*pow($sade, 3))/3;

echo "<p>Ympyrän pinta-ala ".$pintaala."</p>";
echo "<p>Ympyrän tilavuus ".$tilavuus."</p>";
echo "<p>Ympyrän kehä ".$keha."</p>";
echo "<p>Ympyrän säde ".$sade."</p>";  
?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 13 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 14 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9">

            <h3> Tehtävä 14 </h3>
            <p> Käyttää unaarisia operaattoreita laskemaan 10-1 ja 9+1 </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-14">
&LT?php>
$val = 10;
$val--;
echo ($val)."&LTbr>";
$val++;
echo ($val)."&LTbr>";
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-14">
                <?php
$val = 10;
$val--;
echo ($val)."<br>";
$val++;
echo ($val)."<br>";
?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 14 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 15 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 15 </h3>
            <p> Katsoo jos luku1 on >= 50 && < 100 ja tulostaa luvun olevan>= 50 tai < 100; Tulostaa luku 2 on suurimpi
                        kuin 100 jos luku 2> 100 </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-15">
&LT?php
$luku1 = 50; 
$luku2 = 100;
if ($luku1 >= 50 && $luku1 < 100){
echo "Luku 1 on 50 tai pienempi kuin 100";
}
if ($luku2 > 100){
echo "Luku 2 on suurimpi kuin 100";
}
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-15">
                <?php
$luku1 = 50; 
$luku2 = 100;
if ($luku1 >= 50 && $luku1 < 100){
echo "Luku 1 on 50 tai pienempi kuin 100";
}
if ($luku2 > 100){
echo "Luku 2 on suurimpi kuin 100";
}
?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 15 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 16 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 16 </h3>
            <p> Yhdistää 2 tekstiä otsikoillaan yhteen muuttujaan ja lähettää sivustoon tekstit </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-16">
&LT?php
$otsikko1 = "&LTh1>Blinding lights&LT/h1>";
$otsikko2 = "&LTh1>Bohemian Rhapsody&LT/h1>";
$teksti1 = "&LTp>Yeah
I've been tryna call
I've been on my own for long enough
Maybe you can show me how to love, maybe
I'm going through withdrawals
You don't even have to do too much
You can turn me on with just a touch, baby
I look around and
Sin City's cold and empty (oh)
No one's around to judge me (oh)
I can't see clearly when you're gone
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
I said, ooh, I'm drowning in the night
Oh, when I'm like this, you're the one I trust
(Hey, hey, hey)
I'm running out of time
'Cause I can see the sun light up the sky
So I hit the road in overdrive, baby, oh
The city's cold and empty (oh)
No one's around to judge me (oh)
I can't see clearly when you're gone
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
I said, ooh, I'm drowning in the night
Oh, when I'm like this, you're the one I trust
I'm just walking by to let you know (by to let you know)
I can never say it on the phone (say it on the phone)
Will never let you go this time (ooh)
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
(Hey, hey, hey)
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch&LT/p>"; 
$teksti2 = "&LTp>Is this the real life? Is this just fantasy?
Caught in a landslide, no escape from reality
Open your eyes, look up to the skies and see
I'm just a poor boy, I need no sympathy
Because I'm easy come, easy go
Little high, little low
Any way the wind blows doesn't really matter to me, to me
Mama, just killed a man
Put a gun against his head, pulled my trigger, now he's dead
Mama, life had just begun
But now I've gone and thrown it all away
Mama, ooh, didn't mean to make you cry
If I'm not back again this time tomorrow
Carry on, carry on as if nothing really matters
Too late, my time has come
Sends shivers down my spine, body's aching all the time
Goodbye, everybody, I've got to go
Gotta leave you all behind and face the truth
Mama, ooh (any way the wind blows)
I don't wanna die
I sometimes wish I'd never been born at all
I see a little silhouetto of a man
Scaramouche, Scaramouche, will you do the Fandango?
Thunderbolt and lightning, very, very frightening me
(Galileo) Galileo, (Galileo) Galileo, Galileo Figaro, magnifico
But I'm just a poor boy, nobody loves me
He's just a poor boy from a poor family
Spare him his life from this monstrosity
Easy come, easy go, will you let me go?
بِسْمِ ٱللَّٰهِ
No, we will not let you go (let him go)
بِسْمِ ٱللَّٰهِ
We will not let you go (let him go)
بِسْمِ ٱللَّٰهِ
We will not let you go (let me go)
Will not let you go (let me go)
Will not let you go (never, never, never, never let me go)
No, no, no, no, no, no, no
Oh, mamma mia, mamma mia
Mamma mia, let me go
Beelzebub has a devil put aside for me, for me, for me
So you think you can stone me and spit in my eye?
So you think you can love me and leave me to die?
Oh, baby, can't do this to me, baby
Just gotta get out, just gotta get right outta here
Ooh
Ooh, yeah, ooh, yeah
Nothing really matters, anyone can see
Nothing really matters
Nothing really matters to me&LT/p>";
$kokoteksti = $otsikko1.$teksti1.$otsikko2.$teksti2;
echo $kokoteksti;
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-16">
                <?php
$otsikko1 = "<h1>Blinding lights</h1>";
$otsikko2 = "<h1>Bohemian Rhapsody</h1>";
$teksti1 = "<p>Yeah
I've been tryna call
I've been on my own for long enough
Maybe you can show me how to love, maybe
I'm going through withdrawals
You don't even have to do too much
You can turn me on with just a touch, baby
I look around and
Sin City's cold and empty (oh)
No one's around to judge me (oh)
I can't see clearly when you're gone
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
I said, ooh, I'm drowning in the night
Oh, when I'm like this, you're the one I trust
(Hey, hey, hey)
I'm running out of time
'Cause I can see the sun light up the sky
So I hit the road in overdrive, baby, oh
The city's cold and empty (oh)
No one's around to judge me (oh)
I can't see clearly when you're gone
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
I said, ooh, I'm drowning in the night
Oh, when I'm like this, you're the one I trust
I'm just walking by to let you know (by to let you know)
I can never say it on the phone (say it on the phone)
Will never let you go this time (ooh)
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch
(Hey, hey, hey)
I said, ooh, I'm blinded by the lights
No, I can't sleep until I feel your touch</p>"; 
$teksti2 = "<p>Is this the real life? Is this just fantasy?
Caught in a landslide, no escape from reality
Open your eyes, look up to the skies and see
I'm just a poor boy, I need no sympathy
Because I'm easy come, easy go
Little high, little low
Any way the wind blows doesn't really matter to me, to me
Mama, just killed a man
Put a gun against his head, pulled my trigger, now he's dead
Mama, life had just begun
But now I've gone and thrown it all away
Mama, ooh, didn't mean to make you cry
If I'm not back again this time tomorrow
Carry on, carry on as if nothing really matters
Too late, my time has come
Sends shivers down my spine, body's aching all the time
Goodbye, everybody, I've got to go
Gotta leave you all behind and face the truth
Mama, ooh (any way the wind blows)
I don't wanna die
I sometimes wish I'd never been born at all
I see a little silhouetto of a man
Scaramouche, Scaramouche, will you do the Fandango?
Thunderbolt and lightning, very, very frightening me
(Galileo) Galileo, (Galileo) Galileo, Galileo Figaro, magnifico
But I'm just a poor boy, nobody loves me
He's just a poor boy from a poor family
Spare him his life from this monstrosity
Easy come, easy go, will you let me go?
بِسْمِ ٱللَّٰهِ
No, we will not let you go (let him go)
بِسْمِ ٱللَّٰهِ
We will not let you go (let him go)
بِسْمِ ٱللَّٰهِ
We will not let you go (let me go)
Will not let you go (let me go)
Will not let you go (never, never, never, never let me go)
No, no, no, no, no, no, no
Oh, mamma mia, mamma mia
Mamma mia, let me go
Beelzebub has a devil put aside for me, for me, for me
So you think you can stone me and spit in my eye?
So you think you can love me and leave me to die?
Oh, baby, can't do this to me, baby
Just gotta get out, just gotta get right outta here
Ooh
Ooh, yeah, ooh, yeah
Nothing really matters, anyone can see
Nothing really matters
Nothing really matters to me</p>";
$kokoteksti = $otsikko1.$teksti1.$otsikko2.$teksti2;
echo $kokoteksti;

?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 16 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 17 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 17 </h3>
            <p> Katsoo "kokeen" arvon avulla minkä arvosanan on saanut </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-17">
&LT?php
$arvo = 121.1;
$arvosana = 0;

if ($arvo >= 0 && $arvo < 119) {
  $arvosana = 0;
} else if ($arvo >= 119 && $arvo < 213) {
    $arvosana = 1;
} else if ($arvo >= 213 && $arvo < 306) {
  $arvosana = 2;
} else if ($arvo >= 306 && $arvo < 400) {
  $arvosana = 3;
}
echo "Arvosana: ". $arvosana;
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-17">
                <?php
$arvo = 121.1;
$arvosana = 0;

if ($arvo >= 0 && $arvo < 119) {
  $arvosana = 0;
} else if ($arvo >= 119 && $arvo < 213) {
    $arvosana = 1;
} else if ($arvo >= 213 && $arvo < 306) {
  $arvosana = 2;
} else if ($arvo >= 306 && $arvo < 400) {
  $arvosana = 3;
}
echo "Arvosana: ". $arvosana;
?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 17 LOPPU---------------------------------------------------------------->
        <!----------------------------------------------- TEHTÄVÄ 18 ALKU ---------------------------------------------------------------->
        <div class="col-3 col-s-3"> </div>
        <div class="col-9 col-s-9 left">

            <h3> Tehtävä 18 </h3>
            <p> Katsoo arvoa ja antaa arvolle arvosanan </p>
            <div class="koodaus">
                <pre>
&LTdiv class="tehtava-18">
&LT?php
    $arvo = 121.1;
    $arvosana = 0;

    if ($arvo < 120) {
      $arvosana = 0;
    } else if ($arvo >= 120 && $arvo < 175.9) {
      $arvosana = 1;
    } else if ($arvo >= 176 && $arvo < 231.9) {
      $arvosana = 2;
    } else if ($arvo >= 232 && $arvo < 287.9) {
      $arvosana = 3;
    } else if ($arvo >= 288 && $arvo < 343.9) {
      $arvosana = 4;
    } else if ($arvo >= 344 && $arvo <= 400 ) {
      $arvosana = 5; 
    } else if ($arvo > 400 ) {
      $arvosana = 6;
    }
    echo "Arvosana: ". $arvosana;
?>
&LT/div>
</pre>
            </div>

            <div class="tehtava-18">
                <?php
    $arvo = 121.1;
    $arvosana = 0;

    if ($arvo < 120) {
      $arvosana = 0;
    } else if ($arvo >= 120 && $arvo < 175.9) {
      $arvosana = 1;
    } else if ($arvo >= 176 && $arvo < 231.9) {
      $arvosana = 2;
    } else if ($arvo >= 232 && $arvo < 287.9) {
      $arvosana = 3;
    } else if ($arvo >= 288 && $arvo < 343.9) {
      $arvosana = 4;
    } else if ($arvo >= 344 && $arvo <= 400 ) {
      $arvosana = 5; 
    } else if ($arvo > 400 ) {
      $arvosana = 6;
    }
    echo "Arvosana: ". $arvosana;
?>
            </div>
        </div>
        <!----------------------------------------------- TEHTÄVÄ 18 LOPPU---------------------------------------------------------------->
    </div>
    <div class="footer">
        <p>
            This collection of beautiful and breathtaking photos is free for
            personal and commercial use.
        </p>
    </div>
</body>

</html>