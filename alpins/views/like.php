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
    $check = $pdo->prepare('SELECT id  FROM threads WHERE id= ?');
    $check->execute(array($getid));
    if ($check->rowCount() == 1) {
        if ($gett == 1) {
            $check_like = $pdo->prepare('SELECT id FROM likes_thread WHERE id_thread = ? AND id_user = ?');
            $check_like->execute(array($getid,$getm));
            $check_dislike = $pdo->prepare('SELECT id FROM dislikes_thread WHERE id_thread = ? AND id_user = ?');
            $check_dislike->execute(array($getid,$getm));
            if($check_like->rowCount()==1){
                $del = $pdo->prepare('DELETE FROM likes_thread WHERE id_thread = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }else{
                $ins = $pdo->prepare('INSERT INTO likes_thread (id_thread , id_user)  values (? , ?)  ');
                $ins->execute(array($getid, $getm));
                $del = $pdo->prepare('DELETE FROM dislikes_thread  WHERE id_thread = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }
        } else {
            $check_like = $pdo->prepare('SELECT id FROM dislikes_thread WHERE id_thread = ? AND id_user = ?');
            $check_like->execute(array($getid,$getm));
            if($check_like->rowCount()==1){
                $del = $pdo->prepare('DELETE FROM dislikes_thread  WHERE id_thread = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }else{
                $ins = $pdo->prepare('INSERT INTO dislikes_thread (id_thread , id_user)  values (? , ?)  ');
                $ins->execute(array($getid, $getm));
                $del = $pdo->prepare('DELETE FROM likes_thread WHERE id_thread = ? AND id_user = ?');
                $del->execute(array($getid,$getm));
            }
        }
        header('Location: http://localhost/PG3/alpins/views/post?id=' . $getid);
    } else {
        exit('Fatal error');
    }
}
