<?php
error_reporting(0);
session_start();
$ktfile = file_exists("TTC.txt");
if ($ktfile == 1){
  unlink('TTC.txt');
}
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
/***[ Đánh Dấu Bản Quyền ]***/
$daucau1= $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$daucau2= $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1500;
	$_SESSION['delay'] = 2000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
$banner = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL TTC TOKEN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}

$_SESSION['fck'] = file_exists("TTC.txt");
if ($_SESSION['fck'] == '1'){
  unlink("TTC.txt");
}
$_SESSION['check'] = file_exists("logttc.txt");
if ($_SESSION['check'] =='1'){
echo  $daucau1."Ấn ".$yellow."Enter".$green." để chạy tài khoản cũ, nhập ".$yellow."n".$green." để nhập tài khoản mới: $yellow ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='n' and $_SESSION['nhap'] != 'N' and $_SESSION['nhap'] !=''){
echo $daucau1.$red."Sai Định Dạng\n";
exit;
}
if ($_SESSION['nhap'] =='n' or $_SESSION['nhap'] =='N'){
$my = fopen("logttc.txt", "w+");
echo $daucau2."Nhập Tài Khoản TTC:\033[0m ";
$username =trim(fgets(STDIN));
echo $daucau2."Nhập Mật Khẩu TTC:\033[0m ";
$password =trim(fgets(STDIN));
$arr = array("username"=> $username, "password"=> $password);
fwrite($my,json_encode($arr));
    $my = file("logttc.txt");
$bb = file_get_contents('logttc.txt');
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logttc.txt");
$cc =json_decode($bb);
$_SESSION['username']= $cc->{"username"};
$_SESSION['password']= $cc->{"password"};
}
} else {
$my = fopen("logttc.txt","w+");
echo $daucau2."\033[1;32mNhập Tài Khoản TTC: \033[1;33m ";
$_SESSION["username"]=trim(fgets(STDIN));
echo $daucau2."\033[1;32mNhập Mật Khẩu TTC: \033[1;33m";
$_SESSION['password']=trim(fgets(STDIN));
$arr = array("username"=> $_SESSION["username"], "password"=> $_SESSION['password']);
fwrite($my,json_encode($arr));
}
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$source = getcookiettc($user,$pass,$useragent);
$sou= strlen($source);
if ($sou < 10 ){
  echo $daucau2."\033[1;32mĐăng Nhập Thành Công\033[0m";
  // get xu
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TTC.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xuhientai = $sd["1"];
}else{
	echo $daucau1."Sai Tài Khoản Hoặc Mật Khẩu TTC\n";
	exit; 
}
usleep(100000);
do {
@system('clear');

@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$khocookie = [];
echo $daucau1."\033[1;32mNhập Token FB muốn dừng ấn\033[1;33m Enter \n";
for($a = 1; $a < 999999;$a++){
echo $daucau2."\033[1;32mNhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
}
            
$demcki=count($khocookie);
            
echo $daucau2."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\033[0m\n";
sleep(1);
} while (count($khocookie)==0);

//$thongtin

system('clear');

echo $logo;
echo $thanhngang;

echo $daucau1."\033[1;32mNhập ".$do."[".$vang."1".$do."]".$luc." Để Chọn Nhiệm Vụ Like\n";
echo $daucau2."\033[1;32mNhập ".$do."[".$vang."2".$do."]".$luc." Để Chọn Nhiệm Vụ Follow\n";

echo $daucau2."\033[1;32mNhập ".$do."[".$vang."3".$do."]".$luc." Để Chọn Nhiệm Vụ Comment\n";

echo $daucau2."\033[1;32mNhập ".$do."[".$vang."4".$do."]".$luc." Để Chọn Nhiệm Vụ Share\n";

echo $daucau2."\033[1;32mMuốn Chọn Random Thì Ghép Số Lại\n";
echo $daucau2."\033[1;32mVui Lòng Chọn Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
echo $daucau2."\033[1;32mNhập Thời Gian Min: $vang";
$thoigianmin = trim(fgets(STDIN));
echo $daucau2."\033[1;32mNhập Thời Gian Max: $vang";
$thoigianmax = trim(fgets(STDIN));
echo $daucau2."\033[1;32mSau Bao Nhiêu Nhiệm Vụ Thì Dừng Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $daucau2."\033[1;32mSau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $daucau2."\033[1;32mChuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $daucau2."\033[1;32mChạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));
sleep(1);
system('clear');

