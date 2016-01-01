use trabajo_de_curso

show tables

create table empleados
(
id_empleado int not null auto_increment primary key,
nombre varchar (250),
telefono varchar (50),
correo varchar (100)
)

select * from empleados

select * from empleados order by nombre desc

insert into empleados
values
(null,'Rodrigo Catro','9898978','roro@mama.com')


select * from empleados where id_empleado=1

update empelados
set
nombre='',
telefono='',
correo=''
where
id_empleado=1

update empleados set nombre='Rosa Salazar', telefono='25235235', correo='rosa@hotmail.com' where id_empleado=2

delete from empleados
where
id_empleado=5

