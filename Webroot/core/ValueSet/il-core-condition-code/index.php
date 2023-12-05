<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.html');
else 
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-condition-code.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
