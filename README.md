This is a setup of CreateWiki, ManageWiki, MirahezeMagic, and ImportDump that works out of the box on Linux with Apache. Just install inside /var/www/html.

This works with MariaDB. Use phpMyAdmin (comes preinstalled) to install the database file `database.sql` for the thing to work, you can also install it in shell or whatever if you're a masochist.

This is kind of hacky and messy code. Most extensions can be deleted, but MirahezeMagic depends on Echo and AbuseFilter. CentralAuth isn't installed because I can't be assed to do it right now, it took half a day to get this working and adding CentralAuth would just make things harder.

If you're getting a "connection refused" error, make sure you are going to http://127.0.0.1 and not https://127.0.0.1, do not ask me why the URL is sometimes rewritten, I don't know and I don't care.
