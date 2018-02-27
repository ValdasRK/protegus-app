<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'               => 'Hatalı e-posta yada şifre.',
    'throttle'             => 'Fazla Sayıda Oturum Açma Girişimi. Birazdan Yeniden :seconds Deneyiniz.',
    'licenseTitle'         => 'Son Kullanıcı Lisans Sözleşmesi',
    'sendPasswordLink'     => 'Şifre Sıfırlamak için E-posta gir',
    'triedToRegister'      => 'Zaten Kayıtlı',
    'notActiveYet'         => 'Hesabın Aktif Değil',
    'resendActivation'     => 'Aktivasyon Linki Gönder',
    'activationResentFail' => 'Aktivasyonu tekrar gönder',
    'activationResent'     => 'Aktivasyon linki e-posta gönderildi',
    'passwordResetSent'    => 'Şifre Sıfırlama Linki E-postana Gönderildi',

    'form'       => array(
        'name'            => 'Ad Soyad',
        'email'           => 'E-posta',
        'signUp'          => 'Kaydol',
        'password'        => 'Şifre',
        'reenterPassword' => 'Şifrenizi Tekrar Girin',
        'confirmPassword' => 'Şifreyi Doğrula',
        'phoneNumber'     => 'Telefon Numarası',
        'company'         => 'Şirket',
    ),
    'buttons'    => array(
        'remember'       => 'Şifreyi Hatırla',
        'signUp'         => 'Kaydol',
        'signUpInstallers' => 'Ana kullanıcı için kaydol',
        'logIn'          => 'Giriş',
        'forgotPassword' => 'Şifreni mi Unuttun? ',
        'cancel'         => 'İptal',
        'agree'          => 'Kabul',
        'disagree'       => 'Kabul etmiyorum',
        'send'           => 'İlet',
        'resetPassword'  => 'Şifre Sıfırla',
        'skip'           => 'Atla',
        'allow'          => 'İzin',
        'next'           => 'İleri',
        'previous'       => 'Önceki',
        'finish'         => 'Bitir',
        'loginView'      => 'Anasayfaya Dön',
        'backToSystems'  => 'Site listesine geri dön',
    ),
    'activation' => array(
        'required' => 'Aktivasyon linki ile ilgili bir mail alıcaksın',
        'failed'   => 'Aktivasyon basarısız',
    ),

    'emailChangeError' => 'Token to change the E-mail is invalid.',
    'emailChanged'     => 'E-posta Adresi Değiştirildi.',

    'pushNotifications'       => array(
        'title' => 'Anlık bildirimler',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Şifre sıfırlama kodu geçersiz.',
    'tutorial'                => array(
        'title'  => 'Yardım',
        'title1' => 'Yeni Sistem Ekle',
        'text1'  => 'Yeni bir sistem oluşturmak için: <br><b>Sistem seç</b> tuşuna basın ve sonra <b>yeni sistemi eklemek +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Aygıtınızın <b>Benzersiz kimlik</b> girin. Benzersiz kimlik ürün ambalaj üzerinde bulunabilir. <br>Enter <b>"Protegus" hizmet erişim kodu</b>. Erişim kodu iletişim cihazı ile bağlantı kurmak için bir kimlik doğrulama kodudur. Kod yazılı iletişim aygıtı aynı olmalıdır. Varsayılan olarak 123456 kodudur. Erişim kodunu değiştirdiyseniz, sorumlu personeline başvurun.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Page has expired, please try again',

    'errors' => array(
        '401' => 'İzin Yok',
        '503' => 'Hemen Dönecek',
        '404' => 'Bulunamadı',
        '500' => 'Server is busy. Please try again later.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
