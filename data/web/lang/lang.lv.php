<?php
/*
 * English language file
 */
// 326, 365, 416, 419, 420, 421, 424, Relayhost, 469 running. 

$lang['footer']['loading'] = "Lūdzu uzgaidiet...";
$lang['header']['restart_sogo'] = 'Restartēt SOGo';
$lang['footer']['restart_container'] = 'Restartēt konteineri';
$lang['footer']['restart_now'] = 'Restartēt ';
$lang['footer']['restart_container_info'] = '<b>Important:</b> Piespiedu restartēšana var aizņemt ilgu laiku, lūdzu uzgaidiet.';

$lang['footer']['confirm_delete'] = 'Apstiprināt dzēšanu';
$lang['footer']['delete_these_items'] = 'Lūdzu apstipriniet darbīku šiem abjektiem:';
$lang['footer']['delete_now'] = 'Dzēst tagad';
$lang['footer']['cancel'] = 'Atcelt';

$lang['danger']['dkim_domain_or_sel_invalid'] = "DKIM domēns vai selektors nepareizs";
$lang['success']['dkim_removed'] = "DKIM atslēga %s ir noņemta";
$lang['success']['dkim_added'] = "DKIM atslēga saglabāta";
$lang['danger']['access_denied'] = "Piekļuve liegta, vai nepareizi dati";
$lang['danger']['domain_invalid'] = "Nepareizs domēna vārds";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "Pastkastes izmērs pārsniedz maksimāli pieļaujamo";
$lang['danger']['object_is_not_numeric'] = "Vērtība %s nav numurs";
$lang['success']['domain_added'] = "Pievienots domēns %s";
$lang['success']['items_deleted'] = "Vērtība %s veiksmīgi dzēsta";
$lang['danger']['alias_empty'] = "Alias adrese nevar būt tukša";
$lang['danger']['last_key'] = 'Pēdējā atslēga nevar būt dzēsta';
$lang['danger']['goto_empty'] = "Goto adrese nevar būt tukša";
$lang['danger']['policy_list_from_exists'] = "Ieraksts ar tādu vārdu jau eksistē";
$lang['danger']['policy_list_from_invalid'] = "Ierakstam ir nepariezs formāts";
$lang['danger']['alias_invalid'] = "Alias adrese nepareiza";
$lang['danger']['goto_invalid'] = "Goto adrese nepareiza";
$lang['danger']['alias_domain_invalid'] = "Alias domēns ir nepareizs";
$lang['danger']['target_domain_invalid'] = "Goto domēns ir nepareizs";
$lang['danger']['object_exists'] = "Objekts %s jau pastāv";
$lang['danger']['domain_exists'] = "Domēns %s jau pastāv";
$lang['danger']['alias_goto_identical'] = "Alias un domēnvārds nevar būt identisks";
$lang['danger']['aliasd_targetd_identical'] = "Alias domēns nevar būt vienāds ar mērķa domēnu";
$lang['danger']['maxquota_empty'] = 'Maksimālais pieļaujamais izmērs nevar būt 0.';
$lang['success']['alias_added'] = "Aliasi pievienoti";
$lang['success']['alias_modified'] = "Izmaiņas aliasiem %s ir saglabātas";
$lang['success']['mailbox_modified'] = "Izmaiņas pastkastei %s ir saglabātas";
$lang['success']['resource_modified'] = "Izmaiņas %s ir saglabātas";
$lang['success']['object_modified'] = "Izmaiņas objektam %s ir saglabātas";
$lang['success']['f2b_modified'] = "Izmaiņas  Fail2ban parameteriem ir saglabātas";
$lang['danger']['targetd_not_found'] = "Mērķa domēns nav atrasts";
$lang['success']['aliasd_added'] = "Pievients alias domēnam %s";
$lang['success']['aliasd_modified'] = "Izmaiņas aloas domēnam %s ir saglabātas";
$lang['success']['domain_modified'] = "Izmaiņas domēnam %s ir saglabātas";
$lang['success']['domain_admin_modified'] = "Izmaiņas domēna administrātoram %s ir saglabātas";
$lang['success']['domain_admin_added'] = "Domēna administrātors %s pievienots";
$lang['success']['admin_modified'] = "Izmaiņas administrātoram ir saglabātas";
$lang['danger']['username_invalid'] = "Lietotājvārds nevar tikt izmantots";
$lang['danger']['password_mismatch'] = "Parole nesakrīt";
$lang['danger']['password_complexity'] = "Parole ir pārāk vāja";
$lang['danger']['password_empty'] = "Parole nevar būt tukša";
$lang['danger']['login_failed'] = "Ielogošanās neveiksmīga";
$lang['danger']['mailbox_invalid'] = "Pastkastes vārds ir nederīgs";
$lang['danger']['description_invalid'] = 'Resursa apraksts ir nederīgs';
$lang['danger']['resource_invalid'] = "Resursa vārds ir nederīgs";
$lang['danger']['is_alias'] = "%s jau ir zināms alias";
$lang['danger']['is_alias_or_mailbox'] = "%s jau ir zināms alias, pastkastes vai alias addrese izvērsta no alias domēna.";
$lang['danger']['is_spam_alias'] = "%s ir jau zināms spam alias";
$lang['danger']['quota_not_0_not_numeric'] = "Irobežojumam jābūt numuram >= 0";
$lang['danger']['domain_not_found'] = 'Domēns %s nav atrasts';
$lang['danger']['max_mailbox_exceeded'] = "Maksimālais pastkastšu skaits sasniegts (%d of %d)";
$lang['danger']['max_alias_exceeded'] = 'Visas aliases izmantotas';
$lang['danger']['mailbox_quota_exceeded'] = "Kvota pārsniedz domēna limitu (max. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "Nav pietiekami daudz vietas (atlikusī vieta: %d MiB)";
$lang['success']['mailbox_added'] = "Pastkaste %s ir pievienota";
$lang['success']['resource_added'] = "Resource %s has been added";
$lang['success']['domain_removed'] = "Domēns %s ir noņemts";
$lang['success']['alias_removed'] = "Alias %s ir noņemts";
$lang['success']['alias_domain_removed'] = "Alias domēns %s tika noņemts";
$lang['success']['domain_admin_removed'] = "Domēna administrators %s tika noņemts";
$lang['success']['mailbox_removed'] = "Pastkaste %s tika noņemta";
$lang['success']['eas_reset'] = "ActiveSync ierīces priekš lietotāja %s tika atiestatītas";
$lang['success']['resource_removed'] = "Resurs %s tika noņemts";
$lang['danger']['max_quota_in_use'] = "Pastkastes kvotai jābūt lielākai vai vienādai %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "Domēna kvotai jābūt lielākai vai vienādai ar %s MiB";
$lang['danger']['mailboxes_in_use'] = "Maks. pastkastēm jābūt lielākām vai vienādām ar %d";
$lang['danger']['aliases_in_use'] = "Maks. aliases jabūt lielākām vai vienādām ar %d";
$lang['danger']['sender_acl_invalid'] = "Sūtītāja ACL vērtība nav derīga";
$lang['danger']['domain_not_empty'] = "Nevar noņemt neaizpildītu domēnu";
$lang['danger']['validity_missing'] = 'Lūdzu piešķiriet derīguma termiņu';
$lang['user']['loading'] = "Ielādē...";
$lang['user']['force_pw_update'] = 'Jums <b>nepieciešama</b> jauna parole lai piekļūtu Groupware opcijām.';
$lang['user']['active_sieve'] = "Aktīvais filtrs";
$lang['user']['show_sieve_filters'] = "Parādīt aktīvā lietotāja Sieve filtru";
$lang['user']['no_active_filter'] = "Nav pieejami aktīvi filtri";
$lang['user']['messages'] = "vēstules"; // "123 messages"
$lang['user']['in_use'] = "Aizņemts";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'Lietotāja iestatījumi';
$lang['user']['mailbox_details'] = 'Pastkastes detaļas';
$lang['user']['change_password'] = 'Nomainīt paroli';
$lang['user']['client_configuration'] = 'Parādīt konfigurācijas piemērus dažādām iekārtām';
$lang['user']['new_password'] = 'Jauna parole';
$lang['user']['save_Izmaiņas'] = 'Saglabāt Izmaiņas';
$lang['user']['password_now'] = 'Pašreizējā parole (Apstiprināt izmaiņas)';
$lang['user']['new_password_repeat'] = 'Paroles apstiprinājums (atkārtoti)';
$lang['user']['new_password_description'] = 'Prasība: vismaz 6 simboli gara, burti un cipari.';
$lang['user']['spam_aliases'] = 'Pagaidu e-pasta alias';
$lang['user']['alias'] = 'Alias';
$lang['user']['shared_aliases'] = 'Koplietotās alias adreses';
$lang['user']['shared_aliases_desc'] = 'Koplietotais alias netiek ietekmēts no lietotāju darbībām. Pielāgots spam filtra iestatījums var būt arhivēts no domēna ietvaros uzstādīta noteikuma no administrātora..';
$lang['user']['direct_aliases'] = 'Tiešas alias adreses';
$lang['user']['direct_aliases_desc'] = 'Tiešie alias tiek ietekmēti no spam filtra un TLS politikas iestatījumiem affected by spam filter and TLS policy settings.';
$lang['user']['is_catch_all'] = 'Ķert-visu priekš domēna/iem';
$lang['user']['aliases_also_send_as'] = 'Atļauts arī sūtīt kā lietotājam';
$lang['user']['aliases_send_as_all'] = 'Nepārbaudīt sūtītāja peikļuvi domēnam/iem un alias domēniem';
$lang['user']['alias_create_random'] = 'Ģenerēt nejaušā nosaukuma alias';
$lang['user']['alias_extend_all'] = 'Pagarināt alias par 1 stundu';
$lang['user']['alias_valid_until'] = 'Derīgs līdz';
$lang['user']['alias_remove_all'] = 'Noņemt visus alias';
$lang['user']['alias_time_left'] = 'Laiks atlicis';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Derīguma periods';
$lang['user']['sync_jobs'] = 'Sinhronizācijas uzdevumi';
$lang['user']['hour'] = 'Stunda';
$lang['user']['hours'] = 'Stundas';
$lang['user']['day'] = 'Dienas';
$lang['user']['week'] = 'Nedēļa';
$lang['user']['weeks'] = 'Nedēļas';
$lang['user']['spamfilter'] = 'Mēstuļu filtrs';
$lang['admin']['spamfilter'] = 'Mēstuļu filtrs';
$lang['user']['spamfilter_wl'] = 'Baltais saraksts';
$lang['user']['spamfilter_wl_desc'] = 'Baltajā sarakstā iekļautās adreses nekad netiks klasificētas kā mēstules.';
$lang['user']['spamfilter_bl'] = 'Melnais saraksts';
$lang['user']['spamfilter_bl_desc'] = 'Melajā sarakstā iekļautās adreses vienmēr tiks uzskatītas par mēstulēm.';
$lang['user']['spamfilter_behavior'] = 'Reitings';
$lang['user']['spamfilter_table_rule'] = 'Noteikums';
$lang['user']['spamfilter_table_action'] = 'Darbība';
$lang['user']['spamfilter_table_empty'] = 'Nav datu ko parādīt';
$lang['user']['spamfilter_table_remove'] = 'noņemt';
$lang['user']['spamfilter_table_add'] = 'Pievienot vienību';
$lang['user']['spamfilter_green'] = 'Zaļš: šī nav mēstule';
$lang['user']['spamfilter_yellow'] = 'Dzeltens: šī vēstule visticamāk ir spams un tiks pārvietota uz Junk mapi';
$lang['user']['spamfilter_red'] = 'Sarkans: Šī vēstule noteikti ir spams un tiek nekavējoties noraidīta';
$lang['user']['spamfilter_default_score'] = 'Noklusētās vērtības:';
$lang['user']['spamfilter_hint'] = 'Pirmā vērtība norāda uz zemu "Spam vērtējumu" vērtējumu, otra vērtība par "Augstu spam vērtējumu".';
$lang['user']['spamfilter_table_domain_policy'] = "n/a (domēna politika)";
$lang['user']['waiting'] = "Waiting";
$lang['user']['status'] = "Status";
$lang['user']['running'] = "Running";

