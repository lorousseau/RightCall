
use rightcall_bdd;
-- lien à ajouter avec les différents classement sur l'attribut idRevue
-- faire les tables de travail (vue ou table en "dur")


drop table IF EXISTS classementFNEGE;
drop table IF EXISTS classementCNRS;
drop table IF EXISTS classementHCERES;
drop table IF EXISTS appelAPublication;
drop table IF EXISTS revue;


CREATE TABLE revue
(
	idRevue int(11) primary key,
    -- #idSJR bigint(20),
	issn text,
    titreRevue text,
    urlSiteRevue text,
    classementCNRS varchar(3),
    classementFNEGE varchar(3),
    classementHCERES varchar(3),
    -- #sjr float,
    -- #hIndex int(11),
    widgetRecap text,
    editeur varchar(300)
);

CREATE TABLE appelAPublication
(
	idAppelAPublication int(11) primary key,
    titreAppel text,
    resume text,
    dateFinSoumission date,
    datePublication date,
	idRevue int(11),
    lien text,
    titreRevueTrouve text,
    sourceCall varchar(45),

    FOREIGN KEY (idRevue) REFERENCES revue(idRevue)
);

CREATE TABLE classementFNEGE
(
	idRevue int(11) ,
    anneeClassement year(4) ,
    classementRevue varchar(3),
		constraint FNEGEkey primary key (idRevue , anneeClassement)
);

CREATE TABLE classementCNRS
(
	idRevue int(11) ,
    anneeClassement year(4) ,
    classementRevue varchar(3),
		constraint CNRSkey primary key (idRevue , anneeClassement)
);

CREATE TABLE classementHCERES
(
	idRevue int(11) ,
    anneeClassement year(4) ,
    classementRevue varchar(3),
		constraint HCERESkey primary key (idRevue , anneeClassement)
);
