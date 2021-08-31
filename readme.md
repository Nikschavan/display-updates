# Display Updates

Display Update Notifications for sites that have disabled file edits using constant `DISALLOW_FILE_MODS`

This plugin just displays the update notifications in the WordPress admin but does not allow users to actually perform updates since it is assumed that in sites with `DISALLOW_FILE_MODS=true` the plugins are updates using version control.

## Installation

Install `display-updates` using composer.

```bash
  compsoer require nikschavan/display-updates
```
    
## License

Copyright 2021 Nikhil Chavan

Licensed under the GPL v3 or Later license.
