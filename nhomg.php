<?php
error_reporting(0);
session_start();
system ("clear");

date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = getdate(); 
$weekday = date("l");
	$ngay = date("d");
	$thang = date("m");
	$nam = date("Y");
$time =  date('H:i:s');
$gio =  date('H');
$phut = date('i');
$giay = date('s');
/*** ====================[ Color ]======================== ***/
$nau = "\e[38;5;94m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";

$daucau2 = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
$ndp = $do."[".$trang ."=.=".$do."] ".$trang."=> ";
/***[ Config ]***/


@system("clear");
/***[ Logo ]***/
$logo = "
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL AUTO KẾT BẠN GỢI Ý
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────\n";



$useragent = "Mozilla/5.0 (Linux; Android 10; SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36";


while (true) {
    $xnhac = "\033[1;96m";
    $luc = "\033[1;92m";
    $hong = "\033[1;95m";
    $do = "\033[1;31m";
    $vang = "\033[1;93m";
    $trang = "\033[1;97m";
    $thanhngang = $vang . "----------------------------------------------------------\n";
    $thanhngang;
    $khocki = [];
    $list_name = [];
    $list_id = [];
    $khogr = [];
	$a = 0;
    echo $logo;
    echo $daucau2 . $luc . "Bạn Muốn Nhập Bao Nhiêu Cookie: $vang";
    $slg = trim(fgets(STDIN));
    while ($a < $slg) {
        $a++;
        echo $daucau2 . $luc . "Nhập Cookie Thứ ".$trang."$a: $vang";
        $nhapck = (string)trim(fgets(STDIN));
        if ($nhapck == '') {
            break;
        }

        $cookie = ($nhapck);
        $page = thongtin('me', $cookie, $useragent);
        //lấy tên
        $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
        $idfb = explode('%', explode('?lst=', $page)[1])[0];
        if ($idfb == "") {
            echo $do . " Cookie Die.                   \n";
            $a--;
            continue;
        }
        @system('clear');
        $b = 0;
        echo $logo;
        echo $daucau2 . $luc . "Bạn Muốn Nhập Bao Nhiêu ID GROUP: $vang";
        $slgr = trim(fgets(STDIN));
        echo $daucau2 . $xnhac . "Nhập ID Hoặc Link Group Đều Được.\n";
        while ($b < $slgr) {
            $b++;
            echo $daucau2 . $luc . "Nhập ID GROUP Thứ ".$trang.$b.": $vang";
            $nhapgr = (string)trim(fgets(STDIN));
            if ($nhapgr == '') {
                break;
            }
            if (strpos($nhapgr, 'facebook')) {
                $nhapgr = get_idfb($nhapgr);
            }
            $error = check($cookie, $idgr);
            if ($error !== false) {
                echo $error . "\n";
                $a--;
                continue;
            } else {
                array_push($khogr, $nhapgr);
                $page = thongtin('me', $cookie, $useragent);
                //lấy tên
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%', explode('?lst=', $page)[1])[0];
                array_push($khocki, $nhapck);
                array_push($list_name, $tenfb);
                array_push($list_id, $idfb);
            }
        }
    }
    echo $daucau2 . $luc . "Vui Lòng Nhập Delay".$trang.": $vang";
    $delay = trim(fgets(STDIN));
        echo $daucau2.$luc."Lưu ý: ".$vang."Nếu đổi acc thì cũng sẽ đổi Group luôn!!\n";
    echo $daucau2 . $luc . "Sau Bao Nhiêu Nhiệm Vụ Thì Chuyển Acc".$trang.": $vang";
    $yyy = trim(fgets(STDIN));
    echo $daucau2 . $luc . "Nhập Số Lần Comment".$trang.": $vang";
    $stop = trim(fgets(STDIN));
    $kho_ID = [];
    while (true) {
        if (count($khocki) == 0) {

            $khocki = [];
            $list_name = [];
            $list_id = [];
            $a = 0;
            echo $daucau2 . $luc . "Bạn Muốn Nhập Bao Nhiêu Cookie: $vang";
            $slg = trim(fgets(STDIN));
            while ($a < $slg) {
                $a++;
                echo $daucau2 . $luc . "Nhập Cookie Thứ ".$trang.$a.": $vang";
                $nhapck = (string)trim(fgets(STDIN));
                if ($nhapck == '') {
                    break;
                }
                $cookie = ($nhapck);
                $page = thongtin('me', $cookie, $useragent);
                //lấy tên
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%', explode('?lst=', $page)[1])[0];
                if ($idfb == "") {
                    echo $do . " Cookie Die.                   \n";
                    $a--;
                    continue;
                } else {
                    $page = thongtin('me', $cookie, $useragent);
                    //lấy tên
                    $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                    $idfb = explode('%', explode('?lst=', $page)[1])[0];
                    array_push($khocki, $nhapck);
                    array_push($list_name, $tenfb);
                    array_push($list_id, $idfb);
                }
            }
        }
        for ($xz = 0; $xz < count($khocki); $xz++) {
            $idgr = $khogr[$xz];
            $cookie = $khocki[$xz];
            $page = thongtin('me', $cookie, $useragent);
                //lấy tên
                $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                $idfb = explode('%',explode('?lst=', $page)[1])[0];
            if ( $idfb == "") { 
                echo $do." Cookie Die.                   \n"; $a--; continue;
            } 
            echo "\033[1;31m────────────────────────────────────────────────────────────\n";
                            echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$luc.$tenfb."\n";
                            echo "\033[1;31m────────────────────────────────────────────────────────────\n";
            $spam = 0;
            while (true) {
                if ($spam == 1) {
                    break;
                }
                //làm nv
                $list = getbv($cookie, $idgr);
                foreach ($list as $id) {
                    if ((in_array($id, $kho_ID) !== true) and  $id !== '') {
                     date_default_timezone_set('Asia/Ho_Chi_Minh');
						$dat33e = getdate(); 
						//get thời gian vào cmt để tránh block
               		 $QirH = date('H:i:s  |  d/m/Y')."\n";
          
          $cmt = array (
"Thank you for sharing such meaningful content with us!🙏",
"I just wanted to say how much I appreciate your posts, they always make my day better. ❤️",
"Your words always inspire me, thank you for being such an amazing writer. ✍️",
"I'm so grateful to have found your page, your insights are invaluable. 🤗",
"Your posts have taught me so much, thank you for sharing your knowledge with us.🤓",
"I can't thank you enough for the impact your content has had on my life. 💪",
"I love reading your posts, they always give me a fresh perspective on things.",
"Thank you for taking the time to write such thoughtful and thought-provoking pieces. 📝",
"Your posts are a breath of fresh air in the world of social media, thank you for keeping it real. 🌬️",
"I appreciate the effort you put into creating content that is both informative and entertaining. 😊",
"Your posts have helped me through some tough times, thank you for being there for me even though we've never met. 🤝",
"You are making a difference with your words, keep doing what you're doing! 💥",
"I look forward to reading your posts every day, they brighten up my feed. 🌟",
"Your posts always remind me to stay positive and keep pushing forward, thank you for being a beacon of hope. 🌞",
"Thank you for using your platform to spread positivity and make the world a better place. 🌎",
"I appreciate the vulnerability and authenticity in your writing, it's truly inspiring. 💯",
"Your content is a reminder that there is still good in the world, thank you for sharing it with us. 🙌",
"Your words have the power to change lives, thank you for using them for good. 🌈",
"I am constantly amazed by your creativity and talent, keep shining! ✨",
"Thank you for being a source of inspiration and motivation in my life, your posts mean the world to me. 💖",
"What a thought-provoking article! 🤔 Thank you for sharing it with us. 👍",
"This post is truly inspiring! 😍 Thank you for spreading positivity. 🙏",
"Your words have touched my heart. ❤️ Thank you for such a meaningful post. 🤗",
"I couldn't agree more with the message in this article! 👏 Thank you for putting it out there. 🌟",
"Such an informative post! 🤓 Thank you for shedding light on this important topic. 🕯️",
"Wow, this article is eye-opening! 👀 Thank you for sharing your knowledge with us. 🧠",
"Your post has given me a new perspective on things. 🌅 Thank you for broadening my horizons. 🌎",
"Thank you for writing such a heartfelt article. ❤️ It really resonated with me. 🥰",
"Your words are so powerful! 💪 Thank you for reminding us of the importance of kindness. 🌷",
"This post is a true masterpiece! 🎨 Thank you for sharing your talents with us. 🙌",
"Your article is a must-read! 📖 Thank you for spreading awareness about this issue. 🚨",
"Thank you for writing with such passion and eloquence. 🔥 Your post truly moved me. 😌",
"Your insights on this topic are invaluable. 💎 Thank you for sharing your knowledge with us. 🤓",
"What a beautiful post! 🌺 Thank you for brightening up my day. ☀️",
"Your words are like a beacon of light in a dark world. 🔦 Thank you for sharing your wisdom with us. 🙏",
"I'm truly grateful for this post. 🙏 Thank you for reminding us of what's truly important. 🌟",
"This article has touched my soul. 💖 Thank you for sharing your heart with us. 💕",
"Thank you for writing with such authenticity and vulnerability. 💛 Your post really resonated with me. 😊",
"What a fantastic post! 🌟 Thank you for sharing your insights with us. 🤗",
"Your post is a true gem! 💎 Thank you for sharing your expertise with us. 🤓",
"My teddy bear is my best friend. It's always there to comfort me when I need it. 🧸",
"There's something about a teddy bear that just brings out the kid in me. It's so cute and cuddly! 🥰",
"Teddy bears are like a warm hug in toy form. I can't resist their charm! 🤗",
"My teddy bear is my constant companion. It's always by my side, day or night. 💕",
"There's nothing like snuggling up with a soft and fuzzy teddy bear. It's pure bliss. ☺️",
"Teddy bears are the epitome of cuteness. They never fail to put a smile on my face. 😍",
"My teddy bear is my little ray of sunshine. It brightens up even the gloomiest of days. ☀️",
"I love the way my teddy bear looks at me with those big, innocent eyes. It's simply adorable. 😇",
"There's just something about a teddy bear that makes it so special. It's like a little piece of childhood that we can hold onto forever. 🧡",
"My teddy bear may be small, but it has a big heart. It's always there for me, no matter what. ❤️",
"I can't help but smile every time I look at my teddy bear. It's too cute for words! 😊",
"Teddy bears are the perfect cuddle buddies. They're soft, warm, and oh-so-comforting. 🤗",
"My teddy bear is my confidant. It's always there to listen, without judgment or criticism. 🐻",
"There's something about a teddy bear that makes me feel safe and secure. It's like having a guardian angel watching over me. 👼",
"My teddy bear is my happy place. It reminds me of all the good things in life. 😌",
"Teddy bears are timeless. They never go out of style and will always hold a special place in our hearts. 💖",
"My teddy bear may be a bit worn and ragged, but it's still the most lovable thing in the world to me. ❤️",
"There's a reason why teddy bears are such a beloved childhood toy. They're just too darn cute! 😍",
"My teddy bear is like a member of the family. It's been with me through thick and thin, and I'll always cherish it. 🤗",
"Teddy bears are like little bundles of love. They bring us joy, comfort, and a sense of warmth that we can't find anywhere else. 🧡",
"Oh my goodness, that little bird is so cute! 🐦 Thank you for sharing this adorable photo!",
"I can't handle the cuteness of that little fish! 🐠 Thanks for brightening up my day with this photo!",
"That little baby deer is so precious! 🦌 Thank you for capturing this sweet moment and sharing it with us.",
"I just want to snuggle up with that fluffy little bunny! 🐰 Thank you for sharing this heartwarming photo!",
"Aww, that baby tiger is just too cute for words! 🐅 Thank you for giving us a glimpse of such an amazing creature.",
"That little puppy is melting my heart! 🐶 Thank you for sharing this adorable photo and bringing a smile to my face.",
"I never realized how cute baby ducks could be! 🦆 Thanks for sharing this lovely photo with us.",
"That little kitten is making me want to adopt a dozen more cats! 😻 Thank you for sharing this sweet photo!".
"I can't handle the cuteness of that little otter! 🦦 Thanks for sharing this precious moment with us.",
"I could watch that little monkey all day long! 🐒 Thank you for capturing this adorable scene and sharing it with us.",
"That little panda is just too cute for words! 🐼 Thanks for brightening up my day with this lovely photo!",
"That little fox is stealing my heart! 🦊 Thank you for sharing this charming photo with us.",
"I had no idea that baby kangaroos were so adorable! 🦘 Thank you for sharing this heartwarming photo.",
"That little hamster is just too cute! 🐹 Thank you for sharing this adorable photo and making my day.",
"I never realized how cute baby goats could be! 🐐 Thanks for sharing this lovely photo with us.",
"That little horse is just too precious! 🐴 Thank you for sharing this beautiful moment with us.",
"I can't handle the cuteness of that little raccoon! 🦝 Thanks for sharing this precious photo with us.",
"That little penguin is making my heart melt! 🐧 Thank you for sharing this adorable moment with us.",
"I never knew that baby seals could be so cute! 🦭 Thanks for sharing this lovely photo with us.",
"That little sloth is stealing my heart! 🦥 Thank you for sharing this charming photo and brightening up my day.",
"Oh my goodness, that little mouse is just too cute! 🐭 Thanks for sharing this adorable photo!",
"I never knew pigs could be so cute until I saw this little guy! 🐷 Thank you for brightening up my day with this photo!",
"That chicken has the cutest little face! 🐔 Thanks for sharing this lovely picture!",
"I just want to give that duck a big hug! 🦆 Thank you for sharing this adorable moment!",
"The way that squirrel is holding that nut is just too precious! 🐿️ Thanks for capturing this sweet moment!",
"I never thought swans could be so cute until I saw this beautiful photo! 🦢 Thank you for sharing!",
"That little mouse is just stealing my heart with those big eyes! 🐭 Thanks for sharing this cute photo!",
"I had no idea pigs could be so adorable until I saw this little cutie! 🐷 Thanks for brightening up my day!",
"That chicken has the sweetest little face I've ever seen! 🐔 Thank you for sharing this lovely picture!",
"That duck is just too precious for words! 🦆 Thanks for sharing this adorable moment!",
"The way that squirrel is looking at the camera is just too cute! 🐿️ Thanks for capturing this special moment!",
"I'm absolutely in love with that little mouse! 🐭 Thanks for sharing this cute photo!",
"I never realized how adorable pigs could be until I saw this little one! 🐷 Thanks for bringing a smile to my face!",
"That chicken has the most charming little expression! 🐔 Thanks for sharing this lovely picture!",
"I can't get enough of that cute little duck! 🦆 Thank you for sharing this adorable moment!",
"That squirrel is just too cute for words! 🐿️ Thanks for capturing this sweet moment!",
"I'm absolutely smitten with that little mouse! 🐭 Thanks for sharing this adorable photo!",
"I never knew how precious pigs could be until I saw this little guy! 🐷 Thank you for brightening up my day!",
"That chicken is just too adorable for words! 🐔 Thanks for sharing this lovely picture!",
"That duck is melting my heart with that sweet expression! 🦆 Thanks for sharing this adorable moment!",
"Let's connect! We seem to share common interests. 👋",
"I would love to be your friend on Facebook. Let's stay in touch! 🤝",
"Hey there! Would you like to be friends? 😊",
"I love connecting with like-minded individuals. Want to be Facebook friends? 🌟",
"Life's too short to not have more friends. Let's connect on Facebook! 🎉",
"I really enjoy your posts and would like to be friends on Facebook. 🔍",
"Can't wait to see more of your content! Let's be Facebook friends. 🤩",
"I'm always looking to expand my circle of friends. How about we connect on Facebook? 🙌",
"Hey, we seem to have a lot in common. Let's connect on Facebook and get to know each other better! 💬",
"Your posts always brighten up my day. Would you like to be Facebook friends? 🌞",
"I'd love to follow your journey on Facebook. Let's be friends! 🚀",
"You have such interesting perspectives. Let's connect on Facebook and share more! 🤓",
"I love connecting with positive and inspiring people. Let's be Facebook friends! 🌈",
"Your posts are always so thoughtful and meaningful. Let's connect on Facebook and keep the conversation going. 💭",
"I enjoy your content and would like to get to know you better. Let's connect on Facebook! 👍",
"I'd love to learn more about your interests and hobbies. Let's connect on Facebook and chat! 🗣️",
"You seem like such a cool person! Let's be Facebook friends and share more about ourselves. 😎",
"Your posts always make me smile. Let's connect on Facebook and spread more positivity! 😊",
"Hey, I think we would make great Facebook friends. What do you say? 🤞",
"Your content always inspires me. Let's connect on Facebook and support each other's journeys! 💪",
"What a beautiful day! ☀️",
"Today is simply stunning! 😍",
"The weather is perfect today! 🌤️",
"Feeling grateful for such a lovely day! 🙏",
"The sun is shining and everything feels perfect! ☀️",
"I'm loving this gorgeous weather! 😍",
"Couldn't ask for a more beautiful day! 🌅",
"The sky is so blue and the air is so fresh! 🌈",
"Today is a day for enjoying the outdoors! 🌳",
"The birds are singing and the flowers are blooming! 🐦🌷",
"I'm feeling so energized by this amazing day! 💪",
"This weather is putting me in such a good mood! 😄",
"What a perfect day to go for a walk in nature! 🚶‍♀️🌲",
"I'm feeling so grateful for this beautiful day and all its blessings! 🌞🙏",
"The world feels so alive and vibrant on a day like today! 🌍💫",
"The sun is beaming down and the world is smiling back! ☀️😁",
"I feel so lucky to be alive and able to experience such a beautiful day! 🍀",
"This kind of day makes me want to dance and celebrate! 💃🎉",
"I'm enjoying every moment of this gorgeous day! ❤️",
"Let's make the most of this beautiful day and create some wonderful memories! 🥰",
"Vietnam is a hidden gem with stunning natural beauty! 🇻🇳🌅",
"The colors and culture of Vietnam are truly breathtaking. 🇻🇳🎨",
"I'm so in love with Vietnam's vibrant and bustling cities. 🇻🇳🌆",
"From the mountains to the beaches, Vietnam has it all! 🇻🇳🏞️🏖️",
"Vietnam's food scene is out of this world. Pho-nomenal! 🇻🇳🍜🍲",
"The people of Vietnam are some of the kindest and most welcoming I've ever met. 🇻🇳❤️",
"There's a sense of peace and serenity when you're surrounded by Vietnam's natural beauty. 🇻🇳🌳",
"I can't get enough of Vietnam's rich history and heritage. 🇻🇳🏛️",
"Vietnam's architecture is a beautiful blend of tradition and modernity. 🇻🇳🏢",
"Every corner of Vietnam is full of surprises and wonder. 🇻🇳🤩",
"I'm endlessly fascinated by Vietnam's diverse cultures and traditions. 🇻🇳👥👥",
"The rice paddies and terraces in Vietnam are like a work of art. 🇻🇳🌾🖼️",
"I never tire of exploring Vietnam's picturesque towns and villages. 🇻🇳🏘️",
"Vietnam's street markets are a sensory overload, in the best way possible. 🇻🇳🛍️👃👀👂",
"I can't wait to return to Vietnam and continue discovering its beauty. 🇻🇳👀",
"Vietnam's beaches are pure paradise. I never want to leave. 🇻🇳🌴🌊",
"There's a certain charm to Vietnam's chaotic and lively streets. 🇻🇳🚶‍♂️🛵",
"I love how Vietnam's traditions and customs are still so alive and celebrated. 🇻🇳🎉",
"The countryside of Vietnam is like something out of a fairytale. 🇻🇳🏰🌺",
"Vietnam's natural wonders leave me speechless every time. 🇻🇳🤐🏞️",
"What a beautiful city! Love the charm and character of Ho Chi Minh City. 🏙️",
"I've never seen a more vibrant and bustling city than Ho Chi Minh City! Love it! 🌃",
"Ho Chi Minh City is truly a gem. Love exploring every corner of it. 💎",
"The energy of Ho Chi Minh City is contagious! Always something exciting happening here. ⚡",
"I'm constantly amazed by the stunning architecture and colorful streets of Ho Chi Minh City. What a beauty! 🌈".
"Ho Chi Minh City has a special place in my heart. Love the people, the food, and the atmosphere here. ❤️",
"Whenever I need a little bit of inspiration, I just take a stroll through Ho Chi Minh City. So much to see and experience! 🚶‍♀️",
"Ho Chi Minh City is a perfect mix of old and new. Love the way it's constantly evolving while still preserving its rich heritage. 🌟",
"I never get tired of the mesmerizing skyline of Ho Chi Minh City. Always takes my breath away. 🌉",
"Ho Chi Minh City is simply stunning. From the bright lights to the quiet alleyways, it has a charm like no other. ✨",
"Ho Chi Minh City is the ultimate cultural experience. Love learning about its history and traditions. 🎨",
"I could wander around the streets of Ho Chi Minh City for hours and never get bored. So much to explore! 🌺",
"Ho Chi Minh City is a feast for the senses. Love the smells, the colors, and the sounds of this incredible city. 🎵",
"The vibe of Ho Chi Minh City is infectious! Love the way it never sleeps and there's always something new to discover. 🕺",
"Ho Chi Minh City is a photographer's dream come true. So much beauty to capture in every frame. 📸",
"The energy of Ho Chi Minh City is indescribable. Love the way it makes me feel alive and inspired. 💫",
"Ho Chi Minh City is like a second home to me. Love the way it welcomes me with open arms every time. 🏠",
"From the stunning landmarks to the bustling markets, Ho Chi Minh City has it all. Love this city to bits! 🌟",
"Ho Chi Minh City has stolen my heart. Love the way it surprises me with new adventures every day. 💖",
"I always leave Ho Chi Minh City with a heavy heart, knowing that I'll miss this beautiful city until the next time I come back. Can't wait for my next visit! 😍",
"Japan is truly a beautiful country! 😍",
"I can't get enough of Japan's stunning landscapes! 🌅",
"From cherry blossoms to autumn leaves, Japan's beauty is unparalleled! 🍁",
"Every time I visit Japan, I'm awed by its natural beauty! 🌿",
"Japan's culture and scenery are equally enchanting! 🌸",
"I'm always amazed by Japan's intricate architecture and design! 🏯",
"Japan's rich history and tradition are evident in its breathtaking temples and shrines! ⛩️",
"I dream of visiting Japan's hidden gems someday! 🗾",
"Japan's cuisine is as beautiful as it is delicious! 🍣",
"I'm in love with Japan's fashion and style! 👘",
"Japan's modern architecture is a sight to behold! 🏢",
"From bustling cities to peaceful countryside, Japan's beauty is everywhere! 🌄",
"Japan's technological advancements are truly impressive! 🤖",
"The tranquility of Japan's gardens is simply breathtaking! 🌺",
"Japan's festivals are a celebration of beauty and culture! 🎉",
"I'm constantly inspired by Japan's art and creativity! 🎨",
"The attention to detail in Japan's craftsmanship is unparalleled! 🔍",
"Japan's efficiency and organization are truly remarkable! 🚅",
"I can't help but be captivated by Japan's pop culture and entertainment! ??",
"Japan is a photographer's paradise! 📷",
    "Mây đưa ta về với ký ức của một ngày xưa.",
    "Mây trôi qua như những giấc mơ vô tận.",
    "Khi nhìn mây, tôi luôn tưởng tượng ra những hình ảnh đẹp.",
    "Mây như những tinh tú trong bầu trời xanh.",
    "Mây trắng đẹp như những bông tuyết của mùa đông.",
    "Mây đen trông như những bông hoa đang nở trên bầu trời.",
    "Mây có thể biến hình thành bất cứ thứ gì tưởng tượng được.",
    "Mây như những cánh buồm trôi dạt trên biển xanh.",
    "Mây vô hình nhưng lại có tác động đến tất cả mọi thứ trên đời này.",
    "Mây như những tinh thể bay bổng, mờ mờ ảo ảo trên bầu trời.",
    "Khi tôi buồn, nhìn mây trôi qua làm tôi cảm thấy tốt hơn.",
    "Mây như những câu chuyện kể về một thế giới huyền bí và phiêu lưu.",
    "Quê hương là nơi ta được sinh ra và lớn lên.",
    "Tôi yêu quê hương của mình bởi nó là nơi tôi học được nhiều điều.",
    "Nơi đây có những con người thân thiện, sông nước tươi đẹp và cảnh quan hữu tình.",
    "Quê hương là nơi ta được hít thở không khí trong lành và ngắm nhìn thiên nhiên đẹp.",
    "Với tôi, quê hương chính là tình yêu và niềm tự hào.",
    "Dù xa cách bao nhiêu, tôi vẫn luôn nhớ về quê hương của mình.",
    "Mỗi khi nhắc đến quê hương, tôi luôn thấy một niềm hạnh phúc và sự ấm áp trong lòng.",
    "Quê hương là nơi để con tim ta được an yên và hạnh phúc.",
    "Tôi mãi mãi yêu quê hương của mình, bởi nơi đây luôn đong đầy ký ức và hồi ức của tôi.",
    "Nơi đây là nơi ta được sinh ra và nuôi dưỡng ước mơ của mình.",
    "Gió là một trong những yếu tố quan trọng trong thiên nhiên.",
    "Gió là một thứ vô hình nhưng lại có sức mạnh rất lớn.",
    "Gió thổi qua, để lại những cánh hoa rơi nhẹ trên đất.",
    "Gió mang lại sự mát mẻ trong những ngày hè nóng bức.",
    "Gió thổi đưa lá rơi bay theo nhịp điệu của nó.",
    "Gió giúp lan tỏa hương thơm của các loại hoa khắp nơi.",
    "Gió mang lại sự lãng mạn cho không gian xung quanh.",
    "Gió biến đổi theo mùa, khiến cho cảnh vật trở nên phong phú và đa dạng.",
    "Gió thổi về phía đông, để lại một bầu trời đỏ rực khi mặt trời mọc.",
    "Gió thổi về phía tây, đưa đi những ngọn núi cao.",
    "Gió là một phần của cuộc sống, tạo ra những âm thanh và cảm giác độc đáo.",
    "Gió thổi qua, nhưng hình ảnh của nó sẽ mãi mãi còn lại trong tâm trí của chúng ta.",
    "Mưa là điều tuyệt vời nhất để làm dịu đi cái nóng của mùa hè.",
    "Mưa làm cho không gian trở nên mộc mạc, mát mẻ và thanh tịnh.",
    "Mỗi giọt mưa là những nụ hôn của trời đất gửi tặng cho chúng ta.",
    "Mưa làm cho cây cối trở nên tươi tốt hơn và giúp cho thực vật phát triển tốt hơn.",
    "Mưa có thể đem lại cảm giác buồn bã, nhưng nó cũng làm cho sự sống trên trái đất trở nên tươi tốt hơn.",
    "Mỗi lần mưa là cơ hội để chúng ta tận hưởng không gian yên tĩnh và thư thái.",
    "Mưa làm cho mọi thứ trở nên tươi mới và tạo nên một không khí mới lạ.",
    "Mưa làm cho con người trở nên nhẹ nhàng hơn và đôi khi có thể kích thích sự sáng tạo.",
    "Mưa là dịp để chúng ta tận hưởng không gian gia đình và những cuộc trò chuyện ấm áp bên nhau.",
    "Mỗi lần mưa là cơ hội để chúng ta cảm nhận lại tình yêu và sự quan tâm của người thân.",
    "Mưa có thể mang lại nhiều phiền muộn nhưng nó cũng làm cho chúng ta nhận ra rằng sự sống trên trái đất này là một điều kỳ diệu.",
    "Mưa là cơ hội để chúng ta tận hưởng không gian yên bình và thư giãn sau một ngày làm việc mệt mỏi.",

    "Được sống gần biển là điều may mắn vô cùng, tôi yêu nó vô cùng.",
    "Nước biển xanh biếc luôn làm tôi cảm thấy sảng khoái và thư giãn.",
    "Nước biển luôn là nguồn sống và nguồn cảm hứng cho tôi.",
    "Hãy để gió biển cuốn hút bạn đi theo những cung đường bất tận.",
    "Sự bình yên và thanh tịnh của nước biển đã làm cho tâm hồn tôi được thư giãn.",
    "Khi tôi ngắm nhìn nước biển, tôi nhớ đến những kỷ niệm và chuyện cũ của mình.",
    "Nước biển sẽ không bao giờ làm tôi thấy chán nản, nó luôn có sức cuốn hút vô cùng đặc biệt.",
    "Biển là người bạn đồng hành không thể thiếu với những người yêu du lịch.",
    "Biển sẽ luôn là nơi tôi thấy tươi vui và thư giãn nhất.",
    "Biển là nơi để tôi được cảm nhận rõ hơn vẻ đẹp và sức mạnh của thiên nhiên.",
    "Với mỗi con sóng, tôi cảm nhận được sự sống động và sức sống của nước biển.",
    "Nếu được chọn một nơi để sống, tôi sẽ chọn một vùng biển đẹp và yên tĩnh.",

    "Rùa là loài động vật có tuổi thọ lâu nhất trên trái đất.",
    "Rùa luôn được coi là biểu tượng của sự bền chính và sự kiên nhẫn.",
    "Các loài rùa thường có vỏ sừng hoặc vỏ xương để bảo vệ cơ thể.",
    "Rùa là loài động vật có khả năng bơi rất giỏi và thường sống gần các khu vực nước.",
    "Các loài rùa khác nhau có hình dáng và kích thước khác nhau, từ nhỏ nhắn đến lớn lên tới hàng trăm kg.",
    "Rùa có thể chịu đựng những cuộc hành trình dài và đầy gian nan để đi tìm thức ăn hoặc để đẻ trứng.",
    "Rùa là loài động vật rất khôn ngoan và được cho là có trí thông minh tương đương với động vật khác.",
    "Rùa là một trong những động vật biển đáng yêu nhất, với chiếc vỏ đáng yêu và cách di chuyển chậm rãi của mình.",
    "Rùa là một trong những loài động vật kỳ diệu của đại dương, với khả năng sống sót trong những điều kiện khắc nghiệt.",
    "Rùa thường được coi là biểu tượng của sự yên bình và bình an.",
    "Rùa có một thói quen rất đáng yêu khi họ thường ngáp mở mỏ khi đang nghỉ.",
    "Các loài rùa đều có tính cách và cách ứng xử khác nhau, nhưng đều được yêu thích bởi sự đáng yêu và tình cảm của chúng.",
    "Cá là loài động vật có vẩy và sống trong nước.",
    "Cá có nhiều loài khác nhau về hình dáng, màu sắc và kích thước.",
    "Cá là một nguồn dinh dưỡng giàu chất đạm và omega-3.",
    "Cá cũng là nguồn cung cấp axit béo thiết yếu cho cơ thể.",
    "Nhiều loài cá sống trong môi trường nước mặn và có thể điều hòa lượng muối trong cơ thể.",
    "Cá là loài động vật có khả năng bơi rất nhanh và linh hoạt.",
    "Nhiều người thích câu cá để thư giãn và tận hưởng thiên nhiên.",
    "Cá là một loại thực phẩm được ưa chuộng và được chế biến theo nhiều cách khác nhau trên toàn thế giới.",
    "Cá cũng là một biểu tượng trong văn hóa và tôn giáo của nhiều quốc gia.",
    "Cá cũng có tác dụng trong ngành y tế và được sử dụng để điều trị nhiều bệnh lý khác nhau.",
    "Ngoài giá trị kinh tế và dinh dưỡng, cá cũng góp phần giúp duy trì cân bằng sinh thái của hệ sinh thái nước.",
    "Cá là một trong những loài động vật có vai trò quan trọng trong chuỗi thức ăn và quan trọng đối với sự sinh tồn của con người.",
    "Sư tử là biểu tượng của sức mạnh và quyền lực.",
    "Sư tử là động vật ưa thích trong văn hóa phương Tây.",
    "Sư tử có bộ lông rực rỡ và râu to vàng óng.",
    "Sư tử là loài động vật sống đàn đông nhất trong họ mèo.",
    "Sư tử có khả năng chạy nhanh với tốc độ lên đến 80 km/h.",
    "Sư tử đực có bộ râu mạnh mẽ và là kẻ thống trị trong bầy.",
    "Sư tử có thể đàn hồi và nhảy cao lên đến 3,7 mét.",
    "Sư tử có khả năng ngủ nhiều và có thể nghỉ ngơi đến 20 giờ mỗi ngày.",
    "Sư tử đực có thể có đến 20 sư tử cái trong đàn của mình.",
    "Sư tử là loài động vật có trí tuệ cao và có khả năng tương tác xã hội.",
    "Sư tử là loài động vật ăn thịt mạnh mẽ và thường săn mồi vào ban đêm.",
    "Sư tử có vai trò quan trọng trong văn hóa và tôn giáo của nhiều quốc gia và dân tộc trên thế giới.",
    "Mưa rơi bình yên trên đôi vai",
    "Nước mắt mưa rơi nhạt phai trên khuôn mặt",
    "Mưa rơi nặng hạt, gió thổi tàn bạo",
    "Mưa gió xé toạc lá cây, rụng đầy đường",
    "Mưa tầm tã, trời âm u, gió giật mạnh",
    "Cơn mưa rào kéo dài khiến người ta chìm đắm trong những suy tư",
    "Nước mưa làm ướt tóc, trên mái hiên lặng lẽ đọng",
    "Mưa là thời điểm để đồng ruộng được tưới uống",
    "Nghe tiếng mưa rơi, lòng người bỗng nhẹ nhõm",
    "Mưa làm cho những cánh hoa bừng nở và đẹp hơn",
    "Nước mưa giúp làm sạch không khí, mang lại không gian trong lành",
    "Mưa làm cho những con đường trở nên đầy màu sắc và lãng mạn hơn");

$rancd = array_rand($cmt);
$cmt[$rancd];

$random_string = md5(rand()); // tạo một chuỗi ngẫu nhiên và mã hóa nó với MD5
$random_string;


                        $msg = $QirH.$cmt[$rancd]."\n".$random_string;
                        
                        cmt_fb_cookie_new($id,$cookie,$msg);
                        $page = thongtin('me', $cookie, $useragent);
                        //lấy tên
                        $tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
                        $idfb = explode('%',explode('?lst=', $page)[1])[0];
                        if ($idfb == '') {
                            echo "\033[1;91m  Cookie Die. ";
                            echo "\n";
                            $spam = 1;
                            break;
                        }
                        $dem++;
                        $a = "\033[1;91m[\033[1;93m" . $dem . "\033[1;91m]\033[1;91m | \033[1;96m" . date("H:i:s") . "\033[1;91m |\033[1;93m CMT\033[1;91m | \033[1;97mfacebook.com/".$id . "\033[1;91m | \033[1;96m".$msg . " \033[1;91m|\n";
                        $len = strlen($a);
                        for ($x = 0; $x < $len; $x++) {
                            echo $a[$x];
                        }
                        if ($dem >= $stop) {
                            echo $daucau2 . $luc . "Bạn Có Muốn Chạy Tiếp Không ".$do."(".$vang."y/n".$do.")".$trang.": $vang";
                            $stoppp = (string)trim(fgets(STDIN));
                            if ($stoppp == "y") {
                                echo $daucau2 . $luc . "Bạn Muốn Chạy Tiếp Bao Nhiêu Cmt".$trang.": $vang";
                                $chaytiep = (string)trim(fgets(STDIN));
                                $stop = $stop + $chaytiep;
                            } else if ($stoppp == "n") {
                                echo $do . "Cảm Ơn Bạn Đã Sử Dụng Tool Của".$xnhac." Tui\n";
                                exit;
                            }
                        }
                        array_push($kho_ID, $id);
                        delayspamcmt($delay);
                        if ($dem % $yyy == 0) {
                            $spam = 1;
                            break;
                        }
                    } else {
                        echo $do . " Đang Lướt Tìm Bài Viết.                      \r";
                   }
                } //for nội dung
            } // white nhỏ
        } // for $khocki
    } //while lớn
}


