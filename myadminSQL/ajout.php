<?php
$id=$_POST[ 'id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cx=new mysqli("localhost","root","","dsi22");
$req="insert into etudiant values($id,'$nom','$prenom')";
$res=$cx->query($req);
if($res){
    echo "ok";
}
else{
    echo "problem";
}

?>