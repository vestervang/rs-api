<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/26/18
 * Time: 8:40 PM
 */

use vestervang\rsApi\RS3\Stats\Stat;

class StatRepositoryTest extends \PHPUnit\Framework\TestCase
{

    protected $data = '88200,2592,428329680
57202,99,24000155
99968,99,18078457
74760,99,20439102
89502,99,32110666
90461,99,20252991
139679,99,13148111
101527,99,17992881
81429,99,14676346
103653,99,14153210
64407,99,14178516
117648,99,13560341
87601,99,14420842
94143,99,13304570
89194,99,13431180
33305,99,24795946
91806,99,14069526
56136,99,14258239
35348,99,26123257
97393,101,16131315
90276,99,13246022
92437,99,13108595
111966,93,7229513
109431,93,7746298
112634,99,13239828
73154,104,21489580
90365,99,13035545
189882,23,108648
-1,-1
-1,-1
-1,-1
-1,-1
-1,-1
100051,710
98477,525
101833,606
101798,800
-1,-1
-1,-1
21630,1258
-1,-1
30345,336
95981,533
-1,-1
13626,459955
-1,-1
16779,4
-1,-1
-1,-1
86261,24
-1,-1
-1,-1
-1,-1
-1,-1
154441,1
75217,10
-1,-1
';

    public function testGetStats()
    {

        $repo   = new \vestervang\rsApi\RS3\Stats\StatsRepository($this->data);
        $skills = new \vestervang\rsApi\RS3\Skills\SkillRepository();

        $stats = [
            new Stat($skills->getById(0), 2592, 88200, 428329680),
            new Stat($skills->getById(1), 99, 57202, 24000155),
            new Stat($skills->getById(2), 99, 99968, 18078457),
            new Stat($skills->getById(3), 99, 74760, 20439102),
            new Stat($skills->getById(4), 99, 89502, 32110666),
            new Stat($skills->getById(5), 99, 90461, 20252991),
            new Stat($skills->getById(6), 99, 139679, 13148111),
            new Stat($skills->getById(7), 99, 101527, 17992881),
            new Stat($skills->getById(8), 99, 81429, 14676346),
            new Stat($skills->getById(9), 99, 103653, 14153210),
            new Stat($skills->getById(10), 99, 64407, 14178516),
            new Stat($skills->getById(11), 99, 117648, 13560341),
            new Stat($skills->getById(12), 99, 87601, 14420842),
            new Stat($skills->getById(13), 99, 94143, 13304570),
            new Stat($skills->getById(14), 99, 89194, 13431180),
            new Stat($skills->getById(15), 99, 33305, 24795946),
            new Stat($skills->getById(16), 99, 91806, 14069526),
            new Stat($skills->getById(17), 99, 56136, 14258239),
            new Stat($skills->getById(18), 99, 35348, 26123257),
            new Stat($skills->getById(19), 101, 97393, 16131315),
            new Stat($skills->getById(20), 99, 90276, 13246022),
            new Stat($skills->getById(21), 99, 92437, 13108595),
            new Stat($skills->getById(22), 93, 111966, 7229513),
            new Stat($skills->getById(23), 93, 109431, 7746298),
            new Stat($skills->getById(24), 99, 112634, 13239828),
            new Stat($skills->getById(25), 104, 73154, 21489580),
            new Stat($skills->getById(26), 99, 90365, 13035545),
            new Stat($skills->getById(27), 23, 189882, 108648),
        ];

        $this->assertEquals($stats, $repo->getStats());
    }

    public function testGetCount()
    {

        $repo = new \vestervang\rsApi\RS3\Stats\StatsRepository($this->data);

        $this->assertEquals(28, $repo->getCount());

    }

