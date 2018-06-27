<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css_fiche_hiragana_perso.css" rel="stylesheet" type="text/css"/>
        <title>Fiche Perso Hiragana</title>
        <link rel="icon" type="image/png" href="../images/TORII.png" />
    </head>
    <body>
        <table style="width: 100%; margin: auto;">
            <tr>
                <td><a href="tableau_hiragana.php"><img src="../images/TORII_retour.png" alt=""/></a></td>
                <td style="width: 100%;"><h1 style="text-align: center; margin-right: 18%;">Fiche Hiragana Perso</h1></td>
            </tr>
        </table>
        <table style="margin: auto;">
            <tr>
                <td class="img_hiragana">
                    <img src="../images/A-sens.png" alt=""/>
                </td>
            </tr>
            <br><br>
            <tr>
                <td class="fiche_hiragana">
                    Nom de l'Hiragana : A
                </td>
            </tr>
            <tr>
                <td class="fiche_hiragana">
                    Prononciation de l'Hiragana : A
                </td>
            </tr>
            <tr>
                <td class="fiche_hiragana">
                    Moyen mnémotechnique : s'Abriter
                </td>
            </tr>
        </table>
        <?php
        $id = addslashes($_GET["id"]);
        function recup_nom(){
            
        }
        ?>
    </body>
</html>
