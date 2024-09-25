<?php
// percobaan 1
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama"=> "Berita",
        "subMenu"=> [
            [
                "nama" => "Wisata",
                "subMenu"=> [
                    [
                        "nama"=> "Pantai"
                    ],
                    [
                        "nama"=> "Gunung"
                    ]
                ]
            ],
            [
                "nama"=> "Kuliner"
            ],
            [
                "nama"=> "Hiburan"
            ]
        ]
    ],
    [
        "nama"=> "Tentang"
    ],
    [
        "nama"=> "Kontak"
    ],
];


//percobaan 2
function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";

        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);
?>