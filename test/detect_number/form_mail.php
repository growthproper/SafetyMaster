<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>폼메일발송 </title>
</head>
<body>

 <?php
        $mailTo		=	"fromnet@safetymaster.net";
	    // 받는사람 메일 주소;
        $mailFrom	=	"safetymaster@safetymaster.net";	
        // 보내는사람 메일주소 
        $name = $_POST['name'] ;
        $mailSubject = "홈페이지_상담문의";
        $mailContent = '회사명 :'.$_POST['company_name'].'<br>'
		.'이름:'.$_POST['name'].'<br>'
		.'회사전화:'.$_POST['company_phone'].'<br>'
		.'연락처:'.$_POST['phone'].'<br>'
		. '문의내용 :'.$_POST['content'];

        $mailHeader = "From: $mailFrom\r\n";
        $mailHeader .= "MIME-Version: 1.0\r\n";
        $mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";
		$mailHeader.= 'Cc: chingoodle@naver.com' . "\r\n"; //참고수신인
        $mailHeader.= 'Bcc: ceo@safetymaster.net' . "\r\n"; //참고수신인2
        $mailHeader.= 'Ccc: chingoodle@safetymaster.net' . "\r\n"; //참고수신인3

        $mailResult = mail ($mailTo, $mailSubject,     
        $mailContent, $mailHeader,'-f'.$mailFrom);
		
		 echo 'Dear '.''.$name.'<br>';
		 echo '상담을 해주셔서 감사합니다.<br />';

        if (true == $mailResult) {
                echo "담당자가 내용 확인 후 연락드리도록 하겠습니다. 감사합니다.";
        }
        else {
                echo "Failuare 메일이 발송되지 않았읍니다.";
        }
         ?>
         
         </body>
</html>
