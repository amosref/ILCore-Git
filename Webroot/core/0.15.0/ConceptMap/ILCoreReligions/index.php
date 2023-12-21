<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.html');
else 
  Redirect('http://fhir.health.gov.il/0.15.0/ConceptMap-ILCoreReligions.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
