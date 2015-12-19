<?php
function curlPost($url, $data =array(), $timeout = 10)
{
    $ssl = substr($url, 0, 8) == "https://" ? TRUE : FALSE;
    $ch = curl_init();
    $opt = array(
            CURLOPT_URL     => $url,
            CURLOPT_POST    => 1,
            CURLOPT_HEADER  => 0,
            CURLOPT_POSTFIELDS      => (array)$data,
            CURLOPT_RETURNTRANSFER  => 1,
            CURLOPT_TIMEOUT         => $timeout,
            );
    if ($ssl)
    {
        $opt[CURLOPT_SSL_VERIFYHOST] = 1;
        $opt[CURLOPT_SSL_VERIFYPEER] = FALSE;
    }
    curl_setopt_array($ch, $opt);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
echo curlPost('https://raw.githubusercontent.com/weisay/theme/master/weisaysimple_latest_version.js');
?>