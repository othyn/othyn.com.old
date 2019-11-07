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
* [Changelog](#changelog)

## Setup
I'll cover the step-by-step process below for getting up and running for this project, using Docker as its local hosting tool.

### Prerequisites
These are the underlying requirements of the system in order to develop for the project, assuming you're on macOS.

0. Install [brew](https://brew.sh), which is a delicious pacakge manager for macOS! Helps you for a myriad of things, not just this, seriously just install it.

1. Follow the [Prerequisites steps in the `docker-compose-laravel` repo](https://github.com/othyn/docker-compose-laravel#prerequisites).

2. Install PHP7. At the time of writing this, PHP requires manually updating on macOS to the latest version of PHP7. The easiest way to do this is via [php-osx.liip](https://php-osx.liip.ch/#install), not forgetting to also update your `PATH`! Check this is installed by running `$ php -v` in your console, this should print out the version number for the installed version of PHP in the same manner Vagrant did.

3. Install [Composer](https://getcomposer.org/) via brew `$ brew update` then `$ brew tap homebrew/homebrew-php` finally `$ brew install composer`. Check this is installed by running `$ composer -V` in your console, this should print out the version number for the installed version of Composer in the same manner Vagrant and PHP did.

4. Install [Node & NPM](https://nodejs.org/en/download/), via brew `$ brew update` then `$ brew install node`. Check this is installed by running `$ node -v` & `$ npm -v` in your console, this should print out the version number for the installed version of Node & NPM in the same manner Vagrant, PHP and Composer did

5. Install [Yarn](https://yarnpkg.com/en/), via brew `$ brew install yarn --without-node`. Check this is installed by running `$ yarn -v` in your console, this should print out the version number for the installed version of Yarn in the same manner Vagrant, PHP, Composer, Node & NPM did.

Consistency is nice.

### Installation
These are the requirements for the project specifically. There is an installation script in the root of the project directory:

```bash
$ cd ~/git/othyn.com
$ ./install.sh
```

If you wish to view the setup steps and run them manually, checkout the installation script above. There is documentation within it.

That's it! Magic. 🎉

## Development
Follow the [Usage steps in the `docker-compose-laravel` repo](https://github.com/othyn/docker-compose-laravel#usage).

[Laravel Mix](https://laravel.com/docs/5.8/mix) powers client side asset development, run `$ yarn dev` to compile assets one off without minification or production rules, or run a watcher with `$ yarn watch` - although this doesn't always pickup sass changes.

## Deployment
More of a personal note really. Copy the *finalised* .env file to the webserver's doc root for the virtual host. Finalised meaning; app key set, environment set to production, debug to false and db credentials in place. Getting it onto the webserver, which is usually easiest either via a straight scp or ssh and `nano /var/www/othyn.com/shared/.env` and paste the contents in. Then `chown deployer:www-data /var/www/othyn.com/shared/.env && chmod 640 /var/www/othyn.com/shared/.env` to set the permissions. Then finally, `dep deploy` and it should be golden! Then update the version number if required and tag the release on GitHub, inline with [semantic versioning](https://semver.org).

Yes, having the deployment file does give away quite a bit of usually good-to-keep-obscure information. But its a sharing exercise, to hopefully help someone understand in the context of a project. One day.

## Changelog
[View the repo's releases to see the change history](https://github.com/othyn/othyn.com/releases).
