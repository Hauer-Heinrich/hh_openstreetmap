CREATE TABLE tt_content (
    tx_hh_openstreetmap_map_fit int(11) DEFAULT '0' NOT NULL,
    tx_hh_openstreetmap_map_lat tinytext,
    tx_hh_openstreetmap_map_long tinytext,
    tx_hh_openstreetmap_options_scrollWheelZoom int(1) DEFAULT '0' NOT NULL,
    tx_hh_openstreetmap_marker int(11) unsigned DEFAULT '0' NOT NULL,
    tx_hh_openstreetmap_zoom tinytext,
    tx_hh_openstreetmap_height_desktop int(11) unsigned DEFAULT '0' NOT NULL,
    tx_hh_openstreetmap_height_tablet int(11) unsigned DEFAULT '0' NOT NULL,
    tx_hh_openstreetmap_height_mobile int(11) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_hh_openstreetmap_marker (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,

    tx_hh_openstreetmap_marker_text text,
    tx_hh_openstreetmap_marker_lat tinytext,
    tx_hh_openstreetmap_marker_long tinytext,
    tx_hh_openstreetmap_marker_icon tinytext,
    tx_hh_openstreetmap_marker_openonstart int(1) DEFAULT '0' NOT NULL,

    KEY parent (pid),
);

-- CREATE TABLE tx_hh_openstreetmap_marker (
--     uid int(11) NOT NULL auto_increment,
--     pid int(11) DEFAULT '0' NOT NULL,
--     parentid int(11) DEFAULT '0' NOT NULL,
--     parenttable varchar(255) DEFAULT '' NOT NULL,
--     sorting int(11) unsigned DEFAULT '0' NOT NULL,
--     t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
--     t3ver_id int(11) DEFAULT '0' NOT NULL,
--     t3ver_wsid int(11) DEFAULT '0' NOT NULL,
--     t3ver_label varchar(255) DEFAULT '' NOT NULL,
--     t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
--     t3ver_stage int(11) DEFAULT '0' NOT NULL,
--     t3ver_count int(11) DEFAULT '0' NOT NULL,
--     t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
--     t3ver_move_id int(11) DEFAULT '0' NOT NULL,
--     tstamp int(11) unsigned DEFAULT '0' NOT NULL,
--     crdate int(11) unsigned DEFAULT '0' NOT NULL,
--     cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
--     deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
--     hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
--     starttime int(11) unsigned DEFAULT '0' NOT NULL,
--     endtime int(11) unsigned DEFAULT '0' NOT NULL,
--     sys_language_uid int(11) DEFAULT '0' NOT NULL,
--     l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
--     l10n_diffsource mediumblob,

--     tx_hh_openstreetmap_marker_text text,
--     tx_hh_openstreetmap_marker_lat tinytext,
--     tx_hh_openstreetmap_marker_long tinytext,
--     tx_hh_openstreetmap_marker_icon tinytext,
--     tx_hh_openstreetmap_marker_openonstart int(1) DEFAULT '0' NOT NULL,

--     PRIMARY KEY (uid),
--     KEY parent (pid),
--     KEY t3ver_oid (t3ver_oid,t3ver_wsid),
--     KEY language (l10n_parent,sys_language_uid)
-- );
