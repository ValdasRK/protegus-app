<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Η συνδρομή σας έχει λήξει',
            'subscriptionDaysLeft1' => 'Συνδρομή σας θα λήξει αύριο',
            'subscriptionDaysLeft2' => 'Σε δύο ημέρες θα λήξει η συνδρομή σας',
            'subscriptionDaysLeft5' => 'Θα λήξει η συνδρομή σας σε πέντε ημέρες',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Σεν ήμασταν σε θέση να λάβουμε την περιοδική πληρωμή από το λογαριασμό σας.',
                'systemName' => 'Σύστημα: :systemName',
                'linkInfo'   => 'Παρακαλώ ελέγξετε την κατάσταση πληρωμής σας για <a href=":href">συνδρομή</a> ή <a href=":mobileHref"> εφαρμογή για κινητά</a>',
            ),
            'subscriptionDaysLeft0' => 'Η συνδρομή σας έχει λήξει. Για ανανέωση πηγαίνετε στο <a href=":href"> συνδρομή</a> ή <a href=":mobileHref"> εφαρμογή για κινητά</a>',
            'subscriptionDaysLeft1' => 'Η συνδρομή σας πρόκειται να λήξει σε :daysLeft ημέρες, και η συσκευή σας θα ανασταλεί.',
            'subscriptionDaysLeft2' => 'Η συνδρομή σας πρόκειται να λήξει σε :daysLeft ημέρες, και η συσκευή σας θα ανασταλεί.',
            'subscriptionDaysLeft5' => 'Η συνδρομή σας θα λήξει σε :daysLeft ημέρες.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Η συνδρομή σας έχει λήξει ή δεν είναι έγκυρη. Για να ανανεώσετε πηγαίνετε στο <a href=":href"> ρυθμίσεις εγγραφής</a>.',
        'subscriptionDaysLeft1' => 'Δεν ήμασταν σε θέση να λάβουμε την περιοδική πληρωμή από το λογαριασμό σας. Σύστημα: :system.         Παρακαλώ ελέγξετε την κατάσταση της πληρωμής σας στις <a href=":href"> ρυθμίσεις εγγραφής</a>. Η συνδρομή σας θα λήξει αύριο.',
        'subscriptionDaysLeft2' => 'Δεν ήμασταν σε θέση να λάβουμε την περιοδική πληρωμή από το λογαριασμό σας. Σύστημα: :system.         Παρακαλώ ελέγξετε την κατάσταση της πληρωμής σας στις <a href=":href"> ρυθμίσεις εγγραφής</a>. Η συνδρομή σας θα λήξει σε :daysLeft ημέρες.',
        'subscriptionDaysLeft5' => 'Δεν ήμασταν σε θέση να λάβουμε την περιοδική πληρωμή από το λογαριασμό σας. Σύστημα: :system.         Παρακαλώ ελέγξετε την κατάσταση της πληρωμής σας στις <a href=":href"> ρυθμίσεις εγγραφής</a>. Η συνδρομή σας θα λήξει σε :daysLeft ημέρες.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Η τιμή συνδρομής έχει αλλάξει',
        'body'  => array(
            'info'             => 'Η τιμή της συνδρομής σας έχει αλλάξει',
            'systemName'       => 'Σύστημα: :systemName',
            'nextBillingPrice' => 'Επόμενη τιμή χρέωσης σας θα είναι :nextBillingPrice :currency, στο :billingDate',
        ),
    ),
);