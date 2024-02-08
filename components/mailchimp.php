<?php


$url = "https://many.us21.list-manage.com/subscribe/post?u=0d4827fc05fe0615efecb2129&amp;id=6e7bf19a44&amp;f_id=007ef5e6f0";
// $url = "https://google.com";

$data = array('EMAIL' => 'aaa@test.com');

$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded",
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
// $resp = file_get_contents($url, false, $context);
try {
    // file_get_contents('www.google.com');
    $resp = file_get_contents($url);
    var_dump($resp);
}
catch (Exception $e) {
    echo $e->getMessage();
}



// EMAIL=&b_0d4827fc05fe0615efecb2129_6e7bf19a44=

// $url = 'https://many.us21.list-manage.com/subscribe/post?u=0d4827fc05fe0615efecb2129&amp;id=6e7bf19a44&amp;f_id=007ef5e6f0';
// $data = ['EMAIL' => 'test@test.com', 'b_0d4827fc05fe0615efecb2129_6e7bf19a44' => ''];


// initiate the curl request
// $request = curl_init('');

// curl_setopt($request, CURLOPT_URL, $url);
// curl_setopt($request, CURLOPT_POST, 1);
// curl_setopt($request, CURLOPT_POSTFIELDS, "EMAIL=test@test.com");

// // catch the response
// curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($request);

// curl_close ($request);

// var_dump ($response);

// do processing for the $response




// use key 'http' even if you send the request to https://...
// $options = [
//     'http' => [
//         'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method' => 'POST',
//         'content' => http_build_query($data),
//     ],
// ];

// $context = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === false) {
//     echo 'fail';
//     /* Handle error */
// }

// var_dump($result);

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo json_encode($arr);
?>