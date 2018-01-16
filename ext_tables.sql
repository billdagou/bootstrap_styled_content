CREATE TABLE sys_file_reference (
    responsive tinyint(4) DEFAULT '0' DEFAULT NULL,
    shape varchar(9) DEFAULT '' NOT NULL,
    description_position varchar(8) DEFAULT '' NOT NULL,
);

CREATE TABLE tt_content (
    header_position varchar(8) DEFAULT '' NOT NULL,
    page_header tinyint(4) DEFAULT '0' NOT NULL,
    linkToTop_position varchar(8) DEFAULT '' NOT NULL,
    column_class varchar(255) DEFAULT '' NOT NULL,
    table_responsive tinyint(4) DEFAULT '0' NOT NULL,
    table_thead tinyint(4) DEFAULT '0' NOT NULL,
);