INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('Steven Spielberg');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('Martin Scorsese');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('Quentin Tarantino');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('Sam Mendes');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('George Lucas');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('James Cameron');
INSERT INTO `mydb`.`diretor` (`nome`) VALUES ('Woody Allen');

INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Nicolas Cage');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Brad Pitt');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Adam Sandler');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Julia Roberts');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Robert De Niro');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Denzel Washington');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Bruce Willis');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('John Wayne');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Angelina Jolie');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Sandra Bullock');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Sylvester Stallone');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Nicole Kidman');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Ben Stiller');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Mel Gibson');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Johnny Depp');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Meryl Streep');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Jennifer Aniston');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Demi Moore');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Penélope Cruz');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Jodie Foster');
INSERT INTO `mydb`.`ator` (`nome`) VALUES ('Fulano');


INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('Arachnophobia', '1990', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('De Volta para o Futuro III', '1990', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('Jurassic Park', '1993', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('A Lista de Schindler', '1993', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('MIB - Homens de Preto', '1997', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('	Jurassic World', '2015', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('O Bom Gigante Amigo (The BFG)', '2016', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('O Primeiro Homem', '2018', '1');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('Alvin e os Esquilos – Na Estrada', '2015', '5');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('Star Wars: O Despertar da Força', '2015', '6');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('Victor Frankenstein', '2015', '3');
INSERT INTO `mydb`.`filme` (`titulo`, `ano`, `Diretor_idDiretor`) VALUES ('XYZ', '2017', '1');


INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('1', '9');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('1', '10');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('1', '11');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('2', '12');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('2', '13');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('2', '14');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('3', '15');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('3', '16');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('3', '17');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('3', '18');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('4', '19');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('4', '20');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('5', '21');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('5', '22');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('6', '23');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('6', '24');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('6', '25');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('7', '26');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('7', '27');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('7', '28');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('7', '9');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('8', '15');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('8', '12');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('8', '17');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('9', '10');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('9', '11');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('9', '23');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('10', '19');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('10', '27');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('10', '14');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('11', '20');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('11', '21');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('11', '22');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('11', '23');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '29');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '10');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '11');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '12');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '16');
INSERT INTO `mydb`.`filme_has_ator` (`Filme_idFilme`, `Ator_idAtor`) VALUES ('12', '18');



/*
	Filmes que o ator de nome “FULANO” participou
*/
SELECT filme.idFilme, filme.titulo from filme inner join filme_has_ator on filme_has_ator.Filme_idFilme = filme.idFilme
inner join ator on filme_has_ator.Ator_idAtor = Ator.idAtor where ator.nome like 'Fulano';


/*
	Atores do filme com título “XYZ”
*/
SELECT ator.idAtor, ator.nome from filme_has_ator inner join filme on filme_has_ator.Filme_idFilme = filme.idFilme 
inner join ator on filme_has_ator.Ator_idAtor = ator.idAtor where filme.titulo like 'XYZ';


/*
	Listar os filmes do ano 2015 ordenados pelo quantidade de atores participantes e
	pelo título em ordem alfabética.
*/
SELECT distinct filme.idFilme, filme.titulo from filme inner join filme_has_ator on filme_has_ator.Filme_idFilme = filme.idFilme
where filme.ano >= '2015' GROUP BY filme_has_ator.Ator_idAtor ORDER BY filme.titulo;

/*
	Listar os atores que trabalharam em filmes cujo diretor foi “SPIELBERG”
*/
SELECT ator.idAtor, ator.nome from filme_has_ator inner join filme on filme_has_ator.Filme_idFilme = filme.idFilme 
inner join ator on filme_has_ator.Ator_idAtor = ator.idAtor inner join diretor on filme.Diretor_idDiretor = diretor.idDiretor
where diretor.nome like '%Spielberg';

