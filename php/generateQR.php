<?php
include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
$lien='https://www.developandgo.fr'; // Vous pouvez modifier le lien selon vos besoins
QRcode::png($lien, 'image-qrcode.png'); // On crée notre QR Code

QRcode::png($lien, 'image-qrcode10.png', QR_ECLEVEL_L, 10); // On crée notre QR Code avec un niveau de correction L et une taille de 3


?>