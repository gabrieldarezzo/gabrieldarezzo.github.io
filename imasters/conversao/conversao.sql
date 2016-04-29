CREATE DATABASE conversao
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;
  
USE conversao;


CREATE TABLE pedidos(
	 id int(8) primary key auto_increment
	,dia CHAR(2) 
	,mes CHAR(2) 
	,ano CHAR(4) 
)Engine=InnoDb;

INSERT INTO pedidos (dia, mes, ano) VALUES ('06', '10', '1992');
INSERT INTO pedidos (dia, mes, ano) VALUES ('22', '04', '2016');
INSERT INTO pedidos (dia, mes, ano) VALUES ('22', '12', '2018');
INSERT INTO pedidos (dia, mes, ano) VALUES ('30', '30', '2018'); /*Data Invalida de proposito*/



ALTER TABLE pedidos add dt_real DATE;



SELECT CONCAT("UPDATE pedidos SET dt_real = '", ano,'-',mes,'-',dia, "' where id = ", id, ';') as INSERT_SQL FROM pedidos WHERE day(CONCAT(ano,'-',mes,'-',dia)) IS NOT NULL;


/*
saida:
UPDATE pedidos SET dt_real = '1992-10-06' where id = 1;
UPDATE pedidos SET dt_real = '2016-04-22' where id = 2;
UPDATE pedidos SET dt_real = '2018-12-22' where id = 3;
--o 4 Registro não é exibido pelo fato da função day() retornar NULL
*/











