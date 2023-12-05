<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.html');
else 
  Redirect('http://fhir.health.gov.il/0.14.0/StructureDefinition-ext-event-occurrence-location.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