$lang['user']['tls_policy_warning'] = '<strong>Uzmanību:</strong> Ja jūs izlemjat aktivizēt e-pastu šifrēšanu, Jūs varat pazaudēt vēstules.<br>Vēstules kas neatbilst politikai atleks atpakaļ no sistēmas ar kļūdu.<br>Šī opcija attiecas uz Jūsu primāro e-pasta adresi, visām adresēm, kas atvasinātas no alias domēniem, kā arī aliasi <b>,kas saistīti tikai ar šo pastkasti</b> kā mērķis.';
$lang['user']['tls_policy'] = 'Šifrēšanas politika';
$lang['user']['tls_enforce_in'] = 'Piespiest TLS ienākošajiem';
$lang['user']['tls_enforce_out'] = 'Piespiest TLS izejošajiem';
$lang['user']['no_record'] = 'Nav ieraksta';


$lang['user']['tag_handling'] = 'Iestatīt apstrādi par atzīmētajiem e-pastiem';
$lang['user']['tag_in_subfolder'] = 'Iekš apakšmapes';
$lang['user']['tag_in_subject'] = 'Iekš subjekta';
$lang['user']['tag_in_none'] = 'Nedarīt neko';
$lang['user']['tag_help_explain'] = 'Iekš apakšmapes: Jaunas apakšmapes, kas izveidotas pēc taga, tiks izveidotas zem INBOX ("INBOX/Facebook").<br>
Subjektā: Tagu nosaukums tiks pievienots e-pasta ziņojumam, piemēram: "[Facebook] Manas ziņas".';
$lang['user']['tag_help_example'] = 'Piemērs ietagotai e-pasta adresei: me<b>+Facebook</b>@example.org';
$lang['user']['eas_reset'] = 'Atiestatīt ActiveSync ierīces kešatmiņu';
$lang['user']['eas_reset_now'] = 'Atiestatīt tagad';
$lang['user']['eas_reset_help'] = 'Daudzos gadījumos ierīces kešatmiņas atiestatīšana palīdz atjaunot bojāto ActiveSync profilu.<br><b>Uzmanību:</b> Visi elementi tiks  atkārtoti ielādēti!';

