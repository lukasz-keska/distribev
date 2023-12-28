// obtain cookieconsent plugin
var cc = initCookieConsent();

// run plugin with config object
cc.run({
    current_lang: 'pl',
    autoclear_cookies: true,                    // default: false
    theme_css: '/js/cookieconsent/src/cookieconsent.css',
    cookie_name: 'ub_cookie_settings',             // default: 'cc_cookie'
    cookie_expiration: 365,                     // default: 182
    page_scripts: true,                         // default: false
    force_consent: true,                        // default: false

    //auto_language : true,                   // default: false
    // autorun : true,                          // default: true
    // delay : 0,                               // default: 0
    // hide_from_bots: false,                   // default: false
    // remove_cookie_tables: false              // default: false
    // cookie_domain: location.hostname,        // default: current domain
    // cookie_path: '/',                        // default: root
    // cookie_same_site: 'Lax',
    // use_rfc_cookie: false,                   // default: false
    // revision: 0,                             // default: 0

    gui_options: {
        consent_modal: {
            layout: 'cloud',                    // box,cloud,bar
            position: 'bottom center',          // bottom,middle,top + left,right,center
            transition: 'slide'                 // zoom,slide
        },
        settings_modal: {
            layout: 'box',                      // box,bar
            //position: 'left',                   // right,left (available only if bar layout selected)
            transition: 'slide'                 // zoom,slide
        }
    },

    /* End new options added in v2.4 */

    onAccept: function (cookie) {
        //console.log('onAccept fired ...');
        //disableBtn('btn2');
        //disableBtn('btn3');

        // Delete line below
        document.getElementById('cookie_val') && (document.getElementById('cookie_val').innerHTML = JSON.stringify(cookie, null, 2));
    },

    onChange: function (cookie, changed_preferences) {
        //console.log('onChange fired ...');

        // If analytics category's status was changed ...
        if (changed_preferences.indexOf('analytics') > -1) {

            // If analytics category is disabled ...
            if (!cc.allowedCategory('analytics')) {

                // Disable gtag ...
                //console.log('disabling gtag')
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('consent', 'default', {
                    'ad_storage': 'denied',
                    'analytics_storage': 'denied'
                });
            }
        }

        // Delete line below
        document.getElementById('cookie_val') && (document.getElementById('cookie_val').innerHTML = JSON.stringify(cookie, null, 2));
    },

    languages: {
         'pl': {
            consent_modal: {
                title: 'Drogi Użytkowniku, ',
                description: 'w ramach naszej strony stosujemy pliki cookies. Ich celem jest świadczenie usług na najwyższym poziomie, w tym również dostosowanych do Twoich indywidualnych potrzeb. Korzystanie z witryny bez zmiany ustawień przeglądarki dotyczących cookies oznacza, że będą one umieszczane w Twoim urządzeniu. W każdej chwili możesz dokonać zmiany ustawień przeglądarki dotyczących cookies - więcej informacji na ten temat znajdziesz w <a href="/Polityka_prywatnosci.pdf" class="cc-link">polityce prywatności</a>',
                primary_btn: {
                    text: 'Zaakceptuj wszystkie',
                    role: 'accept_all'      //'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Ustawienia',
                    role: 'settings'       //'settings' or 'accept_necessary'
                },
                revision_message: '<br><br> Drogi użytkowniku, warunki zmieniły się od czasu Twojej ostatniej wizyty!'
            },
            settings_modal: {
                title: 'Ustawienia ciastek',
                save_settings_btn: 'Zapamiętaj ustawienia',
                accept_all_btn: 'Zaakceptuj wszystkie',
                reject_all_btn: 'Odrzuć wszystkie nieobowiązkowe',
                close_btn_label: 'Zamknij',
                cookie_table_headers: [
                    {col1: 'Nazwa'},
                    {col2: 'Domena'},
                    {col3: 'Przeznaczenie'},
                    {col4: 'Wygasa'}
                ],
                blocks: [
                    {
                        title: 'Użycie ciastek',
                        description: 'Zobacz naszą <a href="/Polityka_prywatnosci.pdf" class="cc-link">Politykę prywatności</a>.'
                    }, {
                        title: 'Niezbędne ciastka',
                        description: 'To takie które zapewniają poprawne działanie serwisu: PHPSESSID oraz _csrf',
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true  //cookie categories with readonly=true are all treated as "necessary cookies"
                        }
                    }, {
                        title: 'Statystyki',
                        description: 'Ciastka Google Analytics i inne służące do tworzenia statystyk i analiz',
                        toggle: {
                            value: 'analytics',
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [
                            {
                                col1: '^_ga',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '2 lata',
                                is_regex: true
                            },
                            {
                                col1: '_gid',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '24 godziny',
                            },
                            {
                                col1: '_gat',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '1 minuta',
                            },
                        ]
                    }, 
                ]
            }
        },
        'en': {
            consent_modal: {
                title: 'Dear User, ',
                description: 'we use cookies on our website. Their goal is to provide services at the highest level, including those tailored to your individual needs. Using the website without changing your browser settings for cookies means that they will be placed on your device. You can change your browser settings regarding cookies at any time - more information on this subject can be found in <a href="/Polityka_prywatnosci.pdf" class="cc-link"> privacy policy </a> ',
                primary_btn: {
                    text: 'Accept all',
                    role: 'accept_all'      //'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Settings',
                    role: 'settings'       //'settings' or 'accept_necessary'
                },
                revision_message: '<br><br> Dear visitor, conditions have changed since your last visit!'
            },
            settings_modal: {
                title: 'Cookies settings',
                save_settings_btn: 'Save settings',
                accept_all_btn: 'Accept all',
                reject_all_btn: 'Reject all non-nessesary settings',
                close_btn_label: 'Close',
                cookie_table_headers: [
                    {col1: 'Name'},
                    {col2: 'Domain'},
                    {col3: 'Purpose'},
                    {col4: 'Expiration'}
                ],
                blocks: [
                    {
                        title: 'Cookies usage',
                        description: 'Read our <a href="/Polityka_prywatnosci.pdf" class="cc-link"> privacy policy </a>.'
                    }, {
                        title: 'Nessesary cookies',
                        description: 'The ones that make our website work properly: PHPSESSID and _csrf',
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true  //cookie categories with readonly=true are all treated as "necessary cookies"
                        }
                    }, {
                        title: 'Analytics and statistics',
                        description: 'Google Analytics cookies and other cookies used to create statistics',
                        toggle: {
                            value: 'analytics',
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [
                            {
                                col1: '^_ga',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '2 years',
                                is_regex: true
                            },
                            {
                                col1: '_gid',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '24 hours',
                            },
                            {
                                col1: '_gat',
                                col2: 'zakupywm1.pl',
                                col3: 'Google Analitics',
                                col4: '1 minute',
                            },
                            {
                                col1: '1P_JAR',
                                col2: 'google.com',
                                col3: 'Google Analitics',
                                col4: '30 days',
                            },
                            {
                                col1: 'NID',
                                col2: 'google.com',
                                col3: 'Google Analitics',
                                col4: '6 months',
                            },
                            {
                                col1: 'CONSENT',
                                col2: 'google.com',
                                col3: 'Google Analitics',
                                col4: '1 year',
                            },
                            {
                                col1: 'UULE',
                                col2: 'google.com',
                                col3: 'Google Analitics',
                                col4: '1 day',
                            },                            
                            {
                                col1: 'SSID',
                                col2: 'google.com',
                                col3: 'Google Analytics / YouTube',
                                col4: 'End of session',
                            },
                            {
                                col1: 'SAPISID',
                                col2: 'google.com',
                                col3: 'Google Analytics / YouTube',
                                col4: 'End of session',
                            },
                            {
                                col1: 'APISID',
                                col2: 'google.com',
                                col3: 'Google Analytics / YouTube',
                                col4: 'End of session',
                            },
                            {
                                col1: 'SIDCC',
                                col2: 'google.com',
                                col3: 'Google Analitics / Visits',
                                col4: '6 months',
                            },
                            {
                                col1: '__Secure-1PAPISID',
                                col2: 'google.com',
                                col3: 'Google Analitics / Targeting',
                                col4: '2 years',
                            },
                            {
                                col1: '__Secure-3PSID',
                                col2: 'google.com',
                                col3: 'Google Analitics / Targeting',
                                col4: '2 years',
                            },                            
                            {
                                col1: '__Secure-1PSID',
                                col2: 'google.com',
                                col3: 'Google Analitics / Targeting',
                                col4: '2 years',
                            },
                            {
                                col1: 'SID',
                                col2: 'google.com',
                                col3: 'Google Analitics / User Auth',
                                col4: '2 years',
                            },
                            {
                                col1: 'HSID',
                                col2: 'google.com',
                                col3: 'Google Analitics',
                                col4: '2 years',
                            },
                            {
                                col1: 'OTZ',
                                col2: 'google.com',
                                col3: 'Google Analitics / Visits',
                                col4: '1 month',
                            }
                            
                        ]
                    }, 
                ]
            }
        }
    }
});


function getLoremIpsum() {
    return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
}

// DELETE ALL CONTENT BELOW THIS COMMENT!!!
if (cc.validCookie('cc_cookie')) {
    //if cookie is set => disable buttons
    //disableBtn('btn2');
    //disableBtn('btn3');
}

function disableBtn(id) {
    document.getElementById(id).disabled = true;
    document.getElementById(id).className = 'styled_btn disabled';
}

var darkmode = false;

function toggleDarkmode() {
    if (!darkmode) {
        document.getElementById('theme').innerText = 'dark theme';
        document.body.className = 'd_mode c_darkmode';
        darkmode = true;
    } else {
        document.getElementById('theme').innerText = 'light theme';
        document.body.className = 'd_mode';
        darkmode = false;
    }
}

/*
* The following lines of code are for demo purposes (show api functions)
*/
if (document.addEventListener) {

    document.getElementById('cookie_settings').addEventListener('click', function () {
        cc.showSettings(0);
    });

} else {

    document.getElementById('cookie_settings').attachEvent('onclick', function () {
        cc.showSettings(0);
    });
}
