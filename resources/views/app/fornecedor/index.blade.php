<h3> Fornecedores </h3>



@if(count($fornecedores)  > 0 && count ($fornecedores) < 10)
    <h3>existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> existem varios fornecedores cadastrados </h3>
@else
    <h3> Não existem funcionarios cadastrados </h3>
@endif