drop database if exists libreria;
create database libreria;
use libreria;

drop table if exists autores;
create table autores(
codigoAutor int auto_increment primary key,
nombre varchar(100),
AñoNacimiento date
);

drop table if exists generos;
create table generos(
id int auto_increment not null primary key,
genero varchar(50)
);

drop table if exists libros;
create table libros(
codigoLibro int auto_increment not null primary key,
titulo varchar(100) not null,
saga varchar(100),
autor int,
editorial varchar(100),
año_publicacion int,
precio double(4,2),
id_genero int not null,
foreign key (autor) references autores(codigoAutor),
foreign key (id_genero) references generos(id)
);

drop table if exists existencias;
create table existencias(
id int auto_increment not null primary key,
idLibro int not null,
stock int,
ultimo_inventario date,
foreign key (idLibro) references libros(codigoLibro)
);

insert into generos (genero) values ('Aventuras'),('Ciencia ficción'),('Fantasía'),('Terror'),('Suspense'),('Misterio'),('Biografías'),
('Humor'),('Infantil'),('Manga');

insert into autores (nombre,AñoNacimiento) values ('Julio Verne', '1828-02-08'), ('Daniel Defoe', '1660-10-10'), ('Javier Reverte', '1944-07-14'),
('Miguel de Cervantes', '1547-09-29'), ('Donate Aparicio, Felix Dativo ', '1965-12-30'), ('Kass Morgan', '1984-07-21'), ('Suzanne Collins', '1962-08-10'),
('J.K. Rowling', '1965-07-31'), ('James Dashner', '1972-11-26'), ('Brandon Sanderson', '1975-12-19'), ('Stephen King', '1947-09-21'),
('Camilla Läckberg', '1974-08-30'), ('Arthur Conan Doyle', '1859-05-22'), ('Stieg Larsson', '1954-08-15'), ('David Lagercrantz', '1962-09-04'),
('Stefan Zweig', '1881-11-28'), ('Elvira Lindo', '1962-01-23'), ('Roberto Santiago', '1968-11-30'), ('Eiichirō Oda', '1975-01-01'), 
('Masashi Kishimoto', '1974-11-08'), ('One', '1986-10-29'), ('Koyoharu Gotouge', '1989-05-05'), ('Hirohiko Araki', '1960-06-07'), 
('Tite Kubo', '1977-06-26'), ('Hajime Isayama', '1986-08-29'), ('Akira Toriyama', '1955-04-05'), ('Kentaro Miura', '1966-07-11'), 
('Yoshiyuki Sadamoto', '1962-01-29'), ('Lope de Vega', '1562-11-25'), ('William Shakespeare', '1564-04-23'), ('Molière', '1622-01-15'),
('Pedro Calderón de la Barca', '1600-01-17'), ('Oscar Wilde', '1854-09-16');

#Aventura
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values 
('Viaje al centro de la Tierra', null, 1, 'Susaeta', 1894, 11.87, 1), 
('Robinson Crusoe', null, 2, 'Grupo Anaya, S.A', 1719, 9.90, 1), 
('La vuelta al mundo en ochenta días', null, 1, 'RBA', 1872, 12.35, 1), 
('El sueño de África', 'Trilogía de África', 3, 'Plaza & Janés', 1996, 10.40, 1), 
('Vagabundo en África', 'Trilogía de África', 3, 'Debolsillo', 2000, 10.40, 1), 
('Los caminos perdidos de África', 'Trilogía de África', 3, 'Debolsillo', 2002, 10.40, 1), 
('De la Tierra a la Luna', null, 1, 'Nordica', 1865, 28.00, 1), 
('Don Quijote de la Mancha', null, 4, 'Alfaguara', 1605, 15.00, 1), 
('La mala zorra', null, 5, 'HRM Ediciones', 2008, 18.95, 1), 
('La isla de Caravaggio', null, 5, 'Pamies', 2022, 22.50, 1);

