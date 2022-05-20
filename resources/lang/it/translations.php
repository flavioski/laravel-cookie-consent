<?php

return [

	'title' => 'Utilizziamo cookie',
    'title_description' => 'Tutti i cookie che utilizziamo',
	'description' => '<p>Utilizziamo cookie per personalizzare i contenuti, avere statistiche e migliorare la tua esperienza nel nostro sito web.</p>',
    'description_policy' => '<p>Per maggiori informazioni ti consigliamo di leggere la nostra <a href=":cookie_policy_link" target="_blank">Cookie Policy</a>.</p>',
	'button_accept' => 'Consenti tutti',
    'button_accept_necessary' => 'Rifiuta tutti',
	'button_accept_selected' => 'Consenti selezionati',
    'button_save_changes' => 'Salva modifiche',
	'button_more_info' => 'Maggiori informazioni',
	'no_cookies_used' => 'Nessun cookie utilizzato per questa categoria',

	'necessary' => [
		'title' => 'Strettamente necessari',
		'description' => '<p>Questi cookie sono necessari per il funzionamento del sito Web e non possono essere disattivati nei nostri sistemi.</p><p>È possibile impostare il browser in modo che blocchi questi cookie o ne avvisi l\'utilizzo, ma alcune parti del sito non funzioneranno. Questi cookie non memorizzano alcuna informazione personale identificativa.</p>',
	],
	'statistics' => [
		'title' => 'Statistici',
		'description' => '<p>Questi cookie ci consentono di contare le visite e le sorgenti di traffico in modo da poter misurare e migliorare le prestazioni del nostro sito. Ci aiutano a sapere quali sono le pagine più e meno popolari e vedere come i visitatori si muovono nel sito.</p><p>Tutte le informazioni raccolte da questi cookie sono aggregate e quindi anonime. Se non autorizzi questi cookie, non sapremo quando avrai visitato il nostro sito e non saremo in grado di monitorarne le prestazioni.</p>',
	],
	'functional' => [
		'title' => 'Funzionali e di terze parti',
		'description' => '<p>Questi cookie consentono al sito Web di fornire funzionalità e personalizzazione avanzate. Possono essere impostati da noi o da fornitori di terze parti, i cui servizi sono stati aggiunti alle nostre pagine.</p><p>Se non si consente questi cookie, alcuni o tutti questi servizi potrebbero non funzionare correttamente.</p>',
	],
	'marketing' => [
		'title' => 'Marketing e targeting',
		'description' => '<p>Questi cookie possono essere impostati tramite il nostro sito dai nostri partner pubblicitari. Possono essere utilizzati da tali società per creare un profilo dei tuoi interessi e mostrarti annunci pertinenti su altri siti.</p><p>Non memorizzano direttamente informazioni personali, ma si basano sull\'identificazione univoca del browser e del dispositivo Internet. Se non si consente questi cookie, si verificherà una pubblicità meno mirata.</p>',
	],

    // Cookies descriptions
    'cookies' => [
        'XSRF-TOKEN' => 'Questo cookie è stato scritto per aiutare con la sicurezza del sito a prevenire attacchi Cross-Site Request Forgery.',
        'laravel_session' => 'Internamente laravel utilizza laravel_session per identificare un\'istanza di sessione per un utente.',
        'laravel_cookie_consent' => 'Internamente viene salvata la conferma di una preferenza di consenso da parte dell\'utente.',
        'laravel_cookie_consent_statistics' => 'Viene creato questo cookie, per salvare in consenso dell\'utente ad utilizzare cookie di tipo statistico.',
        'laravel_cookie_consent_marketing' => 'Viene creato questo cookie, per salvare in consenso dell\'utente ad utilizzare cookie di marketing e targeting.',
        'laravel_cookie_consent_functions' => 'Viene creato questo cookie, per salvare in consenso dell\'utente ad utilizzare cookie funzionali e di terze parti.',
        '_GRECAPTCHA' => 'Google reCAPTCHA imposta questo cookie necessario quando viene eseguito allo scopo di fornire la sua analisi dei rischi.',
        '_ga' => 'Questo cookie viene utilizzato per distinguere utenti unici assegnando un numero generato in modo casuale come identificatore del cliente. È incluso in ogni richiesta di pagina in un sito e utilizzato per calcolare i dati di visitatori, sessioni e campagne per i rapporti di analisi dei siti.',
        '_gid' => 'Questo cookie è impostato da Google Analytics. Memorizza e aggiorna un valore univoco per ogni pagina visitata e viene utilizzato per contare e tenere traccia delle visualizzazioni di pagina.',
        '_ga_*' => '',
        '_gat_*' => 'Si tratta di un cookie di tipo pattern impostato da Google Analytics, in cui l\'elemento pattern sul nome contiene il numero identificativo univoco dell\'account o del sito Web a cui si riferisce. È una variazione del cookie _gat che viene utilizzato per limitare la quantità di dati registrati da Google su siti Web ad alto volume di traffico.',
    ],

    'um' => [
        'second' => 'secondo',
        'seconds' => 'secondi',
        'minute' => 'minuto',
        'minutes' => 'minuti',
        'hour' => 'ora',
        'hours' => 'ore',
        'day' => 'giorno',
        'days' => 'giorni',
        'week' => 'settimana',
        'weeks' => 'settimane',
        'month' => 'mese',
        'months' => 'mesi',
        'year' => 'anno',
        'years' => 'anni',
    ],

    'table' => [
        'name' => 'Nome',
        'provider' => 'Provider',
        'domain' => 'Dominio',
        'duration' => 'Durata',
        'description' => 'Descrizione'
    ]

];
