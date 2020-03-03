<?php
/**
 * This file is part of the Decode Framework
 * @license http://opensource.org/licenses/MIT
 */
namespace df\apex\directory;

use df;
use df\core;
use df\apex as TestAlias;

interface MyInterface extends \ArrayAccess, \Countable
{
}

trait MyTrait
{
    protected $vaf = [
        'gg', 1, 2, 3
    ];

    public function hello()
    {
    }
}

define('CONSTANT', 'my const');

$string = "$other\n\n\nactual text";
$constant = \CONSTANT;

str_replace("\r", "\n", $string);

class Test extends core\Base implements namespace\MyInterface, \ArrayAccess
{
    use core\MyTrait;

    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }

    /**
     * This is docblock
     */
    public function test(string $in=null, callable $renderer): ?string
    {
        self::test($in, $renderer());
        return 'hello';
    }

    public function __construct($query)
    {
        some\other\Thing::go();
        str_pad('gg', 2);

        $query
            ->countRelation('tasks')
            ->countRelation('goals')
            ->correlateRelation('tasks', 'COUNT(completionDate)', 'completedTasks')
            ->correlate('SUM(time) as time')
                ->from('axis://job/Log', 'log')
                ->whereCorrelation('log.task', 'in', 'id')
                    ->from('axis://job/Task', 'task')
                    ->whereField('task.category', '=', 'category.id')
                    ->endCorrelation()
                ->endCorrelation()
            ->importRelationBlock('project', 'link');
    }

    protected function _flaps(arch\IRequest $request, $class): ?core\Uri
    {
        if (
            !class_exists($class) ||
            $request instanceof arch\Stuff
        ) {
            throw core\Error::ENotFound(
                'Css processor '.$class.' could not be found'
            );
        }

        $out = true;

        return $this->settings->test(function (?int $in) use ($out): string {
            return $in ?? $out;
        });
    }

    public function test2(): void
    {
        $stuff = [
            'key' => 'value',
            'otherKey' => 'hello world'
        ];

        switch ($stuff) {
            case 'test':
                break;
        }
    }
}
?>

<div class="special">Test</div>
