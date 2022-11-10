<?php 
    $map = array(
        "l1" => array(
            "z1" => array(
                'vacio' => false,
                'name' => "sala Initia",
                'descripcion' => "sala de inicio",
                'items' => array(new arma("pistola rota", "usar solo en caso de emergencia, puede explotar", "arma", "mata al enemigo si está cerca con un 50% de probabilidad de acertar", 1, 12, 1, "imgs/items/1.png", 10),
                ),
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