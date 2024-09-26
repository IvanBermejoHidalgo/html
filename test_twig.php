<?php
require_once 'vendor/autoload.php';

/*$loader = new \Twig\Loader\ArrayLoader([
    'header' => '{{ name }}',
    'edad' => '{{age}}',
]);*/

$loader = new \Twig\Loader\FilesystemLoader('templates/');

$twig = new \Twig\Environment($loader);

$data = [
    'title' => 'Currículum-Iván',
    'header' => 'Iván Bermejo Hidalgo',
    'infoper' => 'Información Personal',
    'infos' => [
            ['edad' => 'Edad: 20 años'],
            ['telefono' => 'Tlf: 637115470'],
            ['email' => 'Email: ibermejo@elpuig.xeill.net'],
    ],
    
    'estudios' => 'Educación',
    'trabajo' => 'Experiencia',
    'otras' => 'Otros',
    'educaciones' => [
            ['titulo' => 'Desarrollo de Aplicaciones Web - 2024/2025', 'resumen' => 'Estoy cursado el ciclo de DAW en el instituto Puig Castellar de Santa Coloma de Gramenet.'],
            ['titulo' => 'Desarrollo de Aplicaciones Multiplataforma - 2022/2024', 'resumen' => 'He cursado el ciclo de DAM en el instituto Puig Castellar de Santa Coloma de Gramenet.'],
            ['titulo' => 'Sistemes Microinformàtics i Xarxes - 2020/2022', 'resumen' => 'He cursado el ciclo de SMX en el instituto Puig Castellar de Santa Coloma de Gramenet.'],
    ],
    'experiencias' => [
            ['titulo' => 'Técnico de sistemas informáticos - 6 meses', 'resumen' => 'He realizado las prácticas obligatorias de Desarrollo de Aplicaciones Multiplataforma en el Colegi Les Neus de Santa Coloma de Gramenet.'],
            ['titulo' => 'Técnico informático - 6 meses', 'resumen' => 'He realizado las prácticas obligatorias de Sistemes Microinformàtics i Xarxes en la empresa Life Informática en Barcelona.'],
    ],
    'otros' => [
            ['titulo' => 'Carnet de conducir de coche', 'resumen' => 'Carnet de conducir de tipo B, 2 años de carnet.'],
    ],
];

echo $twig->render('index.html', $data);

//echo $twig->render('header', ['name' => 'Iván Bermejo Hidalgo']);
//echo $twig->render('edad', ['age' => '20']);