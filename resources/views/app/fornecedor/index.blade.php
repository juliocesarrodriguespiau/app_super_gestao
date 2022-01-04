<h3>Fornecedores</h3>

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[2]['nome']}}
    <br>
    Status: {{ $fornecedores[2]['status']}}
    <br>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? 'Não informado'}}
    <br>
    Telefone: ({{ $fornecedores[2]['ddd'] ?? ''}}) {{ $fornecedores[2]['telefone'] ?? ''}}
    @switch ($fornecedores[2]['ddd'])
        @case ('11')
        São Paulo - SP
        @break
        @case ('85')
        Fortaleza - CE
        @break
        @case ('32')
        Juiz de Fora - MG
        @break
        @default
        Estado não identificado!
    @endswitch
@endisset

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

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
            Vazio
        @endempty
    @endisset

--}}

