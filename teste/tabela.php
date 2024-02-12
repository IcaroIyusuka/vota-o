<?php
include('conexao.php');

$result_nota = "SELECT SUM(voto.ntjeans) AS jeans, 
SUM(voto.ntsocial) AS social,
SUM(voto.nttipica) As tipica,
party.nome as nome
FROM party
INNER JOIN voto ON
voto.id_part=party.IDPAR


GROUP BY party.nome
ORDER BY jeans DESC, social DESC, tipica DESC";
                
                
$resultado_nota=mysqli_query($con, $result_nota);
?>
<table class="table table-hover table-striped-columns table-bordered">
  <thead>
    <tr class="table-active table-dark">
      <th scope="col">PARTICIPANTES</th>
      <th scope="col">TRAJE JEANS</th>
      <th scope="col">TRAJE GALA</th>
      <th scope="col">TRAJE TIPICA</th> 
    </tr>
  </thead>
  <tbody>
<?php
if(($resultado_nota) AND ($resultado_nota->num_rows !=0)){
    while($row_nota = mysqli_fetch_assoc($resultado_nota)){
?>
    <tr>
      <th> <?php echo $row_nota ['nome'] . "<br>"?></th>
      <td> <?php echo $row_nota ['jeans'] . "<br>"?></td>
      <td> <?php echo $row_nota ['social'] . "<br>"?></td>
      <td> <?php echo $row_nota ['tipica'] . "<br>"?></td>
    </tr>
    <?php
      }
}else{

}

?>
</tbody>
</table>
<?php

$result_nota = "SELECT
SUM(voto.ntsimpatia) AS simpatia,
party.nome as nome
FROM party
INNER JOIN voto ON
voto.id_part=party.IDPAR


GROUP BY party.nome
ORDER BY simpatia DESC";
                
                
$resultado_nota=mysqli_query($con, $result_nota);
?>
<table class="table table-hover table-striped-columns table-bordered"><br><br>
  <thead>
    <tr class="table-active table-dark">
      <th scope="col">PARTICIPANTES</th>
      <th scope="col">QUESITO SIMPATIA</th>
    </tr>
  </thead>
  <tbody>
<?php
if(($resultado_nota) AND ($resultado_nota->num_rows !=0)){
    while($row_nota = mysqli_fetch_assoc($resultado_nota)){
?>
    <tr>
      <th> <?php echo $row_nota ['nome'] . "<br>"?></th>
      <td> <?php echo $row_nota ['simpatia'] . "<br>"?></td>
    </tr>
    <?php
      }
}else{

}
?>
</tbody>
</table>

<?php

$result_nota = "SELECT
SUM(voto.ntjeans)+SUM(voto.ntsocial)+ SUM(voto.nttipica) AS total,
party.nome as nome
FROM party
INNER JOIN voto ON
voto.id_part=party.IDPAR


GROUP BY party.nome
ORDER BY total DESC";
                
                
$resultado_nota=mysqli_query($con, $result_nota);
?>
<table class="table table-hover table-striped-columns table-bordered"><br><br>
  <thead>
    <tr class="table-active table-dark">

      <th scope="col">PARTICIPANTES</th>
      <th scope="col">TOTAL DE PONTOS</th>
    </tr>
  </thead>
  <tbody table-group-divider>
<?php
if(($resultado_nota) AND ($resultado_nota->num_rows !=0)){
    while($row_nota = mysqli_fetch_assoc($resultado_nota)){
?>
    <tr>

      <th> <?php echo $row_nota ['nome'] . "<br>"?></th>
      <td> <?php echo $row_nota ['total'] . "<br>"?></td>
    </tr>
<?php
      }
}else{
 
}
?>
</tbody>
</table>
<li><a href="Sair.php">Sair</a></li>
