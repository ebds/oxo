<?php
    function httpGet($url, array $properties = array()) {
        $header = array();
        foreach ($properties as $key => $value) {
            array_push($header, $key . ": " . $value);
        }
        $curl = curl_init();

        //WARNING: following two lines would prevent curl from detecting 'man in the middle' attacks
        // To make this save please store the DDB certificate locally! Something like:
        // curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, true);
        // curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, true);
        // curl_setopt ($curl, CURLOPT_CAINFO, "pathto/api.deutsche-digitale-bibliothek.de.pem");
        curl_setopt ($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        if(curl_getinfo($curl, CURLINFO_HTTP_CODE) != 200) {
            trigger_error(curl_error($curl));
        }
        curl_close($curl);
        return $result;
    }
    $item = 'EQ2P2QBDLNUJQVLAR3I2CUGZ5IEW4LEF'; // SNES
     // URL of DDB server with dataset ID and requested method
    $url = "https://api.deutsche-digitale-bibliothek.de/items/".$item."/view";
    $key = "HV8bs9np4UbHzBrwoNvAI8KqqjmTpfatPVTQC6h3kt5CouQyL2w1433365190985 ";

    // get XML data via HTTP request header authentication
    $httpXmlResult = httpGet($url,
            array("Authorization" => "OAuth oauth_consumer_key=\"" . $key . "\"",
                "Accept" => "application/xml"));
    //echo htmlentities($httpXmlResult, ENT_QUOTES, "UTF-8") . "\n";

    // get JSON data via HTTP request header authentication
    $httpJsonResult = httpGet($url,
            array("Authorization" => "OAuth oauth_consumer_key=\"" . $key . "\"",
                "Accept" => "application/json"));
    //echo htmlentities($httpJsonResult, ENT_QUOTES, "UTF-8") . "\n";

    // get JSON data via query parameter authentication
    // remember: use URL encoded Strings online -> urlencode(s)
    $queryJsonURL = $url . "?oauth_consumer_key=" . urlencode($key);
    $queryJsonResult = httpGet($queryJsonURL);
    $entityResult =  htmlentities($queryJsonResult, ENT_QUOTES, "UTF-8") . "\n";
?>
