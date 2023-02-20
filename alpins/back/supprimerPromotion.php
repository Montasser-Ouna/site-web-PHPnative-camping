<?PHP
	include "../controller/PromotionC.php";
	$promotionC=new PromotionC();
		$promotionC->supprimerPromotion($_GET["id"]);
		header('Location:promotions.php');
?>