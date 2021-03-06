# Bref and Travis CI Integration Example
[![Travis](https://img.shields.io/travis/guillermoandrae/bref-hello-world.svg?style=flat-square)](https://travis-ci.org/guillermoandrae/bref-hello-world) ![GitHub](https://img.shields.io/github/license/guillermoandrae/bref-hello-world.svg?style=flat-square) [![@guillermoandrae on Twitter](http://img.shields.io/badge/twitter-%40guillermoandrae-blue.svg?style=flat-square)](https://twitter.com/guillermoandrae)

> Bref provides the tools and documentation to easily deploy and run serverless PHP applications.

## So... what's this?
If you haven't done so already, start at the [Bref docs](https://bref.sh/docs/) and follow the first steps. This repo picks up where the [deployment automation](https://bref.sh/docs/deploy.html#automating-deployments) section of the documentation leaves off. If you want a detailed explanation of the choices made here, check out my [Medium post](https://medium.com/@guillermoandrae/automate-deployment-of-php-applications-to-aws-lambda-with-bref-aws-sam-and-travis-ci-90231dfae6ff).

### `travis.yml`
The Travis configuration file included in this repo accounts for the complexities of Bref deployments -- specifically, the requirement for the build image to have the correct versions of both Python and PHP installed. To accomplish this, I've used the Ubuntu Xenial [`generic`](https://docs.travis-ci.com/user/languages/minimal-and-generic/#generic) build environment, and used `phpenv` -- which is included on all Travis CI images that include PHP -- to set the version needed to support Bref (^7.2.0).

### `composer.json`
I've used some [Composer scripts](https://getcomposer.org/doc/articles/scripts.md) to make the calls in the `.travis.yml` file a little cleaner. I *highly* recommend the use of Composer scripts.

## Questions
Feel free to use PRs for questions, or get at me on [Twitter](https://twitter.com/guillermoandrae).
