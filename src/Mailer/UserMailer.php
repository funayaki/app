<?php

namespace App\Mailer;

use App\Model\Entity\User;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{

    public function resetPassword(User $user)
    {
        $this
            ->setTo($user->email)
            ->setSubject('Reset password')
            ->set(compact('user'));
    }
}