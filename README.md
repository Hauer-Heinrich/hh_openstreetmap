# Typo3 Extension OpenStreetMap

## What does it do?

This extension adds a content-element to display an simple openstreetmap in the frontend.

## Installation

... like any other TYPO3 extension [extensions.typo3.org](https://extensions.typo3.org/extension/hh_video_extender/ "TYPO3 Extension Repository")

In addition: Include Page Config
    - Switch to the root page of your site.
    - Edit page properties
    - Switch to tab **Resources**
    - Select **EXT:hh_openstreetmap :: Hauer-Heinrich - OpenStreetMap Page TS**

### Features
- Possibility of multiple markers
- Custom Icons selectable at the OpenStreetMap content-element
- Custom path where the icons for the markers are stored (configurable via PageTs: "tx_openstreetmap.settings.markerIconPath = fileadmin/hh_openstreetmap/icons/marker/")

#### TODO
- currently doesn't auto fill/search "latitude / longitude"

### preview

![example picture from backend - options](.github/images/options.jpg?raw=true "Options")

![example picture from backend - markers](.github/images/markers.jpg?raw=true "Markers")

##### License
----
GNU GENERAL PUBLIC LICENSE Version 3
