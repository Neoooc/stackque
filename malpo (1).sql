USE master

CREATE DATABASE Mikroprodaja

USE Mikroprodaja


CREATE TABLE GrupaProizvoda
(	
	IDGrupe		int				PRIMARY KEY,
	Naziv		nvarchar(100)	NOT NULL
)

CREATE TABLE Proizvod
(	
	IDProizvoda			int				PRIMARY KEY,
	Naziv				nvarchar(100)	NOT NULL,
	Cijena				money			NOT NULL,
	GrupaProizvodaID	int				NOT NULL
	FOREIGN KEY (GrupaProizvodaID) REFERENCES GrupaProizvoda(IDGrupe)
)

CREATE TABLE ProdajnoMjesto
(	
	IDProdajnogMjesta		int				PRIMARY KEY,
	Naziv					nvarchar(100)	NOT NULL,
	Adresa					nvarchar(100)	NULL,
	GrupaProizvodaID		int				NOT NULL	
	FOREIGN KEY(GrupaProizvodaID)	REFERENCES	GrupaProizvoda(IDGrupe)
)

CREATE TABLE Zaposlenik
(	
	IDZaposlenik	int				PRIMARY KEY,
	OIB				char(11)			NULL,
	Ime				nvarchar(100)	NOT NULL,
	Prezime			nvarchar(100)	NOT NULL,
	NadredjeniID		int				NULL,
	ProdajnoMjestoID	int			NOT NULL
	FOREIGN KEY (NadredjeniID)	REFERENCES Zaposlenik(IDZaposlenik),
	FOREIGN KEY (ProdajnoMjestoID)	REFERENCES ProdajnoMjesto(IDProdajnogMjesta)
)

ALTER TABLE ProdajnoMjesto
	ADD VoditeljID int NOT NULL	
	FOREIGN KEY (VoditeljID) REFERENCES Zaposlenik(IDZaposlenik)