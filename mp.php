<?php
    require __DIR__ .'/sdk/vendor/autoload.php';
  $mp = new MP ("TEST-7607476184899787-081409-9c60765a86949f1d211894f990c23316-63529707");

    $payment = $mp->get(
        "/v1/payments/search",
        array(
            "external_reference" => "sergio.a.blanco2010@gmail.com"
        )
    );
?>