# Bref and Travis CI Integration Example
[![Travis](https://img.shields.io/travis/guillermoandrae/bref-hello-world.svg?style=flat-square)](https://travis-ci.org/guillermoandrae/bref-hello-world) ![GitHub](https://img.shields.io/github/license/guillermoandrae/bref-hello-world.svg?style=flat-square)

> Bref provides the tools and documentation to easily deploy and run serverless PHP applications.

## So... what's this?
If you haven't done so already, start at the [Bref docs](https://bref.sh/docs/) and follow the first steps. This repo picks up where the [deployment automation](https://bref.sh/docs/deploy.html#automating-deployments) section of the documentation leaves off.

### `travis.yml`
The Travis configuration file included in this repo accounts for the complexities of Bref deployments -- specifically, the requirement for the build image to have the correct versions of both Python and PHP installed. To accomplish this, I've used the Ubuntu Xenial [`generic` image](https://docs.travis-ci.com/user/languages/minimal-and-generic/#generic) build environment, and used `phpenv` -- which is included on all Travis CI images that include PHP -- to set the version needed to support Bref (^7.2). The Ubuntu Trusty build environment includes PHP 7.0.7 which, obviously, doesn't cut it.

### `composer.json`
I've used some [Composer scripts](https://getcomposer.org/doc/articles/scripts.md) to make the calls in the `.travis.yml` file a little cleaner. I *highly* recommend the use of Composer scripts.

## Questions
Feel free to use PRs for questions, or get at me on [Twitter](https://twitter.com/guillermoandrae).
