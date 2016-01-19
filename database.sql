create table noticias
(
	id int not null primary key auto_increment,
	imagen varchar(10000) not null,
	titulo_adentro varchar(100) not null,
	titulo_afuera varchar(100) not null,
	texto varchar(1000) not null,
	categoria varchar(40) not null

)