# githubdeployments-composer-example
An example plugin repository with a workflow script that installs Composer dependencies. 

The [workflow](.github/workflows/wpcom.yml) does the following:

1. Checkout the repository
2. Runs `composer install` which is the default behaviour of the [Composer Action](https://github.com/php-actions/composer). 
3. Create a build artifact with name `wpcom` which is required for WordPress.com's GitHub Deployment feature