$lang['user']['encryption'] = 'Šifrēšana';
$lang['user']['username'] = 'Lietotājvārds';
$lang['user']['last_run'] = 'Pēdējā norise';
$lang['user']['excludes'] = 'Izslēgt';
$lang['user']['interval'] = 'Intervāls';
$lang['user']['active'] = 'Aktīvs';
$lang['user']['action'] = 'Rīcība';
$lang['user']['edit'] = 'Labot';
$lang['user']['remove'] = 'Noņemt';
$lang['user']['create_syncjob'] = 'Izveidot jaunu sinhronizācijas darbu';

$lang['start']['openemail_apps_detail'] = 'Izmantojiet lietotni openemail, lai piekļūtu savam pastam, kalendāram, kontaktiem un citām lietām.';
$lang['start']['openemail_panel_detail'] = '<b>Domēna administrators</b> izveidot, mainīt vai dzēst pastkastes un aliases, mainīt domēnus un lasīt papildu informāciju par saviem piešķirtajiem domēniem.<br>
  <b>Pastkastes lietotāji</b> var izveidot ierobežotus laika ierobežojumus (surogātpasta aliases), mainīt paroli un surogātpasta filtru iestatījumus.';
$lang['start']['imap_smtp_server_auth_info'] = 'Lūdzu, izmantojiet pilnu e-pasta adresi un PLAIN autentifikācijas mehānismu.<br>
Jūsu pieteikšanās dati tiks šifrēti, izmantojot servera puses obligātu šifrēšanu';
$lang['start']['help'] = 'Rādīt/Paslēp palīdzības paneli';
$lang['header']['openemail_settings'] = 'Configurācija';
$lang['header']['administration'] = 'Administrēšana';
$lang['header']['mailboxes'] = 'Pastkastes';
$lang['header']['user_settings'] = 'Lietotāja uzstādījumi';
$lang['header']['logged_in_as_logout_dual'] = 'Ielogojies kā <b>%s <span class="text-info">[%s]</span></b>';
$lang['mailbox']['domain'] = 'Domēns';
$lang['mailbox']['spam_aliases'] = 'Temp. alias';
$lang['mailbox']['multiple_bookings'] = 'Vairāki rezervējumi';
$lang['mailbox']['kind'] = 'Veids';
$lang['mailbox']['description'] = 'Apraksts';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['aliases'] = 'Aliases';
$lang['mailbox']['domains'] = 'Domēns';
$lang['mailbox']['mailboxes'] = 'Pastkaste';
$lang['mailbox']['resources'] = 'Resursi';
$lang['mailbox']['mailbox_quota'] = 'Maks. pastkastes izmērs';
$lang['mailbox']['domain_quota'] = 'Kvota';
$lang['mailbox']['active'] = 'Aktīvs';
$lang['mailbox']['action'] = 'Rīcība';
$lang['mailbox']['backup_mx'] = 'Rezerves kopija MX';
$lang['mailbox']['domain_aliases'] = 'Domēna aliases';
$lang['mailbox']['target_domain'] = 'Mērķa domēns';
$lang['mailbox']['target_address'] = 'Doties uz  adresi';
$lang['mailbox']['username'] = 'Lietotājvārds';
$lang['mailbox']['fname'] = 'Pilns vārds';
$lang['mailbox']['filter_table'] = 'Filtra tabula';
$lang['mailbox']['in_use'] = 'Lietošanā (%)';
$lang['mailbox']['msg_num'] = 'Vēstule #';
$lang['mailbox']['remove'] = 'Noņemt';
$lang['mailbox']['edit'] = 'Labot';
$lang['mailbox']['add_domain'] = 'Pievienot domēnu';
$lang['mailbox']['add_domain_alias'] = 'Pievienot domēna alias';
$lang['mailbox']['add_mailbox'] = 'Pievienot pastkasti';
$lang['mailbox']['add_resource'] = 'Pievienot resursu';
$lang['mailbox']['add_alias'] = 'Pievienot alias';
$lang['mailbox']['empty'] = 'Nav rezultātu';
$lang['mailbox']['toggle_all'] = 'Pārslēgt visu';
$lang['mailbox']['quick_actions'] = 'Rīcība';
$lang['mailbox']['activate'] = 'Activate';
$lang['mailbox']['deactivate'] = 'Deaktivizēt';
$lang['mailbox']['owner'] = 'Īpašnieks';
$lang['mailbox']['mins_interval'] = 'Intervāls (min)';
$lang['mailbox']['last_run'] = 'Pēdējā norise';
$lang['mailbox']['excludes'] = 'Izslēdzot';
$lang['mailbox']['last_run_reset'] = 'Nākamais grafiks';
$lang['mailbox']['sieve_info'] = 'Jūs varat saglabāt vairākus filtrus katram lietotājam, bet tikai viens pirmsfiltrs un viens pēcfiltrs var būt aktīvs vienlaicīgi.<br>
Katrs filtrs tiks apstrādāts aprakstītajā kārtībā. Kļūdains vai izdots skripts "Paturēt;" pārtrauks turpmāko skriptu apstrādi.<br>
<a href="https://github.com/openemail/openemail-dockerized/blob/master/data/conf/dovecot/global_sieve_before" target="_blank">Global sieve prefilter</a> → Pirmsfiltrs → Lietotāja skripts → Pēcfiltrs → <a href="https://github.com/openemail/openemail-dockerized/blob/master/data/conf/dovecot/global_sieve_after" target="_blank">Global sieve postfilter</a>';
$lang['info']['no_action'] = 'No action applicable';


