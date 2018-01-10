# custom-select

UTILIZAÇÃO DO SELECT:
		- A class "wrap-select" é necessária para o correto funcionamento da estrutura;
		- Temos a class ".icon" nela há o [data-open] e o [data-closed], neles conterão as class que serão trocadas
	    toda vez o houver a ação do slideUp/Down do menu.
		- a UL "cmp-select" é quem faz o slideUp/Down;
    
    
UTILIZAÇÃO DO DROPDOWN MULTINÍVEIS:
	- copiar o html abaixo;
	- data-sync="yes" é usado para descrever um menu sincronizado e deixá-lo sem esse data caracterizá-o em um dropdown comum;
	- data-el="dropdown" é o elemento individual dropdown, ou, primeiro nível;
	- A class ".title" é o elemento clicável do menu;
	- Temos a class ".icon" nela há o [data-open] e o [data-closed], neles conterão as class que serão trocadas
	toda vez o houver a ação do slideUp/Down do menu.
	- data-el-open="dropdown" é a estrutura do Up/Down do menu;
	
 *para reproduzir vários menus um dentro do outro, é necessário colocar a estrutura completa, iniciando no  <div class="wrap-menu-dropdown"
