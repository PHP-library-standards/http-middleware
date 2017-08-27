<?php
/**
 * @package   Pls\Http\Middleware
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Middleware;

use Pls\Http\Message\{Response, ServerRequest};
use Pls\Http\Server\Handler;

interface Middleware
{
    public function process(ServerRequest $request, Handler $handler): Response;
}
