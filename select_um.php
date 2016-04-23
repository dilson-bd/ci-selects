<?php
/*MODEL*/
public function select_andamentos()
{           
  $this->db->distinct();
  $this->db->select("Andamento");
  $this->db->order_by("Andamento", "asc");
  $consulta = $this->db->get("lancamentos");
  return $consulta;
}


/*CONTROLLER*/	
$dados['seleciona_andamento'] = $this->m_clientes->select_andamentos();


/*VIEW*/
<select name="andamento" id="andamento" onchange="busca_andamento($(this).val())">
<option value=""></option>
<? foreach($seleciona_andamento -> result() as $linha): ?>			
<option value="<?= isset($tipo) ? $linha->Andamento : '' ?>"><? echo $linha->Andamento; ?></option>	
<? endforeach; ?>
</select>	
