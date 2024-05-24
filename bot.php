<?php
ignore_user_abort(true);
set_time_limit(0); // Optional: Setting unlimited script execution time

// Contoh tugas latar belakang
    

while(true){
 
   
   
    $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="BESAR";
    }else{
    $oi="KECIL";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $winlos = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $winlos = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $winlos = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $winlos = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$winlos."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          
          if($winlos == "LOSE🤒🤒"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    (310);//waktu 5menit
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
 $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          if($adul == "WINNER🤑🤑"){
          $hdr1=array(
    'Host: newapi.55lottertttapi.com',
  'content-type: application/problem+json; charset=UTF-8',
  'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOiIxNjk5MTA0NzE3IiwibmJmIjoiMTY5OTEwNDcxNyIsImV4cCI6IjE2OTkxMDY1MTciLCJodHRwOi8vc2NoZW1hcy5taWNyb3NvZnQuY29tL3dzLzIwMDgvMDYvaWRlbnRpdHkvY2xhaW1zL2V4cGlyYXRpb24iOiIxMS80LzIwMjMgOTowMTo1NyBQTSIsImh0dHA6Ly9zY2hlbWFzLm1pY3Jvc29mdC5jb20vd3MvMjAwOC8wNi9pZGVudGl0eS9jbGFpbXMvcm9sZSI6IkFjY2Vzc19Ub2tlbiIsIlVzZXJJZCI6IjE5NjQ3MSIsIlVzZXJOYW1lIjoiNjI4NTc3NzY2MDIyMSIsIlVzZXJQaG90byI6IjMiLCJOaWNrTmFtZSI6IldEU0VUQVVOU0VLQUxJIiwiQW1vdW50IjoiMjEyMDguNzAiLCJJbnRlZ3JhbCI6IjAiLCJMb2dpbk1hcmsiOiJINSIsIkxvZ2luVGltZSI6IjExLzQvMjAyMyA4OjMxOjU3IFBNIiwiTG9naW5JUEFkZHJlc3MiOiIxMjAuMTg4LjQuNTYiLCJEYk51bWJlciI6IjAiLCJJc3ZhbGlkYXRvciI6IjAiLCJLZXlDb2RlIjoiNDkxMSIsIlRva2VuVHlwZSI6IkFjY2Vzc19Ub2tlbiIsIlBob25lVHlwZSI6IjEiLCJVc2VyVHlwZSI6IjAiLCJVc2VyTmFtZTIiOiIiLCJpc3MiOiJqd3RJc3N1ZXIiLCJhdWQiOiJsb3R0ZXJ5VGlja2V0In0.wpgy3RopJ4w17OD876YR2yWAsnQa_zcinpNAVGBbeNc',
  'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Mobile Safari/537.36'
  );
  
  $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
  $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
  sleep(1);
  
  
  $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $res=curl_exec($ch);
       
     $satu = 1;
  $pat = 5;
  $nam = 6;
  $sepuluh = 10;
  
      
   $rm1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$res)[1];
      $rm=explode('","colour":"',$rm1)[0];
      
      
      $em1=explode('},{"issueNumber":"'.$pe-$pat.'","number":"',$res)[1];
      $em=explode('","colour":"',$em1)[0];
      
      
      $enam1=explode('},{"issueNumber":"'.$pe-$nam.'","number":"',$res)[1];
      $enam=explode('","colour":"',$enam1)[0];
      
    
      $puluh1=explode('},{"issueNumber":"'.$pe-$sepuluh.'","number":"',$res)[1];
      $puluh=explode('","colour":"',$puluh1)[0];
  
  if($em+$enam+$puluh-$rm == 5 || $em+$enam+$puluh-$rm == 6 || $em+$enam+$puluh-$rm == 7 || $em+$enam+$puluh-$rm == 8 || $em+$enam+$puluh-$rm == 9 || $em+$enam+$puluh-$rm == 15 || $em+$enam+$puluh-$rm == 16 || $em+$enam+$puluh-$rm == 17 || $em+$enam+$puluh-$rm == 18 || $em+$enam+$puluh-$rm == 19 || $em+$enam+$puluh-$rm == 25 || $em+$enam+$puluh-$rm == 26 || $em+$enam+$puluh-$rm == 27 || $em+$enam+$puluh-$rm == 28){
    $oi="KECIL";
    }else{
    $oi="BESAR";
    }
  sleep(1);
  
  date_default_timezone_set('Asia/Jakarta');
  $url='https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=🆕%20SIGNAL%20PREDICTION%20🆕%0A======================%0A%20📊%20GAME%20:%20WINGO%205%20MENIT%0A%0A%20📊%20PERIODE%20:%20'.$pe.'%0A%0A%20📊%20PREDIKSI%20:%20'.$oi.'%0A======================%0A🚨%20INFO%20:%20CARA%20MAIN%20CEK%20"PESAN%20TERSEMAT"%0A======================%0A⏰%20SIGNAL%20STOP%20JAM%20'.$stop.'.NT%%20⏰&parse_mode=html';

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
    
    
    sleep(305);//waktu 5menit
          
          
          $url = "https://newapi.55lottertttapi.com/api/webapi/GetGameIssue";
  $date = '{"typeId":3,"language":0,"random":"d856fa94acc14d5d98eb8ea72972865c","signature":"2B9C88A0ED95C065C9738E0B367D06F3","timestamp":1699263026}';
  $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $date);
    $bets=curl_exec($ch);
    
    $pe1=explode('issueNumber":"',$bets)[1];
  $pe=explode('","startTime',$pe1)[0];
          
          $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, "https://newapi.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $hdr1);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,CURLOPT_POSTFIELDS, '{"pageSize":10,"pageNo":1,"typeId":3,"language":0,"random":"463766c71e63458791d027359fed24e4","signature":"E1E58EECBBE0780F31DEA9A27A83314A","timestamp":1699263034}');
    $rez=curl_exec($ch);
     $satu = 1;
           $rsl1=explode('{"list":[{"issueNumber":"'.$pe-$satu.'","number":"',$rez)[1];
      $rsl=explode('","colour":"',$rsl1)[0];
      
      if($rsl == 5 || $rsl == 6 || $rsl == 7 || $rsl == 8 || $rsl == 9){
    $gt="BESAR";
    }elseif($rsl == 0 || $rsl == 1 || $rsl == 2 || $rsl == 3 || $rsl == 4){
    $gt="KECIL";
    }
      if($oi == "BESAR" and $gt == "BESAR"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "BESAR" and $gt == "KECIL"){
      $adul = "LOSE🤒🤒";
      }
      if($oi == "KECIL" and $gt == "KECIL"){
      $adul = "WINNER🤑🤑";
      }elseif($oi == "KECIL" and $gt == "BESAR"){
      $adul = "LOSE🤒🤒";
      }
          
          $header=array(
  'Host: api.telegram.org',
  'cache-control: max-age=0',
  'sec-ch-ua: "Chromium";v="118", "Google Chrome";v="118", "Not=A?Brand";v="99"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Linux"',
  'upgrade-insecure-requests: 1',
  'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36');
  
  
  date_default_timezone_set('Asia/Jakarta');
  $url="https://api.telegram.org/bot6454775569:AAGiJnDPqpq0g2pGd7gvLymfpJj5b02teQY/sendMessage?chat_id=-1002213595770&text=RESULT%20:%20".$adul."%20&parse_mode=html";

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $dl=curl_exec($ch);
          sleep(1);
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
      }  
    
?>
