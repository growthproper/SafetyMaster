

 <?php
 		$mailSubject = "Customer New Inquiry 데모 요청 메일";
        $mailTo		=	"safetymaster@safetymaster.net";
	    // 받는사람 메일 주소;
        $mailFrom	=	"safetymaster1@naver.com";	
        // 보내는사람 메일주소 
        //$name = $_POST['name'] ;
        
        $mailContent = '이메일 :'.$_POST['demo_email'];
		

        $mailHeader = "From: $mailFrom\r\n";
        $mailHeader .= "MIME-Version: 1.0\r\n";
        $mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";
		$mailHeader.= 'Cc: dddtiger@safetymaster.net' . "\r\n"; //참고수신인
        $mailHeader.= 'Bcc: chingoodle@safetymaster.net' . "\r\n"; //참고수신인2
        
       

        $mailResult = mail ($mailTo,$mailSubject, $mailContent, $mailHeader,'-f'.$mailFrom);
		
		 // echo ''.$name.'님 상담을 요청해주셔서 감사합니다.<br>';
		 // //echo '상담을 해주셔서 감사합니다.<br />';
// 
        // if (true == $mailResult) {
                // echo "담당자가 내용 확인 후 연락드리도록 하겠습니다. 감사합니다.";
        // }
        // else {
                // echo "죄송합니다. 메일이 발송되지 않았읍니다.";
        // }
         ?>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
<title>데모 신청 메일</title>
</head>
<body>
	<h1 style="margin: 0 auto;margin-top:240px;width:500px; text-align: center;"><img src="img/logo.png" alt="" style="width:50%;"></h1>        
 <div style="width:60%;margin: 0 auto;text-align: center;font-weight: bold;">
 	<p style="font-size: 30px;"><? echo '데모 신청해주셔서 감사합니다.' ?></p>
 	<p style="font-size: 30px;line-height: 0;">
 		<?
 		   if (true == $mailResult) {
                echo "담당자가 내용 확인 후 연락드리도록 하겠습니다. 감사합니다.";
        }
        else {
                echo "죄송합니다. 메일이 발송되지 않았읍니다.";
        }
         
 		?>
 		
 	</p>
 	<button style="margin-top:120px;background:#007bc1;width:150px;height:50px;border-radius:5px;border:none;"><a href="https://safetymaster.co.kr/demo.html" style="text-decoration: none;color: #fff;font-weight: bold;font-size:18px;">확인</button>
 </div>
</body>
</html>
