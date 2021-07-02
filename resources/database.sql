CREATE database desculpemas;

CREATE TABLE usuario (
    id serial PRIMARY KEY,
	nome varchar(128) UNIQUE NOT NULL,
	password varchar(32) NOT NULL,
	email varchar(128) UNIQUE NOT NULL,
	data_nascimento date NOT NULL
);

CREATE TABLE desculpa (
    id serial PRIMARY KEY,
	frase text UNIQUE NOT NULL,
	user_void boolean default false,
	categoria varchar(64),
	usuario_id int NOT NULL,
    CONSTRAINT fk_usuario_id
        FOREIGN KEY(usuario_id) 
            REFERENCES usuario(id)
);
