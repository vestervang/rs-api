# RS-api

[![Build Status](https://img.shields.io/travis/vestervang/rs-api.svg?style=flat-square)](https://travis-ci.org/vestervang/rs-api)
[![Latest Stable Version](https://poser.pugx.org/vestervang/rs-api/v/stable?format=flat-square)](https://packagist.org/packages/vestervang/rs-api)
[![Latest Unstable Version](https://poser.pugx.org/vestervang/rs-api/v/unstable?format=flat-square)](https://packagist.org/packages/vestervang/rs-api)
[![Total Downloads](https://poser.pugx.org/vestervang/rs-api/downloads?format=flat-square)](https://packagist.org/packages/vestervang/rs-api)
[![License](https://poser.pugx.org/vestervang/rs-api/license?format=flat-square)](https://packagist.org/packages/vestervang/rs-api)

Core code is from [Burthorpe's runescape-api](https://github.com/Burthorpe/runescape-api)

## Installation

#### Dependencies
* [Guzzle](https://github.com/guzzle/guzzle)

#### Installation
```
composer require vestervang/rs-api
```

## Usage

* [Hiscore](#hiscore)
* [GE](#ge)
* [Bestiary](#bestiary)

### Hiscore

```PHP
require __DIR__.'/vendor/autoload.php';

use vestervang\rsApi\RS3\Hiscore;

$hiscore = new Hiscore();
$username = 'zezima';
$stats = $hiscore->getStats($username)
```

If you want to loop through the list of stats you can do it like this:

```PHP
for($i = 0; $i < $stats->getCount(); $i++){
	
	$stat = $stats->getStat($i);
	
	echo 'Name: '. $stat->getSkill()->getName(). '<br>';
	echo 'Rank: '. $stat->getRank(). '<br>';
	echo 'Level: '. $stat->getLevel(). '<br>';
	echo 'Xp: '. $stat->getExperience(). '<br>';
	echo '<br><br>';
}
```

Or if you want to use a foreach:

```PHP
foreach($stats->getStats() as $stat){
	
	echo 'Name: '. $stat->getSkill()->getName(). '<br>';
	echo 'Rank: '. $stat->getRank(). '<br>';
	echo 'Level: '. $stat->getLevel(). '<br>';
	echo 'Xp: '. $stat->getExperience(). '<br>';
	echo '<br><br>';

}
```

### GE

The only way to get a item price at the moment is by finding the id and using that.

```PHP
require __DIR__.'/vendor/autoload.php';

use vestervang\rsApi\RS3\GE;

$api = new GE();
$item = $api->getItemById(4151);
```

I calculate the percent difference myself to get a more accurate number instead of the +0.0% og -0.0% the api returns.

### Bestiary
In the bestiary api there is a option to save the result of an api call to a repo (The result will be saved to the repo as a Beast object).

This can be turned off on a per call basis. Just send false as a second parameter and it won't save the data in the repo.

#### Id
```PHP
require __DIR__.'/vendor/autoload.php';

$bestiary = new \vestervang\rsApi\RS3\Bestiary();

//This will save to the repo and returns the json
$beast = $bestiary->getBeastById(49);

//This call only returns the json
$beast = $bestiary->getBeastById(49, false);
```
This will return the json for a monster with all details.

#### Name
```PHP
require __DIR__.'/vendor/autoload.php';

$bestiary = new \vestervang\rsApi\RS3\Bestiary();

$beast = $bestiary->getBeastByName('cow');
```
This will return the json for a list of beasts with names and ids.

#### Level
```PHP
require __DIR__.'/vendor/autoload.php';

$bestiary = new \vestervang\rsApi\RS3\Bestiary();

$beast = $bestiary->getBeastsByLevel('150-300');
```
This will return the json for a list of beasts with names and ids.

#### Letter
```PHP
require __DIR__.'/vendor/autoload.php';

$bestiary = new \vestervang\rsApi\RS3\Bestiary();

$beast = $bestiary->getBeastsByLetter('y');
```
This will return the json for a list of beasts with names and ids.

#### Area
This function is case-sensetive 'The Abyss' and 'The abyss' will not return the same results.
```PHP
require __DIR__.'/vendor/autoload.php';

$bestiary = new \vestervang\rsApi\RS3\Bestiary();

$beast = $bestiary->getBeastsByArea('The Abyss');
```
This will return the json for a list of beasts with names and ids.