#Ciencia ficción
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values 
('Los 100', 'Los 100', 6,'Little, Brown and Company', 2013, 14.72, 2), 
('Dia 21', 'Los 100', 6, 'Little, Brown and Company', 2014, 21.00, 2), 
('Vuelta A La Tierra', 'Los 100', 6, 'Little, Brown and Company', 2015, 27.35, 2), 
('Rebelión', 'Los 100', 6, 'B de Blok', 2016, 35.00, 2), 
('Los Juegos Del Hambre', 'Los Juegos Del Hambre', 7, 'Scholastic Corporation', 2008, 15.25, 2),
('Los Juegos Del Hambre: En Llamas', 'Los Juegos Del Hambre', 7, 'Scholastic Corporation', 2009, 20.55, 2), 
('Los Juegos Del Hambre: Sinsajo', 'Los Juegos Del Hambre', 7, 'Scholastic Corporation', 2010, 22.35, 2),
('El Corredor Del Laberinto', 'El Corredor Del Laberinto', 9, 'V&R', 2009, 17.95, 2),
('El Corredor Del Laberinto: Las Pruebas', 'El Corredor Del Laberinto', 9, 'V&R',2010, 17.95, 2),
('El Corredor Del Laberinto: La Cura Total', 'El Corredor Del Laberinto', 9, 'V&R', 2011, 17.95, 2);

#Fantasía
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values 
('Harry Potter y la piedra filosofal', 'Harry Potter', 8, 'Salamandra', 1997, 30.40, 3), 
('Harry Potter y la cámara secreta', 'Harry Potter', 8, 'Salamandra', 1998, 30.40, 3), 
('Harry Potter y el prisionero de Azkaban', 'Harry Potter', 8, 'Salamandra', 1999, 30.40, 3),
('Harry Potter y el cáliz de fuego', 'Harry Potter', 8, 'Salamandra', 2000, 30.40, 3), 
('Harry Potter y la Orden del Fénix', 'Harry Potter', 8, 'Salamandra', 2003, 30.40, 3),
('Harry Potter y el misterio del príncipe', 'Harry Potter', 8, 'Salamandra', 2005, 30.40, 3), 
('Harry Potter y las reliquias de la Muerte', 'Harry Potter', 8, 'Salamandra', 2007, 30.40, 3),
('El camino de los reyes', 'El archivo de las tormentas', 10, 'S.A Ediciones B', 2010, 33.15, 3), 
('Palabras radiantes', 'El archivo de las tormentas', 10, 'S.A Ediciones B', 2014, 33.15, 3),
('Juramentada', 'El archivo de las tormentas', 10, 'S.A Ediciones B', 2017, 33.15, 3), 
('El ritmo de la guerra', 'El archivo de las tormentas', 10, 'S.A Ediciones B', 2020, 33.15, 3);

#Terror
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values
('La Torre Oscura: El Pistolero', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 1982, 25.00, 4),
('La Torre Oscura: La llegada de los tres', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 1987, 28.00, 4),
('La Torre Oscura: Las Tierras Baldías', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 1991, 24.00, 4),
('La Torre Oscura: Mago y Cristal', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 1997, 16.35, 4),
('La Torre Oscura: Lobos del Calla', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 2003, 22.75, 4),
('La Torre Oscura: Canción de Susannah', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 2004, 27.10, 4),
('La Torre Oscura: La Torre Oscura', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 2012, 35.00, 4),
('La Torre Oscura: El viento por la cerradura', 'La Torre Oscura', 11, 'Donald M. Grant, Publisher', 2012, 45.00, 4),
('El Resplandor', 'El Resplandor', 11, 'Viking Press', 1986, 35.75, 4),
('El Resplandor: Doctor Sueño', 'El Resplandor', 11, "Charles Scribner's Sons", 2013, 55.75, 4),
('IT', null, 11, 'Viking Press', 1977, 19.95, 4);

#Suspense
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values 
('La princesa de hielo', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2007, 9.50, 5),
('Los gritos del pasado', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2008, 9.50, 5),
('Las hijas del frío', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2009, 9.50, 5),
('Crimen en directo', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2010, 9.50, 5),
('Las huellas imborrables', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2011, 9.50, 5),
('La sombra de la sirena', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2012, 9.50, 5),
('Los vigilantes del faro', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2013, 9.50, 5),
('La mirada de los ángeles', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2014, 9.50, 5),
('El domador de leones', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2015, 9.50, 5),
('La bruja', 'Los crímenes de Fjällbacka', 12, 'Maeva', 2018, 9.50, 5);

