DROP TABLE IF EXISTS `cidades`;
CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `estado_id` int(10) UNSIGNED NOT NULL,
  `cidade` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
 
DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sigla` char(2) character SET utf8 NOT NULL,
  `estado` varchar(30) character SET utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
