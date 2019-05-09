# RingCentral PHP WebHook Demo

[Video Tutorial](https://www.youtube.com/watch?v=KOowd9atPMg)


## Step 1

```
composer install -vvv
```


## Step 2

You need a public uri. If you don't have one, try [ngrok](https://ngrok.com/).



## Step 3

Edit `setup-webhook.php`:

- change `address` to your webhook uri.
- replace `getenv('RINGCENTRAL_XXXXX')` with your own credentials
    - Or you can define environment variables



## Step 4

```
php -S localhost:8000 webhook.php
```


## Step 5

```
php setup-webhook.php
```



## Step 6

Make a phone call to your phone number, and watch the console.