#Misterio
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values
('Estudio Escarlata', 'Sherlock Holmes', 13, 'Ward Lock & Co', 1887, 23.90, 6),
('El signo de los cuatro', 'Sherlock Holmes', 13, "Lippincott's Monthly Magazine", 1990, 27.90, 6),
('El sabueso de los Baskerville', 'Sherlock Holmes', 13, 'Alianza Editorial', 1902, 33.90, 6),
('El valle del terror', 'Sherlock Holmes', 13, 'George H. Doran Company', 1915, 21.85, 6),
('Los hombres que no amaban a las mujeres', 'Millennium', 14, 'Norstedts Förlag', 2005, 67.40, 6),
('La chica que soñaba con una cerilla y un bidón de gasolina', 'Millennium', 14, 'Norstedts Förlag', 2005, 69.40, 6),
(' La reina en el palacio de las corrientes de aire', 'Millennium', 14, 'Norstedts Förlag', 2005, 57.40, 6), 
('Lo que no mata te hace más fuerte', 'Millennium', 15, 'Norstedts Förlag', 2015, 29.40, 6), 
('El hombre que perseguía su sombra', 'Millennium', 15, 'Norstedts Förlag', 2017, 25.60, 6),
('La chica que vivió dos veces', 'Millennium', 15, 'Norstedts Förlag', 2019, 32.80, 6);

#Biografías
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values
('Dios, el diablo y la aventura', null, 3, 'Debolsillo', 2001, 9.45, 7), 
('Soldado de poca fortuna', null, 3, 'RBA Libros', 2001, 90.00, 7),
('El hombre de las dos patrias', null, 3, 'Debolsillo', 2016, 10.40, 7), 
('María Antonieta', null, 16, 'Insel Verlago', 1932, 27.55, 7),
('Conquistador de los mares: la historia de Magallanes', null, 16, null, 1938, 25.00, 7), 
('Balzac: La novela de una vida', null, 16, null, 1920, 25.00, 7),
('Erasmo de Rotterdam', null, 16, 'Ediciones Paidós Ibérica', 1934, 20.00, 7), 
('María Estuardo', null, 16, 'Juventud', 1935, 15.35, 7),
('El mundo de ayer', null, 16, 'Acantilado', 1943, 19.86, 7), 
('Montaigne', null, 16, 'Bermann-Fischer', 1948, 16.60, 7);

#Humor
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values 
('El perro del hortelano', null, 29, null, 1618, 15.00, 7),
('A buen fin no hay mal principio', null, 30, null, 1623, 18.00, 7),
('Las mujeres sabihondas', null, 31, null, null, null, 7),
('La dama duende', null, 32, null, 1629, 21.00, 7),
('Pedro de Urdemalas', null, 4, null, 1610, 15.00, 7),
('El misántropo', null, 31, null, 1666, 21.00, 7),
('Tartufo', null, 31, null, 1669, 18.20, 7),
('Como gustéis', null, 30, null, 1623, 17.50, 7),
('El avaro', null, 31, null, 1668, 16.70, 7),
('La importancia de ser formal', null, 33, null, null, 17.30, 7);

#Infantil
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values
('Manolito Gafotas', 'Manolito Gafotas', 17, 'Alfaguara', 1994, 14.00, 8), 
('Pobre Manolito', 'Manolito Gafotas', 17, 'Alfaguara', 1995, 15.00, 8),
('¡Cómo molo!', 'Manolito Gafotas', 17, 'Alfaguara', 1996, 14.00, 8), 
('Los trapos sucios', 'Manolito Gafotas', 17, 'Alfaguara', 1997, 18.00, 8),
('Manolito on the road', 'Manolito Gafotas', 17, 'Alfaguara', 1998, 14.00, 8), 
('Yo y el imbécil', 'Manolito Gafotas', 17, 'Alfaguara', 1999, 14.75, 8),
('Manolito tiene un secreto', 'Manolito Gafotas', 17, 'Alfaguara', 2002, 12.50, 8), 
('Mejor Manolo', 'Manolito Gafotas', 17, 'Alfaguara', 2012, 16.800, 8),
('Los Once 1. El delantero que volaba al atardecer', 'Los Once', 18, 'PLANETA', 2021, 12.30, 8),
('Los Once 2. El portero con los brazos más largos del mundo', 'Los Once', 18, 'PLANETA', 2022, 12.30, 8);

