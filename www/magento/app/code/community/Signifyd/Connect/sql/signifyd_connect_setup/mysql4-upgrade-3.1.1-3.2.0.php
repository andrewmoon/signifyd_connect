<?php

$this->startSetup();
$this->register();
$this->run("
ALTER TABLE  `{$this->getTable('signifyd_connect_case')}` ADD  `status` VARCHAR( 64 ) NOT NULL DEFAULT  'PENDING',
    ADD  `code`  varchar(255) NOT NULL,
    ADD  `score` FLOAT NULL DEFAULT NULL ,
    ADD  `entries` TEXT NOT NULL ,
    ADD  `created_at` TIMESTAMP NULL DEFAULT NULL ,
    ADD  `updated_at` TIMESTAMP NULL DEFAULT NULL ,
    ADD  `code` VARCHAR( 255 ) NULL DEFAULT NULL ;
");
$this->endSetup();
