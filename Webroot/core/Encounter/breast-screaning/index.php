<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.html');
else 
  Redirect('http://fhir.health.gov.il/0.14.0/Encounter-breast-screaning.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.