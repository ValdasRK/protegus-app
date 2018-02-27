<?php

return array(
    'settings' => array(
        'title'  => 'Crear un bono',
        'list'   => array(
            'title'         => 'Lista de bonos',
            'code'          => 'Código',
            'status'        => 'Estado',
            'addsTime'      => 'Añade meses',
            'dateCreated'   => 'Fecha de creación',
            'userCreated'   => 'Creado por el usuario',
            'assignedTo'    => 'Asignado al distribuidor',
            'dateActivated' => 'Fecha de Activación',
            'systemUsed'    => 'Sistema utilizado',
            'userActivated' => 'Usuario activado',
        ),
        'status' => 'Bonos generados. Con éxito - :success ; Error - :fail',
        'label'  => array(
            'amount' => 'Importe',
            'months' => 'Meses',
            'dealer' => 'Distribuidor',
        )
    ),

    'button' => array(
        'useVoucher' => 'Usar bono',
        'generate'   => 'Generar',
        'download'   => 'Descargar',
        'use'        => 'Uso',
        'back'       => 'Atrás',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Bono de usuario bloqueado',

        'blockedUser' => array(
            'body' => 'Usuario: (:userId - :userName) fue bloqueado después de intentar aplicar bono demasiadas veces, bloqueado hasta: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Bono',
        'enterCode' => 'Introducir código de bono',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Está bloqueados por fallas múltiples',
        'voucherApplied'          => 'Su bono se aplicó con éxito',
    ),

    'invoice' => 'Pago con bono: :code',
    'error'   => array('wrongCode' => 'Código de bono no es válido'),
);
