<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<?php

			if($_SESSION["perfil"] == "Administrador"){

			
			echo '
			<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

				<li class="treeview">

								<a href="#">

					<i class="fas fa-folder-open"></i>
					
					<span>Cobranza</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="pendientesCobrar">
							
							<i class="fas fa-edit"></i>
							<span>Cuentas x cobrar</span>

						</a>

					</li>

					<li style="width: 100%">

						<a href="pendientesPagar">
							
							<i class="fas fa-edit"></i>
							<span>Cuentas x pagar</span>

						</a>

					</li>


				</ul>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>


			<li>

				<a href="empleados">

					<i class="fa fa-users"></i>
					<span>Empleados</span>

				</a>

			</li>

			<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>';

			}
				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

			echo'<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>';

		}



if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			
			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-ship"></i>
					
					<span>Cruceros</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="barcos">
							
							<i class="fa fa-ship"></i>
							<span>Cruceros</span>

						</a>

					</li>

					<li style="width: 100%">

						<a href="rutas">
							
							<i class="fas fa-route"></i>
							<span>Rutas cruceros</span>

						</a>

					</li>


				</ul>

			</li>';
		}

			if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Especial"){


			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Reservas crucero</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="administrarReservas">
							
							<i class="fas fa-clipboard-list"></i>
							<span>Administrar Reservacion</span>

						</a>

					</li>

					<li style="width: 100%">

						<a href="reservas-crucero">
							
							<i class="fas fa-plus-circle"></i>
							<span>Crear Reservacion</span>

						</a>

					</li>


					<li>

						<a href="#">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>
						

				</ul>

			</li>';

			}

		?>

		

		</ul>

	 </section>

</aside>