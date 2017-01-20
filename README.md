# (read only) Copona composer-installers

This Custom Composer Installers is only for Copona projects. Do not use elsewhere, it may damage your design. 


### Supported types:

Type             | Path         
---------------- | -------------
copona-extension | /themes/{name}
copona-theme     | /extensions/{vendor}/{name}
copona-core      | /core

### How to use?

To work with your themes and extensions as a composer package, you just need to put `"type":"copona-[type]"` into your `composer.json`.

**Example of an extension:**

```javascript
{
  "name": "vendor/name",
  "description": "Example extension Copona",
  "type": "copona-extension"
}
```

Your extension will be installed on the path:

```
/extensions/
    |-- vendor/
        |-- name/
```



**Notes:** To find out how composer packages and repositories work see https://getcomposer.org/doc/05-repositories.md 
