<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fiche d'inscription</title>
    <style>
        .my-class {
            margin-right: 10;
            margin-top: 10;
            margin-bottom: 20;
        }

    </style>
</head>
<body style="font-family: 'XB Riyaz',  monospace, sans-serif; direction: rtl">
    <a class="navbar-brand" style="margin:auto;"> <img src="../public/images/entete.png" height="150" width="700" /> </a><br><br>

    إطار خاص بالمؤسسة
    <div style="border: 1px solid; margin-top 1px">
        <div class="my-class">
            يشهد مدير المركز لدروس الدعم المدرسي وتحصيل اللغات السيد زكرياء الوسيم
            <br />
            أن التلميذ (ة): {{$data->person->prenom . " " . $data->person->nom}} الذي يتابع دراسته لموسم: 2020-2021
            بالمؤسسة التعليمية
            {{$data->person->etablissement}}
            <br />
            قد سجل (ت) بالمؤسسة بتاريخ {{date("Y-m-d")}} تحت رقم: {{$data->person->id}}
            <br />
        </div>
    </div>
    <br />
    <div style="margin-top: 6rem;"></div>
    <a style="margin-top: 50px;"> <img src="../public/images/entete.png" height="150" width="700" /> </a><br><br>

    إطار خاص بالتلميذ
    <div style="border: 1px solid; margin-top: 5px;">
        <div class="my-class">
            أنا الموقع أسفله السيد (ة) {{$data->person->prenom . " " . $data->person->nom}} ألتزم باحترام بنود:
            <br />
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

            وأوافق على كل أشكال العقوبات التأديبية المتخذة من طرف إدارة المؤسسة في حالة الإخلال ببنود النظام الداخلي ونظام القسم
            وكذا الميثاق الأخلاقي للمؤسسة.
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            توقيع التلميذ
            <br><br><br>
        </div>
    </div>
</body>

</html>
