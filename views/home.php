<div class="container-fluid">
	<div class="jumbotron">
		<h2>Usuarios Cadastrados</h2>
		<p>Total de Usuarios Cadastrados: <?php echo $total_usuarios; ?></p>
		

		<table class="table">
		<thead class="thead-dark">
		    <tr>
		        <th scope="col">Id</th>
		        <th scope="col">Nome</th>
		        <th scope="col">Cpf</th>
		        <th scope="col">Email</th>
		        <th scope="col">Telefone</th>
		    </tr>
		</thead>
		<tbody>
		    <?php
		    foreach ($lista_u as $item):
		        ?>
		        <tr>
		            <td><?php echo $item['id']; ?></td>
		            <td><?php echo $item['nome']; ?></td>
		            <td><?php echo $item['cpf']; ?></td>
		            <td><?php echo $item['email']; ?></td>
		            <td><?php echo $item['telefone']; ?></td>
		        </tr>
		    <?php endforeach; ?>
		</tbody>
</table>

	</div>
</div>