function thongtin($id, $cookie, $useragent)
{
    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent: Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);

    return $page;
}
function get_idfb($link)
{

	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://id.traodoisub.com/api.php');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36')
;
    $da = 'link=' . $link;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $jk = curl_exec($ch);
    curl_close($ch);

    if (strpos($jk, '"id":"')) {
        $id = explode('id":"', $jk)[1];
        $id = explode('"', $id)[0];
    } else {
        $id = explode('id":', $jk)[1];
        $id = explode(',', $id)[0];
    }
    return $id;
}
function check($cookie, $idgr)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://mbasic.facebook.com/" . $idgr,
        CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36",
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);

    if (strpos($access, 'Không tìm thấy trang bạn yêu cầu.') != false) {
        $error = "Không Tìm Thấy Group";
    } else if (strpos($access, '<input value="Tham gia') != false) {
        $error = "Bạn Chưa Tham Gia Group Này";
    } else {
        $error = false;
    }
    return $error;
}
function cmt_fb_cookie_new($id,$cookie,$msg){
	
	  
	
$mr = curl_init();
$head = [
    "Host:mbasic.facebook.com",
    'sec-ch-ua:"Google Chrome";v="87", " Not;A Brand";v="99", "Chromium";v="87"',
    "sec-ch-ua-mobile:?1",
    "cache-control:max-age=0",
    "upgrade-insecure-requests:1",
    "dnt:1",
    "save-data:on",
    "user-agent: Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "sec-fetch-site:same-origin",
    "sec-fetch-mode:navigate",
    "sec-fetch-user:?1",
    "sec-fetch-dest:document",
    "referer:https://mbasic.facebook.com/",
    "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",];
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/$id");
curl_setopt($mr, CURLOPT_COOKIE, $cookie);
curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
$mr2 = curl_exec($mr);
$fb_dtsg = explode('"',explode('fb_dtsg" value="',$mr2)[1])[0];
$jazoest = explode('"',explode('jazoest" value="',$mr2)[1])[0];
$cmt = explode('"',explode('action="/a/comment.php?',$mr2)[1])[0];
$text = "fb_dtsg=".$fb_dtsg."&jazoest=".$jazoest."&comment_text=".$msg;
curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/a/comment.php?".htmlspecialchars_decode($cmt));
curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($mr, CURLOPT_POSTFIELDS, $text);
$mr2 = curl_exec($mr);
curl_close($mr);
}
function getbv($cookie, $idgr)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://mbasic.facebook.com/" . $idgr,
        CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36",
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $stool = [];
    $list = explode('https://mbasic.facebook.com/groups/', $access);
    for ($i = 2; $i < count($list) / 3; $i++) {
        $mr = explode('?refid=', $list[$i * 3])[0];
        if (strpos($mr, 'permalink') != false) {
            $id = explode('/', explode('permalink/', $mr)[1])[0];;
            array_push($stool, $id);
        }
    }
    return $stool;
}
function comment($id, $access_token, $msg)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array(
        'message' => $msg,
        'access_token' => $access_token,
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access, true);
}
function comments($id, $access_token, $msg, $linkanh)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array(
        'message' => $msg,
        'access_token' => $access_token,
        'attachment_url' => $linkanh
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access, true);
}
function commentgif($id, $access_token, $msg, $linkgif)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $id . '/comments');
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 7.1.1; A83) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array(
        'message' => $msg,
        'access_token' => $access_token,
        'attachment_share_url' => $linkgif
    );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function delayspamcmt($delay){
    for($ndp = $delay ;$ndp>= 1;$ndp--){
      echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
    echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
        echo "\r\033[1;9" . rand(1, 9) . "m" . "V" . "\033[1;9" . rand(1, 9) . "m" . "u" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . " L" . "\033[1;9" . rand(1, 9) . "m" . "ò" . "\033[1;9" . rand(1, 9) . "m" . "n" . "\033[1;9" . rand(1, 9) . "m" . "g" . "\033[1;9" . rand(1, 9) . "m" . " C" . "\033[1;9" . rand(1, 9) . "m" . "h" . "\033[1;9" . rand(1, 9) . "m" . "ờ" . "\033[1;9" . rand(1, 9) . "m" . " S" . "\033[1;9" . rand(1, 9) . "m" . "a" . "\033[1;9" . rand(1, 9) . "m" . "u " . $ndp . " \033[1;9" . rand(1, 9) . "m" . "G" . "\033[1;9" . rand(1, 9) . "m" . "i" . "\033[1;9" . rand(1, 9) . "m" . "â" . "\033[1;9" . rand(1, 9) . "m" . "y  ";
    usleep(25000);
}
echo "\r                                                              \r";
}