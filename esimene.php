<?php
    // see on kommentaar, järgmisena paar muutujat
    $myName = "Piret";
	$myFamilyName = "Puidak";
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", 
	"november", "detsember"];
	// var_dump($monthNamesEt); 
	//echo $monthNamesEt[8];
	$monthNow = $monthNamesEt[date("n")-1];
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
	#echo  (round($toTheEnd / 60));
	// tegeleme vanusega 
	$myBirthYear;
	$ageNotice = "";
	// var_dump($_POST); 
	if (isset($_POST["birthYear"])) {
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
	    $ageNotice = "<p>Teie vanus on ligikaudu " . $myAge ." aastat. </p>";
	    
		$ageNotice .= "<p>Olete elanud järgnevatel aastatel:</p>";
		$ageNotice .= "\n <ul> \n";
		$yearNow = date("Y");
	    for ($i = $myBirthYear; $i <= $yearNow; $i ++) {
	         $ageNotice .= "<li>" .$i ."</li> \n";
		}
		$ageNotice .= "</ul>"; 
	} 
	
	
	//echo $myAge 
	
	//teeme tsükli
	/*for ($i = 0; $i < 1000; $i ++) {
		echo "ha";
	}*/
	

	?>
<!DOCTYPE html>
<html> 
<head>
   <meta charset="utf-8">
   <title>Piret Puidak veebiprogrammeerimine</title>
</head>
<body style="background-color:bisque;">
   <h1> 
   <?php 
       echo $myName ." " .$myFamilyName; 
	   
   ?>
   veebiprogrammeerimine</h1> 
  
   <p style="color:white;">See leht on loodud õppetöö raames ning ei sisalda mingit tõsiseltvõetavat sisu. </p>

   <?php echo "<p>See on minu esimene PHP abil väljastatud tekstijupp!</p>";
         echo "<p>Täna on "; 
		 echo date("d. ") .$monthNow .date(" Y") .", kell oli lehe avamise hetkel " .date("H:i:s"); 
		 echo ", käes on " . $partOfDay .". </p>";
		 

   ?> 
   
   <h2> Natukene aastaarvudest </h2>
   <form method="POST">
        <label>Teie sünniaasta: </label>
		<input type="number" name="birthYear" id="birthYear" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
        <input type="submit" name="submitBirthYear" value="Kinnita">		
  


  </form>
  <?php
      if ($ageNotice !="") {
		  echo $ageNotice;
	  }
  ?>
</body>
</html>