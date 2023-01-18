# Netzwelt Recruitment Exercise

A web app exercise as a part of the job application at Netzwelt Inc.

## Prerequisites

- Docker (for local development using [Laravel Sail](https://laravel.com/docs/9.x/sail#introduction))

## Local development

1. Open a terminal and clone this repository ([https://github.com/rethramos/netzwelt-recruitment-exercise.git](https://github.com/rethramos/netzwelt-recruitment-exercise.git)).
1. Navigate to the project's directory.
1. Run the following command as specified in [this link](https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects) if you haven't yet (make sure to use the same PHP version as in the `docker-compose.yml` file):
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
4. Copy the contents of `.env.example` to `.env`.
1. Use `https://netzwelt-devtest.azurewebsites.net` as the value for `NETZWELT_URL`.
1. Run `vendor/bin/sail artisan key:generate` to generate the `APP_KEY`.
1. Run `vendor/bin/sail up -d` to start the development server and other tools (run `vendor/bin/sail down` to stop all services).
1. Run `vendor/bin/sail npm install` to install the frontend dependencies.
1. To watch for frontend file changes, run `vendor/bin/sail npm run dev`.

The app can now be accessed at [http://localhost](http://localhost).

## Deployment

The application is deployed to [Heroku](https://ancient-lowlands-47175.herokuapp.com/).