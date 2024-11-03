<?php
    class apiPokemon
    {
        public $datos;

        function __construct($pokemon)
        {
            //Mostrar el spinner 
           document.getElementById('spinner').style.display = 'block'; 
            $api = curl_init("https://pokeapi.co/api/v2/pokemon/".$pokemon);
            curl_setopt($api,CURLOPT_RETURNTRANSFER,true);
            $this->datos = json_decode(curl_exec($api));
            curl_close($api);
            //ocultar spinner
              document.getElementById('spinner').style.display = 'none'; 

        } 
    }
?>