$lang['edit']['syncjob'] = 'Rediģēt sinhronizācijas darbu';
$lang['edit']['username'] = 'Lietotājvārds';
$lang['edit']['hostname'] = 'Hosta nosaukums';
$lang['edit']['encryption'] = 'Šifrēšana';
$lang['edit']['maxage'] = 'Maximum age of messages in days that will be polled from remote<br><small>(0 = ignore age)</small>';
$lang['edit']['maxbytespersecond'] = 'Maks. baiti sekundē (0 ir vienāds ar neierobežotu skaitu)';
$lang['edit']['automap'] = 'Mēģiniet automatizēt mapes ("Nosūtītie vienumi", "Nosūtītie" => "Nosūtītie" utt.)';
$lang['edit']['skipcrossduplicates'] = 'Izlaist dublētus ziņojumus pa mapēm (pirmais nāk, pirmais kalpo)';
$lang['add']['automap'] = 'Mēģiniet automatizēt mapes ("Nosūtītie vienumi", "Nosūtītie" => "Nosūtītie" etc.)';
$lang['add']['skipcrossduplicates'] = 'Izlaist dublētus ziņojumus pa mapēm (pirmais nāk, pirmais kalpo)';
$lang['edit']['subfolder2'] = 'Sinhronizēt galamērķa apakšmapē<br><small>(tukšs = neizmantot apakšmapi)</small>';
$lang['edit']['mins_interval'] = 'Intervāls (min)';
$lang['edit']['exclude'] = 'Neiekļaut objektus (regex)';
$lang['edit']['save'] = 'Saglabāt Izmaiņas';
$lang['edit']['max_mailboxes'] = 'Maks. iespējamās pastkastes';
$lang['edit']['title'] = 'Labot priekšmetu';
$lang['edit']['target_address'] = 'Iet uz adresi/ēm <small>(komatu atdalītas)</small>';
$lang['edit']['active'] = 'Aktīvs';
$lang['edit']['force_pw_update'] = 'Piespiedu paroles atjaunošana pie nākošās pieslēgšanās';
$lang['edit']['force_pw_update_info'] = 'Šis lietotājs varēs pieslēgties tikai openemail lietotāja saskarnē.';
$lang['edit']['target_domain'] = 'Mērķa domēns';
$lang['edit']['password'] = 'Parole';
$lang['edit']['password_repeat'] = 'Apstiprinājuma parole (atkārtot)';
$lang['edit']['domain_admin'] = 'Labot domēna administratoru';
$lang['edit']['domain'] = 'Labot domēnu';
$lang['edit']['edit_alias_domain'] = 'Rediģēt alias domēnu';
$lang['edit']['domains'] = 'Domēni';
$lang['edit']['alias'] = 'Rediģēt alias';
$lang['edit']['mailbox'] = 'Rediģēt pastkasti';
$lang['edit']['description'] = 'Apraksts';
$lang['edit']['max_aliases'] = 'Maks. aliases';
$lang['edit']['max_quota'] = 'Maks. kvota uz pastkasti (MiB)';
$lang['edit']['domain_quota'] = 'Domēna kvota';
$lang['edit']['backup_mx_options'] = 'Dublēt MX iespējas';
$lang['edit']['relay_domain'] = 'Pārsūtīt domēnu';
$lang['edit']['relay_all'] = 'Pārsūtīt visus adresātus';
$lang['edit']['relay_all_info'] = '<small>Ja tu izvēlies <b>nepārsūtīt</b> visus adresātus, tad tev vajadzēs pievienot ("tukšu") pastkasti katram saņēmējam, kas būtu jāpārsūta.</small>';
$lang['edit']['full_name'] = 'Pilns vārds';
$lang['edit']['quota_mb'] = 'Kvota (MiB)';
$lang['edit']['sender_acl'] = 'Atļaut sūtīt kā';
$lang['edit']['previous'] = 'Iepriekšējā lapa';
$lang['edit']['unchanged_if_empty'] = 'Ja neizmainīts atstājiet tukšu';
$lang['edit']['dont_check_sender_acl'] = "Atspējot domēna sūtītāju pārbaudi %s + alias domēni";
$lang['edit']['multiple_bookings'] = 'Vairāki rezervējumi';
$lang['edit']['kind'] = 'Veids';
$lang['edit']['resource'] = 'Resurss';

