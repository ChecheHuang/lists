<h3>قالبِ پیام</h3>
اگر "تشخیص خودکار" را انتخاب کنید، به محض اینکه یک تگ HTML (&lt; ... &gt;) پیدا شود، پیام به عنوان HTML طبقه بندی میشود.
</p><p><b>انتخاب "تشخیص خودکار" برای اکثر موارد مناسب خواهد بود</b></p><p>
اگر از درست کارکردن "تشخیص خودکار" اطمینان ندارید و پیامی را که میچسبانید به صورت HTML قالب بندی کرده اید، گزینه "HTML" را انتخاب کنید.
ارجاع به منابع خارجی (مانند تصویرها) لازم است به URL کامل صورت پذیرد، یعنی با http:// شروع شود (برخلاف تصویرهای الگوها).
بقیه قالب بندی متن کاملا به شما بستگی دارد.
<p>اگر می‌خواهید که پیام به صورت متن ساده باشد، "متن" را انتخاب کنید.
</p><p>
این اطلاعات برای ایجاد یک نسخه متنی از یک پیام HTML و یا یک نسخه HTML از یک پیام متنی به کار می‌رود.
این قالب بندی به شرح زیر خواهد بود:<br/>
اصلی   HTML -&gt; متنی<br/>
<ul>
<li>متن <b>پررنگ</b> بین <b>علامت -*</b>, <b>ایتالیک</b> بین <b>علامت -/</b>قرار میگیرد</li>
<li>لینکهای دور متن به متن و URL که بین براکت قرار میگیرد جایگزین میشود</li>
<li>بلوک های بزرگ متن در ستون 70 شکسه می‌شوند</li>
</ul>
اصلی متن  -&gt; HTML<br/>
<ul>
<li>خطهای جدید دو تایی با یک &lt;p&gt; (پاراگراف) جایگزین میشوند</li>
<li>خطهای جدید تکی با یک &lt;br /&gt; (شکست خط) جایگزین میشوند</li>
<li>نشانی های ایمیل قابل کلیک کردن میشوند</li>
<li>URL ها قابل کلیک میشوند. URL می‌توانند به هرکدام از شکلهای زیر باشند:<br/>
<ul><li>http://some.website.url/some/path/somefile.html
<li>www.websiteurl.com
</ul>
لینکهایی که ایجاد میشوند کلاس  "url" و مقصد "_blank" خواهند داشت.
</ul>
<b>هشدار</b>:اگر مشخض کنید که پیام شما متنی است و سپس یک متن HTML در کادر متنی وارد کنید، کاربرهایی که تقاضای پیامهای متن کرده‌اند هم متن HTML دریافت خواهند کرد.