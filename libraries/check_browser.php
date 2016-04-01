<?
//Configuration
global $userBrowser;
global $userAccept;
 
 
//Mang xac dinh cac thiet bi di dong
$mobiidentity = array('wapbrowser','up.browser','up/4','mib','cellphone','go.web',
                     'nokia','panasonic','wap','wml-browser','wml','samsung'
                     );
 
//Mang xac dinh trinh duyet web thong thuong
$pcidentity = array(
        'mozilla','gecko','opera','omniweb','msie','konqueror','safari',
        'netpositive' ,'lynx' ,'elinks' ,'links' ,'w3m' ,'webtv' ,'amaya' ,
        'dillo' ,'ibrowse' ,'icab' ,'crazy browser' ,'internet explorer'
        );
 
$pspidentity= array('PlayStation Portable');
$iPhoneidentity= array('iphone');
 
 
$linkformobile = base_url();
$linkforweb = "m.".base_url();
 
// chuyen AGENT ve lower case
$userBrowser = strtolower($_SERVER['HTTP_USER_AGENT']); 
// chuyen HTTP_ACCEPT ve lower case
$userAccept= strtolower($_SERVER['HTTP_ACCEPT']);
 
 
if (stristr($userAccept,'wml')) {
    $driver = "WML";    
}else{
    //check cho thiet bi di dong thong thuong
    if(check_identity($userBrowser, $mobiidentity))
        $driver = "WML";
    elseif(check_identity($userBrowser, $pcidentity))
        $driver = "PC";
    elseif(check_identity($userBrowser, $pspidentity))
        $driver = "WML";// Co the define lai 1 gia tri khac de sau nay xu ly
    elseif(check_identity($userBrowser, $iPhoneidentity))
        $driver = "WML";// Co the define lai 1 gia tri khac de sau nay xu ly
    else //Khong tim thay thi mac dinh la thiet bi di dong luon ^_^
        $driver = "WML";
}
 
//Ok ! Sau khi xac dinh thiet bi xong roi thi redirect ve cho thich hop cua no
 
switch ($driver){
  case 'PC':
    header("Location: ".$linkforweb);
    exit;
  case 'WML':
    header("Location: ".$linkformobile);
  exit;
  }
 
 
function check_identity($userBrowser, $identity){
    foreach($identity as $value){
        if(stristr($userBrowser, $value)){
            //Tim thay browser
            return true;
        }
    }
    //Khong tim thay
    return false;
}
?>