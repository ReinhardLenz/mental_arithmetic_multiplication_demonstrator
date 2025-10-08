
<?php include('templates/header.php'); ?>

<br>
<br>
<br>


<?php

		
/* $xml=simplexml_load_file($_SERVER['DOCUMENT_ROOT'] ."/language_xml/languages_Trachtkahn.xml") or die("xml not found!");
// fill in variables with language content
foreach ($xml->children() as $node) {
    $key          = $node->getName();          // bodycompass1, bodycompass2 …
    $$key         = (string)$node->$lang;      // creates $bodycompass1 etc.
} */



define('SITE_ROOT', dirname(__DIR__));          // /home/users/.../raikkulenz.kapsi.fi
define('I18N_PATH', SITE_ROOT . '/language_json/');

$strings = json_decode(
    file_get_contents(I18N_PATH . 'languages_Trachtkahn.json'),
    true
);

function t1(string $id): string
{
    global $strings, $lang;
    return htmlspecialchars($strings[$lang][$id] ?? '', ENT_QUOTES, 'UTF-8');
}

?>

<?php
// Titles in multiple languages
echo '<title lang="en">Trachtenberg Multiplication Calculator – Train Your Brain with Fast Math</title>';
echo '<title lang="fi">Trachtenbergin kertolaskukone – Harjoittele aivojasi nopealla matematiikalla</title>';
echo '<title lang="fr">Calculatrice de multiplication Trachtenberg – Entraînez votre cerveau avec des calculs rapides</title>';

// Description in multiple languages
echo '<meta name="description" lang="en" content="Explore mental math like never before with this interactive Trachtenberg multiplication calculator. Inspired by Kahneman’s “System 1 and 2” thinking, this tool helps you sharpen logic and memory. Try it and discover faster, paperless multiplication!">';
echo '<meta name="description" lang="fi" content="Tutustu päässälaskun saloihin aivan uudella tavalla tämän interaktiivisen Trachtenberg-kertolaskukoneen avulla. Kahnemanin ”System 1 ja 2” -ajattelusta inspiraationsa saaneen työkalun avulla voit terävöittää logiikkaasi ja muistia. Kokeile sitä ja löydä nopeampi, paperiton tapa kertoa!">';
echo '<meta name="description" lang="fr" content="Découvrez le calcul mental comme jamais auparavant grâce à cette calculatrice interactive de multiplication Trachtenberg. Inspirée par la théorie des « systèmes 1 et 2 » de Kahneman, cet outil vous aide à affiner votre logique et votre mémoire. Essayez-le et découvrez une méthode de multiplication plus rapide et sans papier.">';

// Keywords in multiple languages
echo '<meta name="keywords" lang="en" content="Trachtenberg multiplication, fast math, mental calculation, multiplication trick, Kahneman System 1 and 2, cognitive math, Russian peasant multiplication, brain training, mental arithmetic, alternative math methods, smart multiplication, quick multiply, math calculator, interactive math">';
echo '<meta name="keywords" lang="fi" content="Trachtenbergin kertolasku, nopea matematiikka, päässälaskenta, kertolaskun temppu, Kahnemanin järjestelmät 1 ja 2, kognitiivinen matematiikka, venäläisten talonpoikien kertolasku, aivotreeni, vaihtoehtoiset matematiikan menetelmät, älykäs kertolasku, nopea kertolasku, matematiikan laskin, interaktiivinen matematiikka">';
echo '<meta name="keywords" lang="fr" content="Multiplication de Trachtenberg, calcul rapide, calcul mental, astuce de multiplication, Systèmes 1 et 2 de Kahneman, mathématiques cognitives, multiplication paysanne russe, entraînement cérébral, arithmétique mentale, méthodes mathématiques alternatives, multiplication intelligente, multiplication rapide, calculatrice mathématique, mathématiques interactives">';
?>

<h1>
<?php echo t1('TK18');?> 
</h1>
<br>

<p>
<?php echo t1('TK1');?>
</p>

<p>

<?php echo t1('TK12');?>
</p>

