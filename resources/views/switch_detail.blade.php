<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Detail</title>
</head>
<body>
    {{-- {{ dd($id) }} --}}

    @switch($id)
        @case(20)
            <h3>วัยเด็ก</h3>
            @break
        @case(30)
            <h3>วัยรุ่น</h3>
            @break
        @case(40)
            <h3>วัยทำงาน</h3>
            @break
        @case(50)
            <h3>วัยผู้ใหญ่</h3>
            @break
        @case(60)
            <h3>วัยผู้สูงอายุ</h3>
            @break
        @case(70)
            <h3>วัยชรา</h3>
            @break
            @break
        @default
        <h3>วัยชรามาก</h3>   
    @endswitch
</body>
</html>