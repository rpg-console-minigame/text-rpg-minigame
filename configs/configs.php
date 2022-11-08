<?php
include_once 'models\items.php';
$posicionInicial = array(
    'nivel' => "l1",
    'zona' => "z1"
);
$map = array(
    "l1" => array(
        "z1" => array(
            'vacio' => false,
            'name' => "sala Initia",
            'descripcion' => "sala de inicio",
            'items' => array(
                new arma(
                    'pistola rota',
                    'puede utilizarse como último recurso, puede explotar en las manos',
                    'arma de fuego',
                    'ataca a distancia con una probabilidad de acertar del 50% en distancias cortas',
                    1,10,1,5,
                    'imgs\items\1.png'
                ),
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