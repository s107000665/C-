<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>函式範例</title>
    <script language="javascript">
      function Greeting()		//宣告函式
      {
        var UserName = prompt("請輸入您的大名", "");
        alert(UserName + "您好！歡迎光臨！");
      }      
    </script>
  </head>
  <body>
    <h1><a href="javascript:Greeting()">點取此處以顯示歡迎訊息</a></h1>
  </body>
</html>