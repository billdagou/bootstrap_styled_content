CREATE TABLE sys_file_reference (
    description_position varchar(8) DEFAULT '' NOT NULL,
    responsive tinyint(4) DEFAULT '0' NOT NULL,
    thumbnail tinyint(4) DEFAULT '0' NOT NULL,
    shape varchar(8) DEFAULT '' NOT NULL,
    aspect_ratio varchar(16) DEFAULT '' NOT NULL,
);

CREATE TABLE tt_content (
    display_heading tinyint(4) DEFAULT '0' NOT NULL,
    header_position varchar(8) DEFAULT '' NOT NULL,
    gallery_classes varchar(255) DEFAULT '' NOT NULL,
    column_classes varchar(255) DEFAULT '' NOT NULL,
    table_responsive varchar(8) DEFAULT '' NOT NULL,
    table_class varchar(255) DEFAULT '' NOT NULL,
    table_thead tinyint(4) DEFAULT '0' NOT NULL,
    table_thead_col tinyint(4) DEFAULT '0' NOT NULL,
    margin_side varchar(16) DEFAULT '' NOT NULL,
    margin_size varchar(8) DEFAULT '' NOT NULL,
    padding_side varchar(16) DEFAULT '' NOT NULL,
    padding_size varchar(8) DEFAULT '' NOT NULL,
    extra_classes varchar(255) DEFAULT '' NOT NULL,
);