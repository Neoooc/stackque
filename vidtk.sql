create database Film;

use Film;

create table Clan
(
IDClana bigint not null primary key,
Ime nvarchar(100) not null,
Prezime nvarchar(100) not null
);

create table Film
(
IDFilma bigint not null primary key,
Naziv nvarchar(100) not null
);

create table posudba
(
IDPosudbe bigint primary key,
FilmID bigint not null,
ClanID bigint not null,
DatumPosudbe date not null,
RokZaVracanje date not null,
DatumVracanja date null,
Zakasnina decimal(7,2) null,
foreign key(FilmID) references Film(IDFilma),
foreign key(ClanID) references Clan(IDClana)
);