$lang['add']['syncjob'] = 'Pievienot sinhronizācijas darbu';
$lang['add']['syncjob_hint'] = 'Ņemiet vērā, ka parole ir jāuzglabā vienkāršā tekstā!';
$lang['add']['hostname'] = 'Hosta nosaukums';
$lang['add']['port'] = 'Ports';
$lang['add']['username'] = 'Lietotājvārds';
$lang['add']['enc_method'] = 'Šifrēšanas metode';
$lang['add']['mins_interval'] = 'Aptauajs intervāls (minūtes)';
$lang['add']['exclude'] = 'Izslēgt objektus (regex)';
$lang['add']['delete2duplicates'] = 'Dzēst dublikātus galamērķī';
$lang['add']['delete1'] = 'Dzēst no avota, kad tas ir pabeigts';
$lang['add']['delete2'] = 'Dzēsiet ziņojumus galamērķī, kas nav avotā';
$lang['edit']['delete2duplicates'] = 'Dzēst dublikātus galamērķī';
$lang['edit']['delete1'] = 'Dzēst no avota, kad pabeigts';
$lang['edit']['delete2'] = 'Dzēsiet ziņojumus galamērķī, kas nav avotā';

$lang['add']['domain'] = 'Domēns';
$lang['add']['active'] = 'Aktīvs';
$lang['add']['multiple_bookings'] = 'Vairākas rezervācijas';
$lang['add']['description'] = 'Apraksts';
$lang['add']['max_aliases'] = 'Maks. iespejamās aliases';
$lang['add']['max_mailboxes'] = 'Maks. iespējamās pastkastes';
$lang['add']['mailbox_quota_m'] = 'Maks. kvota pastkastei (MiB)';
$lang['add']['domain_quota_m'] = 'Kopējā  domēna kvota (MiB)';
$lang['add']['backup_mx_options'] = 'Dublējuma MX iespējas';
$lang['add']['relay_all'] = 'Pārsūtīt visus saņēmējus';
$lang['add']['relay_domain'] = 'Pārsūtīt šo domēnu';
$lang['add']['relay_all_info'] = '<small>Ja izvēlies <b>nepārsūtīt</b> visus saņēmējus, tad Tev būs nepieciešams pievienot ("tukšu") pastkasti katram saņēmējam, kas būtu jāpārsūta.</small>';
$lang['add']['alias_address'] = 'Alias addrese/s';
$lang['add']['alias_address_info'] = '<small>Pilna epasta addrese/s vai @piemērs.com, lai notvertu visas domēna ziņas (komatu atdalītas). <b>tikai openemail domēni</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Tikai derīgi domēna vārdi (komatu atdalīti).</small>';
$lang['add']['target_address'] = 'Iet uz adresēm';
$lang['add']['target_address_info'] = '<small>Pilna epasta addrese/s (comma-separated).</small>';
$lang['add']['alias_domain'] = 'Alias domēni';
$lang['add']['select'] = 'Lūdzu izvēlaties...';
$lang['add']['target_domain'] = 'Mērķa domēns';
$lang['add']['kind'] = 'Veids';
$lang['add']['mailbox_username'] = 'Lietotājvārds (kriesā daļa no epasta adreses)';
$lang['add']['full_name'] = 'Pilns vārds';
$lang['add']['quota_mb'] = 'Kvota (MiB)';
$lang['add']['select_domain'] = 'Lūdzu sākumā izvēlaties domēnu';
$lang['add']['password'] = 'Parole';
$lang['add']['password_repeat'] = 'Apstiprinājuma parole (atkārtot)';
$lang['add']['restart_sogo_hint'] = 'Jums būs nepieciešams atsāknēt SOGo servisa konteineru pēc jauna domēna pievienošanas!';
$lang['add']['goto_null'] = 'Klusām dzēst pastu';
$lang['add']['validation_success'] = 'Apstiprināts veiksmīgi';
$lang['add']['activate_filter_warn'] = 'Visi pārējie filtri tiks deaktivizēti, kad aktīvs ir atzīmēts.';
$lang['add']['validate'] = 'Apstiprināt';
$lang['mailbox']['add_filter'] = 'Pievienot filtru';
$lang['add']['sieve_desc'] = 'Īss apraksts';
$lang['edit']['sieve_desc'] = 'Īss apraksts';
$lang['add']['sieve_type'] = 'Filtra tips';
$lang['edit']['sieve_type'] = 'Filtra tips';
$lang['mailbox']['set_prefilter'] = 'Atzīmēt kā pimrsfiltru';
$lang['mailbox']['set_postfilter'] = 'Atzīmēt kā pēcfiltru';
$lang['mailbox']['filters'] = 'Filtri';
$lang['mailbox']['sync_jobs'] = 'Sinhronizācijas darbi';
$lang['mailbox']['inactive'] = 'Neaktīvs';
$lang['edit']['validate_save'] = 'Apstiprināt un saglabāt';


