<div align="center"><img src="https://raw.githubusercontent.com/simplepie/.github/master/logo.png" width="500"><br></div>

----

# SimplePie NG

**Don't use this yet. Yes, this project is still active… just as I have time.**

**SimplePie NG** is a modern, _next-generation_ PHP package for working with syndication feeds. It has been written from the ground-up to take advantage of the modern features of PHP 7.3+.

It starts with a completely different kind of thinking, and more than 15 years of experience in software engineering and open-source. It is written with a view of PHP from today and beyond, and is being built in such a way that greater community involvement should be far easier from much earlier in the project's life.

See the [Documentation](https://github.com/simplepie/simplepie-ng/wiki) or the [API Reference](https://simplepie.github.io/simplepie-ng/).

## Badges

### Health

[![Open Issues](http://img.shields.io/github/issues/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/issues)
[![Pull Requests](https://img.shields.io/github/issues-pr/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/pulls)
[![Contributors](https://img.shields.io/github/contributors/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/graphs/contributors)
[![Repo Size](https://img.shields.io/github/repo-size/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/pulse/monthly)
[![GitHub Commit Activity](https://img.shields.io/github/commit-activity/y/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/commits/master)
[![GitHub Last Commit](https://img.shields.io/github/last-commit/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/commits)

### Quality

[![Travis branch](https://img.shields.io/travis/simplepie/simplepie-ng/master.svg?style=for-the-badge&label=Travis%20CI)](https://travis-ci.org/simplepie/simplepie-ng)
[![Coveralls](https://img.shields.io/coveralls/github/simplepie/simplepie-ng/master.svg?style=for-the-badge)](https://coveralls.io/github/simplepie/simplepie-ng)
[![Code Quality](http://img.shields.io/scrutinizer/g/simplepie/simplepie-ng.svg?style=for-the-badge&label=Scrutinizer)](https://scrutinizer-ci.com/g/simplepie/simplepie-ng)
[![Symfony Insight](https://img.shields.io/sensiolabs/i/1b772338-fd6a-4af1-8f5e-fddffc2b9d43.svg?style=for-the-badge&label=Symfony%20Insight)](https://insight.symfony.com/projects/1b772338-fd6a-4af1-8f5e-fddffc2b9d43)

### Social

[![Author](http://img.shields.io/badge/author-@skyzyx-blue.svg?style=for-the-badge)](https://twitter.com/skyzyx)
[![Follow](https://img.shields.io/twitter/follow/simplepie_ng.svg?style=for-the-badge&label=Follow%20@simplepie_ng)](https://twitter.com/intent/follow?screen_name=simplepie_ng)
[![Blog](https://img.shields.io/badge/medium-simplepie--ng-blue.svg?style=for-the-badge)](https://medium.com/simplepie-ng)
[![Stars](https://img.shields.io/github/stars/simplepie/simplepie-ng.svg?style=for-the-badge&label=GitHub%20Stars)](https://github.com/simplepie/simplepie-ng/stargazers)

### Compliance

[![License](https://img.shields.io/github/license/simplepie/simplepie-ng.svg?style=for-the-badge)](https://github.com/simplepie/simplepie-ng/blob/master/LICENSE.md)

## Coding Standards

PSR-1/2/5/12/19 are a solid foundation, but are not an entire coding style by themselves. We automate a large part of our style requirements using [PHP CS Fixer](http://cs.sensiolabs.org) and [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer). (The things that we cannot yet automate are documented in the [SimplePie NG Coding Standards](https://github.com/simplepie/simplepie-ng-coding-standards).)

These can be applied/fixed automatically by running the (lightweight) linter:

```bash
make lint
```

Additionally, in our quest to write excellent code, we use a variety of tools to help us catch issues with what we've written, including:

| Type | Description |
| ---- | ----------- |
| Linting Tools | [PHP CS Fixer](http://cs.sensiolabs.org), [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) |
| QA Tools | [PDepend](https://github.com/pdepend/pdepend), [PHPLOC](https://github.com/sebastianbergmann/phploc), [PHP Copy/Paste Detector](https://github.com/sebastianbergmann/phpcpd), [PHP Code Analyzer](https://github.com/wapmorgan/PhpCodeAnalyzer) |
| Static Analysis | [Phan](https://github.com/phan/phan), [PHPStan](https://github.com/phpstan/phpstan), [Psalm](https://github.com/vimeo/psalm), [PHP Dependency Analysis](https://github.com/mamuz/PhpDependencyAnalysis) |

These reports can be generated by running the (heavyweight) analyzer:

```bash
make analyze
```

## Please Support or Sponsor Development

The SimplePie project is a labor of love. Development of the next-generation of SimplePie was started in June 2017 as because it's a project I love, and I believe our community would benefit from this tool.

If you use SimplePie — especially to make money — it would be swell if you could kick down a few bucks. As the project grows, and we start leveraging more services and architecture, it would be great if it didn't all need to come out of my pocket.

You can also sponsor the development of a particular feature. If there's a feature that you want to see implemented, and I believe it's the right fit for the SimplePie project, you can sponsor the development of the feature to get it prioritized.

Your contributions are greatly and sincerely appreciated. See the **Sponsor** button along the top of the page for more information.

