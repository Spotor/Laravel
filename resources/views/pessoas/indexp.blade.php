<html>
<head>

</head>
<body>
    <h1>Pagamento - Pessoa</h1>
    @foreach($pessoas as $pessoa)
        Nome: {{ $pessoa->nome }} <br>
        CPF: {{ $pessoa->CPF }} <br>
        Pagamento:
        @foreach($pessoa->pagamento as $pagamentos)
            
        @endforeach
    @endforeach 
</body>
</html>