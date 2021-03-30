<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

 echo max(8,7);

echo "<br/>";

 echo "MANAL";

 echo "<br/>";

 echo strtolower("MANAL");

 $tableauManal = ["mokhliss", "manal"];

 array_push($tableauManal, '23');

 array_pop($tableauManal);	


 echo "<br/>";

 echo $tableauManal[2];






 

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>