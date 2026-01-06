<?php
require 'Modele.php';   // accès BD
try { 
  $billets = getBillets();   
  require 'vueAccueil.php'; 
} 
catch 
(Exception $e) {  
  $msgErreur = $e->getMessage(); 
  require 'vueErreur.php'; 
}
