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

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor