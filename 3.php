<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

 function greenchip($nom){
	 if(!($nom)){
		echo 'entrez un nom valide';
	 }
	 else if(!($nom == 'greenchip')){
		 echo 'nom invalide';
	 }
	 else{
		 echo 'I love greenchip :p';
	 }
 }


 greenchip('greenchip');

 echo nl2br("\r\n");

 for ($i = 1; $i<=10; $i++){
	 echo $i;
	 echo nl2br("\r\n");

 }
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>