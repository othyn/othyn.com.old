# othyn.com
My personal website! ... But why an entire Laravel installation for a personal website? Flexibility. If I ever feel like a blog or something in future, the option is there for the small overhead impact. Plus, it's nice to develop in 😉

## Table of contents
* [othyn](#othyncom)
* [Table of contents](#table-of-contents)
* [Setup](#setup)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Development](#development)
* [Deployment](#deployment)

## Setup
The project runs using a per project installation of Homestead. [Instructions on installation and setup](https://laravel.com/docs/5.8/homestead), and more specifically the [per-project installation](https://laravel.com/docs/5.8/homestead#per-project-installation) are on Laravel's website, although I'll cover the step-by-step process below for getting this up and running for this project.

### Prerequisites
These are the underlying requirements of the system in order to develop for the project, assuming you're on macOS.

0. Install [brew](https://brew.sh), which is a delicious pacakge manager for macOS! Helps you for a myriad of things, not just this, seriously just install it.

1. Install a hypervisor, I recommended [VirtualBox](https://www.virtualbox.org/wiki/Downloads) in this instance and will walk through assuming so. The virtualbox app should then be present in your applications directory.

2. Install [Vagrant](https://www.vagrantup.com/downloads.html), check this is installed by running `$ vagrant -v` in your console window. This should print out the version number for the installed version of Vagrant, something like `$ vagrant x.y.z`.

3. Install PHP7. At the time of writing this, PHP requires manually updating on macOS to the latest version of PHP7. The easiest way to do this is via [php-osx.liip](https://php-osx.liip.ch/#install), not forgetting to also update your `PATH`! Check this is installed by running `$ php -v` in your console, this should print out the version number for the installed version of PHP in the same manner Vagrant did.

4. Install [Composer](https://getcomposer.org/) via brew `$ brew update` then `$ brew tap homebrew/homebrew-php` finally `$ brew install composer`. Check this is installed by running `$ composer -V` in your console, this should print out the version number for the installed version of Composer in the same manner Vagrant and PHP did.

5. Install [Node & NPM](https://nodejs.org/en/download/), via brew `$ brew update` then `$ brew install node`. Check this is installed by running `$ node -v` & `$ npm -v` in your console, this should print out the version number for the installed version of Node & NPM in the same manner Vagrant, PHP and Composer did

6. Install [Yarn](https://yarnpkg.com/en/), via brew `$ brew install yarn --without-node`. Check this is installed by running `$ yarn -v` in your console, this should print out the version number for the installed version of Yarn in the same manner Vagrant, PHP, Composer, Node & NPM did.

Consistency is nice.

### Installation
These are the requirements for the project specifically, installing project dependencies via composer and setting up Homestead for use with Vagrant.

You can also use the installation script in the root of the project directory:

```bash
$ cd ~/git/othyn.com && ./install.sh
```

... or the steps below can be followed:

0. Clone the project somewhere on your machine to work out of. I recommend somewhere easily accessible, `~/git/othyn.com`. `$ cd` into the project, wherever you cloned it, as all of the below will need to be executed from within it.

1. Run `$ composer install` to install the required project dependencies, this may take a while...

2. Run `$ yarn install` to install the required project dependencies, this again may take a while...

3. Run `$ php vendor/bin/homestead make` which will get a Homestead config file generated, filled with the contents of the example file, but it will work out the absolute project directory for you, which is nice!

4. Check that you have a key pair setup for Homestead, this defaults to `id_rsa`. To check this, `$ ls -la ~/.ssh` and see if the keys are present. If not `$ ssh-keygen -t rsa` will generate you the key pair - or you can modify the `homestead.yaml` config to use a different key pair.

5. You'll need to modify your hosts file to map `othyn.test` to the IP address specified in your `homestead.yaml` config.

6. Now to create yourself a local env file, `$ cp .env.example .env`. You'll then need to run `$ php artisan key:generate` otherwise you'll just be staring at Laravel's default error screen!

Done!

## Development

Run `$ vagrant up`. The first time the box is used, it will download the source vagrant box which may take some time. After it's finished its boot and provision, you can navigate to `othyn.test` in your browser.

[Laravel Mix](https://laravel.com/docs/5.8/mix) powers client side asset development, run `$ yarn dev` to compile assets one off without minification or production rules, or run a watcher with `$ yarn watch` - although this doesn't always pickup sass changes.

## Deployment

More of a personal note really. Copy the *finalised* .env file to the webserver's doc root for the virtual host. Finalised meaning; app key set, environment set to production, debug to false and db credentials in place. Getting it onto the webserver, which is usually easiest either via a straight scp or ssh and `nano /var/www/othyn.com/shared/.env` and paste the contents in. Then `chown deployer:www-data /var/www/othyn.com/shared/.env && chmod 640 /var/www/othyn.com/shared/.env` to set the permissions. Then finally, `dep deploy` and it should be golden! Then update the version number if required and tag the release on GitHub, inline with [semantic versioning](https://semver.org).

Yes, having the deployment file does give away quite a bit of usually good-to-keep-obscure information. But its a sharing exercise, to hopefully help someone understand in the context of a project. One day.
