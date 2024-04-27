# Steam Example App

An example app that demonstrates how to use the Steam API to retrieve a user's game library and achievements with the `syntax\steam-api` package, version 3.0.

## Installation

To install the package, run the following command:

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

## Get Steam API Key

To use the Steam API, you need to get an API key from the [Steam Developer](https://steamcommunity.com/dev/apikey) website.

Then add the API key to the `.env` file:

## Usage

To run the app, execute the following command:

```bash
./vendor/bin/sail up
```

Then, navigate to `http://localhost` in your web browser and enter the AppID you want to look up. E.g. `620` for Portal 2.
