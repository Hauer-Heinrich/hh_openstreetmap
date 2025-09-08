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
