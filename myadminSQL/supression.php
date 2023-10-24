<?php
$id=$_POST['id'];
$cx=new mysqli("localhost","root","","dsi22");
$req="DELETE FROM etudiant WHERE id = $id";
$res=$cx->query($req);

if($res){
    echo "ok";
}
else{
    echo "problem";
}

?>