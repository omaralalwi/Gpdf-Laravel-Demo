<!DOCTYPE html>
<html lang="ar">
<head>
    <title>اختبار انشاء ملفات باللغة العربية</title>
    <meta charset='utf-8'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @include('pdf.partials.pdf-styles')
</head>
<body>
<div class="container">
    <h1 class="text-center">مرحباً بالعالم</h1>
    <p class="mb-3">هذا ملف PDF تجريبي تم إنشاؤه باستخدام  Gpdf.</p>
    <p class="mb-3"> مرحبا , هذا اختبار لطريقة عرض الأرقام العربية  1234 </p>

    <h2>تم بناء باكج جي بي دي اف لحل مشكلة المطورين العرب   </h2>
    <h2> في التعامل مع ملفات ال بي دي اف ذات المحتوى العربي  </h2>

    <p class="mb-3">يحتوي ملف PDF هذا على محتوى HTML منسق.</p>
    <p class="mb-3">يمكنك إضافة المزيد من المحتوى هنا، مثل الصور والجداول والقوائم.</p>

    <br>


    <p>
        هذه جملة عربية طويلة تحتوي على العديد من الكلمات لتوضيح كيفية التعامل مع النصوص الطويلة في هذا السياق  هذه فقرة نصية طويلة تحتوي على العديد من الكلمات لتوضيح كيفية التعامل مع النصوص الطويلة في هذا السياق. يمكن أن
        تحتوي هذه الفقرة على معلومات مفصلة وشاملة حول موضوع معین، مما يساعد في تقديم فكرة واضحة وشاملة للقارئ. النصوص
        . الطويلة يمكن أن تكون مقيدة في العديد من الحالات، مثل كتابة مقالات، تقارير، أو حتى في إنشاء محتوى تعليمي
    </p>

    <hr class="mb-3 mt-3">

    <h2> محتوى ديناميكي  </h2>

    <div class="container">
        <p>Parameter 1: {param1}</p>
        <p>Parameter 2: {param2}</p>
        <p>Parameter 3: {param3}</p>
    </div>

    <hr class="mb-3 mt-3">

    <p class="mb-3">يعرض هذا المستند قدرات Dompdf في إنشاء محتوى PDF غني.</p>

    <ul class="mb-3">
        <li>عنصر قائمة 1</li>
        <li>عنصر قائمة 2</li>
        <li>عنصر قائمة 3</li>
    </ul>

    <table class="mb-3">
        <thead>
        <tr>
            <th>رأس الجدول 1</th>
            <th>رأس الجدول 2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>بيانات 1</td>
            <td>بيانات 2</td>
        </tr>
        </tbody>
    </table>

    <hr class="mb-3 mt-3">

    <h2> Dynamic Params </h2>

    <p>{{ $param1 }}</p>

    <p>{{ $param2 }}</p>

    <p>{{ $param3 }}</p>

    <hr class="mb-3 mt-3">

    <p>استمتع بتجربة Gpdf !</p>

</div>
</body>
</html>
