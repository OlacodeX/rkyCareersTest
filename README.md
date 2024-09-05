
# Job Board

This is a simple job board with filtering functionality.
It has an api endpoint to search jobs and filter them. There is a simple frontend with a web route pointing to a form page built with tailwind css and html inside a laravel blade template file to make an http call to the API serving as a client.
## Routes
This project has the following routes:
### API Routes
- base_url/api/jobs/?title=something&location=something&category=something (`GET http method`)
### WEB Routes
- base_url/ (`Landing page to access job search form`)
- base_url/jobs (`GET route to submit search form data, call API endpoint and return response`)
## Run Locally
To run this project Locally, you will need an environment set up to run laravel powered apps. You can checkout how to here - https://gist.github.com/tooinfinity/1e05c33248bc7c7f228b38510ec7298a
You only need to perform steps 1-2 since you will be cloning an existing app.
NB - The laravel version for this project is v11 so you need minimum PHP version of 8.2 to run it.

- Clone the project into your htdocs folder

```bash
  git clone https://link-to-project
```

- Go to the project directory

```bash
  cd my-project
```
- Copy the .env.example file into the .env file (i.e create a new .env file)
```bash
  cp .env.example .env
```
- Generate a new encryption key for your app. This is important for your app to function properly.
```bash
 php artisan key:generate
```
- Set up an empty database on your database management system and set the necessary config values in your .env. You will see a section in your .env file to fill in your db credentials.

- Install composer dependencies

```bash
  composer install
```

- Run migrations

```bash
  php artisan migrate
```
- Run database seeder to populate the job listings table with data

```bash
  php artisan db:seed
```

- Start the server and go to the url provided on your terminal.

```bash
  php artisan serve
```