    public function testGetStatById()
    {

        $repo   = new \vestervang\rsApi\RS3\Stats\StatsRepository($this->data);
        $skills = new \vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertEquals(new Stat($skills->getById(0), 2592, 88200, 428329680), $repo->getStatById(0));
        $this->assertEquals(new Stat($skills->getById(1), 99, 57202, 24000155), $repo->getStatById(1));
        $this->assertEquals(new Stat($skills->getById(2), 99, 99968, 18078457), $repo->getStatById(2));
        $this->assertEquals(new Stat($skills->getById(3), 99, 74760, 20439102), $repo->getStatById(3));
        $this->assertEquals(new Stat($skills->getById(4), 99, 89502, 32110666), $repo->getStatById(4));
        $this->assertEquals(new Stat($skills->getById(5), 99, 90461, 20252991), $repo->getStatById(5));
        $this->assertEquals(new Stat($skills->getById(6), 99, 139679, 13148111), $repo->getStatById(6));
        $this->assertEquals(new Stat($skills->getById(7), 99, 101527, 17992881), $repo->getStatById(7));
        $this->assertEquals(new Stat($skills->getById(8), 99, 81429, 14676346), $repo->getStatById(8));
        $this->assertEquals(new Stat($skills->getById(9), 99, 103653, 14153210), $repo->getStatById(9));
        $this->assertEquals(new Stat($skills->getById(10), 99, 64407, 14178516), $repo->getStatById(10));
        $this->assertEquals(new Stat($skills->getById(11), 99, 117648, 13560341), $repo->getStatById(11));
        $this->assertEquals(new Stat($skills->getById(12), 99, 87601, 14420842), $repo->getStatById(12));
        $this->assertEquals(new Stat($skills->getById(13), 99, 94143, 13304570), $repo->getStatById(13));
        $this->assertEquals(new Stat($skills->getById(14), 99, 89194, 13431180), $repo->getStatById(14));
        $this->assertEquals(new Stat($skills->getById(15), 99, 33305, 24795946), $repo->getStatById(15));
        $this->assertEquals(new Stat($skills->getById(16), 99, 91806, 14069526), $repo->getStatById(16));
        $this->assertEquals(new Stat($skills->getById(17), 99, 56136, 14258239), $repo->getStatById(17));
        $this->assertEquals(new Stat($skills->getById(18), 99, 35348, 26123257), $repo->getStatById(18));
        $this->assertEquals(new Stat($skills->getById(19), 101, 97393, 16131315), $repo->getStatById(19));
        $this->assertEquals(new Stat($skills->getById(20), 99, 90276, 13246022), $repo->getStatById(20));
        $this->assertEquals(new Stat($skills->getById(21), 99, 92437, 13108595), $repo->getStatById(21));
        $this->assertEquals(new Stat($skills->getById(22), 93, 111966, 7229513), $repo->getStatById(22));
        $this->assertEquals(new Stat($skills->getById(23), 93, 109431, 7746298), $repo->getStatById(23));
        $this->assertEquals(new Stat($skills->getById(24), 99, 112634, 13239828), $repo->getStatById(24));
        $this->assertEquals(new Stat($skills->getById(25), 104, 73154, 21489580), $repo->getStatById(25));
        $this->assertEquals(new Stat($skills->getById(26), 99, 90365, 13035545), $repo->getStatById(26));
        $this->assertEquals(new Stat($skills->getById(27), 23, 189882, 108648), $repo->getStatById(27));

        $this->assertEquals(null, $repo->getStatById(456123));
        $this->assertEquals(null, $repo->getStatById('fhjdklsa'));
    }

