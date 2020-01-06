USE marcsi_test2; 

-- lien à ajouter avec les différents classement sur l'attribut idRevue
-- faire les tables de travail (vue ou table en "dur")


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
	idRevue int(11) primary key,
    anneeClassement year(4) primary key,
    classementRevue varchar(3)
);

CREATE TABLE classementCNRS
(
	idRevue int(11) primary key,
    anneeClassement year(4) primary key,
    classementRevue varchar(3)
);

CREATE TABLE classementHCERES
(
	idRevue int(11) primary key,
    anneeClassement year(4) primary key,
    classementRevue varchar(3)
);
