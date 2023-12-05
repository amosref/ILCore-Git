<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.html');
else 
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-coverage-class.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