    public function testGetStatByName()
    {

        $repo   = new \vestervang\rsApi\RS3\Stats\StatsRepository($this->data);
        $skills = new \vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertEquals(new Stat($skills->getById(0), 2592, 88200, 428329680), $repo->getStatByName('total'));
        $this->assertEquals(new Stat($skills->getById(1), 99, 57202, 24000155), $repo->getStatByName('attack'));
        $this->assertEquals(new Stat($skills->getById(2), 99, 99968, 18078457), $repo->getStatByName('defence'));
        $this->assertEquals(new Stat($skills->getById(3), 99, 74760, 20439102), $repo->getStatByName('strength'));
        $this->assertEquals(new Stat($skills->getById(4), 99, 89502, 32110666), $repo->getStatByName('constitution'));
        $this->assertEquals(new Stat($skills->getById(5), 99, 90461, 20252991), $repo->getStatByName('ranged'));
        $this->assertEquals(new Stat($skills->getById(6), 99, 139679, 13148111), $repo->getStatByName('prayer'));
        $this->assertEquals(new Stat($skills->getById(7), 99, 101527, 17992881), $repo->getStatByName('magic'));
        $this->assertEquals(new Stat($skills->getById(8), 99, 81429, 14676346), $repo->getStatByName('cooking'));
        $this->assertEquals(new Stat($skills->getById(9), 99, 103653, 14153210), $repo->getStatByName('woodcutting'));
        $this->assertEquals(new Stat($skills->getById(10), 99, 64407, 14178516), $repo->getStatByName('fletching'));
        $this->assertEquals(new Stat($skills->getById(11), 99, 117648, 13560341), $repo->getStatByName('fishing'));
        $this->assertEquals(new Stat($skills->getById(12), 99, 87601, 14420842), $repo->getStatByName('firemaking'));
        $this->assertEquals(new Stat($skills->getById(13), 99, 94143, 13304570), $repo->getStatByName('crafting'));
        $this->assertEquals(new Stat($skills->getById(14), 99, 89194, 13431180), $repo->getStatByName('smithing'));
        $this->assertEquals(new Stat($skills->getById(15), 99, 33305, 24795946), $repo->getStatByName('mining'));
        $this->assertEquals(new Stat($skills->getById(16), 99, 91806, 14069526), $repo->getStatByName('herblore'));
        $this->assertEquals(new Stat($skills->getById(17), 99, 56136, 14258239), $repo->getStatByName('agility'));
        $this->assertEquals(new Stat($skills->getById(18), 99, 35348, 26123257), $repo->getStatByName('thieving'));
        $this->assertEquals(new Stat($skills->getById(19), 101, 97393, 16131315), $repo->getStatByName('slayer'));
        $this->assertEquals(new Stat($skills->getById(20), 99, 90276, 13246022), $repo->getStatByName('farming'));
        $this->assertEquals(new Stat($skills->getById(21), 99, 92437, 13108595), $repo->getStatByName('runecrafting'));
        $this->assertEquals(new Stat($skills->getById(22), 93, 111966, 7229513), $repo->getStatByName('hunter'));
        $this->assertEquals(new Stat($skills->getById(23), 93, 109431, 7746298), $repo->getStatByName('construction'));
        $this->assertEquals(new Stat($skills->getById(24), 99, 112634, 13239828), $repo->getStatByName('summoning'));
        $this->assertEquals(new Stat($skills->getById(25), 104, 73154, 21489580), $repo->getStatByName('dungeoneering'));
        $this->assertEquals(new Stat($skills->getById(26), 99, 90365, 13035545), $repo->getStatByName('divination'));
        $this->assertEquals(new Stat($skills->getById(27), 23, 189882, 108648), $repo->getStatByName('invention'));

        $this->assertEquals(null, $repo->getStatByName('nfgjripagnjdfkmsæ'));
        $this->assertEquals(null, $repo->getStatByName(20));

    }

