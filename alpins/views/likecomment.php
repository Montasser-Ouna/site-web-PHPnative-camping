<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
session_start();
$id_session = session_id();
include "../Model/forum.php";
include "../Controller/forumC.php";
if (isset($_GET['t'], $_GET['id']) and !empty($_GET['t']) and !empty($_GET['id'])) {
    $getid = (int) $_GET['id'];
    $getm = htmlspecialchars($_SESSION['e']);
    $gett = (int) $_GET['t'];
    $check = $pdo->prepare('SELECT id  FROM comments WHERE id= ?');
    $check->execute(array($getid));
    if ($check->rowCount() == 1) {
        if ($gett == 1) {
            $check_like = $pdo->prepare('SELECT id FROM likes_comment WHERE id_comment = ? AND id_user = ?');
            $check_like->execute(array($getid,$getm));

            $check_dislike = $pdo->prepare('SELECT id FROM dislikes_comment WHERE id_comment = ? AND id_user = ?');
            $check_dislike->execute(array($getid,$getm));

            if($check_like->rowCount()==1){
                $del = $pdo->prepare('DELETE FROM likes_comment  WHERE id_comment = ? AND id_user = ?');
                $del->execute(array($getid,$getm));

            }else{
                $ins = $pdo->prepare('INSERT INTO likes_comment (id_comment , id_user)  values (? , ?)  ');
                $ins->execute(array($getid, $getm));
               
                $del = $pdo->prepare('DELETE FROM dislikes_comment WHERE id_comment = ? AND id_user = ?');
                $del->execute(array($getid,$getm));

            }
        } else if($gett == 2) {
            $check_like = $pdo->prepare('SELECT id FROM likes_comment WHERE id_comment = ? AND id_user = ?');
            $check_like->execute(array($getid,$getm));

            $check_dislike = $pdo->prepare('SELECT id FROM dislikes_comment WHERE id_comment = ? AND id_user = ?');
            $check_dislike->execute(array($getid,$getm));

            if($check_dislike->rowCount()==1){
                $del = $pdo->prepare('DELETE FROM dislikes_comment  WHERE id_comment = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }else{
                $ins = $pdo->prepare('INSERT INTO dislikes_comment (id_comment , id_user)  values (? , ?)  ');
                $ins->execute(array($getid, $getm));

                $del = $pdo->prepare('DELETE FROM likes_comment WHERE id_comment = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }
        }
        header('Location: http://localhost/PG3/alpins/views/post?id=' . $_GET['thread']);
    } else {
        exit('FatalEEE error');
    }
}
