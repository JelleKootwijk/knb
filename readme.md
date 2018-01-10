# Knowledge Base 
To learn move about this project, visit [the wiki](https://github.com/Radiuscollege/knb/wiki).

## Setup
Follow the steps below to get this project up and running:

* Fork the repository
* Clone the repository you just forked
* Set the git upstream to https://github.com/Radiuscollege/knb ( `git remote add upstream https://github.com/Radiuscollege/knb` )
* Copy `.env.example` and rename it to `.env` 
* Edit the `.env` file to the right values
* Run `npm install` or `yarn` from the root directory
* Run `composer install` from the root directory
* Migrate and seed the database with `php artisan migrate --seed`
* Run npm run dev of npm run watch for compiling assets

## Running the application
To run the application, you'll need a proper environment. You can use a virtual machine (like [Laravel Homestead](https://laravel.com/docs/master/homestead)), or run a local webserver:

```bash
$ php artisan serve
```

## Create a pull request
* commit and push to forked repository
* create pull request to github.com/Radiuscollege/knb through the ui of your forked repository on github.com
* Please be descriptive in the pull request
