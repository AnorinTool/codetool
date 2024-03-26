
//
error_reporting(0); // cái này phải luôn có ở mỗi đoạn code để fix những lỗi nhỏ nhặt trong code//
$den = "\033[1;90m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$random_number = rand(0, 9);
$color_code = "\033[3" . $random_number . "m";
$maurand = $color_code;
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = getdate(); 
$daucau = $do."[".$trang ."=.=".$do."] ".$trang."=>";
$logo	 = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL THÊM BẠN BÈ
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────
".PHP_EOL;
system ('clear');
echo $logo;
echo $daucau.$luc."Nhập Cookie Facebook: $vang";
    $cookie = trim(fgets(STDIN));
    echo $daucau.$luc."Nhập Delay".$trang." MIN: $vang";
    $a = trim(fgets(STDIN));
    echo $daucau.$luc."Nhập Delay".$trang." MAX: $vang";
    $b = trim(fgets(STDIN));
    $rt = rand($a, $b);
    
   @system('clear');
   echo $logo;
       echo $daucau.$luc."Bao nhiêu lần thì dừng: $vang";
    $dung = trim(fgets(STDIN));
    if ($dung == 1){
    	$dung = '5000';
    }
    
    while(true) {
        $url = "https://mbasic.facebook.com/";
$head = array(
            "Host:mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data:on",
            "user-agent: Mozilla/5.0 (Linux; Android 9.0; SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.4335.66 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site: same-origin",
            "sec-fetch-mode: navigate",
            "sec-fetch-user: ?1",
            "sec-fetch-dest: document",
            "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie: $cookie",
        );
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        
        
$ho = array("Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Võ", "Đặng", "Bùi", "Đỗ", "Hồ", "Ngô", "Dương", "Lý", "Doãn", "Tạ", "Phan", "Vũ", "Danh", "Âu", "Đoàn", "Đinh", "Thái", "Lỗ", "Hứa", "Cao", "Tôn", "Từ", "Mạc", "Tống","Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Võ", "Đặng", "Bùi", "Đỗ", "Hồ", "Ngô", "Dương", "Lý", "Doãn", "Tạ", "Phan", "Vũ", "Danh", "Âu", "Đoàn", "Đinh", "Thái", "Lỗ", "Hứa", "Cao", "Tôn", "Từ", "Mạc", "Tống","Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Phan", "Vũ", "Đặng", "Bùi", "Đỗ", "Hồ", "Ngô", "Dương", "Lý");
$ten_dem = array("Thị", "Ngọc", "Kim", "Diệu", "Hồng", "Thu", "Thanh", "Mai", "Bích", "Hương", "Yến", "Tuyết", "Gia", "Như", "Trang", "Anh", "Minh", "Lệ", "Hà", "Ly", "Tâm", "Kiều", "Vân", "Đoan", "Oanh", "Đan", "Nhung", "Nga", "Hạnh", "Tú","Văn", "Thị", "Minh", "Thu", "Thanh", "Ngọc", "Đức", "Huy", "Hoàng", "Hà", "Công", "Bá", "Thành", "Tùng", "Tấn", "Hữu");
$ten = array("Anh", "Dương", "Hải", "Hiếu", "Hùng", "Linh", "Nam", "Nga", "Phong", "Quân", "Quang", "Sơn", "Thảo", "Trang", "Trung", "Tú", "An", "Bảo", "Cẩm", "Diễm", "Hạ", "Hải", "Hàm", "Hân", "Hoa", "Huyền", "Khánh", "Kim", "Lan", "Linh", "Loan", "Lộc", "Mai", "Minh", "Mỹ", "Ngọc", "Nhi", "Phong", "Phương", "Quế", "Quỳnh", "Thanh", "Thảo", "Thu", "Trang", "Yến");

$random_ho = $ho[array_rand($ho)];
$random_ten_dem = $ten_dem[array_rand($ten_dem)];
$random_ten = $ten[array_rand($ten)];
// này là random họ và tên để tìm kiếm 
$ho_ten = $random_ho . " " . $random_ten_dem . " " . $random_ten;
$hoten = urlencode($ho_ten);
        
        $c = curl_exec($ch);
        $one = explode('href="/friends/center/search/?ppk=4&tid=u_0_1_Xo&bph=4&session=jb2ztzjmtyua6pqy&q='.$hoten, $c);
        $two = explode('"', $one[1]);
        $url = "https://mbasic.facebook.com/friends/center/search/?ppk=4&tid=u_0_1_Xo&bph=4&session=jb2ztzjmtyua6pqy&q=".$hoten.htmlspecialchars_decode($two[0]);
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $c = curl_exec($ch);
        $one = explode('href="/a/friends/add/?', $c);
       
        $kb = explode('"', $one[1]);
        $url = "https://mbasic.facebook.com/a/friends/add/?" . htmlspecialchars_decode($kb[0]);
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $c = curl_exec($ch);
        $id = explode('subject_id=', $kb[0])[1];
        $id = explode('&', $id)[0];
$time = date("H:i:s");
$dem++;
echo $do."[".$trang.$dem.$do."] -".$do." [".$trang.$time.$do."] ".$do."- ".$do."[".$trang."Thành Công".$do."]".$do." - ".$do."[".$trang.$id.$do."]".PHP_EOL;
if ($dem == $dung){
	echo $do."Đã dừng theo dự kiến của bạn\n";
	die;
	}
for ($i=$rt;$i>0;$i--){
echo "\r                                     \r";
        echo $den."\r Vui Lòng Chờ Sau ".$i." Giây \r";
        sleep(1);
        {
        	echo "\r                                      \r";
        }
    }}
   
