<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/plugins/login/languages/fr.yaml',
    'modified' => 1715786242,
    'size' => 15863,
    'data' => [
        'PLUGIN_LOGIN' => [
            'USERNAME' => 'Nom d’utilisateur',
            'EMAIL' => 'E-mail',
            'USERNAME_EMAIL' => 'Nom d’utilisateur/E-mail',
            'PASSWORD' => 'Mot de passe',
            'ACCESS_DENIED' => 'Accès refusé...',
            'LOGIN_FAILED' => 'Échec de la connexion...',
            'LOGIN_SUCCESSFUL' => 'Vous vous êtes connecté avec succès.',
            'BTN_LOGIN' => 'Connexion',
            'BTN_LOGOUT' => 'Déconnexion',
            'BTN_FORGOT' => 'Mot de passe oublié',
            'BTN_REGISTER' => 'S’enregister',
            'BTN_SUBMIT_PROFILE' => 'Enregistrer',
            'BTN_RESET' => 'Réinitialiser',
            'BTN_RESET_PASSWORD' => 'Réinitialiser le mot de passe',
            'BTN_SEND_INSTRUCTIONS' => 'Envoyer les instructions de Réinitialisation',
            'BTN_SUBMIT' => 'Soumettre',
            'RESET_LINK_EXPIRED' => 'Le lien de réinitialisation a expiré, veuillez réessayer',
            'RESET_PASSWORD_RESET' => 'Le mot de passe a été réinitialisé',
            'RESET_INVALID_LINK' => 'Le lien de réinitialisation utilisé n’est pas valide, veuillez réessayer',
            'FORGOT_INSTRUCTIONS_SENT_VIA_EMAIL' => 'Les instructions pour la réinitialisation de votre mot de passe ont été envoyées par e-mail',
            'FORGOT_FAILED_TO_EMAIL' => 'Impossible d’envoyer les instructions, veuillez réessayer ultérieurement',
            'FORGOT_CANNOT_RESET_EMAIL_NO_EMAIL' => 'Impossible de réinitialiser le mot de passe pour %s, aucune adresse e-mail n’a été paramétrée',
            'FORGOT_CANNOT_RESET_EMAIL_NO_PASSWORD' => 'Impossible de réinitialiser le mot de passe pour %s, cet e-mail est associé à un compte distant',
            'FORGOT_USERNAME_DOES_NOT_EXIST' => 'L’utilisateur avec le nom d’utilisateur <b>%s</b> n’existe pas',
            'FORGOT_EMAIL_NOT_CONFIGURED' => 'Impossible de réinitialiser le mot de passe. Ce site n’est pas configuré pour envoyer des e-mails',
            'FORGOT_EMAIL_SUBJECT' => 'Demande de réinitialisation de mot de passe %s',
            'FORGOT_EMAIL_BODY' => '<h1>Réinitialisation de mot de passe</h1><p>%1$s,</p><p>Une demande a été faite sur <b>%4$s</b> pour la réinitialisation de votre mot de passe.</p><p><br /><a href="%2$s" class="btn-primary">Cliquez ici pour réinitialiser votre mot de passe</a><br /><br /></p><p>Vous pouvez également copier l’URL suivante dans la barre d’adresse de votre navigateur :</p> <p class="word-break"><a href="%2$s">%2$s</a></p> <p><br />Cordialement,<br /><br />%3$s</p>',
            'SESSION' => 'Session - &ldquo;Se souvenir de moi&rdquo;',
            'REMEMBER_ME' => 'Se souvenir de moi',
            'REMEMBER_ME_HELP' => 'Définit un cookie persistant sur votre navigateur autorisant l’authentification par connexion persistante entre les sessions.',
            'REMEMBER_ME_STOLEN_COOKIE' => 'Quelqu’un d’autre a utilisé vos informations de connexion pour accéder à cette page ! Toutes les sessions ont été déconnectées. Veuillez vous connecter avec vos identifiants et vérifier vos données.',
            'BUILTIN_CSS' => 'Utiliser les CSS intégrés',
            'BUILTIN_CSS_HELP' => 'Utiliser les CSS fournis dans le plugin d’administration',
            'ROUTE' => 'Chemin de connexion',
            'ROUTE_HELP' => 'Chemin personnalisé vers une page de connexion personnalisée proposée par votre thème',
            'ROUTE_REGISTER' => 'Chemin vers l’inscription',
            'ROUTE_REGISTER_HELP' => 'Chemin vers la page d’inscription. A définir si vous souhaitez utiliser la page d’inscription intégrée. Laisser vide si vous disposez de votre propre formulaire d’inscription.',
            'USERNAME_NOT_VALID' => 'Le nom d’utilisateur doit comporter entre 3 et 16 caractères et peut être composé de lettres minuscules, de chiffres et de tirets de soulignement (underscores) et des traits d’union. Les lettres majuscules, les espaces et les caractères spéciaux ne sont pas autorisés.',
            'USERNAME_NOT_AVAILABLE' => 'L’adresse e-mail e nom d’utilisateur %s existe déjà, veuillez en choisir un autre.',
            'EMAIL_NOT_AVAILABLE' => 'L’adresse e-mail %s existe déjà, veuillez en choisir une autre',
            'PASSWORD_NOT_VALID' => 'Le mot de passe doit contenir au moins un chiffre, une majuscule et une minuscule et être composé d’au moins 8 caractères',
            'PASSWORDS_DO_NOT_MATCH' => 'Les mots de passe sont différents. Réessayez de saisir le même mot de passe deux fois.',
            'USER_NEEDS_EMAIL_FIELD' => 'L’utilisateur a besoin d’un champ pour e-mail',
            'EMAIL_SENDING_FAILURE' => 'Une erreur est survenue lors de l’envoi de l’e-mail.',
            'ACTIVATION_EMAIL_SUBJECT' => 'Activer votre compte sur %s',
            'ACTIVATION_EMAIL_BODY' => 'Bonjour %s, <a href="%s">cliquez</a> pour activer votre compte sur %s',
            'ACTIVATION_NOTICE_MSG' => 'Bonjour %s, votre compte a été créé, veuillez vérifier votre e-mail pour l’activer',
            'WELCOME_EMAIL_SUBJECT' => 'Bienvenue sur %s',
            'WELCOME_EMAIL_BODY' => '<h1>Compte créé</h1><p>Bonjour %1$s, </p><p>Votre compte a été créé avec succès sur <b>%3$s</b>.</p><p><br/><a href="%2$s" class="btn-primary">Connectez-vous dès maintenant</a><br/><br/></p><p>Vous pouvez également copier l’URL suivante dans la barre d’adresse de votre navigateur : </p><p class="word-break"><a href="%2$s">%2$s</a></p><p><br/>Cordialement,<br/><br/>%4$s</p>',
            'WELCOME_NOTICE_MSG' => 'Bonjour %s, votre compte a été créé avec succès',
            'NOTIFICATION_EMAIL_SUBJECT' => 'Nouvel utilisateur sur %s',
            'NOTIFICATION_EMAIL_BODY' => '<h1>Nouvel utilisateur</h1><p>Bonjour, un nouvel utilisateur s’est inscrit sur %1$s.</p><p><ul><li>Nom d’utilisateur : <b>%2$s</b></li><li>E-mail : <b>%3$s</b></ul><p><p><br/><a href="%4$s" class="btn-primary">Visiter %1$s</a><br/><br/></p>',
            'EMAIL_FOOTER' => 'GetGrav.org',
            'ACTIVATION_LINK_EXPIRED' => 'Le lien d’activation a expiré',
            'USER_ACTIVATED_SUCCESSFULLY' => 'Compte utilisateur activé avec succès',
            'USER_ACTIVATED_SUCCESSFULLY_NOT_ENABLED' => 'Compte utilisateur activé mais en cours d’examen',
            'INVALID_REQUEST' => 'Requête non valide',
            'USER_REGISTRATION' => 'Inscription de l’utilisateur',
            'USER_REGISTRATION_ENABLED_HELP' => 'Activer l’inscription des utilisateurs',
            'VALIDATE_PASSWORD1_AND_PASSWORD2' => 'Valider la double saisie du mot de passe',
            'VALIDATE_PASSWORD1_AND_PASSWORD2_HELP' => 'Comparer et valider deux champs pour les mots de passe `Mot de passe 1` et `Mot de passe 2`. Activez cette option si vous avez deux champs de mots de passe dans le formulaire d’inscription.',
            'SET_USER_DISABLED' => 'Définir l’utilisateur comme désactivé',
            'SET_USER_DISABLED_HELP' => 'La meilleure pratique si vous utilisez l’option `Envoyer un e-mail d’activation`. Ajoute l’utilisateur à Grav, mais le défini comme étant désactivé.',
            'LOGIN_AFTER_REGISTRATION' => 'Connecter l’utilisateur après son inscription',
            'LOGIN_AFTER_REGISTRATION_HELP' => 'Identifier immédiatement l’utilisateur après l’inscription. Si l’e-mail d’activation est demandé, l’utilisateur sera connecté immédiatement après l’activation du compte.',
            'SEND_ACTIVATION_EMAIL' => 'Envoyer un e-mail d’activation',
            'SEND_ACTIVATION_EMAIL_HELP' => 'Envoyer un e-mail à l’utilisateur pour l’activation son compte. Lorsque vous utilisez cette fonction, activez l’option `Définir l’utilisateur comme désactivé` afin que l’utilisateur soit désactivé et qu’un e-mail lui soit envoyé pour activer son compte.',
            'SEND_NOTIFICATION_EMAIL' => 'Envoyer un e-mail de notification',
            'SEND_NOTIFICATION_EMAIL_HELP' => 'Informe l’administrateur du site qu’un nouvel utilisateur s’est enregistré. L’e-mail sera envoyé à la personne renseignée dans le champ `À` dans la configuration du plugin e-mail.',
            'SEND_WELCOME_EMAIL' => 'Envoyer un e-mail de bienvenue',
            'SEND_WELCOME_EMAIL_HELP' => 'Envoyer un e-mail à un nouvel utilisateur enregistré.',
            'DEFAULT_VALUES' => 'Valeurs par défaut',
            'DEFAULT_VALUES_HELP' => 'Liste des noms et valeurs associés pour les champs. Ils seront ajoutés au profil utilisateur par défaut (fichier yaml), sans pouvoir être configurables par l’utilisateur. Séparez les différentes valeurs par une virgule, sans espaces entre les valeurs.',
            'ADDITIONAL_PARAM_KEY' => 'Paramètre',
            'ADDITIONAL_PARAM_VALUE' => 'Valeur',
            'REGISTRATION_FIELDS' => 'Champs d’inscription',
            'REGISTRATION_FIELDS_HELP' => 'Ajouter les champs qui seront ajoutés au fichier yaml de l’utilisateur. Les champs non listés ne seront pas ajoutés même s’ils sont présent sur le formulaire d’inscription',
            'REGISTRATION_FIELD_KEY' => 'Nom du champ',
            'REDIRECT_TO_LOGIN' => 'Redirection vers la connexion',
            'REDIRECT_TO_LOGIN_HELP' => 'L’utilisateur doit-il être redirigé vers une page de connexion ou afficher la connexion vers le chemin actuel ?',
            'REDIRECT_AFTER_LOGIN' => 'Redirection après connexion',
            'REDIRECT_AFTER_LOGIN_HELP' => 'Chemin personnalisé de redirection après la connexion',
            'ROUTE_AFTER_LOGIN' => 'Chemin après la connexion',
            'ROUTE_AFTER_LOGIN_HELP' => 'Chemin personnalisé de redirection après la connexion',
            'REDIRECT_AFTER_LOGOUT' => 'Redirection après la déconnexion',
            'REDIRECT_AFTER_LOGOUT_HELP' => 'L’utilisateur doit-il être redirigé vers une page spécifique après la déconnexion ?',
            'ROUTE_AFTER_LOGOUT' => 'Chemin après la déconnexion',
            'ROUTE_AFTER_LOGOUT_HELP' => 'Chemin personnalisé de redirection après la déconnexion',
            'REDIRECT_AFTER_REGISTRATION' => 'Chemin après l’inscription',
            'REDIRECT_AFTER_REGISTRATION_HELP' => 'Chemin personnalisé de redirection après l’inscription',
            'OPTIONS' => 'Options',
            'EMAIL_VALIDATION_MESSAGE' => 'Doit-être une adresse e-mail valide',
            'PASSWORD_VALIDATION_MESSAGE' => 'Le mot de passe doit-être composé d’au moins un chiffre, une majuscule et une minuscule, et au moins 8 caractères',
            'TIMEOUT_HELP' => 'Définit le délai d’expiration de la session en secondes lorsque `Se souvenir de moi` est activé et coché par l’utilisateur. Minimum de 604800 ce qui correspond à 1 semaine.',
            'GROUPS_HELP' => 'Liste des groupes auxquels le nouvel utilisateur enregistré fera partie, le cas échéant.',
            'SITE_ACCESS_HELP' => 'Liste des niveaux d’accès au site attribués au nouvel utilisateur enregistré. Exemple : `login` -> `true` ',
            'WELCOME' => 'Bienvenue',
            'REDIRECT_AFTER_ACTIVATION' => 'Redirection après l’activation de l’utilisateur',
            'REDIRECT_AFTER_ACTIVATION_HELP' => 'Utilisé s’il est nécessaire pour l’utilisateur d’activer le compte par e-mail. Une fois activé, ce chemin s’affichera',
            'REGISTRATION_DISABLED' => 'Inscription désactivée',
            'USE_PARENT_ACL_LABEL' => 'Appliquer les règles d’accès parentes',
            'USE_PARENT_ACL_HELP' => 'Utiliser les règles d’accès parentes si aucune règle n’a été définie',
            'PROTECT_PROTECTED_PAGE_MEDIA_LABEL' => 'Protéger le média d’une page par une protection par connexion',
            'PROTECT_PROTECTED_PAGE_MEDIA_HELP' => 'Si activé, les médias d\'une page protégée par connexion sera également protégé par un système de connexion et ne pourra pas être visible à moins d\'être connecté.',
            'SECURITY_TAB' => 'Sécurité',
            'MAX_RESETS_COUNT' => 'Nombre maximum de réinitialisations de mot de passe',
            'MAX_RESETS_COUNT_HELP' => 'Pparamètre de protection contre les répétitions de réinitialisation du mot de passe (0 - non limité)',
            'MAX_RESETS_INTERVAL' => 'Intervalle maximal entre les réinitialisations du mot de passe',
            'MAX_RESETS_INTERVAL_HELP' => 'L’intervalle de temps maximum pour la réinitialisation de mot de passe',
            'FORGOT_CANNOT_RESET_IT_IS_BLOCKED' => 'Impossible de réinitialiser le mot de passe pour %s, la fonctionnalité de réinitialisation du mot de passe est temporairement bloquée, veuillez réessayer ultérieurement (%s minutes maximum)',
            'MAX_LOGINS_COUNT' => 'Nombre maximum de connexions',
            'MAX_LOGINS_COUNT_HELP' => 'Paramètre de protection contre les répétitions de tentatives (0 - non limité)',
            'MAX_LOGINS_INTERVAL' => 'Intervalle maximum entre les connexions',
            'MAX_LOGINS_INTERVAL_HELP' => 'Valeur pour l’intervalle de temps entre les connexions',
            'TOO_MANY_LOGIN_ATTEMPTS' => 'Trop de tentatives de connexion dans le temps imparti (%s minutes)',
            'SECONDS' => 'secondes',
            'MINUTES' => 'minutes',
            'RESETS' => 'réinitialisations',
            'ATTEMPTS' => 'tentatives',
            'ROUTES' => 'Chemins',
            'ROUTE_FORGOT' => 'Chemin de mot de passe oublié',
            'ROUTE_RESET' => 'Réinitialisation du chemin de mot de passe',
            'ROUTE_PROFILE' => 'Chemin du profil utilisateur',
            'ROUTE_ACTIVATE' => 'Chemin d’activation de l’utilisateur',
            'LOGGED_OUT' => 'Vous avez été déconnecté avec succès...',
            'PAGE_RESTRICTED' => 'L’accès est restreint, veuillez vous connecter...',
            'DYNAMIC_VISIBILITY' => 'Visibilité dynamique des pages',
            'DYNAMIC_VISIBILITY_HELP' => 'Permet le traitement dynamique de la visibilité de la page en fonction des règles d’accès si login.visibility_requires_access est défini sur true sur une page',
            'USER_IS_REMOTE_ONLY' => 'Cet utilisateur s’est authentifié auprès d\'un service distant, le profil ne peut donc pas être enregistré',
            '2FA_TITLE' => 'Authentification en deux étapes',
            '2FA_INSTRUCTIONS' => '##### Authentification en 2 étapesous avez activé **2FA** sur ce compte. Veuillez utiliser votre application **2FA** pour entrer le **code actuel à 6 chiffres** pour terminer le processus de connexion.',
            '2FA_REGEN_HINT' => 'Pour régénérer le secret, vous devrez mettre à jour votre application d’authentification',
            '2FA_FAILED' => 'Code d’authentification en 2 étapes non valide, veuillez réessayer...',
            '2FA_ENABLED' => '2FA activé',
            '2FA_ENABLED_HELP' => 'Active l’authentification à 2 étapes pour tous les utilisateurs',
            '2FA_CODE_INPUT' => '000000',
            '2FA_SECRET' => 'Cecret 2FA',
            '2FA_SECRET_HELP' => 'Scannez ce code QR dans votre [Application d’authentification](https://learn.getgrav.org/admin-panel/2fa#apps). Il est également conseillé de sauvegarder le code secret en lieu sûr, au cas où vous auriez besoin de réinstaller votre application. Pour plus d\'informations, veuillez consulter la [documentation Grav](https://learn.getgrav.org/admin-panel/2fa).',
            '2FA_REGENERATE' => 'Régénérer',
            'BTN_CANCEL' => 'Annuler',
            'MANUALLY_ENABLE' => 'Activer manuellement',
            'MANUALLY_ENABLE_HELP' => 'Lorsque vous utilisez \'e-mail d’activation\' et \'e-mail de notification\', vous pouvez vous assurer que l’utilisateur pourra s’activer lui-même, mais cela nécessite d’activer manuellement la connexion de l’utilisateur',
            'IPV6_SUBNET_SIZE' => 'Taille du sous-réseau IPv6',
            'IPV6_SUBNET_SIZE_HELP' => 'Le nombre d’adresses IPv6 généralement attribuées à une machine',
            'PROFILE_UPDATED' => 'Votre profil a été mis à jour',
            'ENTER_EMAIL' => 'Saisir votre e-mail',
            'ENTER_NEW_PASSWORD' => 'Saisir un nouveau mot de passe',
            'ENTER_PASSWORD' => 'Saisir votre mot de passe',
            'ENTER_PASSWORD_AGAIN' => 'Confirmer votre mot de passe',
            'REGISTRATION_THANK_YOU' => 'Merci pour votre inscription.',
            'USER_ACCOUNT_DISABLED' => 'Votre compte utilisateur est désactivé ou n’a pas encore été activé.',
            'SESSION_USER_SYNC' => 'Synchroniser l’utilisateur en session',
            'SESSION_USER_SYNC_HELP' => 'S’il est activé, l’utilisateur de la session est synchronisé avec le fichier utilisateur stocké. ATTENTION : cette fonctionnalité empêcher le fonctionnement de certains plugins existants qui mettent à jour l’objet utilisateur de la session sans l’enregistrer sur le système de fichiers en utilisant la méthode `$user->save()`.',
            'PLUGIN_LOGIN_DISABLED' => 'Le plugin de connexion a été désactivé',
            'USER_REGISTRATION_DISABLED' => 'L’enregistrement des utilisateurs a été désactivé',
            'INVITATION_EMAIL_SUBJECT' => 'Vous êtes invité à rejoindre %s',
            'INVITATION_EMAIL_BODY' => '<h1>Invitation à créer un compte</h1><p>Bonjour, </p><p>Vous êtes invité à rejoindre <b>%1$s</b>.</p><p>%2$s</p><p><br/><a href="%3$s" class="btn-primary">Créez votre compte dès maintenant</a><br/><br/></p><p>Vous pouvez également copier l’URL suivante dans la barre d’adresse de votre navigateur :</p><p class="word-break"><a href="%3$s">%3$s</a></p><p><br/>Cordialement,<br/><br/>%4$s</p>',
            'INVITATION_EMAIL_MESSAGE' => 'Nous vous invitons à créer un compte sur le site.',
            'INVALID_INVITE_EMAILS' => '<strong>Erreur :</strong> Une liste non valide d’e-mails a été fournie',
            'INVALID_FORM' => '<strong>Erreur :</strong> Formulaire non valide',
            'FAILED_TO_SEND_EMAILS' => 'Impossible d’envoyer des e-mails à : %s'
        ]
    ]
];
