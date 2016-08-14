<?php

/**
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 */

namespace Slim\PDO\Clause;

/**
 * Class ClauseContainer.
 *
 * @author Fabian de Laender <fabian@faapz.nl>
 */
abstract class ClauseContainer implements ClauseInterface
{
    /**
     * @var array
     */
    protected $container = [];
}
