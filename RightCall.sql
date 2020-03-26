-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 26 mars 2020 à 17:10
-- Version du serveur :  5.7.29-0ubuntu0.16.04.1
-- Version de PHP :  7.3.15-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `RightCall`
--

-- --------------------------------------------------------

--
-- Structure de la table `appelAPublication`
--

CREATE TABLE `appelAPublication` (
  `idAppelAPublication` int(11) NOT NULL,
  `titreAppel` text,
  `resume` text,
  `dateFinSoumission` date DEFAULT NULL,
  `datePublication` date DEFAULT NULL,
  `idRevue` int(11) DEFAULT NULL,
  `lien` text,
  `titreRevueTrouve` text,
  `sourceCall` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appelAPublication`
--

INSERT INTO `appelAPublication` (`idAppelAPublication`, `titreAppel`, `resume`, `dateFinSoumission`, `datePublication`, `idRevue`, `lien`, `titreRevueTrouve`, `sourceCall`) VALUES
(66, 'Artificial Intelligence as an Enabler for Entrepreneurs', NULL, '2020-11-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8852', 'International Journal of Entrepreneurial Behavior & Research', 'emerald'),
(67, 'Evolution in Hospitality: digital transformation and artificial intelligence', NULL, '2020-03-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8861', 'International Journal of Organizational Analysis', 'emerald'),
(68, 'Team Learning', NULL, '2020-09-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8862', 'The Learning Organization', 'emerald'),
(69, 'Machine Learning for Safety, Security and Trust of Cloud and IoT-based Data in Consumer Electronic', NULL, '2020-03-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8865', 'Information and Computer Security', 'emerald'),
(70, 'From Family Entrepreneurship to Family Entrepreneuring', NULL, '2021-04-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8869', 'International Journal of Entrepreneurial Behavior & Research', 'emerald'),
(71, 'Sport Management Using Partial Least Squares Structural Equation Modeling (PLS-SEM)', NULL, '2020-12-20', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8871', 'International Journal of Sports Marketing and Sponsorship', 'emerald'),
(72, 'Innovation-Driven Human Resource Management Practices in the Digital Era', NULL, '2020-06-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8872', 'Chinese Management Studies', 'emerald'),
(73, 'Shades of change with and through Blockchain ', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8873', 'Journal of Organizational Change Management', 'emerald'),
(74, 'Supply Chain Management in an Era of Reglobalization', NULL, '2020-12-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8874', 'International Journal of Physical Distribution & Logistics Management ', 'emerald'),
(75, 'Innovative Knowledge-Based Methods for Information Management in Business and Marketing', NULL, '2020-09-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8878', 'Journal of Indian Business Research', 'emerald'),
(76, 'Investigating Multi-Level Sociological, Psychological, and Managerial Challenges in the context of Intellectual Capital from and within Emerging Markets', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8880', 'Journal of Intellectual Capital', 'emerald'),
(77, 'Performance Measurement and Management in Industry 4.0: Where are we? What next?', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8883', 'International Journal of Productivity and Performance Management', 'emerald'),
(78, 'Sports and Urban Development: Critical Issues', NULL, '2020-04-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8886', 'International Journal of Sports Marketing and Sponsorship', 'emerald'),
(79, 'Marketization and commodification of history', NULL, '2020-07-16', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8887', 'Journal of Historical Research in Marketing', 'emerald'),
(80, 'Gender differences in developing global digital marketing strategies', NULL, '2020-10-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8888', 'Review of International Business and Strategy', 'emerald'),
(81, 'Global Information for Climate Change and Sustainability ', NULL, '2020-06-24', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8889', 'Global Knowledge, Memory and Communication', 'emerald'),
(82, 'Accounting future and deep transformations in organisations ', NULL, '2020-03-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8890', 'Journal of Financial Reporting and Accounting', 'emerald'),
(83, 'Managerial Sport Finance', NULL, '2020-05-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8895', 'Managerial Finance', 'emerald'),
(84, 'Intersectionality in Progressive Research: Contesting Privilege, Fostering Inclusion', NULL, '2021-04-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8897', 'Equality, Diversity and Inclusion', 'emerald'),
(85, 'Organizing the City', NULL, '2020-10-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8901', 'Journal of Organizational Ethnography', 'emerald'),
(86, 'Synergies between BIM and Lean Construction', NULL, '2020-09-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8900', 'Engineering, Construction and Architectural Management', 'emerald'),
(87, 'Mirror, Mirror On The Wall! Examining The Bright And Dark Side Of Face And Body Beautification/Modification Services', NULL, '2020-12-10', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8905', 'Journal of Services Marketing', 'emerald'),
(88, 'The Bright Side and the Dark Side of Digital Health', NULL, '2020-09-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8907', 'Internet Research', 'emerald'),
(89, 'Sport Management, Marketing, and Innovation', NULL, '2021-02-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8908', 'International Journal of Sports Marketing and Sponsorship', 'emerald'),
(90, 'Strategic Knowledge Management for Digital Transformation', NULL, '2020-07-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8909', 'Journal of Strategy and Management', 'emerald'),
(91, 'Management in Latin America', NULL, '2020-04-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8910', 'Academia Revista Latinoamericana de AdministraciÃ³n', 'emerald'),
(92, 'Reimagining Global Talent Management? Considering the implications of context for research and practice', NULL, '2020-09-04', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8911', 'Journal of Organizational Effectiveness', 'emerald'),
(93, 'Industrial Marketing in Healthcare', NULL, '2020-07-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8912', 'Journal of Business & Industrial Marketing', 'emerald'),
(94, 'Digital Transformation in the Emerging Markets and Communities of Africa', NULL, '2020-07-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8913', 'Journal of Enterprising Communities: People and Places in the Global Economy', 'emerald'),
(95, 'The Role of Universities in Supporting Social Innovation', NULL, '2020-10-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8914', 'Social Enterprise Journal', 'emerald'),
(96, 'Towards Large-scale Industry-wide Physical Internet Deployment', NULL, '2020-10-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8916', 'Industrial Management & Data Systems', 'emerald'),
(97, ' Honoring the Scientific Endeavor of James March', NULL, '2021-01-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8917', 'Journal of Management History', 'emerald'),
(98, 'Knowledge Management in Tourism: paradigms, approaches and methods', NULL, '2020-11-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8922', 'Journal of Organizational Change Management', 'emerald'),
(99, 'CIGAR Workshop 2020 and JPBAFM Special Issue on:The Quality of Public Sector Audit: Profession, Institutions and Standards ', NULL, '2020-05-10', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8923', 'Journal of Public Budgeting, Accounting & Financial Management', 'emerald'),
(100, 'Management in the Era of Disruption: Insights from India', NULL, '2020-03-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8924', 'South Asian Journal of Business Studies', 'emerald'),
(101, 'Advancing the study of complexity in social innovation and entrepreneurship studies', NULL, '2020-11-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8925', 'Social Enterprise Journal', 'emerald'),
(102, 'Qualitative Research in Hospitality and Tourism Management', NULL, '2020-09-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8927', 'Journal of Hospitality and Tourism Technology', 'emerald'),
(103, 'Features, drivers, and outcomes of food tourism', NULL, '2020-04-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8928', 'British Food Journal', 'emerald'),
(104, 'Public-private partnership in healthcare and in organizations', NULL, '2020-07-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8929', 'International Journal of Organizational Analysis', 'emerald'),
(105, 'Entrepreneurship in Latin America Countries: Evidence from GEM and GUESSS Project', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8930', 'Academia Revista Latinoamericana de AdministraciÃ³n', 'emerald'),
(106, 'Responsible Business and Strategy in Conversation - Can Management History Inform Corporate Responsibility?', NULL, '2020-03-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8931', 'Journal of Management History', 'emerald'),
(107, 'Women in STEM study and employment in the Middle-East North Africa region', NULL, '2020-05-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8932', 'Gender in Management', 'emerald'),
(108, 'E-democracy and the European Union: input and output legitimacy through ICT', NULL, '2020-09-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8934', 'Transforming Government: People, Process and Policy', 'emerald'),
(109, 'Theoretical Advancements in Business: Past, Present and Future', NULL, '2020-12-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8935', 'International Journal of Organizational Analysis', 'emerald'),
(110, 'Re-structuring HR Practices and Theories for Organizational Transformation & Sustainability', NULL, '2020-07-31', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8937', 'International Journal of Organizational Analysis', 'emerald'),
(111, 'Technological Advancement and Pioneering Methods for Smart Cities – Recent Advances and Future Trends', NULL, '2020-09-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8938', 'Library Hi Tech', 'emerald'),
(112, 'The Impact of Technology on Supply Chains in Emerging and Informal Markets', NULL, '2020-12-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8941', 'International Journal of Logistics Management', 'emerald'),
(113, 'Risk Governance and Risk Management in Change', NULL, '2020-11-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8942', 'Journal of Accounting & Organizational Change', 'emerald'),
(114, 'Downstream Product Innovation and Upstream Supply Chain Implications', NULL, '2020-11-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8943', 'Supply Chain Management', 'emerald'),
(115, 'Data Driven Quality Management Systems for improving Supply Chain Management Performance', NULL, '2020-12-23', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8945', 'The TQM Journal', 'emerald'),
(116, 'Lean Six Sigma and Industry 4.0', NULL, '2020-12-04', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8947', 'International Journal of Quality & Reliability Management', 'emerald'),
(117, 'Big Data and Analytics ', NULL, '2020-10-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8948', 'Qualitative Research in Accounting & Management', 'emerald'),
(118, 'A human rights approach to mental health services, policy and legislation', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8949', 'International Journal of Human Rights in Healthcare', 'emerald'),
(119, 'Gamifying human computer interaction for young consumers', NULL, '2020-12-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8950', 'Young Consumers', 'emerald'),
(120, 'Gamifying human computer interaction for young consumers', NULL, '2020-12-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8951', 'Young Consumers', 'emerald'),
(121, 'Gamifying human computer interaction for young consumers', NULL, '2020-12-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8952', 'Young Consumers', 'emerald'),
(122, 'The Influence of Digital Transformation on Performance Management: Outlining a New Research Agenda', NULL, '2021-02-28', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8953', 'Meditari Accountancy Research', 'emerald'),
(123, 'Emerging Trends and Impacts of the rise of AI, Data Analytics and Blockchain', NULL, '2020-12-15', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8954', 'Journal of Enterprise Information Management', 'emerald'),
(124, 'Psychological Trauma in Intellectual Disability populations', NULL, '2020-10-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8958', 'Advances in Mental Health & Intellectual Disabilities', 'emerald'),
(125, 'Impacts of emerging technologies on accounting, auditing, taxation and financial services', NULL, '2020-10-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8962', 'Asian Review of Accounting ', 'emerald'),
(126, 'The integrated reporting and corporate social responsibility; a new trend', NULL, '2020-04-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8963', 'Journal of Financial Reporting and Accounting', 'emerald'),
(127, 'Reviewing the LIS literature ', NULL, '2020-06-30', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8964', 'Global Knowledge, Memory and Communication', 'emerald'),
(128, 'Social Robots: Services and Applications ', NULL, '2020-04-06', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8965', 'Library Hi Tech', 'emerald'),
(129, 'The Influence of Digital Transformation on Performance Management: Outlining a New Research Agenda', NULL, '2021-02-28', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8969', 'Meditari Accountancy Research', 'emerald'),
(130, 'Shifting Spheres', NULL, '2020-06-01', '2020-03-19', 2848, 'http://www.emeraldgrouppublishing.com/authors/writing/calls.htm?id=8971', 'Kybernetes', 'emerald');

-- --------------------------------------------------------

--
-- Structure de la table `appelAPublication_categorie`
--

CREATE TABLE `appelAPublication_categorie` (
  `appelapublications_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `classementCNRS`
--

CREATE TABLE `classementCNRS` (
  `idRevue` int(11) NOT NULL,
  `anneeClassement` year(4) NOT NULL,
  `classementRevue` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `classementFNEGE`
--

CREATE TABLE `classementFNEGE` (
  `idRevue` int(11) NOT NULL,
  `anneeClassement` year(4) NOT NULL,
  `classementRevue` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `classementHCERES`
--

CREATE TABLE `classementHCERES` (
  `idRevue` int(11) NOT NULL,
  `anneeClassement` year(4) NOT NULL,
  `classementRevue` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200128162407', '2020-01-30 15:58:06'),
('20200129143552', '2020-01-30 15:58:08'),
('20200210142035', '2020-02-10 14:20:55'),
('20200210142315', '2020-02-10 14:23:22'),
('20200210165558', '2020-02-10 16:56:04'),
('20200211134515', '2020-02-11 13:46:02'),
('20200212134017', '2020-02-12 13:41:30'),
('20200212134942', '2020-02-12 13:50:01'),
('20200212135310', '2020-02-12 13:53:27'),
('20200212140401', '2020-02-12 14:04:18'),
('20200212141106', '2020-02-12 14:11:22'),
('20200212154452', '2020-02-12 15:45:15'),
('20200212155737', '2020-02-12 15:57:48'),
('20200212155741', '2020-02-12 15:57:48'),
('20200305171216', '2020-03-05 17:12:38'),
('20200306144011', '2020-03-06 14:40:29');

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `id` int(11) NOT NULL,
  `mot` longtext COLLATE utf8mb4_unicode_ci,
  `titre_type` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recherche`
--

INSERT INTO `recherche` (`id`, `mot`, `titre_type`, `date`) VALUES
(1, 'ok', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recherche_categorie`
--

CREATE TABLE `recherche_categorie` (
  `recherche_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `revue`
--

CREATE TABLE `revue` (
  `id` int(11) NOT NULL,
  `id_revue` int(11) NOT NULL,
  `issn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_revue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_site_revue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `classement_cnrs` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classement_fnege` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classement_hceres` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `widget_recap` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `editeur` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`) VALUES
(5, 'bonjour@ok.com', 'bonjour', '$2y$13$xY2JZ80SXjr7o7o9FWFPGuDpjrWHVY2xSs2RXwdBhkLpgHWMDCQuO'),
(6, 'aurevoir@ok.com', 'aurevoir', '$2y$13$SAOalPrsN4UAxVUzq5affeTgpnSbbxtloy3.KGQYVxQn2mY6kbdEq'),
(7, 'marc@ok.fr', 'marc', '$2y$13$WynBtC0y0UYoQ1P89u2OsumJywx0Wu0jF/U0tk3pKUXSx758Aao2m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appelAPublication`
--
ALTER TABLE `appelAPublication`
  ADD PRIMARY KEY (`idAppelAPublication`);

--
-- Index pour la table `appelAPublication_categorie`
--
ALTER TABLE `appelAPublication_categorie`
  ADD PRIMARY KEY (`appelapublications_id`,`categorie_id`),
  ADD KEY `IDX_B182B5B1366452` (`appelapublications_id`),
  ADD KEY `IDX_B182B5B1BCF5E72D` (`categorie_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classementCNRS`
--
ALTER TABLE `classementCNRS`
  ADD PRIMARY KEY (`idRevue`,`anneeClassement`);

--
-- Index pour la table `classementFNEGE`
--
ALTER TABLE `classementFNEGE`
  ADD PRIMARY KEY (`idRevue`,`anneeClassement`);

--
-- Index pour la table `classementHCERES`
--
ALTER TABLE `classementHCERES`
  ADD PRIMARY KEY (`idRevue`,`anneeClassement`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recherche_categorie`
--
ALTER TABLE `recherche_categorie`
  ADD PRIMARY KEY (`recherche_id`,`categorie_id`),
  ADD KEY `IDX_9E59DC9E1E6A4A07` (`recherche_id`),
  ADD KEY `IDX_9E59DC9EBCF5E72D` (`categorie_id`);

--
-- Index pour la table `revue`
--
ALTER TABLE `revue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appelAPublication`
--
ALTER TABLE `appelAPublication`
  MODIFY `idAppelAPublication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `revue`
--
ALTER TABLE `revue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appelAPublication_categorie`
--
ALTER TABLE `appelAPublication_categorie`
  ADD CONSTRAINT `FK_B182B5B1366452` FOREIGN KEY (`appelapublications_id`) REFERENCES `appelAPublication` (`idAppelAPublication`),
  ADD CONSTRAINT `FK_B182B5B1BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `recherche_categorie`
--
ALTER TABLE `recherche_categorie`
  ADD CONSTRAINT `FK_9E59DC9E1E6A4A07` FOREIGN KEY (`recherche_id`) REFERENCES `recherche` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9E59DC9EBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
