# Getting Started

### Prerequisites

Make sure you have the following installed on your local machine:

1. Node && NPM
2. Gulp
3. Vagrant
4. Composer


### Setup

1. Clone this repo.
2. ```vagrant up```
3. Download the WordPress core to the ```public``` directory.
4. Install plugins with composer: ```composer update```
5. Visit http://192.168.33.10 in your favorite browser and run the WordPress installation. Use the following settings for your database:
  - **Database Name**: scotchbox
  - **DB Host**: 127.0.0.1
  - **DB Username**: root
  - **DB Password**: root

### Theme Development

1. Open up your terminal, and ```cd``` to ```/public/wp-content/themes/starter-theme/```.
2. Install dev dependencies by running ```npm install```.
3. Run ```gulp```. This will startup a few watch tasks that rebuild stylesheets and scripts as you make changes.
4. Visit http://localhost:3000/ for BrowerSync goodness.
