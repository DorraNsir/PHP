<form action="modif1.php" method="post">
    <table>
        <tr>
            <td>
                <h3>Nom</h3>
            </td>
            <td>
                <input type="text" name="nom" value="<?php echo $l['nom']; ?>">>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Prenom</h3>
            </td>
            <td>
                <input type="text" name="prenom" value="<?php echo $l['prenom']; ?>">>
            </td>
        </tr>
        <tr>
            <td>
                <h3>id</h3>
            </td>
            <td>
                <input type="text" name="id" value="<?php echo $l['id']; ?>">>
            </td>
        </tr>
    </table>
</form>