$lang['login']['username'] = 'Lietotājvārds';
$lang['login']['password'] = 'Parole';
$lang['login']['login'] = 'Pieslēgties';
$lang['login']['delayed'] = 'Pieslēgšanās aizkavējās par  %s sekundēm.';

$lang['tfa']['tfa'] = "Divu faktoru autentifikācija";
$lang['tfa']['set_tfa'] = "Uzstādīt difi faktoru autentifik;acijas metodi";
$lang['tfa']['yubi_otp'] = "Yubico OTP autentifikators";
$lang['tfa']['key_id'] = "Jūsu YubiKey identifikators";
$lang['tfa']['key_id_totp'] = "Identifikators Jūsu atslēgai";
$lang['tfa']['api_register'] = 'openemail izmanto Yubico Cloud API. Lūdzu iegūstiet API atslēgu priekš Jūsu atslēgas<a href="https://upgrade.yubico.com/getapikey/" target="_blank">here</a>';
$lang['tfa']['u2f'] = "U2F autentifikācija";
$lang['tfa']['none'] = "Deaktivizēt";
$lang['tfa']['delete_tfa'] = "Atspējot TFA";
$lang['tfa']['disable_tfa'] = "Atspējot TFA līdz nākamajai veiksmīgai pieteikšanās";
$lang['tfa']['confirm'] = "Apstiprināt";
$lang['tfa']['totp'] = "Uz laiku bāzēta vienreizēja parole (Google Autentifikātors utt.)";
$lang['tfa']['select'] = "Lūdzu izvēlaties";
$lang['tfa']['waiting_usb_auth'] = "<i>Gaida USB ierīci...</i><br><br>Lūdzu, tagad nospiežiet pogu uz Jūsu U2F USB ierīces.";
$lang['tfa']['waiting_usb_register'] = "<i>Gaida USB ierīci...</i><br><br>Lūdzu augšā ievadiet Jūsu paroli un apstipriniet U2F reģistrāciju nospiežot pogu uz Jūsu U2F USB ierīces.";
$lang['tfa']['scan_qr_code'] = "Lūdzu, skenējiet šo kodu ar savu autentifikācijas lietojumprogrammu vai ievadiet kodu manuāli.";
$lang['tfa']['enter_qr_code'] = "Jūsu TOTP kods, ja Jūsu ierīce nevar noskanēt QR kodus.";
$lang['tfa']['confirm_totp_token'] = "Lūdzu apstipriniet Jūsu izmaiņas ievadot uzģenerēto tekstu";

