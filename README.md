# Introduction
I's probably a bit late for this but still...

Migrate website from 1999 they said. It gong to be fun they said.

Until you see this message

**Fatal error:** Uncaught Error: Call to undefined function mysql_connect() in

# Problem

During dark era prior MVC frameworks devs would plague multiple files with mysql_* functions.
When migrating such project to PHP 7.0.0 and above you end up with enormous pain.

I had no time or will go though hundreds of files and make site work.

# Conclusion

I've decided to create functions myself and use mysqli_* functions to recreate the logic.

All you need to do is include mysql-functions.php file in header, database connection or whatever global include file on the site.

Worked like a charm for me.

Function list is not complete, but you get an idea.
