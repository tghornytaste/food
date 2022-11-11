<?php
//echo 'ni mini';
function sendRequest($url,$data){
    //initiate CURL.
    $ch = curl_init($url);

    //tell CURL that we want to send a POST request.
    curl_setopt($ch, CURLOPT_POST, 1);

    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    //set the content type tp application/json.
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('content-type: application/json'));

    //dont return result to screen, store in a variable.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //EXECUTE the request.
    $result= curl_exec($ch);
    return $result;

}
?>