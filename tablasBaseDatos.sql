CREATE TABLE productos
(
codigo   smallint    unsigned not null,
nombre varchar(50) not null,
descripcion varchar(150)  not null,
primary key (codigo)
);

CREATE TABLE clientes
(
dni   varchar(9)  not null,
nombre varchar(50) not null,
apellidos varchar(80)  not null,
direccion varchar(100) not null,
telefono int  not null,
email varchar(35) not null,
primary key (dni)
);

CREATE TABLE asociaciones
(
id   int AUTO_INCREMENT not null,
dni_cli varchar(9) not null,
codigo_pro int  not null,
primary key (id)
);
