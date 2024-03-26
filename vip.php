error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
//anorin
$luc = "\033[0;37m";
$do="\033[1;91m";
$vang="\033[1;93m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;32m";
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
$daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m";
$daucau1 = "\n\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m";
$dodai = strlen($keyfree);
if($dodai == 21){
	$khoangtrang = " ";
	}
if($dodai == 20){
	$khoangtrang = "  ";
	}
if($dodai == 19){
	$khoangtrang = "   ";
	}
if($dodai == 18){
	$khoangtrang = "    ";
	}
if($dodai == 17){
	$khoangtrang = "     ";
	}
if($dodai == 16){
	$khoangtrang = "      ";
	}
if($dodai == 15){
	$khoangtrang = "       ";
	}
if($dodai == 14){
	$khoangtrang = "        ";
	}
if($dodai == 13){
	$khoangtrang = "         ";
	}
if($dodai == 12){
	$khoangtrang = "          ";
	}
if($dodai == 0){
	$khoangtrang = "                      ";
	}
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$thanh_xau= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_dep= $do."[".$luc."●".$do."] ".$trang."=> ";
$An_Orin= $do."[".$luc."●".$do."] ".$trang."=> ";
$thanh_xau= $trang."".$luc."[".$luc."●".$luc."] ".$trang."➩ ";
$thanh_dep= $trang."".$luc."[".$luc."✓".$luc."] ";
$thanh_dac_biet= $trang."➩ ";
//thilyquan
$green = "\033[0;37m";
$white = "\033[0;33m";
$pink="\e[1;35m";
$maufulldo= "\e[1;47;31m";
$ngblack="\033[40m";
$do1="\033[1;91m";
$trang1="\033[1;97m";
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";
$redb="\033[1;31m";
$green="\033[0;32m";
$yellow="\033[1;33m";
$cam="\033[0;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[0;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$baotri = $do." (Bảo trì)";
$thanh_xau= $do."[".$luc."ꗾ\033[1;31m] \033[1;37m=> ";
$thanh_dep= $do."[".$luc."ꗾ\033[1;31m] \033[1;37m=> ";
$khoangcach="\n";
//qtv5

