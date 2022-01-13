MODELO CONCEITUAL BANCO DE DADOS BLOG - MER

ENTIDADES:
	autor
	usuario
	posts
	comentarios
	likes
	tags
ATRIBUTOS
	autor
		id
		nome
		descricao
		avatar - nome de usuario
		senha
		email
		telefone
		
	usuario
		id
		nome
		descricao
		avatar - nome de usuario
		senha
		email
		telefone
		
	posts
		id
		titulo
		conteudo
		tag
		
	comentarios
		id
		contandor
		data e hora
		conteudo
		autor
		ip do autor
		email autor
		nome do autor
		
	likes
		id
		contador
		autor
		ip do autor
		email autor
		nome do autor
		
	tag 
		id
		titulo
		
RELACIONAMENTOS
	posts 1 - n autor
	posts n - n comentarios
	posts n - n likes
	posts n - n tags
	usuario 1 - n comentarios
	usuario 1 - n likes
	autor 1 - n comentarios
	autor 1 - n likes
