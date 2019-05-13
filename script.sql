DROP TABLE IF EXISTS Intervention;
DROP TABLE IF EXISTS Fichier;
DROP TABLE IF EXISTS Demande;
DROP TABLE IF EXISTS Etudiant;
DROP TABLE IF EXISTS Intervenant;
DROP TABLE IF EXISTS Domaine;
DROP TABLE IF EXISTS Professeur;
DROP TABLE IF EXISTS Enseignement;

--
-- Base de données :  `intervenants_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE Etudiant(
	id_Etudiant INT primary key auto_increment,
	identifiant VARCHAR(255),
	password VARCHAR(255),
	nom VARCHAR(255),
	prenom VARCHAR(255),
	formation VARCHAR(255),
	mail VARCHAR(255)
);

--
-- Déchargement des données de la table `Etudiant`
--

INSERT INTO `etudiant` (`identifiant`, `password`, `nom`, `prenom`, `formation`, `mail`) VALUES
('evandadure', 'evandadure', 'Dadure', 'Evan', 'IDU', 'evan.dadure@gmail.com'),
('thomascormier', 'thomascormier', 'Cormier', 'Thomas', 'IDU', 'thomas.cormier@gmail.com'),
('elisesingsaphangthong', 'elisesingsaphangthong', 'Singsaphangthong', 'Elise', 'IAI', 'tchong@laposte.net'),
('maxenceperso', 'maxenceperso', 'Personnaz', 'Maxence', 'MM', 'maxenceperso@hotmail.net');

--
-- Déchargement des données de la table `Domaine`
--


CREATE TABLE Domaine(
	id_Domaine INT primary key auto_increment,
	label VARCHAR(255)
);

--
-- Déchargement des données de la table `Domaine`
--

INSERT INTO `domaine` (`label`) VALUES
('Informatique et Gestion'),
('Géologie'),
('Endurance'),
('Précision et tir'),
('Bases de données'),
('Sociologie'),
('Technos Web'),
('Combat hippiques');

--
-- Structure de la table `Intervenant`
--

CREATE TABLE Intervenant(
	id_Intervenant INT primary key auto_increment,
	identifiant VARCHAR(255),
	password VARCHAR(255),
	nom VARCHAR(255),
	prenom VARCHAR(255),
	mail VARCHAR(255),
	id_Domaine INT,
	FOREIGN KEY (id_Domaine) REFERENCES Domaine(id_Domaine)
);

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`identifiant`, `password`, `nom`, `prenom`, `mail`, `id_Domaine`) VALUES
('arnaudv', 'arnaudv', 'Vergas', 'Arnaud', 'arnaudv@gmail.com', 1),
('phillipk', 'phillipk', 'Kenwood', 'Phillip', 'phillipk@gmail.com', 2),
('sophiam', 'sophiam', 'Marcellin', 'Sophia', 'sophiam@gmail.com', 3),
('desboisr', 'desboisr', 'Des Bois', 'Robin', 'robindesb@gmail.com', 4),
('sgustavo', 'sgustavo', 'Gustavo', 'Sylviano', 'sylvianog@hotmail.fr', 5),
('despecheh', 'despecheh', 'Despeche', 'Hugues', 'huguesdespeche@yahoo.fr', 6),
('francor', 'francor', 'Francony', 'Romain', 'franconyr@hotmail.com', 7),
('dienerf', 'dienerf', 'Diener', 'Florence', 'flodiener@gmail.com', 8);


--
-- Structure de la table `Enseignement`
--

CREATE TABLE Enseignement(
	id_Enseignement INT primary key auto_increment,
	label VARCHAR(255),
	code VARCHAR(255)
);

--
-- Déchargement des données de la table `enseignement`
--

INSERT INTO `enseignement` (`label`, `code`) VALUES
('Société Numérique', 'ISOC531'),
('EPS', 'SHES503'),
('Sciences de la Vie et de la Terre', 'INFO804'),
('Arbalète', 'MATH640');

--
-- Structure de la table `Professeur`
--

CREATE TABLE Professeur(
	id_Professeur INT primary key auto_increment,
	identifiant VARCHAR(255),
	password VARCHAR(255),
	nom VARCHAR(255),
	prenom VARCHAR(255),
	mail VARCHAR(255),
	id_Enseignement INT,
	FOREIGN KEY (id_Enseignement) REFERENCES Enseignement(id_Enseignement)
);

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`identifiant`, `password`, `nom`, `prenom`, `mail`, `id_Enseignement`) VALUES
('cimpans', 'cimpans', 'Cimpan', 'Sorana', 'sorana.cimpan@gmail.com', 3),
('salamatiank', 'salamatiank', 'Salamatian', 'Kavé', 'kave.salamatian@gmail.com', 1),
('galichets', 'galichets', 'Galichet', 'Sylvie', 'sylvie.g@gmail.com', 4),
('bubu', 'bubu', 'Burillon', 'William', 'willybubu@gmail.com', 2);


--
-- Structure de la table `Demande`
--

CREATE TABLE Demande(
	id_Demande INT primary key auto_increment,
	id_Etudiant INT,
	id_Professeur INT,
	id_Intervenant INT,
	description VARCHAR(255),
	etat VARCHAR(255),
	FOREIGN KEY (id_Etudiant) REFERENCES Etudiant(id_Etudiant),
	FOREIGN KEY (id_Professeur) REFERENCES Professeur(id_Professeur),
	FOREIGN KEY (id_Intervenant) REFERENCES Intervenant(id_Intervenant)
);

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_Etudiant`, `id_Professeur`, `id_Intervenant`, `description`, `etat`) VALUES
(3, 2, NULL, 'Bonjour, j\'aimerais avoir de plus amples informations en sociologie. Des TDs si possible !', 'en cours'),
(4, 3, NULL, 'J\'aimerais vous voir plus souvent.', 'refusé'),
(2, 4, 8, 'Je veux apprendre à me battre.', 'accepté');

--
-- Structure de la table `Intervention`
--

CREATE TABLE Intervention(
	id_Intervention INT primary key auto_increment,
	id_Demande INT,
	date_debut DATE,
	duree INT,
	type VARCHAR(255),
	FOREIGN KEY (id_Demande) REFERENCES Demande(id_Demande)
);

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`id_Demande`, `date_debut`, `duree`, `type`) VALUES
(3, '2019-05-14', 180, 'TP');

--
-- Structure de la table `Fichier`
--

CREATE TABLE Fichier(
	id_Fichier INT primary key auto_increment,
	id_Demande INT,
	path_File VARCHAR(255),
	label VARCHAR(255),
	type VARCHAR(255),
	FOREIGN KEY (id_Demande) REFERENCES Demande(id_Demande)
);

--
-- Déchargement des données de la table `fichier`
--