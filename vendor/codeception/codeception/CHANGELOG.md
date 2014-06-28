# Changelog

#### 2.0.1 06/21/2014

* [Phalcon1] Fixed connector
* [WebDriver] added seeInPageSource and dontSeeInPageSource methods
* [WebDriver] see method now checks only for visible BODY element by @artyfarty
* [REST] added Bearer authentication by @dizews
* removed auto added submit buttons in forms previously used as hook for DomCrawler


#### 2.0.1 06/20/2014

* BUGFIX: PHP 5.4.x compatibility fixed. Sample error output: 'Method WelcomeCept.php does not exist' #1084 #1069 #1109


#### 2.0.1 06/19/2014

* Second parameter of Cest method is treated as scenario variable on parse. Fix #1058


#### 2.0.1 06/18/2014

* prints raw stack trace including codeception classes in -vvv mode
* screenshots on fail are saved to properly named files #1075
* [Symfony2] added debug config option to switch debug mode by @pmcjury



#### 2.0.0 06/05/2014

* renamed `_logs` dir to `_output` by default
* renamed `_helpers` dir to `_support` by default
* Guy renamed to Tester
* Bootstrap command got 3 installation modes: default, compat, setup

#### 2.0.0 05/27/2014

* added --coverage-text option


#### 2.0.0-RC2 05/12/2014

* removed fabpot/goutte, added Guzzle4 connector


#### 2.0.0-RC 04/29/2014

* group configuration can accept groups by patterns


#### 2.0.0-RC 04/02/2014

* [WebDriver] makeScreenshot does not use filename of a test


#### 2.0.0-RC 03/21/2014

* added grabAttributeFrom
* seeElement to accept attributes in second parameter: seeElement('input',['name'=>'login'])


#### 2.0.0-beta 03/19/2014

* executeInGuzzle is back in PhpBrowser
* environment can be accessed via ->env in test


#### 2.0.0-beta 03/18/2014

* before/after methods of Cest can take  object
* moved logger to extension
* bootstrap files are loaded before suite only
* extension can reconfigure global config


#### 2.0.0-beta 03/17/2014

* removed RefactorAddNamespace and Analyze commands
* added options to set output files for xml, html reports, and coverage
* added extension to rerun failed tests
* webdriver upgraded to 0.4
* upgraded to PHPUnit 4