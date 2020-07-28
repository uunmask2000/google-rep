# google-rep  Google_Recaptcha V3
<hr>
参考  https://developers.google.com/recaptcha/docs/v3 
<br>
申请 https://www.google.com/recaptcha/
---

<h2> HTML </h2> 
<p>在向使用者顯示的 HTML 程式碼中使用這串網站金鑰</p>
<pre>
<code>
主要配置在JS端 (sitekey)
</code>
</pre>

<h2> Server </h2> 
<p>用這串密鑰來建立網站和 reCAPTCHA 之間的通訊</p>
<pre>
<code>
主要配置在伺服端 (reCAPTCHA_site_key)
</code>
</pre>

# google-rep  Google_Recaptcha V2

参考 \old\index.php 范例
---
<code>
{
'sitekey' : '主要配置在JS端 (sitekey)',
'theme' : 'light' ,
'callback' : JS回掉方法名,
}
</code>
