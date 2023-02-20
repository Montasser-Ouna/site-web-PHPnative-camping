<?php
	include "../controller/PromotionC.php";
	include_once '../Model/Promotion.php';

    session_start();
	$promotionC = new PromotionC();
	$error = "";

	if (
		isset($_POST["localisation"]) &&
        isset($_POST["image"]) &&
        isset($_POST["description"]) &&
        isset($_POST["dateD"]) &&
        isset($_POST["dateF"]) &&
        isset($_POST["prixact"]) &&
        isset($_POST["prix"])
	){
		if (
            !empty($_POST["localisation"]) &&
            !empty($_POST["image"]) &&
            !empty($_POST["description"]) &&
            !empty($_POST["dateD"]) &&
            !empty($_POST["dateF"])&&
            !empty($_POST["prixact"])&&
            !empty($_POST["prix"])
        ) {
            $user = new Promotion(
                $_POST['localisation'],
                $_POST['image'],
                $_POST['description'],
                $_POST['dateD'],
                $_POST['dateF'],
                $_POST['prixact'],
                $_POST['prix'],
                $_SESSION['userID']

			);

            $promotionC->modifierPromotion($user, $_GET['id']);
            header('Location:promotions.php');

        }

        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front-dashboard/users-add-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 01:57:53 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Add User | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-set/style.css">



    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  </head>

  <body class="   footer-offset">

    <!-- Pour acceuillir navbar.php -->
    <?php include_once('navbar.php'); ?>
    <br>
    <br>
    <br>

        <div <div style="text-align:center" id="error">
            <?php echo $error; ?>
        </div>

   	<?php
			if (isset($_GET['id'])){
				$user = $promotionC->recupererPromotion($_GET['id']);

		?>
		<form action="" method="POST">
            <table  align="center">
                <tr>

                    <td>
                        <label for="id"><h2>ID:</h2>
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="localisation"><h2>Localisation:</h2>
						</label>
					</td>
					<td>
						<input type="text" name="localisation" id="localisation" maxlength="20" value = "<?php echo $user['localisation']; ?>">
					</td>
				</tr>
                <tr> <td>
                <div >
                    <div class="col-25">
                        <label><h2>Image:</h2></label>
                    </div>
                    </td>
                    <td>
                    <div class="col-75">
                        <input type = "file" name ="image" id="image"  value = "<?php echo $user['image']; ?>" >
                    </div>
                </div>
                </td>
                </tr>

                <tr>
                    <td>
                        <label for="description"><h2>Description</h2>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description"  value = "<?php echo $user['description']; ?>">
                    </td>
                </tr>
                <tr>

                    <td>
                        <label for="dateD"><h2>DateD:</h2>
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateD" id="dateD" value = "<?php echo $user['dateD']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dateF"><h2>DateF:</h2>
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateF" id="dateF" value = "<?php echo $user['dateF']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prixact"><h2>Prix actuel:</h2>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prixact" id="prixact" value = "<?php echo $user['prixact']; ?>">
                    </td>


                </tr>

                <tr>
                    <td>
                        <label for="prix"><h2>Prix:</h2>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" id="prix" value = "<?php echo $user['prix']; ?>">
                    </td>


                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success" type="submit" value="Modifier" name = "modifer">
                    </td>
                    <td>

                  <a class="btn btn-info" href="promotions.php"value="Retour à la liste">Retour à la liste</a>
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>