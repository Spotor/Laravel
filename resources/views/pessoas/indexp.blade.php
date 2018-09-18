<html>
<head>

</head>
<body>
    <h1>Pagamento - Pessoa</h1>
    @foreach($pessoas as $pessoa)
        Nome: {{ $pessoa->nome }} <br>
        CPF: {{ $pessoa->CPF }} <br>
        Histórico de pagamento:
        @foreach($pessoa->pagamento as $pagamentos)
            <br>{{$pagamentos->salario}}
        @endforeach 
    @endforeach 
</body>
</html>