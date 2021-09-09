<?php /*dlv-code-engine***/

$state->message()->setHeader('Content-Type','application/json');
$state->message()->setBodyAsArray([
    'org' => $state->memory()->get('hefesto-org'),
    'env' => $state->memory()->get('hefesto-env'),
    'api' => $state->memory()->get('hefesto-api'),
    'localhost' => $state->memory()->get('hefesto-localhost'),
    'pathcode' => $state->memory()->get('hefesto-pathcode'),
    'pathstorage' => $state->memory()->get('hefesto-pathstorage'),
    'definitionpath' => $state->memory()->get('hefesto-definitionpath'),
    'definitionverb' => $state->memory()->get('hefesto-definitionverb'),
]);