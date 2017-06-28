# domcheck
Check domains for availability (mostly nu-dom ex. 0000-9999(or any array).*zone)

* Based on phois/whois.
* No updates.


Settings:

```php
$dom = range(0000, 9999);
$zones = array('com','net','org','ru','nu');
```

Usage(php-cli):

* Requires php-mbstring & php-curl

```bash
 php whois.php
```