<p>
<?php echo t1('TK2');?>
</p>
<p>

<?php echo t1('TK3');?>
</p>

   <img class="test" src="../trachtkahn_pictures/trachtenberg_1.jpg" alt="A" width="220" height="70">
<br>
<p>
<?php echo t1('TK4');?>
</p>
   <img class="test" src="../trachtkahn_pictures/trachtenberg_2.jpg" alt="A" width="220" height="80">
<br>

<p>

<?php echo t1('TK5');?>
</p>

   <img class="test" src="../trachtkahn_pictures/trachtenberg_3.jpg" alt="A" width="220" height="40">
<br>


<p>
<?php echo t1('TK6');?>
</p>



   <img class="test" src="../trachtkahn_pictures/trachtenberg_4.jpg" alt="A" width="220" height="40">
<br>

<p>

<?php echo t1('TK7');?>

</p>



<p>

<?php echo t1('TK8');?>

</p>





   <img class="test" src="../trachtkahn_pictures/trachtenberg_5.jpg" alt="A" width="220" height="80">
<br>


<p>

<?php echo t1('TK9');?> 
</p>
<p>

<?php echo t1('TK10');?> 
</p>
<br>

<p>
<?php echo t1('TK21');?> 
</p>



<p id="sectionA">*</p>

<?php 

if(empty($_POST['submit'])){$Z1=1;$E1=8;$Z2=2;$E2=4;    
}
else{$Z1=$_POST["Z1"];$E1=$_POST["E1"];$Z2=$_POST["Z2"];$E2=$_POST["E2"];
}
/* Results */$R1=$Z1*$E2+$E1*$Z2;
$V1=($R1-$R1%10)/10;
$V2=$R1%10;
$R2=$Z1*$Z2;
$V3=($R2-$R2%10)/10;
$V4=$R2%10;
$R3=$E1*$E2;
$V5=($R3-$R3%10)/10;
$V6=$R3%10;
$V7=$V6;
$V8=($V2+$V5)%10;
$V9=(($V2+$V5)-($V2+$V5)%10)/10;
$V10=($V1+$V4+$V9)%10;
$V11=(($V1+$V4+$V9)-($V1+$V4+$V9)%10)/10;
$V12=$V3+$V11;
if($V12==0){
   $V12="";
}
if($V11==0){
   $V11="";
}
if($V9==0){
   $V9="";
}
if($V3==0){
   $V3="";
}
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']."#sectionA");?>" method="post">    <input type="text" size="1" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="Z1" value="<?php echo($Z1);?>">    <input type="text" size="1" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="E1" value="<?php echo($E1);?>">    x    <input type="text" size="1" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="Z2" value="<?php echo($Z2);?>">    <input type="text" size="1" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="E2" value="<?php echo($E2);?>">    <input type="submit" name="submit" value="Submit">    </form>


<?php

