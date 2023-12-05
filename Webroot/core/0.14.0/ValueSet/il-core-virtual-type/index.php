<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.html');
else 
  Redirect('http://fhir.health.gov.il/0.14.0/ValueSet-il-core-virtual-type.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
