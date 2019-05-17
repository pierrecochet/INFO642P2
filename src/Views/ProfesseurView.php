<?php

namespace App\Views;

class ProfesseurView{

    static function display()
    {
        return '<!DOCTYPE html>

                <html lang="en" dir="ltr">
                <head>
                    <meta charset="utf-8">
                    <title>Demandes</title>
                    <link rel="stylesheet" href="styleProfesseur.css">
                </head>
                
                <body>
                    <div class="mainSection">
                        <h1>Liste des demandes</h1>
                
                        <TABLE BORDER=1> 
                        <TR> 
                        <TH> Formation </TH> 
                        <TH> Prénom </TH> 
                        <TH> Nom </TH> 
                        <TH> Description </TH> 
                        <TH> Etat </TH>
                        <TH> Intervenant </TH> 
                        <TH> Valider </TH>
                        </TR> 
                        <TR> 
                        <TD> MM </TD> 
                        <TD> Élise </TD> 
                        <TD> Dard </TD> 
                        <TD> Salut Pierre, ça va ? <3 </TD> 
                        <TD> en cours </TD> 
                        <td> 
                            <select>
                                <option value="volvo">Ça va bien et toi ?</option>
                                <option value="saab">t\'es qui ?</option>
                                <option value="opel">Je t\'aime</option>
                                <option value="audi">epouse moi</option>
                            </select>
                        </td>
                        <TH> <button>Envoyer</button> </TH>
                        </TR> 
                        </TABLE>
                      
                    </div>
                </body>
                </html>';
    }
}

