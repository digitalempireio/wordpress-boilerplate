# Getting Started

### Prerequisites

Make sure you have the following installed on your local machine:

1. Vagrant
2. Composer
3. Node
4. Gulp

### Setup

1. Clone this repo.
2. ```$ vagrant up```
3. Download the WordPress core to the ```public``` directory.
4. Visit http://wpboilerplate.dev in your favorite browser and run the WordPress installation. Use the following settings for your database:
  - **Database Name**: scotchbox
  - **DB Host**: 127.0.0.1
  - **DB Username**: root
  - **DB Password**: root

### Theme Development

1. Open up your terminal, and ```cd``` to ```/public/wp-content/themes/starter-theme/```.
2. Install dependencies by running ```npm run bootstrap```.
3. Run ```npm start```. This will startup a few watch tasks via Gulp that rebuild stylesheets and scripts as you make changes.
4. Visit http://localhost:8080/ for BrowerSync goodness.
