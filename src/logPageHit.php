<?php
$ref=@$_SERVER[HTTP_REFERER];
$agent=@$_SERVER[HTTP_USER_AGENT];
$ip=@$_SERVER['REMOTE_ADDR'];
$tracking_page_name2 = $_SERVER["SCRIPT_NAME"];
$tracking_page_name = $_SERVER['SERVER_NAME'];
$json = json_decode(get_remote_data("http://www.geoplugin.net/json.gp","ip=:ip"),true);

print $json->geoplugin_city;

if (strlen($ref) == 0) {
    $ref = 'NO REFFERRER';
}
if(strlen($ref) > 2 and !(stristr($ref,"http://www.c2customfurnishings.com"))){ // exclude referrer from your own site.
$strSQL = "INSERT INTO track( ref, agent, ip,tracking_page_code, tracking_page_name) VALUES (:ref,:agent,:ip,:tracking_page_code,:tracking_page_name)";

$sql=$dbo->prepare($strSQL);

$sql->bindParam(':ref',$ref,PDO::PARAM_STR, 250);
$sql->bindParam(':agent',$agent,PDO::PARAM_STR, 250);
$sql->bindParam(':ip',$ip,PDO::PARAM_STR, 20);
$sql->bindParam(':tracking_page_name',$tracking_page_name2,PDO::PARAM_STR, 100);
$sql->bindParam(':tracking_page_code',$tracking_page_name,PDO::PARAM_STR, 100);

$sql->execute();


//See Updates and explanation at: https://github.com/tazotodua/useful-php-scripts/

    function get_remote_data($url, $post_paramtrs = false) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    if ($post_paramtrs) {
        curl_setopt($c, CURLOPT_POST, TRUE);
        curl_setopt($c, CURLOPT_POSTFIELDS, "var1=bla&" . $post_paramtrs);
    } curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:33.0) Gecko/20100101 Firefox/33.0");
    curl_setopt($c, CURLOPT_COOKIE, 'CookieName1=Value;');
    curl_setopt($c, CURLOPT_MAXREDIRS, 10);
    $follow_allowed = ( ini_get('open_basedir') || ini_get('safe_mode')) ? false : true;
    if ($follow_allowed) {
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
    }curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 9);
    curl_setopt($c, CURLOPT_REFERER, $url);
    curl_setopt($c, CURLOPT_TIMEOUT, 60);
    curl_setopt($c, CURLOPT_AUTOREFERER, true);
    curl_setopt($c, CURLOPT_ENCODING, 'gzip,deflate');
    $data = curl_exec($c);
    $status = curl_getinfo($c);
    curl_close($c);
    preg_match('/(http(|s)):\/\/(.*?)\/(.*\/|)/si', $status['url'], $link);
 //   $data = preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/|\/)).*?)(\'|\")/si', '$1=$2' . $link[0] . '$3$4$5', $data);
 //   $data = preg_replace('/(src|href|action)=(\'|\")((?!(http|https|javascript:|\/\/)).*?)(\'|\")/si', '$1=$2' . $link[1] . '://' . $link[3] . '$3$4$5', $data);
    if ($status['http_code'] == 200) {
        return $data;
    } elseif ($status['http_code'] == 301 || $status['http_code'] == 302) {
        if (!$follow_allowed) {
            if (empty($redirURL)) {
                if (!empty($status['redirect_url'])) {
                    $redirURL = $status['redirect_url'];
                }
            } if (empty($redirURL)) {
                preg_match('/(Location:|URI:)(.*?)(\r|\n)/si', $data, $m);
                if (!empty($m[2])) {
                    $redirURL = $m[2];
                }
            } if (empty($redirURL)) {
                preg_match('/href\=\"(.*?)\"(.*?)here\<\/a\>/si', $data, $m);
                if (!empty($m[1])) {
                    $redirURL = $m[1];
                }
            } if (!empty($redirURL)) {
                $t = debug_backtrace();
                return call_user_func($t[0]["function"], trim($redirURL), $post_paramtrs);
            }
        }
    } return "ERRORCODE22 with $url!!<br/>Last status codes<b/>:" . json_encode($status) . "<br/><br/>Last data got<br/>:$data";
}

?>