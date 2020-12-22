<?php
class conexion
{	
	public function conexion()
	{
		$con="host='localhost' port=8876 dbname='foparra' user='postgres' password='0424'"; 
		
		if ($con == true)
		{
			//echo "Conexion Realizada Exitosamente";	
		} 
		else{
			//echo "Error en la Conexion";
		}
	}
}
?>