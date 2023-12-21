<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.html');
else 
  Redirect('http://fhir.health.gov.il/0.15.0/ValueSet-practitioner-advanced-course-moh.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
