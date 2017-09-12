<?php
    // see on kommentaar, järgmisena paar muutujat
    $myName = "Piret";
	$myFamilyName = "Puidak";
    // vaatame, mis kell on ja määrame päeva osa
	$hourNow = date("H"); 
	//echo $hourNow töötab;
	$partOfDay = ""; 
	if ( $hourNow < 8 ) {	// <   >   <=   >=   !=
	   $partOfDay = "varajane hommik"; 
	}
	if ( $hourNow >= 8 and  $hourNow < 16) { 
	   $partOfDay = "koolipäev";
	}
	if ( $hourNow >= 16 ) {
		$partOfDay = "vaba aeg";
	}
	 // vaatame, kaua on koolipäeva lõpuni aega jäänud
	 $timeNow = strtotime(date("d.m.Y H:i:s")); 
	 
	 $schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45"));
	
	$toTheEnd = $schoolDayEnd - $timeNow;
	echo (round($toTheEnd / 60));
	?>
<!DOCTYPE html>
<html> 
<head>
   <meta charset="utf-8">
   <title>Piret Puidak veebiprogrammeerimine</title>
</head>
<body>
   <h1>
   <?php
       echo $myName ." " .$myFamilyName; 
   ?>
   veebiprogrammeerimine</h1>
   <p>See leht on loodud õppetöö raames ning ei sisalda mingit tõsiseltvõetavat sisu. </p>

   <?php echo "<p>See on minu esimene PHP abil väljastatud tekstijupp!</p>";
         echo "<p>Täna on "; 
		 echo date("d.m.Y") .", kell oli lehe avamise hetkel " .date("H:i:s"); 
		 echo ", käes on " . $partOfDay .". </p>";

   ?> 
</body>
</html>