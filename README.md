#  Email Notification for TradingView Webhook

**How to use:**

1) Place the tradingview.php to your server public_html, so that it can be access like: https://www.yourdomain.com/tradingview.php

2) edit the tradingview.php, change following line to your own:

> $to      = 'your-own@email.com';

and

> $headers = 'From: your-other-email@email.com'       . "\r\n" .



**How to add alert from your tradingview platform:**
1) Click on Alert button of your tradigview chart:<br>
![](https://raw.githubusercontent.com/teddybugs/tradingview-email-notification/main/img/1.png)<br> <br> 

2) Fill in the condition, options, expiration time and also check the Webhook URL<br>
![](https://raw.githubusercontent.com/teddybugs/tradingview-email-notification/main/img/2.png)<br> <br> 
3) Fill in the Alert Name, and also the message box<br>
![](https://raw.githubusercontent.com/teddybugs/tradingview-email-notification/main/img/3.PNG)<br> 

the content of the message box should be in valid json format, so that tradingview will post it using curl:<br>

    {"message": "EURUSD Crossing 0.99517, reaching 423 area of H4, ready for buy", "pair":"EURUSD"}

you could modify anything for the pair and message.<br><br>
4. click on create / save button

thats it.


**How to test the tradingview.php using curl:**

1) Run following command:

> curl -H 'Content-Type: application/json; charset=utf-8' -d '{"message": "EURUSD Crossing 0.99517, reaching 423 area of H4, ready for buy", "pair":"EURUSD"}' -X POST https://yourdomain.com/tradingview.php

you should see **Success** from the terminal and receive an email from your server.

Or

2) use postman app to post the json above to https://yourdomain.com/tradingview.php

<br><br>

**Example of email received:**<br>
![](https://raw.githubusercontent.com/teddybugs/tradingview-email-notification/main/img/example.png)<br>
