<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Salam</title>
</head>
<body style="font-family: 'XB Riyaz',  monospace, sans-serif; direction: rtl">
إطار خاص بالمؤسسة
<div style="border: 1px solid">
    يشهد مدير المركز لدروس الدعم المدرسي وتحصيل اللغات السيد .................
    <br/>
    أن التلميذ (ة): {{$data->person->prenom . " " . $data->person->nom}} الذي يتابع دراسته لموسم: 2020-2021
    بالمؤسسة التعليمية
    {{$data->person->etablissement}}
    <br/>
    قد سجل (ت) بالمؤسسة بتاريخ {{date("Y-m-d")}} تحت رقم: {{$data->person->id}}
    <br/>
</div>
<br/>
إطار خاص بالتلميذ
<div style="border: 1px solid">
    أنا الموقع أسفله السيد (ة)  {{$data->person->prenom . " " . $data->person->nom}}            ألتزم باحترام بنود:
    <br/>
    <ul>
        <li>
            الميثاق الأخلاقي للمؤسسة
        </li>
        <li>
            النظام الداخلي للمؤسسة
        </li>
        <li>
             النظام الداخلي للقسم
        </li>
    </ul>

    وأوافق على كل أشكال العقوبات التأديبية المتخذة من طرف إدارة المؤسسة في حالة اإلخالل ببنود النظام الداخلي ونظام القسم
    وكذا الميثاق األخالقي للمؤسسة.
    <br/>
    توقيع التلميذ
</div>
</body>

</html>
