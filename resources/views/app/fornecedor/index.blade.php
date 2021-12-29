<h3>Fornecedores</h3>


{{--
@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados.</h3>
@endif

@if($fornecedores[0]['status'] == 'N')
    Fornecedor Inativo!
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Unless mensage: Fornecedor Inativo!
@endunless

--}}

@isset($fornecedores)
Fornecedor: {{ $fornecedores[1]['nome']}}
<br>
Status: {{ $fornecedores[1]['status']}}
<br>
@isset($fornecedores[1]['cnpj'])
CNPJ: {{ $fornecedores[1]['cnpj']}}
@endisset
<br>
@endisset
