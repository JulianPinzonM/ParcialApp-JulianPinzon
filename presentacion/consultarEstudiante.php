<?php
include 'presentacion/index.php';
$Estudiante = new Estudiante();
$estudiantes = $Estudiante -> consultarTodos(); 
?>
<div class="container">
	<div class="row mt-3">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Consultar Estudiante</h5>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							
							<tr>								
								<th scope="col">Codigo</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
                                                                <th scope="col">Fecha Llegada</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$i = 1;
							foreach ($estudiantes as $esActual){
							    echo "<tr>";
							    echo "<td>" . $i++ . "</td>";
							    echo "<td>" . $esActual -> getCodigo() . "</td>";
							    echo "<td>" . $esActual -> getNombre() . "</td>";
							    echo "<td>" . $esActual -> getApellido() . "</td>";
							    echo "<td>" . $esActual -> getFecha_nacimiento() . "</td>";
							    echo "<td><i class='fas fa-edit'></i></td>";
							    echo "</tr>";							    
							}
							?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>