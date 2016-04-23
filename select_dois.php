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
$andamentos = $this->m_clientes->select_andamentos();
$option = "<option value=''></option>";
	foreach($andamentos -> result() as $linha) {
		$option .= "<option value='$linha->Andamento'>$linha->Andamento</option>";			
	}
	$dados['options_andamentos'] = $option;


/*VIEW*/
<select name="andamento" id="andamento" onchange="busca_andamento($(this).val())">
<? echo $options_andamentos; ?>
</select>
