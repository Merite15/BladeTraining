<html>

<body>
    @if ($num == 1)
        <p>The number is one.</p>
    @elseif ($num == 2)
        <p>The number is two.</p>
    @else
        <p>The number is three.</p>
    @endif
    <span @class([
        'p-4',
        'font-bold' => $num,
        'bg-red' => $num,
    ])> test</span>


</body>

</html>
