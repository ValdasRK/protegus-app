<?php

return array(
    'subject' => array(
        'activation'  => 'Account activation',
        'invitation'  => 'You have been invited',
        'changeEmail' => 'Промени е-маил',
        'installerAssistance' => 'Assistance Request',
        'systemTransferred'   => 'System was Transferred',
    ),
    'body'    => array(
        'activate' => 'You have successfully registered in "Protegus".
                    Click the link below to activate your account: :activation.',

        'inviteNew' => 'You are invited to join "Protegus" to manage the system ":systemName".
                    Click this link to register :registration into "Protegus"',

        'inviteOld' => 'You have been invited to a new system ":systemName". Click this link to access it: :link',

        'reinvite' => 'You are invited to manage systems in "Protegus". Click this link to access them: :link',

        'body' => 'Click this link to reset your password',

        'changeEmail' => 'Click this link to confirm your email change: :link',

        'reset' => 'Click this link to reset your password: ',
        'installerAssistance' => 'System :systemName owner has requested assistance, <br>
                            You have access until :accessUntil <br>
                            Issue message: :issueDescription',
        'systemTransferred'   => 'System :systemName, has been transferred to you by :systemOwnerName',
    ),
);
