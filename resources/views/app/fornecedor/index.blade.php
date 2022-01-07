<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração Atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            <b>Primeira Iteração do Loop!</b>
        @endif
        <br>
        @if($loop->last)
            <b>Última Iteração do Loop!</b>
            <br>
            <b>Total de registros: </b> {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!  
    @endforelse
@endisset

{{--
@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <hr>
    @empty
        Não existem fornecedores cadastrados!  
    @endforelse
@endisset
--}}
{{--
@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não informado'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <hr>   
    @endforeach
@endisset
--}}

{{--
@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]['nome']))
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{ $fornecedores[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não informado'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? ''}}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
--}}
{{-- 
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{ $fornecedores[$i]['status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não informado'}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? ''}}
        <hr>
    @endfor
@endisset
--}}

{{-- 
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
--}}
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

