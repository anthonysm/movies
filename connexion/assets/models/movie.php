<?php        
    function getMovies($pdo, $min,$max){
    $uri = $_SERVER['REQUEST_URI'];
    $parts_uri = explode("/", $uri);
    $total_id = $pdo->query('SELECT COUNT(*) FROM film');
    $page_actuel = intval($parts_uri[3]);
    $min_min = $min+($max*($page_actuel-1));
    
    if(isset($parts_uri[3]))
    $titre = $pdo->query("SELECT * FROM film LIMIT $max OFFSET $min_min ");
        {
            foreach ($total_id as $total) 
            {
                $nb_page = ceil($total[0] /$max);
                for ($i = 0;$i <= $nb_page;$i++)
                {
                    if($page_actuel == $i)
                    {      
                        echo'<table>';
                        while($donnee = $titre ->fetch())
                        {
                            echo '<tr class="col-lg-24 text-center films">';
                            echo '<th class="Titre_film col-lg-6">'.$donnee['titre'].'</th>';
                            echo '<th class="année">'.$donnee['annee'].'</th>';
                            echo '<th class="realisateur">'.$donnee['realisateur'].'</th>';
                            echo '<th class="genre">'.$donnee['genre'].'</th>';
                            echo '<th class="genre"><a href="/cinema/film/'.$donnee['id'].'">Plus de detail</th>';
                            echo '</tr>';
                        }
                        echo'<ul>';
                        if ($page_actuel == 1)
                            {
                                echo'<li><a href=""> << </a></li>';
                            }
                        else{
                            echo'<li><a href="/cinema/home/'.($page_actuel-1).'"> << </a></li>';
                            }
                            for($p =1;$p < $nb_page+1;$p++)
                            {
                                if($p == $page_actuel){
                                echo'<li><a href="/cinema/home/'.($p).'">Page '.$p.'Actif</a></li>';    
                                }
                                else
                                {
                                echo'<li><a href="/cinema/home/'.($p).'">Page '.$p.'</a></li>';
                                }
                                    
                            }
                            if ($page_actuel == $nb_page)
                            {
                                echo'<li><a href=""> >> </a></li>';
                            }
                            else
                            {
                                echo'<li><a href="/cinema/home/'.($page_actuel+1).'" > >> </a></li>';
                            }
                            echo'</ul>';
                    }
                }
            }
        
        }
    };
?>