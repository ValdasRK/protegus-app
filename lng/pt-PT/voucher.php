<?php

return array(
    'settings' => array(
        'title'  => 'Generate Vouchers',
        'list'   => array(
            'title'         => 'Voucher List',
            'code'          => 'Code',
            'status'        => 'Status',
            'addsTime'      => 'Adds months',
            'dateCreated'   => 'Date Created',
            'userCreated'   => 'User Created',
            'assignedTo'    => 'Assigned To Dealer',
            'dateActivated' => 'Date Activated',
            'systemUsed'    => 'System Used',
            'userActivated' => 'User Activated',
        ),
        'status' => 'Generated Vouchers. Successfully - :success ; Failed - :fail',
        'label'  => array(
            'amount' => 'Amount',
            'months' => 'Months',
            'dealer' => 'Dealer',
        )
    ),

    'button' => array(
        'useVoucher' => 'Use voucher',
        'generate'   => 'Generate',
        'download'   => 'Download',
        'use'        => 'Use',
        'back'       => 'Back',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Voucher User blocked',

        'blockedUser' => array(
            'body' => 'User: (:userId - :userName) was blocked after attempting to apply voucher too many times, blocked until: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Voucher',
        'enterCode' => 'Enter voucher code',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'You are blocked for multiple failures',
        'voucherApplied'          => 'Your voucher was successfully applied',
    ),

    'invoice' => 'Paid with voucher: :code',
    'error'   => array('wrongCode' => 'Wrong voucher code'),
);
