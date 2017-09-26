<?php
   $picsDir = "../../Fotod/";
   $picFileTypes = ["JPG", "JPEG", "PNG", "GIF", "jpg"];
   $picFiles = []; 
  
  $allFiles = array_slice(scandir($picsDir), 2); 
   //var_dump($allFiles);
   foreach ($allFiles as $file){
	   $fileType = pathinfo($file, PATHINFO_EXTENSION);
	   if (in_array($fileType, $picFileTypes) == true){
		   array_push($picFiles, $file); 
	   }
   }
   //$picFiles = array_slice($allFiles, 2);
   //var_dump($picFiles);
   
   $picCount = count($picFiles);
   $picNum = mt_rand(0,($picCount -1));
   $picFile = $picFiles[$picNum];
   
   ?>
<!DOCTYPE html>
<html> 
<head>
   <meta charset="utf-8">
   <title>Piret Puidak veebiprogrammeerimine</title>
</head>
<body style="background-color:powderblue;">
   <h1>Fotod</h1> 
   <p>See leht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu. </p>
   <img src="<?php echo $picsDir .$picFile; ?>" alt="Foto kaunist S327 ruumi uksest">

   
   </body>
</html> 