@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
echo $daucau1."Tài Khoản: ".$vang.$user."\n";
echo $daucau2."Xu Hiện Tại: ".$pink.$xuhientai."\n";
echo "\e[1;37m".str_repeat('= ', 35)."\n";
$loilike = [];
$loisub = [];
$loicmt = [];
$loishare = [];
$xu = $xuhientai;
while(true){
  if(count($khocookie) == 0){
    echo $daucau2."\033[1;32mNhập Token Facebook.$yellow Dừng Thì Bấm Xuống Hàng Nha\n";
for($a = 1; $a < 999999;$a++){
echo $daucau2."\033[1;32mNhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
$demcki=count($khocookie);
echo $daucau2."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
  }
  $themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themck == 1){ break; }
 $access_token = $khocookie[$xz];

if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
    echo "\r";
    echo "                                                      \r";
    echo $daucau2." ".$red."Token Die\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$h = datnick($idfb,$useragent);
if ($h == '1'){
	echo $vang."==========================================================\n";
    echo $daucau2."Đang Cấu Hình $vang".$tenfb.$luc." ID $vang".$idfb."\n";
    echo $vang."==========================================================\n";
} else {
    echo $daucau2." ".$red."Cấu Hình Thất Bại Có Thể Do Bạn Chưa Thêm $tenfb Vào Cấu Hình\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = getlike($useragent);
            if (count($listlike) !== 0) {
                break;
            }}
          
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = getnv('subcheo',$useragent);
            if (count($listsub) !== 0) {
                break;
            }
        }
      
    }
   
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = getnv('cmtcheo',$useragent);
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //share
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = getnv('sharecheo',$useragent);
            if (count($listshare) > 0) {
                break;
            }}
    }

    for ($lap = 0; $lap < 30; $lap++) {
        // like
      
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["idpost"];
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}               
if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo $daucau2." \033[1;91mĐợi 15s Check Xem Có Block Ảo Không\r";
sleep(15);
              $tai = like($access_token,'10103832396388711', $cookie);
              if ($tai -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                $nhanlike = nhantienlike($idlike,$useragent);
                $s= $nhanlike[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
                    $dem++;
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
  echo $daucau2."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
        //follow
        if ($listsub != NULL) {
            $idsub = $listsub[$lap]["idpost"];
            if ($idsub != '') {
                $g = follow($access_token, $idsub, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}                
      if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo $daucau2." \033[1;91mĐợi 15s Check Xem Có Block Ảo Không\r";
sleep(15);
              $tai = follow($access_token,'4', $cookie);
              if ($tai -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhansub = traluong('sub',$idsub);
                $s= $nhansub[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    
	$dungtool = 999999;
  echo $daucau2."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
  exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
      
  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["idpost"];
                if ($id != '') {
                    $g = share($access_token, $id);
if ($dem % 25 == 0){
  $xu = getxu();
}               
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo $daucau2." \033[1;91mĐợi 15s Check Xem Có Block Ảo Không\r";
sleep(15);
              $tai = share($access_token,'10103832396388711');
              if ($tai -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhanshare = traluong('share',$id);
                $s= $nhanshare[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                            $xujob = 600;
                            $dem++;
                            hoanthanh($dem, 'SHARE', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
	$dungtool = 999999;
    echo $daucau2."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                            if($dem % $doinick == 0){
                      if (count($khocookie)>1){       
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
                }}
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["idpost"];
            $ms = json_decode($listcmt[$lap]["nd"]);
            $msg = $ms[0];
            if ($idcmt != '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
if ($dem % 25 == 0){
  $xu = getxu();
}                
              if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo $daucau2." \033[1;91mĐợi 15s Check Xem Có Block Ảo Không\r";
sleep(15);
              $tai = cmt($access_token,'10103832396388711', $cookie,'ttt original');
              if ($tai -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $daucau2." \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhancmt = traluong('cmt',$idcmt);
                $s= $nhancmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
    echo $daucau2."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }
            }}
     
       
    
    }
}}}

function follow($access_token, $idsub, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}


function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
  echo "\r";
  echo "                                                      \r";
  $t = random_int(31,37);
  $mau = "\e[1;$t"."m";
  $depid = strlen($id);
    if($depid == 17)
    {
    	$khoangtrang = "";
    }elseif($depid == 16)
    {
    	$khoangtrang = " ";
    }elseif($depid == 15)
    {
    	$khoangtrang = "  ";
    }elseif($depid == 14)
    {
    	$khoangtrang = "   ";
    }elseif($depid == 13)
    {
    	$khoangtrang = "    ";
    }elseif($depid == 12)
    {
    	$khoangtrang = "     ";
    }else{
    	$id = "1023427565103949";
    }
    $a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m • \033[1;96m".date("H:i")."\033[1;91m •\033[1;32m $type\033[1;91m • \033[1;97m".$id.$khoangtrang."\033[1;91m •\033[1;32m +".$xujob."\033[1;91m • \033[1;93m".$xu." xu\e[0m\n";
    
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(6000);
    }
}
function delay($delay) {
    $time = $delay; 
    for ( $x = $time; $x--; $x ) {
       echo "\e[1;36m● Vui lòng chờ <~> \e[1;37m〘\e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■\e[1;37m〙".$x."\e[1;34m giây"; 
usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;34m● Vui lòng chờ <~> \e[1;37m〘\e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■\e[1;37m〙".$x."\e[1;31m giây"; 
usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;33m● Vui lòng chờ <~> \e[1;37m〘\e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■\e[1;37m〙".$x."\e[1;32m giây"; 
usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;31m● Vui lòng chờ <~> \e[1;37m〘\e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉\e[1;37m〙".$x."\e[1;36m giây"; 
usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;36m● Vui lòng chờ <~> \e[1;37m〘\e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■\e[1;37m〙".$x."\e[1;34m giây"; 
usleep(180000); 
echo "\r"; 
echo " \r"; 
      
}}

function getcookiettc($user,$pass,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TTC.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('username' => $user,'password' => $pass,'submit' => ' ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
$source=curl_exec($ch);
curl_close($ch);
return $source;
}
function datnick($idfb,$useragent){
$url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
$header = array(
  "Host: tuongtaccheo.com",
  "accept: */*",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "origin: https://tuongtaccheo.com",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://tuongtaccheo.com/cauhinh/",
);
  $data = 'iddat%5B%5D='.$idfb."&loai=fb";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PORT, "443");
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_ENCODING, "");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "TTC.txt");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $h = curl_exec($ch);
  curl_close($ch);
  return $h;
}
function getlike($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function nhantienlike($id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"TTC.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function getxu(){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "TTC.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "TTC.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function traluong($loai,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/$loai"."cheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/$loai"."cheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TTC.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function delay2($time){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $time;$j> 0;$j--){
    echo "\r";
    echo "                                                      \r";
    echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
      
           }
  echo "\r";
  echo "                                                      \r";
}