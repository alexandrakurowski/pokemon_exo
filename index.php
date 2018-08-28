<?php
ini_set('display_errors',1); // AAFFICHER SUR CHAQUE PAGE php=MESSAGE ERREUR
?>
<?php
require("Pokemon.class.php"); //lie la page creation de classe
?>
<?php
// Creation de l' OBJET unique avec les param de la classe Pokemon
$marisson = new Pokemon('Marisson', 'Plante','60','Fouet Liane', 'Canon Graine', 'Feu','Energie');
print_r($marisson); 
/* affiche : Pokemon Object ( [nombase] => Marisson [type] => plante [point_de_vie] => 60 [att1] => Fouet Liane [att2] => Canon Graine [faiblesse] => Feu [retraite] => Energie ) */

$grenousse = new Pokemon ('Grenousse', 'Eau',60, 'EcrasFace','Goutte a Goutte','Plante', 'Energie');
print_r($grenousse);

$feunnec = new pokemon ('Feunnec', 'Feu', 60, 'Griffe', 'Charbon Mutant', 'Eau', 'Energie');
print_r($feunnec); 



/*tab houssine

$img = "<img src='marisson.jpg'>  ";
$marisson = new Pokemon ('Marisson', 'Plante', 'Base', 60,$img, 10, 20);

echo '<center>
		<table class="table">
           <thead>
               <tr>
                  <th >
                      <h4>'.$marisson->nom_pokemon.'</h4>
                   </th>
                   <th>
                      <h4>'.$marisson->type_pokemon.'</h4>
                   </th>
                   <th>
                      <h4 style="color: red;">pv > '.$marisson->PV_pokemon.'</h4>
                   </th>
               </tr>
           </thead>

            <tbody>
               <tr>
                  <td>    
                      '.$marisson->image_carte.'
                  </td>
               </tr>
            </tbody>

            <tbody>
               <tr>
                  <td>
                     <h4>Fouet Lianes 10</h4>
                      <h4>Canon Graine 20</h4>
                  </td>
               </tr>
            </tbody>
        </table>
    </center>';
*/

?>
