            <div>
                
                <h3>Estudiante:Pablo Peñaloza</h3>
                <h3>C.U: 35-1843</h3>
                <h3>Carrera: Ingenieria de Sistemas</h3>
                <h3>Esta es la  <b ><?php 
                  if (isset($_COOKIE["nro_visitas"])) {
                      $nro_visitas = $_COOKIE["nro_visitas"];
                      $nro_visitas++;
                      echo " $nro_visitas  "; 
                  } else {
                 echo $nro_visitas = 1;
                } 
                setcookie("nro_visitas", $nro_visitas, time()+10);
                ?></b>vez que visita</h3>
            </div>
        </div>