    public function testGetStat()
    {

        $repo   = new \vestervang\rsApi\RS3\Stats\StatsRepository($this->data);
        $skills = new \vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertEquals(new Stat($skills->getById(0), 2592, 88200, 428329680), $repo->getStat(0));
        $this->assertEquals(new Stat($skills->getById(0), 2592, 88200, 428329680), $repo->getStat('total'));

        $this->assertEquals(new Stat($skills->getById(1), 99, 57202, 24000155), $repo->getStat(1));
        $this->assertEquals(new Stat($skills->getById(1), 99, 57202, 24000155), $repo->getStat('attack'));

        $this->assertEquals(new Stat($skills->getById(2), 99, 99968, 18078457), $repo->getStat(2));
        $this->assertEquals(new Stat($skills->getById(2), 99, 99968, 18078457), $repo->getStat('defence'));

        $this->assertEquals(new Stat($skills->getById(3), 99, 74760, 20439102), $repo->getStat(3));
        $this->assertEquals(new Stat($skills->getById(3), 99, 74760, 20439102), $repo->getStat('strength'));

        $this->assertEquals(new Stat($skills->getById(4), 99, 89502, 32110666), $repo->getStat(4));
        $this->assertEquals(new Stat($skills->getById(4), 99, 89502, 32110666), $repo->getStat('constitution'));

        $this->assertEquals(new Stat($skills->getById(5), 99, 90461, 20252991), $repo->getStat(5));
        $this->assertEquals(new Stat($skills->getById(5), 99, 90461, 20252991), $repo->getStat('ranged'));

        $this->assertEquals(new Stat($skills->getById(6), 99, 139679, 13148111), $repo->getStat(6));
        $this->assertEquals(new Stat($skills->getById(6), 99, 139679, 13148111), $repo->getStat('prayer'));

        $this->assertEquals(new Stat($skills->getById(7), 99, 101527, 17992881), $repo->getStat(7));
        $this->assertEquals(new Stat($skills->getById(7), 99, 101527, 17992881), $repo->getStat('magic'));

        $this->assertEquals(new Stat($skills->getById(8), 99, 81429, 14676346), $repo->getStat(8));
        $this->assertEquals(new Stat($skills->getById(8), 99, 81429, 14676346), $repo->getStat('cooking'));

        $this->assertEquals(new Stat($skills->getById(9), 99, 103653, 14153210), $repo->getStat(9));
        $this->assertEquals(new Stat($skills->getById(9), 99, 103653, 14153210), $repo->getStat('woodcutting'));

        $this->assertEquals(new Stat($skills->getById(10), 99, 64407, 14178516), $repo->getStat(10));
        $this->assertEquals(new Stat($skills->getById(10), 99, 64407, 14178516), $repo->getStat('fletching'));

        $this->assertEquals(new Stat($skills->getById(11), 99, 117648, 13560341), $repo->getStat(11));
        $this->assertEquals(new Stat($skills->getById(11), 99, 117648, 13560341), $repo->getStat('fishing'));

        $this->assertEquals(new Stat($skills->getById(12), 99, 87601, 14420842), $repo->getStat(12));
        $this->assertEquals(new Stat($skills->getById(12), 99, 87601, 14420842), $repo->getStat('firemaking'));

        $this->assertEquals(new Stat($skills->getById(13), 99, 94143, 13304570), $repo->getStat(13));
        $this->assertEquals(new Stat($skills->getById(13), 99, 94143, 13304570), $repo->getStat('crafting'));

        $this->assertEquals(new Stat($skills->getById(14), 99, 89194, 13431180), $repo->getStat(14));
        $this->assertEquals(new Stat($skills->getById(14), 99, 89194, 13431180), $repo->getStat('smithing'));

        $this->assertEquals(new Stat($skills->getById(15), 99, 33305, 24795946), $repo->getStat(15));
        $this->assertEquals(new Stat($skills->getById(15), 99, 33305, 24795946), $repo->getStat('mining'));

        $this->assertEquals(new Stat($skills->getById(16), 99, 91806, 14069526), $repo->getStat(16));
        $this->assertEquals(new Stat($skills->getById(16), 99, 91806, 14069526), $repo->getStat('herblore'));

        $this->assertEquals(new Stat($skills->getById(17), 99, 56136, 14258239), $repo->getStat(17));
        $this->assertEquals(new Stat($skills->getById(17), 99, 56136, 14258239), $repo->getStat('agility'));

        $this->assertEquals(new Stat($skills->getById(18), 99, 35348, 26123257), $repo->getStat(18));
        $this->assertEquals(new Stat($skills->getById(18), 99, 35348, 26123257), $repo->getStat('thieving'));

        $this->assertEquals(new Stat($skills->getById(19), 101, 97393, 16131315), $repo->getStat(19));
        $this->assertEquals(new Stat($skills->getById(19), 101, 97393, 16131315), $repo->getStat('slayer'));

        $this->assertEquals(new Stat($skills->getById(20), 99, 90276, 13246022), $repo->getStat(20));
        $this->assertEquals(new Stat($skills->getById(20), 99, 90276, 13246022), $repo->getStat('farming'));

        $this->assertEquals(new Stat($skills->getById(21), 99, 92437, 13108595), $repo->getStat(21));
        $this->assertEquals(new Stat($skills->getById(21), 99, 92437, 13108595), $repo->getStat('runecrafting'));

        $this->assertEquals(new Stat($skills->getById(22), 93, 111966, 7229513), $repo->getStat(22));
        $this->assertEquals(new Stat($skills->getById(22), 93, 111966, 7229513), $repo->getStat('hunter'));

        $this->assertEquals(new Stat($skills->getById(23), 93, 109431, 7746298), $repo->getStat(23));
        $this->assertEquals(new Stat($skills->getById(23), 93, 109431, 7746298), $repo->getStat('construction'));

        $this->assertEquals(new Stat($skills->getById(24), 99, 112634, 13239828), $repo->getStat(24));
        $this->assertEquals(new Stat($skills->getById(24), 99, 112634, 13239828), $repo->getStat('summoning'));

        $this->assertEquals(new Stat($skills->getById(25), 104, 73154, 21489580), $repo->getStat(25));
        $this->assertEquals(new Stat($skills->getById(25), 104, 73154, 21489580), $repo->getStat('dungeoneering'));

        $this->assertEquals(new Stat($skills->getById(26), 99, 90365, 13035545), $repo->getStat(26));
        $this->assertEquals(new Stat($skills->getById(26), 99, 90365, 13035545), $repo->getStat('divination'));

        $this->assertEquals(new Stat($skills->getById(27), 23, 189882, 108648), $repo->getStat(27));
        $this->assertEquals(new Stat($skills->getById(27), 23, 189882, 108648), $repo->getStat('invention'));

        $this->assertEquals(null, $repo->getStat(84231));
        $this->assertEquals(null, $repo->getStat('gurejwkhg'));

    }
}