#Manga
insert into libros (titulo,saga,autor,editorial,año_publicacion,precio,id_genero) values
('Tomos One Piece', 'One Piece', 19, 'Shūeisha', 1997, 6.60, 10),
('Tomos Naruto', 'Naruto', 20, 'Shūeisha', 1999, 7.50, 10),
('Tomos One Punch-Man', 'One Punch-Man', 21, null, 2009, 8.00, 10),
('Tomos Kimetsu no Yaiba', 'Kimetsu no Yaiba', 22, 'Shūeisha', 2016, 8.00, 10),
("Tomos JoJo's Bizarre Adventure", "JoJo's Bizarre Adventure", 23, 'Shūeisha', 1987, 12.00, 10),
('Tomos Bleach', 'Bleach', 24, 'Shūeisha', 2001, 15.00, 10),
('Tomos Shingeki no Kyojin', 'Shingeki no Kyojin', 25, 'Kōdansha', 2009, 8.00, 10),
('Tomos Dragon Ball', 'Dragon Ball', 26, 'Shūeisha', 1984, 9.00, 10),
('Tomos Berserk', 'Berserk', 27, 'Hakusensha', 1989, 15.00, 10),
('Tomos Evangelion', 'Neon Genesis Evangelion', 28, 'Kadokawa Shoten', 1994, 8.00, 10); 

insert into existencias (idLibro,stock,ultimo_inventario) values (1, 100, curdate()), (2, 30, curdate()), (3, 120, curdate()), (4, 100, curdate()),
(5, 80, curdate()), (6, 10, curdate()), (7, 55, curdate()), (8, 100, curdate()), (9, 50, curdate()), (10, 10, curdate()), (11, 70, curdate()), 
(12, 45, curdate()), (13, 70, curdate()), (14, 65, curdate()), (15, 150, curdate()), (16, 100, curdate()), (17, 100, curdate()), (18, 100, curdate()),
(19, 120, curdate()), (20, 130, curdate()), (21, 200, curdate()), (22, 200, curdate()), (23, 200, curdate()), (24, 200, curdate()), (25, 200, curdate()),
(26, 200, curdate()), (27, 200, curdate()), (28, 200, curdate()), (29, 200, curdate()), (30, 200, curdate()), (31, 100, curdate()), (32, 105, curdate()),
(33, 110, curdate()), (34, 100, curdate()), (35, 105, curdate()), (36, 110, curdate()), (37, 100, curdate()), (38, 105, curdate()), (39, 120, curdate()),
(40, 110, curdate()), (41, 150, curdate()), (42, 125, curdate()), (43, 125, curdate()), (44, 125, curdate()), (45, 125, curdate()), (46, 125, curdate()),
(47, 125, curdate()), (48, 125, curdate()), (49, 125, curdate()), (50, 125, curdate()), (51, 125, curdate()), (52, 110, curdate()), (53, 110, curdate()),
(54, 110, curdate()), (55, 110, curdate()), (56, 100, curdate()), (57, 90, curdate()), (58, 100, curdate()), (59, 90, curdate()), (60, 100, curdate()),
(61, 90, curdate()), (62, 20, curdate()), (63, 25, curdate()), (64, 10, curdate()), (65, 20, curdate()), (66, 15, curdate()), (67, 15, curdate()),
(68, 20, curdate()), (69, 10, curdate()), (70, 10, curdate()), (71, 15, curdate()), (72, 100, curdate()), (73, 90, curdate()), (74, 95, curdate()),
(75, 85, curdate()), (76, 90, curdate()), (77, 80, curdate()), (78, 85, curdate()), (79, 95, curdate()), (80, 90, curdate()), (81, 90, curdate()),
(82, 65, curdate()), (83, 65, curdate()), (84, 65, curdate()), (85, 65, curdate()), (86, 65, curdate()), (87, 65, curdate()), (88, 65, curdate()),
(89, 65, curdate()), (90, 50, curdate()), (91, 50, curdate()), (92, 200, curdate()), (93, 200, curdate()), (94, 200, curdate()), (95, 200, curdate()),
(96, 200, curdate()), (97, 200, curdate()), (98, 200, curdate()), (99, 200, curdate()), (100, 200, curdate()), (101, 200, curdate());