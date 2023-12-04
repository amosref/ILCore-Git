<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.html');
else 
  Redirect('http://fhir.health.gov.il/0.12.0/ValueSet-icd9-cm-procedures.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
