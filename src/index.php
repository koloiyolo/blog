<?php
include('navbar/navbar.html');
$planet = 'mercury';
include('planets/planet.php');
if (isset($_GET['planet'])) {
    $planet = $_GET['planet'];
    $planet = createPlanet('data/planets.json', $planet);
    include('planets/view.php');
    include('comments/comments.php');
}else if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        include('actions/login/form.php');
    } else if ( $_GET['action'] == 'register'){
        include('actions/register/form.php');
    } else if ( $_GET['action'] == 'game'){
        include('actions/game/form.php');
    }
} else {
    $planet = createPlanet('data/planets.json', $planet);
include('planets/view.php');
include('comments/comments.php');
}
?>