# Bref and Travis CI Integration Example
[![Travis](https://img.shields.io/travis/guillermoandrae/bref-hello-world.svg?style=flat-square)](https://travis-ci.org/guillermoandrae/bref-hello-world) [![approval](https://img.shields.io/badge/approved%20by-your%20the-people.svg?style=flat-square)](https://bklyn.dev)

> Bref provides the tools and documentation to easily deploy and run serverless PHP applications.

# So... what's this?
If you haven't done so already, start at the [Bref docs](https://bref.sh/docs/) and follow the first steps. This repo picks up where the [deployment automation](https://bref.sh/docs/deploy.html#automating-deployments) section of the documentation leaves off. The Travis configuration file included in this repo accounts for the complexities of Bref deployments. I've used some [Composer scripts](https://getcomposer.org/doc/articles/scripts.md) to make the calls in the `.travis.yml` file a little cleaner. 