$lang['admin']['no_new_rows'] = 'Papildu rindas nav pieejamas';
$lang['admin']['private_key'] = 'Privāta atslēga';
$lang['admin']['import'] = 'Importēt';
$lang['admin']['import_private_key'] = 'Importēt privātu atslēgu';
$lang['admin']['f2b_parameters'] = 'Fail2ban parametri';
$lang['admin']['f2b_ban_time'] = 'Aizlieguma laiks (s)';
$lang['admin']['f2b_max_attempts'] = 'Maks. piegājieni';
$lang['admin']['f2b_retry_window'] = 'Atkārtošanas logs (s) priekš maks. piegājiena';
$lang['admin']['f2b_netban_ipv4'] = 'IPv4 apakštīkla izmērs, lai piemērotu aizliegumu uz (8-32)';
$lang['admin']['f2b_netban_ipv6'] = 'IPv6 apakštīkla izmērs, lai piemērotu aizliegumu uz  (8-128)';
$lang['admin']['f2b_whitelist'] = 'Baltā saraksta tīkls/hosts';
$lang['admin']['search_domain_da'] = 'Meklēt domēnus';
$lang['admin']['r_inactive'] = 'Neaktīvie ierobežojumi';
$lang['admin']['r_active'] = 'Aktīvie ierobežojumi';
$lang['admin']['r_info'] = ' Pelēki/atslēgti elementi aktīvo ierobežojumu sarakstā nav zināmi kā openemail spēkā esoši ierobežojumi un tos nevar pārvietot. Jebkurā gadījumā nezināmi ierobežojumi tiks sakārtoti pēc pievienošanas. <br>Jūs varat pievienot jaunus elementus <code>inc/vars.local.inc.php</code>, lai varētu tos pārslēgt.';
$lang['admin']['dkim_key_length'] = 'DKIM atslēgas garums (bits)';
$lang['admin']['dkim_key_valid'] = 'Atslēga derīga';
$lang['admin']['dkim_key_unused'] = 'Neizmantota atslēga';
$lang['admin']['dkim_key_missing'] = 'Trūkst atslēga';
$lang['admin']['dkim_add_key'] = 'Pievienot ARC/DKIM atslēgu';
$lang['admin']['dkim_keys'] = 'ARC/DKIM atslēgas';
$lang['admin']['add'] = 'Pievienot';
$lang['add']['add_domain_restart'] = 'Pievienot domēnu un restartēt SOGo';
$lang['add']['add_domain_only'] = 'Tikai pievienot domēnu';
$lang['admin']['configuration'] = 'Konfigurācija';
$lang['admin']['password'] = 'Parole';
$lang['admin']['password_repeat'] = 'Apstiprināt paroli (atkārtot)';
$lang['admin']['active'] = 'Aktīvs';
$lang['admin']['inactive'] = 'Neaktīvs';
$lang['admin']['action'] = 'Rīcība';
$lang['admin']['add_domain_admin'] = 'Pievienot domēna administratoru';
$lang['admin']['admin_domains'] = 'Domēna uzdevumi';
$lang['admin']['domain_admins'] = 'Domēna administratori';
$lang['admin']['username'] = 'Lietotājvārds';
$lang['admin']['edit'] = 'Labot';
$lang['admin']['remove'] = 'Noņemt';
$lang['admin']['save'] = 'Saglabāt izmaiņas';
$lang['admin']['admin'] = 'Administrators';
$lang['admin']['admin_details'] = 'Labot administratora detaļas';
$lang['admin']['unchanged_if_empty'] = 'Ja nav veiktas izmaiņas, atstājiet tukšu';
$lang['admin']['access'] = 'Pieeja';
$lang['admin']['no_record'] = 'Nav ierakstu';
$lang['admin']['filter_table'] = 'Filtru tabula';
$lang['admin']['empty'] = 'Nav rezultātu';
$lang['admin']['refresh'] = 'Atsvaidzināt';
$lang['admin']['to_top'] = 'Atpakaļ uz sākumu';
$lang['admin']['in_use_by'] = 'Tiek lietots ar';
$lang['admin']['forwarding_hosts'] = 'Hostu pārsūtīšana';
$lang['admin']['forwarding_hosts_hint'] = 'Ienākošie ziņojumi ir bez nosacījumiem pieņemti no visiem šeit norādītajiem hostiem. Pēc tam šie hosti netiek pārbaudīti pret DNSBL vai  pakļauti Greylistei. No tiem saņemtās mēstules nekad netiek noraidītas, bet pēc izvēles tās var pārvietot mapē Nevēlamais. Visbiežāk to izmanto, lai precizētu pasta serverus, kuros ir iestatīts noteikums, kas pārsūta ienākošos e-pasta ziņojumus uz jūsu openemail serveri.';
$lang['admin']['forwarding_hosts_add_hint'] = 'Jūs varat norādīt  IPv4/IPv6 addreses, tīklu iekš CIDR apzīmējuma, hosta nosaukumu (kas tiks atrisinātas IP  adresēs), vai domēna vārdos (kas tiks atrisināts IP adresēs vaicājot SPF ierakstus vai, ja tādu nav, MX ierakstus).';
$lang['admin']['relayhosts_hint'] = 'Definējiet  relejhostus šeit, lai tos varētu izvēlēties domēna konfigurācijas logā.';
$lang['admin']['add_relayhost_add_hint'] = 'Lūdzu, ņemiet vērā, ka relejhostu autentifikācijas dati tiks saglabāti kā vienkāršs teksts.';
$lang['admin']['host'] = 'Hosts';
$lang['admin']['source'] = 'Avots';
$lang['admin']['add_forwarding_host'] = 'Pievienot pāradresācijas hostu';
$lang['admin']['add_relayhost'] = 'Pievienot Relayhost';
$lang['success']['forwarding_host_removed'] = "Pāradresācijas hosts %s noņemts";
$lang['success']['forwarding_host_added'] = "Pāradresācijas hosts %s pievienotsd";
$lang['success']['relayhost_removed'] = "Relejhosts %s noņemts";
$lang['success']['relayhost_added'] = "Relejhosts %s pievienots";
$lang['diagnostics']['dns_records'] = 'DNS Ieraksti';
$lang['diagnostics']['dns_records_24hours'] = 'Lūdzu ņemiet vērā, ka DNS izmaiņas var aizņemt laiku līdz 24 stundām, lai pareizi varētu atspoguļot izmaiņas šajā lapā. Tas ir paredzēts, lai jūs varētu viegli uzzināt, kā konfigurēt savus DNS ierakstus un pārbaudīt, vai visi jūsu ieraksti ir pareizi saglabāti DNS.';
$lang['diagnostics']['dns_records_name'] = 'Nosaukums';
$lang['diagnostics']['dns_records_type'] = 'Tips';
$lang['diagnostics']['dns_records_data'] = 'Pareizi dati';
$lang['diagnostics']['dns_records_status'] = 'Pašreizējais stāvoklis';
$lang['diagnostics']['optional'] = 'Šis ieraksts nav obligāts.';
$lang['diagnostics']['cname_from_a'] = 'Vērtība, kas iegūta no  A/AAAA ieraksta. Tas tiek atbalstīts tik ilgi, kamēr ieraksts norāda pareizo resursu.';

$lang['admin']['relay_from'] = '"No:" addrese';
$lang['admin']['relay_run'] = "Palaist testu";
$lang['admin']['api_allow_from'] = "Atļaut API piekļuvi no šīm IP";
$lang['admin']['api_key'] = "API atslēga";
$lang['admin']['activate_api'] = "Aktivizēt API";
$lang['admin']['regen_api_key'] = "Reģenerēt API atslēgu";

$lang['admin']['quarantine'] = "Karantīna";
$lang['admin']['quarantine_retention_size'] = "Atlikumi pastkastēs:";
$lang['admin']['quarantine_max_size'] = "Maks. izmērs MiB (lielāki vienumi ir atbrīvoti):";
$lang['admin']['quarantine_exclude_domains'] = "Izslēgt domēnus un alias-domēnus:";

$lang['admin']['ui_texts'] = "UI etiķetes un teksti";
$lang['admin']['help_text'] = "Ignorēt palīdzības tekstu zem pieteikšanās maskas (HTML ir atļauta)";
$lang['admin']['title_name'] = '"openemail UI" mājas lapas nosaukums';
$lang['admin']['main_name'] = '"openemail UI" nosaukums';
$lang['admin']['apps_name'] = '"openemail Apps" nosaukums';

