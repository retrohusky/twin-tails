
# First time setup

`./setup.sh`

It will prompt you for a project name. Enter as you see fit.

## Requirements

You should have Lando installed on your OS. When in doubt, please follow this guide:

https://docs.lando.dev/getting-started/installation.html

## Services installed
- WordPress (the newest version)
- PHP 7.4
- MariaDB 10.5
- WP-CLI
- xDebug
- Mailhog

## URLs


### APP           
`http://wp-{project}.lndo.site/     `              
### MAILHOG                
`http://mail.wp-{project}.lndo.site/`


From now on start the site with `lando start` and stop it with `lando stop`

If you want to kill the app completely use `lando destroy`

## Useful commands
- `lando wp cli` - Uses the Wordpress CLI
- `lando composer` - Runs composer commands
- `lando php` - Runs php commands
- `lando db-export {file}` - Exports database from a service into a file
- `lando db-import {file}` - Imports a dump file into database service