<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.html');
else 
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-il-core-medication-statement-category.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.