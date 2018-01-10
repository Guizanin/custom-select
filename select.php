<?php include "includes/structure/header-default.php" ?>
	<body>
		
		
		<!-- SELECT -->
		<div class="row m-t-20">
			<div class="col md-75 p-lr-30">
				<h3>Select</h3>
				<div class="wrap-select">
					<div class="c-select m-r-10 w150" data-el="select">
						<div class="top">
							<span class="selected">Select</span>
							<input type="text" class="input-select">
							<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i>
						</div>
						<ul class="cmp-select" data-el="cmp-select">
							<li class="item-select">1</li>
							<li class="item-select">2</li>
							<li class="item-select">3</li>
							<li class="item-select">4</li>
						</ul>
						
					</div>
					<div class="c-select w150" data-el="select">
						<div class="top">
							<span class="selected">Select</span>
							<input type="text" class="input-select">
							<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i>
						</div>
						<ul class="cmp-select" data-el="cmp-select">
							<li class="item-select">5</li>
							<li class="item-select">6</li>
							<li class="item-select">7</li>
							<li class="item-select">8</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<xmp>
		UTILIZAÇÃO DO SELECT:
		- A class "wrap-select" é necessária para o correto funcionamento da estrutura;
		- Temos a class ".icon" nela há o [data-open] e o [data-closed], neles conterão as class que serão trocadas
	toda vez o houver a ação do slideUp/Down do menu.
		- a UL "cmp-select" é quem faz o slideUp/Down

		</xmp>
		<!-- DROPDWON -->
		<div class="row m-t-10">
			<div class="col md-50 sm-50 p-lr-30">
				<h3>Dropdown multiníveis com ícones variados	</h3>
				<div class="wrap-menu-dropdown m-t-10" data-sync="yes">
					<!--1 linha drop -->
					<div class="w200 menu-dropdown m-b-10" data-el="dropdown">
						<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
						<div class="sub-menu" data-el-open="dropdown">
							sdcddc
							<br/>
							<br/>
						</div>
					</div>
					<!--1 linha drop -->
					<div class="w200 menu-dropdown m-b-10" data-el="dropdown">
						<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
						<div class="sub-menu" data-el-open="dropdown">
							sdcddc
							<br/>
							<br/>
						</div>
					</div>
					<!--1 linha drop -->
					<div class="w200 menu-dropdown m-b-10" data-el="dropdown">
						<div class="title">menu dropdown<i class="icon icon-reply" data-open="icon-redo2" data-closed="icon-reply"></i></div>
						<div class="sub-menu" data-el-open="dropdown">
							<!--1 conteudo sub-menu -->
							<div class="wrap-menu-dropdown" data-sync="yes">
								<!--2 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!--2 conteudo sub-menu -->
										sdcddc
										<br/>
										<br/>
									</div>
								</div>

								<!--2 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!--2 conteudo sub-menu -->
										sdcddc
										<br/>
										<br/>
									</div>
								</div>
								<!--2 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!--2 conteudo sub-menu -->
										<div class="wrap-menu-dropdown">
											<!--3 linha drop -->
											<div class="w200 menu-dropdown" data-el="dropdown">
												<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
												<div class="sub-menu" data-el-open="dropdown">
													<!--3 conteudo sub-menu -->
													sdcddc
													<br/>
													<br/>
												</div>
											</div>
											<!--3 linha drop -->
											<div class="w200 menu-dropdown" data-el="dropdown">
												<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
												<div class="sub-menu" data-el-open="dropdown">
													<!--3 conteudo sub-menu -->
													sdcddc
													<br/>
													<br/>
												</div>
											</div>
											<!--3 linha drop -->
											<div class="w200 menu-dropdown" data-el="dropdown">
												<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
												<div class="sub-menu" data-el-open="dropdown">
													<!-- conteudo sub-menu -->
													sdcddc
													<br/>
													<br/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<xmp style="font-size: 15px;line-height: 20px;">
	UTILIZAÇÃO do dropdown multiníveis, basta:
	- copiar o html abaixo;
	- data-sync="yes" é usado para descrever um menu sincronizado e deixá-lo sem esse data caracterizá-o em um dropdown comum;
	- data-el="dropdown" é o elemento individual dropdown, ou, primeiro nível;
	- A class ".title" é o elemento clicável do menu;
	- Temos a class ".icon" nela há o [data-open] e o [data-closed], neles conterão as class que serão trocadas
	toda vez o houver a ação do slideUp/Down do menu.
	- data-el-open="dropdown" é a estrutura do Up/Down do menu;
	*para reproduzir vários menus um dentro do outro, é necessário colocar a estrutura completa, iniciando no  <div class="wrap-menu-dropdown"

	<div class="wrap-menu-dropdown" data-sync="yes">
		<!--1 linha drop -->
		<div class="w200 menu-dropdown m-b-10" data-el="dropdown">
			<div class="title">menu dropdown<i class="icon icon-reply" data-open="icon-redo2" data-closed="icon-reply"></i></div>
			<div class="sub-menu" data-el-open="dropdown">
				<!--1 conteudo sub-menu -->
				<div class="wrap-menu-dropdown" data-sync="yes">
					<!--2 linha drop -->
					<div class="w200 menu-dropdown" data-el="dropdown">
						<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
						<div class="sub-menu" data-el-open="dropdown">
							<!--2 conteudo sub-menu -->
							<div class="wrap-menu-dropdown" data-sync="no">
								<!--3 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!--3 conteudo sub-menu -->
										sdcddc
										<br/>
										<br/>
									</div>
								</div>
								<!--3 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!--3 conteudo sub-menu -->
										sdcddc
										<br/>
										<br/>
									</div>
								</div>
								<!--3 linha drop -->
								<div class="w200 menu-dropdown" data-el="dropdown">
									<div class="title">menu dropdown<i class="icon icon-arrow-down" data-open="icon-arrow-up" data-closed="icon-arrow-down"></i></div>
									<div class="sub-menu" data-el-open="dropdown">
										<!-- conteudo sub-menu -->
										sdcddc
										<br/>
										<br/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</xmp>



<?php include "includes/structure/footer-default.php" ?>
