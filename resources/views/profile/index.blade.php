<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @php
        $data = 1000;
        $status = 2;
    @endphp
    <h1>Ini Adalah Halaman Profile {{ $data }}</h1>
    <br>
    @if($status == 1)
        status kamu lulus
    @elseif($status == 2)
    status kamu lulus 100%
    @else
        Status kamu tidak lulus
    @endphp

    @for ($i = 1; $i <= 10; $i++)
        Angka Ke 1 {{ $i }} <br>
    @endfor

    @for ($i = 1; $i <= 10; $i++)
        @if($i % 2)
        Angka Ke 1 {{ $i }} bilangan genap
        @else
        Angka Ke 1 {{ $i }} bilangan ganjil
    @endfor

    @php
        $warna = '<div style="color: red">abcde</div>'

    @endphp

    {!! $warna !!}

    {{-- abc --}}

</body>
</html>
