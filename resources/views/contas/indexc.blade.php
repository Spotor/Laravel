<html>
<head>

</head>
<body>
    <h1>Contas</h1>
    @foreach($contas as $conta)
        Número: {{ $conta->id }} <br>
        Valor: {{ $conta->valor }} <br>
        Vencimento: {{ $conta->data_vencimento }} <br>
        Paga:  {{$conta->statusConta->status}}
        <br><br>
    @endforeach 
</body>
</html>