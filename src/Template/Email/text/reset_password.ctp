<?php
/**
 * @var \App\Model\Entity\User $user
 */
?>
<?php
use Cake\Routing\Router;

$url = Router::url(array(
    'controller' => 'users',
    'action' => 'reset',
    $user->username,
    $user->token,
), true);
?>
<?= $url ?>