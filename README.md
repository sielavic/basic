# testTask
Настройки vhosts.conf
<VirtualHost *:80>
    ServerName basic.loc
    ServerAlias  www.basic.loc
DocumentRoot "/opt/lampp/htdocs/basic/frontend/web/"
<Directory "/opt/lampp/htdocs/basic/frontend/web/">
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php

    DirectoryIndex index.php
Require all granted
</Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName backend.basic
    ServerAlias  www.backend.basic
DocumentRoot "/opt/lampp/htdocs/basic/"
<Directory "/opt/lampp/htdocs/basic/">
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . index.php

    DirectoryIndex index.php
Require all granted
</Directory>
</VirtualHost>


