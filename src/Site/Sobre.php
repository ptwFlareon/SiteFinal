<?php

namespace Site;

class Sobre {
	
	public function Sobre() {
		$texto =  " O sistema em questão foi desenvolvido utilizando Routing e MVC. Para a modelagem foi utilizado Twig, e para gerenciamento de dependência, utilizamos o Composer.
		
		
					O que é um framework?
					É um conjuntos de códigos de vários projetos que oferecem um desenvolvimento genérico, sendo assim reutilizável.
						
					O que é padrão de projeto?
					São 'bases' de desenvolvimento que foram testadas e aprovadas por vários desenvolvedores e que demonstram agilidade na hora da programação.
						
					Quais as principais categorias de padrões de projetos?
					Comportamento, estrutura e criação.
						
					Qual o principal Padrão de projeto utilizado nessa aplicação?
					O principal padrão é o MVC (Model View Controller).

					";
					
		echo nl2br($texto);

	}
	
}