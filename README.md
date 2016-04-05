# Getting Started

## Prerequisites

Make sure you have the following installed on your local machine:

1. Vagrant
2. Composer
3. Node

## Setup

1. Clone this repo.
2. ```$ vagrant up```
3. Download the WordPress core to the ```public``` directory.
4. Visit http://wpboilerplate.dev in your favorite browser and run the WordPress installation. Use the following settings for your database:
  - **Database Name**: scotchbox
  - **DB Host**: 127.0.0.1
  - **DB Username**: root
  - **DB Password**: root

## Theme Development

1. Open up your terminal, and ```cd``` to ```/public/wp-content/themes/starter-theme/```.
2. Install dependencies by running ```npm run bootstrap```.
3. Run ```npm run develop```. This will startup a few watch tasks via Gulp that rebuilds stylesheets and scripts as you make changes.
4. Visit http://localhost:8080/ for BrowserSync goodness.

## How to deploy

1. Install WordPress on the machine you will be deploying to.

2. Run the build script at the root of the repo `$ ./build.sh`. This will install plugins and dependencies, as well as compile static assets for production.

3. Deploy everything from the root of this repo to the root of the WordPress installation on the remote machine.

**Note**: If you are using Git as part of your deployment strategy, keep in mind that compiled assets are ignored and will not be deployed when doing a `git push` or `git pull`. One way to get around this is to run the build script on the remote machine after the entire repo has been deployed.