$lang['admin']['customize'] = "Pielāgot";
$lang['admin']['change_logo'] = "Nomainīt logo";
$lang['admin']['logo_info'] = "Jūsu attēls augšējā navigācijas joslā tiks palielināts līdz 40 pikseļiem un maks. sākumlapas platums par 250 pikseļi. Ir ļoti ieteicama pielāgojama grafikaYour image will be scaled to a height of 40px for the top navigation bar and a max. width of 250px for the start page. Ir ļoti ieteicama pielāgojamā grafika";
$lang['admin']['upload'] = "Augšupielādēt";
$lang['admin']['app_links'] = "Lietotņu saites";
$lang['admin']['app_name'] = "Lietotņu nosaukums";
$lang['admin']['link'] = "Saite";
$lang['admin']['remove_row'] = "Noņemt rindu";
$lang['admin']['add_row'] = "Pievienot rindu";
$lang['admin']['reset_default'] = "Atiestatīt uz noklusējumu";
$lang['admin']['merged_vars_hint'] = 'Pelēkās rindas tika apvienotas <code>vars.(local.)inc.php</code> un nevar tikt modificētas.';
$lang['mailbox']['waiting'] = "Gaidīšana";
$lang['mailbox']['status'] = "Status";
$lang['mailbox']['running'] = "Darbojas";

$lang['edit']['spam_score'] = "Iestatīt pielāgotu surogātpastu";
$lang['edit']['spam_policy'] = "Pievienot vai noņemt  vienības   baltajā-/melnajā sarakstā";
$lang['edit']['spam_alias'] = "Izveidot vai mainīt laika ierobežotas alias adreses";

$lang['danger']['img_tmp_missing'] = "Nevar apstiprināt attēla failu: pagaidu failu nav atrasts";
$lang['danger']['img_invalid'] = "Nevar apstiprināt attēla failu";
$lang['danger']['invalid_mime_type'] = "Nederīgs mime tips";
$lang['success']['upload_success'] = "Faila augšupielāde veiksmīga";
$lang['success']['app_links'] = "Saglabāt izmaiņas lietotņu saitēm";
$lang['success']['ui_texts'] = "Saglabāt UI izmaiņas tekstiem";
$lang['success']['reset_main_logo'] = "Atjaunot noklusējuma logotipu";
$lang['success']['items_released'] = "Atlasītie vienumi tika izlaisti";
$lang['danger']['imagick_exception'] = "Kļūda: Imagick izņēmums, lasot attēlu";

$lang['quarantine']['quarantine'] = "Karantīna";
$lang['quarantine']['qinfo'] = "Karantīnas sistēma saglabās noraidīto vēstuli datubāzē, kamēr sūtītājs <em> nesaņems </em> iespaidu par piegādāto pastu.";
$lang['quarantine']['release'] = "Atbrīvot";
$lang['quarantine']['empty'] = 'Nav rezultātu';
$lang['quarantine']['toggle_all'] = 'Pārslēgt visu';
$lang['quarantine']['quick_actions'] = 'Darbības';
$lang['quarantine']['remove'] = 'Noņemt';
$lang['quarantine']['received'] = "Saņemtie";
$lang['quarantine']['action'] = "Darbības";
$lang['quarantine']['rcpt'] = "Saņēmējs";
$lang['quarantine']['qid'] = "Rspamd QID";
$lang['quarantine']['sender'] = "Sūtītājs";
$lang['quarantine']['show_item'] = "Parādīt vienumus";
$lang['quarantine']['check_hash'] = "Meklēt faila hašu @ VT";
$lang['quarantine']['qitem'] = "Karantīnas vienumi";
$lang['quarantine']['subj'] = "Priekšmets";
$lang['quarantine']['recipients'] = "Adresāts";
$lang['quarantine']['text_plain_content'] = "Saturs (teksts/vienkāršs)";
$lang['quarantine']['text_from_html_content'] = "Saturs (konvertēts html)";
$lang['quarantine']['atts'] = "Pielikumi";

$lang['header']['quarantine'] = "Karantīna";
$lang['header']['debug'] = "Atkļūdošana";

$lang['quarantine']['release_body'] = "Šim ziņojumam mēs esam pievienojuši jūsu ziņojumu kā eml failu.";
$lang['danger']['release_send_failed'] = "Ziņojumu nevarēja atbrīvot: %s";
$lang['quarantine']['release_subject'] = "Potenciāli kaitīgs karantīnas vienums %s";

$lang['mailbox']['bcc_map_type'] = "BCC tips";
$lang['mailbox']['bcc_type'] = "BCC tips";
$lang['mailbox']['bcc_sender_map'] = "Sūtītāja karte";
$lang['mailbox']['bcc_rcpt_map'] = "saņēmēja karte";
$lang['mailbox']['bcc_local_dest'] = "Vietējais galamērķis";
$lang['mailbox']['bcc_destinations'] = "BCC galamērķi/s";

$lang['mailbox']['bcc'] = "BCC";
$lang['mailbox']['bcc_maps'] = "BCC kartes";
$lang['mailbox']['bcc_to_sender'] = "Pārslēgties uz sūtītāja kartes tipu";
$lang['mailbox']['bcc_to_rcpt'] = "Pārslēdzieties uz adresāta kartes tipu";
$lang['mailbox']['add_bcc_entry'] = "Pievienot BCC karti";
$lang['mailbox']['bcc_info'] = "BCC kartes tiek izmantotas, lai klusu pārsūtītu visu ziņojumu kopijas uz citu adresi. Saņēmēja kartes tipa ieraksts tiek izmantots, kad vietējais galamērķis darbojas kā pasta adresāts. Sūtītāja kartes atbilst vienam un tam pašam principam. <br/>
   Vietējais galamērķis netiks informēts par piegādes neveiksmi. ";
$lang['mailbox']['address_rewriting'] = 'Adreses pārrakstīšana';
$lang['mailbox']['recipient_maps'] = 'Saņēmēja kartes';
$lang['mailbox']['recipient_map_info'] = 'Saņēmēju kartes tiek izmantotas, lai aizstātu ziņas galamērķa adresi pirms tā tiek piegādāta.';
$lang['mailbox']['recipient_map_old'] = 'Oriģinālais saņēmējs';
$lang['mailbox']['recipient_map_new'] = 'Jauns saņēmējs';
$lang['mailbox']['add_recipient_map_entry'] = 'Pievienot saņēmēja karti';