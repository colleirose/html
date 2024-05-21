This is a setup of CreateWiki, ManageWiki, MirahezeMagic, and ImportDump that works out of the box on Linux with Apache. Just install inside /var/www/html.

This works with MariaDB. Use phpMyAdmin (comes with this preconfigured install) to install the database file `database.sql` for the thing to work, you can also install it in shell or whatever if you're a masochist. Should go without saying that this is not a secure setup and it should only be run on your local machine and not exposed to the web, permsisions are messed up and the database has no password.

This is kind of hacky and messy code. Most extensions can be deleted, but MirahezeMagic depends on Echo and AbuseFilter. CentralAuth isn't installed because I can't be assed to do it right now, it took half a day to get this working and adding CentralAuth would just make things harder. I'll probably add it later.

If you're getting a "connection refused" error, make sure you are going to http://127.0.0.1 and not https://127.0.0.1, do not ask me why the URL is sometimes rewritten, I don't know and I don't care.

I don't know what the password is for the account that exists in the database, it's in my password manager and I'm not going to go look for it. Just go and give the * group every right in LocalSettings if you need to.
