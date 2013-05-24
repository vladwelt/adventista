
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `ident` int unsigned NOT NULL auto_increment,
    `username` varchar(64) NOT NULL,
    `email` varchar(64) NOT NULL,
    `password` varchar(64) NOT NULL,
    `status` enum('active', 'inactive') NOT NULL DEFAULT 'active',
    `surname` varchar(128) NOT NULL DEFAULT '',
    `name` varchar(128) NOT NULL DEFAULT '',
    `birthdate` date NULL,
    `tsregister` int unsigned NOT NULL,
    `tslastlogin` int unsigned NOT NULL DEFAULT 0,
    PRIMARY KEY (`ident`),
    UNIQUE INDEX (`username`),
    UNIQUE INDEX (`email`)
) DEFAULT CHARACTER SET UTF8;

INSERT INTO `user`
(`email`, `username`, `password`, `surname`, `name`)
VALUES
('cijkb.j@gmail.com', 'jacobian', 'asdf', 'Caballero Burgoa', 'Carlos Eduardo');
