<html>
    <head>
        <title>Pokedex</title>
    </head>
    <body>
        <?php
            require ("buscar.html");

            $pokemons=Array('bulbasaur'=>["img/1bulbasaur.png","49","planta / veneno"],
                            'ivysaur'=>["img/2ivysaur.png","62","planta / veneno"],
                            'venusaur'=>["img/3venusaur.png","82","planta / veneno"],
                            'charmander'=>["img/4charmander.png","52","fuego"],
                            'charmeleon'=>["img/5charmeleon.png","64","fuego"],
                            'charizard'=>["img/6charizard.png","84","fuego / volador"],
                            'squirtle'=>["img/7squirtle.png","48","agua"],
                            'wartortle'=>["img/8wartortle.png","63","agua"],
                            'blastoise'=>["img/9blastoise.png","83","agua"],
                            'pidgey'=>["img/16pidgey.png","45","normal / volador"],
                            'pidgeotto'=>["img/17pidgeotto.png","60","normal / volador"],
                            'pidgeot'=>["img/18pidgeot.png","80","normal / volador"],
                            'rattata'=>["img/19rattata.png","56","normal"],
                            'raticate'=>["img/20raticate.png","81","normal"],
                            'pikachu'=>["img/25pikachu.png","55","eléctrico"],
                            'raichu'=>["img/26raichu.png","90","eléctrico"],
                            'psyduck'=>["img/54psyduck.png","52","agua"],
                            'golduck'=>["img/55golduck.png","82","agua"],
                            'abra'=>["img/63abra.png","20","psíquico"],
                            'kadabra'=>["img/64kadabra.png","35","psíquico"],
                            'alakazam'=>["img/65alakazam.png","50","psíquico"],
                            'magmar'=>["img/126magmar.png","95","fuego"],
                            'magikarp'=>["img/129magikarp.png","10","agua"],
                            'gyarados'=>["img/130gyarados.png","125","agua / volador"],
                            'snorlax'=>["img/143snorlax.png","110","normal"],
                            'articuno'=>["img/144articuno.png","85","hielo / volador"],
                            'zapdos'=>["img/145zapdos.png","90","eléctrico / volador"],
                            'moltres'=>["img/146moltres.png","100","fuego / volador"],
                            'mewtwo'=>["img/150mewtwo.png","110","psíquico"]
                        );
      
            echo '<div class="container">';                
            //ksort($pokemons);

            $nombrePokemon = null;
            
            if(isset($_GET["whoisthatpokemon"])){
                $nombrePokemon = strtolower($_GET['whoisthatpokemon']);
            }
            
            if($nombrePokemon == null){
                echo '<table class="table table-bordered text-center" style="background-color:rgba(133,133,133,0.4);" data-aos="fadeIn" data-aos-delay="200">
          <thead class="thead-dark">
            <tr>
            <th scope="col">imagen</th>
            <th scope="col">nombre</th>
            <th scope="col">ataque</th>
            <th scope="col">tipo</th>
          </tr>
        </thead>
        <tbody>';
                foreach($pokemons as $pokemon=>$stats){
                    echo "<tr>";
                    foreach($stats as $i=>$desc){
                        if($i==0){
                            echo '<td class="align-middle"                         
                            data-aos="fade-right"
                            data-aos-offset="-400"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="linear"
                            data-aos-once="true"
                            data-aos-anchor-placement="top-center"><img src = ' . $desc . ' alt="..." style="max-width:6em;"></td>';
                            echo '<td class="align-middle">' . $pokemon. '</td>';
                        } else{
                            echo '<td class="align-middle">' . $desc. '</td>';
                        }
                    }
                    echo "</tr>";
                }
              echo '</tbody>
                </table>';
            } else {
                if(array_key_exists($nombrePokemon, $pokemons)){
                    echo '<table class="table table-bordered text-center" style="background-color:rgba(133,133,133,0.4);" data-aos="fadeIn" data-aos-delay="200">
          <thead class="thead-dark">
            <tr>
            <th scope="col">imagen</th>
            <th scope="col">nombre</th>
            <th scope="col">ataque</th>
            <th scope="col">tipo</th>
          </tr>
        </thead>
        <tbody>
        <tr>';
                    foreach($pokemons[$nombrePokemon] as $i=>$desc){
                        if($i==0){
                            echo '<td class="align-middle"  data-aos="fade-right"
                            data-aos-offset="-400"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="linear"
                            data-aos-once="true"
                            data-aos-anchor-placement="top-center"><img src = ' . $desc . ' alt="..." style="max-width:6em;"></td>';
                            echo '<td class="align-middle">' . $nombrePokemon . '</td>';
                        } else{
                            echo '<td class="align-middle">' . $desc . '</td>';
                        }
                    }
                    echo "</tr>";
                    echo '</tbody>
                    </table>';
                } else{
                   echo '<p class="text-center saw">El pokemon <span class="text-danger">' . $nombrePokemon . "</span> no ha sido encontrado.</p>";
                }
            }
            echo '</div>';
        ?>
        
 
    </body>
</html>
