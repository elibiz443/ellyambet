# ELLY AMBET PORTFOLIO

```
touch .gitignore && mkdir includes && mkdir uploads && touch .htaccess && touch index.php && mkdir admin && touch config.php  && mkdir db
```

## Introduction

This is a website that includes:

* Landing Page.

## Colors

Setting up DB:
- Go To: http://localhost/phpmyadmin
- DB Name(eg: ellyambet_db)
- seed db: http://localhost/ellyambet/db/db-setup.php
- For production: https://ellyambet.com/db/db-setup.php

Populate alerts:

* Localhost:
```
http://localhost/ellyambet/db/populate_alerts.php
```

* production:
```
https://ellyambet/db/populate_alerts.php
```

Adding mailer:
```
composer require phpmailer/phpmailer
```

Watch CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch
```

Go To App in development:
-Go To: http://localhost/ellyambet/

Deployment:

Minify CSS:
```
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --minify
```

## Uploading files:

Give permission to upload folder: 
```
mkdir uploads
chmod 0755 uploads
sudo chown -R daemon:daemon uploads
```

Push to production:
```
zip -r ../ellyambet_production.zip . -x "uploads/*" -x ".htaccess" -x "*.DS_Store" -x "README.md" -x ".gitignore" -x ".git/*"
```