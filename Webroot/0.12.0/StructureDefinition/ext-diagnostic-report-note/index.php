<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.html');
else 
  Redirect('http://fhir.health.gov.il/0.12.0/StructureDefinition-ext-diagnostic-report-note.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.