echo("<table  id='tableATrachtbg'><tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-red'>");
echo($Z1);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-blue'>");
echo($E1);
echo("</td><td style='border:none;'>x</td><td id='Tracht-cell-blue'>");
echo($Z2);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-red'>");
echo($E2);
echo("</td><td style='border:none;'>=</td></tr>");
echo("<tr><th id='Tracht-cell-comment' colspan='12'>".t1('TK22')."</th></tr><tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-blue'>");
echo($E1);
echo("</td><td id='Tracht-cell-blue'>x</td><td id='Tracht-cell-blue'>");
echo($Z2);
echo("</td><td style='border:none;'>+</td><td id='Tracht-cell-red'>");
echo($Z1);
echo("</td><td id='Tracht-cell-red'>x</td><td id='Tracht-cell-red'>");
echo($E2);
echo("</td><td style='border:none;'>=</td></tr>");
echo("<tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V1);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V2);
echo("</td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td></tr>");
echo("<tr><th id='Tracht-cell-comment' colspan='12'>".t1('TK23')."</th></tr>");
echo("<tr><td id='Tracht-cell-red'>");
echo($Z1);
echo("</td><td style='border:none;'>x</td><td id='Tracht-cell-blue'>");
echo($Z2);
echo("</td><td style='border:none;'>=</td><td id='Tracht-cell-orange'>");
echo($V3);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-orange'>");
echo($V4);
echo("</td><td style='border:none;'></td><td style='border:none;'>_</td><td style='border:none;'>_</td><td style='border:none;'></td><td style='border:none;'></td></tr><tr><th id='Tracht-cell-comment' colspan='12'>".t1('TK24')."</th></tr>");
echo("<tr><td id='Tracht-cell-blue'>");
echo($E1);
echo("</td><td style='border:none;'>x</td><td id='Tracht-cell-red'>");
echo($E2);
echo("</td><td style='border:none;'>=</td><td style='border:none;'>_</td><td style='border:none;'></td><td style='border:none;'>_</td><td style='border:none;'></td><td id='Tracht-cell-violet'>");
echo($V5);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-violet'>");
echo($V6);
echo("</td><td style='border:none;'></td></tr>");
echo("<tr><th id='Tracht-cell-comment' colspan='12'>".t1('TK25')."</th> </tr></tr>");
echo("<tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V1);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V2);
echo("</td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td></tr><tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-orange'>");
echo($V3);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-orange'>");
echo($V4);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-violet'>");
echo($V5);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-violet'>");
echo($V6);
echo("</td><td style='border:none;'></td></tr><tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V11);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V9);
echo("</td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td></tr><tr><th id='Tracht-cell-comment' colspan='12'>".t1('TK20')."</th> </tr>
 <tr><th id='Tracht-cell-comment' colspan='12'>------------------------------</th> </tr><tr><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
 echo($V12);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V10);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V8);
echo("</td><td style='border:none;'></td><td id='Tracht-cell-brown'>");
echo($V6);
echo("</td><td style='border:none;'></td></tr></table></body></html>");

?>

<br>
<br>
<h1>
<?php echo t1('TK15');?> 
</h1>
<br>

<p>
<?php echo t1('TK16');?> 
</p>
<br>
<p>

<section class="slider-wrapper-ERIKOIS-class" style="width: 40%; height: 45%;">
    <button class="slide-arrow-ERIKOIS-class" id="slide-arrow-prev-GAUCHE">
        &#8249;
    </button>
    <button class="slide-arrow-ERIKOIS-class" id="slide-arrow-next-DROITE">
        &#8250;
    </button>
    <ul class="slides-container-ERIKOIS-class" id="slides-container-ID_ERIKOIS">
        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen1.jpg" alt="1" style="width:100%;"> </div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen2.jpg" alt="2"  style="width:100%;"></div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen3.jpg" alt="3"  style="width:100%;"></div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen4.jpg" alt="4"  style="width:100%;"></div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen5.jpg" alt="5"  style="width:100%;"></div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen6.jpg" alt="6"  style="width:100%;"></div>
        </li>

        <li class="slide-OK">
        <div><img src="../trachtkahn_pictures/paimen7.jpg" alt="7"  style="width:100%;"></div>
        </li>


      </ul>
    </section>


<script>
    const slidesContainer = document.getElementById("slides-container-ID_ERIKOIS");
    const slide = document.querySelector(".slide-OK");
    const prevButton = document.getElementById("slide-arrow-prev-GAUCHE");
    const nextButton = document.getElementById("slide-arrow-next-DROITE");

    nextButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft += slideWidth;
    });

    prevButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft -= slideWidth;
    });
</script>

<br>
<p>
<?php echo t1('TK19');?>
Valtteri Suomalainen, Marianna Wallinheimo (toim.): Sauna Syyriassa, Recallmed 1995.</p>

<p>
<?php echo t1('TK14');?> 
</p>
<br>
<p>
<?php echo t1('TK17');?> 
</p>
<br>
<br>
<a href="https://empii.kapsi.fi/matikka/kertolasku.html">Empii.kapsi.fi</a>
<br>
<br>
<br>
<br>

<?php include('templates/footer.php'); ?>
</body>
</html>
