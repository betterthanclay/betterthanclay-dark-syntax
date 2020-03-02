<?php
/**
 * This file is part of the Decode Framework
 * @license http://opensource.org/licenses/MIT
 */
namespace df\apex\directory;

use df;
use df\core;
use df\apex as TestAlias;

interface MyInterface extends ArrayAccess, \Countable
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

$string = "$other\n\n\nactual text";
$constant = CONSTANT;

str_replace("\r", "\n", $string);

class Test extends core\Base implements namespace\gg\MyInterface, ffff\f\ArrayAccess
{
    use core\MyTrait as SomeTrait;

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

    public function __construct()
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

    protected function _flaps(arch\IRequest $request): ?core\Uri
    {
        if (!class_exists($class)
        || $request instanceof arch\Stuff) {
            throw new core\Error::ENotFound(
                'Css processor '.$name.' could not be found'
            );
        }

        return $this->settings->test(function (?int $in) {
            return $in ?? $out;
        });
    }

    public function test2(): void {
        $stuff[
            'key' => 'value'
        ];

        switch($stuff) {
            case 'test':
                break;
        }
    }
}
?>

<div class="special">Test</div>
