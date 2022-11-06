<?php
$posicionInicial = array(
    'nivel' => "l1",
    'zona' => "z1"
);
$map = array(
    "l1" => array(
        "z1" => array(
            'vacio' => false,
            'name' => "Zona 1",
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