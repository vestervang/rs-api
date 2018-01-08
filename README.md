# RS-api

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
