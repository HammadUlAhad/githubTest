<?php

include_once("IEDR-API/config/ClassConfig.php");

class ClientClassConfig extends ClassConfig {

    protected $configArray = array(
        "ssl_connection" => TRUE,
        "ssl_strong_verify" => TRUE,
        
        "ssl_cert" => "/var/www/futurehosting.ie/web/billing/modules/registrars/iedr/client.crt",
        "ssl_cacert" => "/var/www/futurehosting.ie/web/billing/modules/registrars/iedr/client.pem",

        "schemas_dir" => "/var/www/futurehosting.ie/web/billing/modules/registrars/iedr/schemas",
        "schemas" => array(
            "./ieapi-1.8.xsd",
            "./ieapi-account-1.8.xsd",
            "./ieapicom-1.8.xsd",
            "./ieapi-contact-1.8.xsd",
            "./ieapi-domain-1.8.xsd",
            "./ieapi-registrantTransferBuyRequest-1.8.xsd",
            "./ieapi-registrantTransferSellRequest-1.8.xsd",
            "./ieapi-ticket-1.8.xsd",
            "./secDNS-1.1.xsd"),

        "autologin" => TRUE,
        "cookie_file" => "/tmp/iedrapi.cookie",
        "username" => "AAN489",
        "password" => "t3Yr!T%F3",
        "url" => "https://titan-ote.iedr.ie:700",
        "debug" => FALSE,
        "debugXml" => FALSE,
    );
}

# Added a comment in the end of the file