$today = date("d/m/Y");
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[1;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblueb="\033[1;36m";
$res="\033[0m";
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$Bmg="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lmg="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$mtool="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$red="\033[1;31m";
$white= "\033[1;37m";
$whiteb= "\033[1;37m";
$pmtol="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$cam="\033[1;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[1;34m";
$lam="\033[1;34m";
$tim="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$BBlack="\033[1;30m";      
$BRed="\033[1;31m";
$BGreen="\033[1;32m";
$BYellow="\033[1;33m";
$BBlue="\033[1;34m";
$BPurple="\033[1;35m";
$BCyan="\033[1;36m";
$BWhite="\033[1;37m";
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$syan="\033[1;36m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblue="\033[1;35m";
$lightblueb="\033[1;36m";
$ngay = date("d");
$thang = date("m");
$nam = date("Y"); 
$ip = file_get_contents('http://kiemtraip.com/raw.php');
$keyvip24h_tool = $trang."~".$trang."[".$do ."</>".$trang."] ".$trang."=> ";
$td = $trang."•".$do."[".$trang."</>".$do."] ".$trang."➪";
$thongbao = $do."[" . $vang . "THÔNG BÁO" . $do . "] \n";
$ndp_tool = $trang."~".$trang."[".$do ."-_-".$trang."] ".$trang."➩ ";
$ndp = $trang."~".$trang."[".$do."-_-".$trang."] ";
$Correct = $trang."~".$do."[".$vang."Correct".$do."] ".$trang."=> ";
$loi = $trang."~".$vang."[".$do."FALSE".$vang."] ".$trang."=> ";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Config ]***/
$_SESSION['version'] = "1.0";
$_SESSION['shop'] = "MONVIPTOOL.TK";
$_SESSION['free'] = $do."[".$vang."Vượt Link Lấy Key".$do."]";
$_SESSION['mattien'] = $do."[".$vang."40 Chế Độ".$do."]";
$keycuoituan = "Cuối Tuần Sẽ Share Cho AE!!";
/**[ Chúc ]**/
$time =  date('H:i:s  d-m-Y');
$h = date('H');
if($h >= 0 and $h < 9){
    $chuc = "Ngày Mới Tốt Lành!!";
} else if($h >= 9 and $h < 13){
    $chuc = "Buổi Trưa Tốt Lành!!";
} else if($h >= 13 and $h < 18){
    $chuc = "Buổi Chiều Vui Vẻ!!";
} else if($h >= 18 and $h < 21){
    $chuc = "Buổi Tối Cày Xu Tốt Nha:3";
} else {
    $chuc = "Muộn Rồi Hongg Ngủ Đi-_-";
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
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GỘP CHỌN CHẾ ĐỘ
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool970
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool970
\033[1;31m────────────────────────────────────────────────────────────\n";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
$a=date('d'); 
        $b=date("m");
        $thoigian=date('d/m');
$day = [];
$day= date('d-m-y');
$today = date("d-m-y");
$d = date("d-m");
$key = "test"; #key bạn nhập
$ip = file_get_contents("http://kiemtraip.com/raw.php");
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mMua Key Tại: \033[1;33mhttps://keyvip24h.net/ \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mKey Đăng Nhập Quá 3 Ip Xóa Key Không Báo Trước! \n";
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mNhập Key Bạn Đã Mua: \033[1;33m";
$key = trim(fgets(STDIN));
$get = json_decode(file_get_contents("http://keyvip24h.store/api/checkkey.php?key=".$key."&ip=".$ip), true);
if($get["status"] == "success") {
$name = $get['name']; #tên ng mua
$start = $get['start']; #ngày mua
$end = $get['end']; #ngày hết hạn
$device = $get['device']; #số thiết bị giới hạn

$welcome = $do."[".$trang ."=.=".$do."] ".$trang."=> \033[1;32mChào Mừng Bạn: ".$vang.$name = $get['name']."\n"; 
for($i = 0; $i < strlen($welcome); $i++){print $welcome[$i];usleep(30000);}
sleep(2);
} else {
die($get["messenger"]);
}
echo"\n";
usleep(2500);
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(500);}
sleep(1);
echo "\033[1;32m╔════════════════════════╗\n";
echo "\033[1;32m║     \033[1;36mThông Tin Key      \033[1;32m║\n";
echo "\033[1;32m╚════════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTên Người Mua Key: ".$vang.$name = $get['name']."\n";  
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNgày Mua Key     : ".$vang.$start = $get['start']."\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNgày Key Hết Hạn : ".$vang.$end = $get['end']."\n"; 
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mSố Thiết Bị : ".$vang.$device = $get['device']."\n"; 
usleep(50000);
echo "\033[1;32m╔═════════════════════╗\n";
echo "\033[1;32m║  \033[1;36mTool Trao Đổi Sub  \033[1;32m║\n";
echo "\033[1;32m╚═════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mTool TDS Token \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mTool TDS Cookie \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mTool TDS Pro5 \033[1;31m[\033[1;33mMới\033[1;31m] \n";
echo "\e[1;31m".str_repeat('──', 32)."\n";
usleep(50000);
echo "\033[1;32m╔═══════════════════════╗\n";
echo "\033[1;32m║  \033[1;36mTool Tương Tác Chéo  \033[1;32m║\n";
echo "\033[1;32m╚═══════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mTool TTC Token \033[1;33m(Mới) \n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m5\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33m(Mới)\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m6\033[1;31m] \033[1;32mTool TTC Pro5 \033[1;33m(Mới)\n";
echo "\e[1;31m".str_repeat('──', 32)."\n";
usleep(50000);
echo "\033[1;32m╔══════════════════════════╗\n";
echo "\033[1;32m║ \033[1;36mNuôi Facebook + Tiện Ích \033[1;32m║\n";
echo "\033[1;32m╚══════════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m7\033[1;31m] \033[1;32mTool Share Ảo Max Speed Cookie \033[1;31m[\033[1;33mMới\033[1;31m] \n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m8\033[1;31m] \033[1;32mTool Thêm Bạn Facebook \n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m9\033[1;31m] \033[1;32mTool Hủy Follow Facebook \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m10\033[1;31m] \033[1;32mTool Get ID Facebook \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m11\033[1;31m] \033[1;32mTool Nuôi Facebook \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m12\033[1;31m] \033[1;32mTool Auto Chấp Nhận Kết Bạn \n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m13\033[1;31m] \033[1;32mTool Comment Dạo \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m14\033[1;31m] \033[1;32mTool Chọc Bạn Bè Để Lấy Tương Tác\n"; 
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m15\033[1;31m] \033[1;32mTool Auto Kết Bạn Gợi Ý \n"; 
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m16\033[1;31m] \033[1;32mTool CMT Group Đa Cookie \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo "\033[1;32m╔══════════════════════════╗\n";
echo "\033[1;32m║ \033[1;36m   Tool Spam Message  \033[1;32m   ║\n";
echo "\033[1;32m╚══════════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m17\033[1;31m] \033[1;32mTool Spam Message \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo "\033[1;32m╔══════════════════════════╗\n";
echo "\033[1;32m║ \033[1;36m Tool Tiện Ích Khác      \033[1;32m║\n";
echo "\033[1;32m╚══════════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m18\033[1;31m] \033[1;32mTool Giải Mã PHP \n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m19\033[1;31m] \033[1;32mTool Mã Hóa PHP \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m20\033[1;31m] \033[1;32mTool Đào Mail Ngẫu nhiên \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m21\033[1;31m] \033[1;32mTool Đếm Lần Yêu \033[1;31m[\033[1;33mMới\033[1;31m] \033[1;31m[\033[1;33mV2\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m22\033[1;31m] \033[1;32mTool Spam SMS + CALL \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m23\033[1;31m] \033[1;32mTool Get Mã 2fa \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo "\e[1;31m".str_repeat('──', 32)."\n";
usleep(50000);
echo "\033[1;32m╔══════════════════════════╗\n";
echo "\033[1;32m║ \033[1;36m   Check Xu Đa Luồng     \033[1;32m║\n";
echo "\033[1;32m╚══════════════════════════╝\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m24\033[1;31m] \033[1;32mTool Check Xu + Lưu Token TDS \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m25\033[1;31m] \033[1;32mTool Check Xu TTC \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m26\033[1;31m] \033[1;32mTool Check Xu Vipig \033[1;31m[\033[1;33mMới\033[1;31m]\n";
usleep(50000);
echo "\e[1;31m".str_repeat('──', 32)."\n";
usleep(50000);
sleep(1);
while(true){
echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;37m===>: \033[1;33m";
$chonloaitool = trim(fgets(STDIN));
////Tool Tds
if($chonloaitool == '1'){
eval(file_get_contents('https://run.mocky.io/v3/c7834370-11c4-448d-87d2-451f12102865')); ///Đúng
} else if($chonloaitool == '2'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/tds.php')); ///Đúng
} else if($chonloaitool == '3'){
eval(file_get_contents('https://run.mocky.io/v3/7f14c64e-b72c-45bf-86e8-14fd8be23378')); ///Đúng
////Tool ttc

} else if($chonloaitool == '4'){
eval(file_get_contents('https://run.mocky.io/v3/5150dcf2-ca8a-4fa3-9f88-f38fa381955b')); ///Đúng
} else if($chonloaitool == '5'){
eval(file_get_contents('https://run.mocky.io/v3/5d8663b7-1c9e-4cb5-b666-74ca8fc7f277')); ///Đúng
} else if($chonloaitool == '6'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/ttc_pro5.php'));


///Tool Fb
} else if($chonloaitool == '7'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/shareao.php')); ///Đúng nhé

} else if($chonloaitool == '8'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/addf.php')); ///Đúng nhé

} else if($chonloaitool == '9'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/huyfollow.php')); ///Đúng nhé

} else if($chonloaitool == '10'){
eval(file_get_contents('https://github.com/AnorinTool/codetool/raw/main/getid.php')); ///Đúng nhé

} else if($chonloaitool == '11'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/nuoifb.php'));

} else if($chonloaitool == '12'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/autocapnhanh.php')); ///Đúng nhé

} else if($chonloaitool == '13'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/cmtdao.php')); ///Đúng nhé

} else if($chonloaitool == '14'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/chocbanbe.php')); ///Đúng nhé

} else if($chonloaitool == '15'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/spamkbgoIy.php')); ///Đúng nhé

} else if($chonloaitool == '16'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/nhomg.php')); ///Đúng nhé


/////Tool Spam Message
} else if($chonloaitool == '17'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/spammess.php'));

//////Tool công cụ
} else if($chonloaitool == '18'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/decode.php'));

} else if($chonloaitool == '19'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/encode.php'));

} else if($chonloaitool == '20'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/daomail_1.php'));

} else if($chonloaitool == '21'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/tinhyeu.php'));

} else if($chonloaitool == '22'){
eval(file_get_contents('https://keyvip24h.dev/toolspam_an_orin/gop.php'));

} else if($chonloaitool == '23'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/2fa.php'));



//Tool Check xu
} else if($chonloaitool == '24'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/checkxutds.php'));
} else if($chonloaitool == '25'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/checkxuttc.php'));
} else if($chonloaitool == '26'){
eval(file_get_contents('https://raw.githubusercontent.com/AnorinTool/codetool/main/checkxuvipig.php'));
} else {
 echo"\033[1;31mLỗi Không Xác Định, Vui Lòng Thử Lại!!  \n";
    continue;
}
}#đóng while
/***[ FUNCTION ]***/
function get_sever_tool($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Vui lòng kiểm tra lại kết nối hoặc có thể do lỗi máy chủ!';
    }
    curl_close($ch);
    return $result;
}l
