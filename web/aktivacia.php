<?php
// Táto stránka pracuje s údajmi - beží len na arxonlabs.eu.
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
$q = $_SERVER['QUERY_STRING'] ?? '';
header('Location: ' . main_site() . '/aktivacia.php' . ($q !== '' ? '?' . $q : ''), true, 302);
exit;
