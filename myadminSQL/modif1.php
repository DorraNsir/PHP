<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$id=$_POST['id'];
$cx=new mysqli("localhost","root","","dsi22");
$req="UPDATE etudiant
SET nom= '$nom', prenom= '$prenom'
WHERE id = $id;";
$res=$cx->query($req);
$l=$res->fetch_array();
if($res){
    echo "ok";
}
else{
    echo "problem";
}
?>