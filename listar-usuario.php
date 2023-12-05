<h1>Lista Usuario</h1>
<?php
$sql ="SELECT* FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd >0){
    print"<table>";
    while($row = $res-> fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."<td>";
        print "<td>".$row->email."<td>";
       
        print "<td> 
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn bnt-success'> Editar</button>  

                <button onclick=\"if(confirma('Tem certeza?')){location.href='?page=salvar&acao=excluir&id".$row->id."';} else{false}\" class='btn btn-danger'>Excluir</button>
        
        </td>";
        print "</tr>";
    }
    print"</table>";
}else{
    print" Não encontrou usuarios";
}
