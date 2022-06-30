<?php
$title = 'Убежище странных попугов';
$email = 'parrots-asylum@gmail.com';
$images = [ 
    1 => 'img/screaming_parrot.jpg',
    2 => 'img/builder_parrot.jpg',
    3 => 'img/it_parrot.jpg',
];
$phones = [ 
    1 => 'Just scream profoundly, we\'ll find you',
    2 => 'Same as buddy up here',
    3 => 'What\'s a phone?',
];
$parrots = [
    1 => '"Попуг информатор"',
    2 => '"Попуг строитель"',
    3 => '"Попуг программист"',
];

$parrots_status = [
    1 => 'ОрётКакБешенныйПриВидеЛюдей',
    2 => 'BONK-BONK',
    3 => 'df20ede520eaf0e0eb20f1e0e9f220f320eaeef2e021'
];

$current_leader = rand(1, 3);


require('components/header-mini.php');
require('components/about.php');
require('components/status.php');
//require('components/photos.php');
require('components/news.php');
require('components/quotes.php');
require('components/contacts.php');
require('components/footer-logo.php');
