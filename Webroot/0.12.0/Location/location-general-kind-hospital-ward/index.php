<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.html');
else 
  Redirect('http://fhir.health.gov.il/0.12.0/Location-location-general-kind-hospital-ward.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.