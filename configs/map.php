<?php 
    $map = array( //array de arrays, cada l es una altura del mapa (eje y) y cada z es una zona dentro de esa altura (eje x)
        "l1" => array(
            "z1" => array(
                'vacio' => false, //si es true, no hay nada en esa zona, es vecesario para colocar bien la posicion x
                'name' => "sala Initia", //nombre de la sala
                'descripcion' => "sala de inicio", //descripcion de la sala
                'items' => array( //array de items que hay en la sala
                    new arma("pistola rota", "usar solo en caso de emergencia, puede explotar", "arma", "mata al enemigo si está cerca con un 50% de probabilidad de acertar", 1, 12, 1, "imgs/items/pistola_rota.png", 50),
                ),
                'enemigos' => array(// array de enemigos que hay en la sala
                ),
                'puertas' => array( //array de puertas que hay en la sala, true si hay puerta, false si no, recordar que la piesta de la habitacion contigua tambien debe estar abierta
                    "N" => false,
                    "S" => false,
                    "E" => false,
                    "W" => true,
                ),
            ),
            "z2" => array(
                'vacio' => false,
                'name' => "Zona 2",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => true,
                    "W" => true,
                ),
            ),
            "z3" => array(
                'vacio' => false,
                'name' => "Zona 3",
                'descripcion' => "loremp ipsum",
                'items' => array(
                    new comida("pildora extraña","parece que te puede curar algunos daños","comida","cura 10 de vida",1,4,101,"imgs\items\pildora_extrana.png",2),
                ),
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => true,
                    "E" => true,
                    "W" => false,
                ),
            ),
        ),
        "l2" => array(
            "z1" => array(
                'vacio' => true,
            ),
            "z2" => array(
                'vacio' => false,
                'name' => "Zona 4",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => true,
                    "E" => false,
                    "W" => true,
                ),
            ),
            "z3" => array(
                'vacio' => false,
                'name' => "Zona 5",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => true,
                    "S" => false,
                    "E" => true,
                    "W" => false,
                ),
            ),
        ),
        "l3" => array(
            "z1" => array(
                "vacio" => true,
            ),
            "z2" => array(
                'vacio' => false,
                'name' => "Zona 6",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => true,
                    "S" => true,
                    "E" => false,
                    "W" => false,
                ),
            ),
        ),
        "l4" => array(
            "z1" => array(
                "vacio" => false,
                'name' => "Zona 7",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => false,
                    "W" => true,
                ),
            ),
            "z2" => array(
                'vacio' => false,
                'name' => "Zona 8",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => true,
                    "S" => false,
                    "E" => true,
                    "W" => true,
                ),
            ),
            "z3" => array(
                'vacio' => false,
                'name' => "Zona 9",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => true,
                    "W" => true,
                ),
            ),
            "z4" => array(
                'vacio' => false,
                'name' => "Zona 10",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => true,
                    "E" => true,
                    "W" => false,
                ),
            ),
        ),
        "l5" => array(
            "z1" => array(
                'vacio' => false,
                'name' => "Zona 11",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => false,
                    "W" => true,
                ),
            ),
            "z2" => array(
                'vacio' => false,
                'name' => "Zona 12",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => true,
                    "W" => true,
                ),
            ),
            "z3" => array(
                'vacio' => false,
                'name' => "Zona 13",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => false,
                    "S" => false,
                    "E" => true,
                    "W" => true,
                ),
            ),
            "z4" => array(
                'vacio' => false,
                'name' => "Zona 14",
                'descripcion' => "loremp ipsum",
                'enemigos' => array(
                ),
                'puertas' => array(
                    "N" => true,
                    "S" => false,
                    "E" => true,
                    "W" => false,
                ),
            ),
        ),
    );
?>