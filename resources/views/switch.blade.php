<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
    <h3>คุณอายุเท่าไหร่ ?</h3>
    <h3><a href="{{ Route('switch_detail', ['id' => 20]) }}">อายุ 10 - 20 ปี</a></h3>
    <h3><a href="/switch_detail/30">อายุ 21 - 30 ปี</a></h3>
    <h3><a href="/switch_detail/40">อายุ 31 - 40 ปี</a></h3>
    <h3><a href="/switch_detail/50">อายุ 41 - 50 ปี</a></h3>
    <h3><a href="/switch_detail/60">อายุ 51 - 60 ปี</a></h3>
    <h3><a href="/switch_detail/70">อายุ 61 - 70 ปี</a></h3>
    <h3><a href="/switch_detail/80">อายุ 71 - 80 ปี</a></h3>
</body>
</html>