<?php
// German extension, https://github.com/annaesvensson/yellow-language/tree/main/translations/german

class YellowGerman {
    const VERSION = "0.8.35";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefault($this->getDefault());
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "de"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="de") {
            $this->yellow->system->save($fileName, array("language" => $this->yellow->system->getDifferent("language")));
        }
    }
    
    // Return default language settings
    public function getDefault() {
        return <<< 'END'
        Language: de
        LanguageLocale: de_DE
        LanguageDescription: Deutsch
        LanguageTranslator: David Fehrmann
        BerlinDescription: Berlin ist ein Thema inspiriert von Dieter Rams.
        BlogDescription: Blog für deine Webseite.
        BlogBy: von
        BlogTag: Tags:
        BlogMore: Lies mehr…
        BreadcrumbDescription: Brotkrümel-Navigation.
        BundleDescription: Webseiten-Dateien bündeln.
        ChineseDescription: Chinesisch/简体中文 mit der Sprache "zh".
        CommandDescription: Befehlszeile der Webseite.
        ContactDescription: E-Mail-Kontaktseite.
        ContactName: Name:
        ContactEmail: E-Mail:
        ContactMessage: Nachricht:
        ContactConsent: Ich stimme zu, dass meine Nachricht von dieser Webseite gespeichert wird.
        ContactButton: Meine Nachricht absenden
        ContactMailSpam: [Spam]
        ContactMailHeader: Du hast eine Nachricht von @sender erhalten:
        ContactMailFooter: Diese E-Mail wurde über @sitename verschickt - @title
        ContactStatusNone: Sag Hallo! Dein Feedback ist sehr willkommen.
        ContactStatusIncomplete: Bitte alle Felder ausfüllen.
        ContactStatusInvalid: Bitte eine gültige E-Mail angeben.
        ContactStatusReview: Bitte entferne Links aus der Nachricht.
        ContactStatusDone: Nachricht wurde versandt. Vielen Dank!
        ContactStatusError: Nachricht konnte nicht versandt werden, versuche es später erneut!
        CopenhagenDescription: Copenhagen ist ein schönes Thema.
        CoreDescription: Kernfunktionalität der Webseite.
        CorePaginationPrevious: ← Zurück
        CorePaginationNext: Weiter →
        CoreTimeFormatShort: H:i
        CoreTimeFormatMedium: H:i:s
        CoreTimeFormatLong: H:i:s T
        CoreDateFormatShort: F Y
        CoreDateFormatMedium: d.m.Y
        CoreDateFormatLong: d.m.Y H:i
        CoreDatePast: heute, gestern, vor @x Tagen, vor 1 Monat, vor @x Monaten, vor 1 Jahr, vor @x Jahren, am @x
        CoreDateFuture: bald, morgen, in @x Tagen, in 1 Monat, in @x Monaten, in 1 Jahr, in @x Jahren, am @x
        CoreDateMonthsNominative: Januar, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember
        CoreDateMonthsGenitive: Januar, Februar, März, April, Mai, Juni, Juli, August, September, Oktober, November, Dezember
        CoreDateWeekdays: Montag, Dienstag, Mittwoch, Donnerstag, Freitag, Samstag, Sonntag
        CoreDateWeekstart: Montag
        CoreDecimalSeparator: ,
        CoreError404Title: Datei nicht gefunden
        CoreError404Text: Die angeforderte Datei wurde nicht gefunden. Oh nein...
        CoreError420Title: Seite nicht öffentlich
        CoreError420Text: Die angeforderte Seite ist nicht öffentlich. [yellow error]
        CoreError430Title: Anmeldung fehlgeschlagen
        CoreError430Text: E-Mail oder Kennwort ist falsch. [Bitte erneut versuchen](#data-action-login).
        CoreError434Title: Seite nicht gefunden
        CoreError434Text: Die angeforderte Seite wurde nicht gefunden. [Du kannst diese Seite erstellen](#data-action-edit).
        CoreError435Title: Seite nicht gefunden
        CoreError435Text: Die angeforderte Seite wurde gelöscht. [Du kannst diese Seite wiederherstellen](#data-action-restore).
        CoreError450Title: Aktualisierungsfehler
        CoreError450Text: Kann keine Verbindung zum Aktualisierungs-Server herstellen. Eine Internetverbindung ist erforderlich.
        CoreError500Title: Serverfehler
        CoreError500Text: Etwas ist schief gelaufen. [yellow error]
        CzechDescription: Tschechisch/Čeština mit der Sprache "cs".
        DanishDescription: Dänisch/Dansk mit der Sprache "da".
        DisqusDescription: Disqus-Kommentare im Blog anzeigen.
        DraftDescription: Unterstützung für Entwurfsseiten.
        DraftStatusEmpty: Keine Entwürfe gefunden.
        DraftPageError: Bitte melde dich an.
        DutchDescription: Niederländisch/Nederlands mit der Sprache "nl".
        EditDescription: Webseite im Webbrowser bearbeiten.
        EditLoginTitle: Willkommen
        EditLoginEmail: E-Mail:
        EditLoginPassword: Kennwort:
        EditLoginForgot: Kennwort vergessen?
        EditLoginSignup: Benutzerkonto erstellen?
        EditLoginButton: Anmelden
        EditSignupTitle: Benutzerkonto erstellen
        EditSignupName: Name:
        EditSignupEmail: E-Mail:
        EditSignupPassword: Kennwort:
        EditSignupConsent: Ich stimme zu, dass meine persönlichen Daten von dieser Webseite gespeichert werden.
        EditSignupButton: Erstellen
        EditSignupStatusNone: Hier kannst du ein neues Benutzerkonto erstellen.
        EditSignupStatusIncomplete: Bitte alle Felder ausfüllen.
        EditSignupStatusInvalid: Bitte eine gültige E-Mail angeben.
        EditSignupStatusWeak: Bitte ein anderes Kennwort angeben.
        EditSignupStatusShort: Bitte ein längeres Kennwort angeben.
        EditSignupStatusNext: Benutzerkonto wird erstellt, bitte überprüfe deine E-Mails.
        EditForgotTitle: Kennwort vergessen
        EditForgotEmail: E-Mail:
        EditForgotStatusNone: Kein Problem, du kannst ein neues Kennwort erstellen.
        EditForgotStatusInvalid: Bitte eine gültige E-Mail angeben.
        EditForgotStatusNext: Benutzerkonto wird wiederhergestellt, bitte überprüfe deine E-Mails.
        EditRecoverTitle: Kennwort vergessen
        EditRecoverPassword: Kennwort:
        EditRecoverStatusPassword: Bitte ein neues Kennwort angeben.
        EditRecoverStatusWeak: Bitte ein anderes Kennwort angeben.
        EditRecoverStatusShort: Bitte ein längeres Kennwort angeben.
        EditRecoverStatusDone: Benutzerkonto wurde wiederhergestellt. Vielen Dank!
        EditConfirmSubject: Benutzerkonto bestätigen
        EditConfirmMessage: Hallo @usershort,\n\nbitte bestätige dein Benutzerkonto. Klicke auf den folgenden Link.
        EditConfirmTitle: Benutzerkonto
        EditConfirmStatusDone: Benutzerkonto wurde bestätigt und wartet auf Genehmigung. Vielen Dank!
        EditApproveSubject: Benutzerkonto genehmigen
        EditApproveMessage: Hallo @usershort,\n\nbitte genehmige ein neues Benutzerkonto für @useraccount. Klicke auf den folgenden Link.
        EditApproveTitle: Benutzerkonto
        EditApproveStatusDone: Benutzerkonto wurde genehmigt. Vielen Dank!
        EditReactivateSubject: Benutzerkonto reaktivieren
        EditReactivateMessage: Hallo @usershort,\n\nbitte reaktiviere dein Benutzerkonto. Es gab zu viele fehlgeschlagene Anmeldeversuche. Klicke auf den folgenden Link.
        EditReactivateTitle: Benutzerkonto
        EditReactivateStatusDone: Benutzerkonto wurde reaktiviert. Vielen Dank!
        EditVerifySubject: Benutzerkonto ändern
        EditVerifyMessage: Hallo @usershort,\n\nbitte bestätige eine neue E-Mail für dein Benutzerkonto. Klicke auf den folgenden Link.
        EditVerifyTitle: Benutzerkonto
        EditVerifyStatusDone: Benutzerkonto wurde geändert. Vielen Dank!
        EditChangeSubject: Benutzerkonto ändern
        EditChangeMessage: Hallo @usershort,\n\nbitte bestätige, dass du dein Benutzerkonto ändern möchtest. Klicke auf den folgenden Link.
        EditChangeTitle: Benutzerkonto
        EditChangeStatusDone: Benutzerkonto wurde geändert. Vielen Dank!
        EditRemoveSubject: Benutzerkonto löschen
        EditRemoveMessage: Hallo @usershort,\n\nbitte bestätige, dass du dein Benutzerkonto löschen möchtest. Klicke auf den folgenden Link.
        EditRemoveTitle: Benutzerkonto
        EditRemoveStatusDone: Benutzerkonto wurde gelöscht. Vielen Dank!
        EditRecoverSubject: Benutzerkonto wiederherstellen
        EditRecoverMessage: Hallo @usershort,\n\nbitte bestätige, dass du dein Kennwort vergessen hast. Klicke auf den folgenden Link.
        EditWelcomeSubject: Willkommen
        EditWelcomeMessage: Hallo @usershort,\n\ndein Benutzerkonto wurde erstellt. Viel Spass beim Bearbeiten der Webseite.
        EditGoodbyeSubject: Auf Wiedersehen
        EditGoodbyeMessage: Hallo @usershort,\n\ndein Benutzerkonto wurde gelöscht. Mach's gut.
        EditAccountTitle: Benutzer
        EditAccountInformation: Du kannst dein Benutzerkonto jederzeit löschen.
        EditAccountMore: Lies mehr…
        EditAccountStatusNone: Hier kannst du dein Benutzerkonto ändern.
        EditAccountStatusInvalid: Bitte eine gültige E-Mail angeben.
        EditAccountStatusTaken: Bitte eine andere E-Mail angeben.
        EditAccountStatusWeak: Bitte ein anderes Kennwort angeben.
        EditAccountStatusShort: Bitte ein längeres Kennwort angeben.
        EditAccountStatusNext: Benutzerkonto wird geändert, bitte überprüfe deine E-Mails.
        EditQuitTitle: Benutzerkonto löschen
        EditQuitStatusNone: Bitte gib deinen Namen zur Bestätigung ein.
        EditQuitStatusMismatch: Bitte gib einen anderen Namen ein.
        EditQuitStatusNext: Benutzerkonto wird gelöscht, bitte überprüfe deine E-Mails.
        EditConfigureTitle: Webseite
        EditConfigureSitename: Name der Webseite:
        EditConfigureAuthor: Name des Webmasters:
        EditConfigureEmail: E-Mail des Webmasters:
        EditConfigureInformation: Der Webmaster kann neue Benutzerkonten genehmigen.
        EditConfigureStatusNone: Hier kannst du deine Webseite konfigurieren.
        EditConfigureStatusInvalid: Bitte eine gültige E-Mail angeben.
        EditUpdateTitle: Aktualisierungen
        EditUpdateStatusNone: Datenstrom Yellow ist für Menschen die kleine Webseiten machen.
        EditUpdateStatusCheck: Nach Aktualisierung suchen…
        EditUpdateStatusUpdates: Die folgenden Aktualisierungen sind verfügbar:
        EditUpdateStatusOk: Die Webseite ist auf dem neusten Stand.
        EditOkButton: Ok
        EditCancelButton: Abbruch
        EditChangeButton: Ändern
        EditCreateButton: Erzeugen
        EditEditButton: Speichern
        EditDeleteButton: Löschen
        EditUpdateButton: Aktualisieren
        EditEdit: Seite bearbeiten
        EditCreate: +
        EditDelete: -
        EditKeyboardLabels: Strg+, Alt+, Umschalt+, ⌘, ⌥, ⇧
        EditToolbarFormat: Format
        EditToolbarHeading: Überschrift
        EditToolbarH1: Überschrift 1
        EditToolbarH2: Überschrift 2
        EditToolbarH3: Überschrift 3
        EditToolbarParagraph: Normaler Text
        EditToolbarPre: Quellcode
        EditToolbarNotice: Hinweis
        EditToolbarQuote: Zitat
        EditToolbarBold: Fettschrift
        EditToolbarItalic: Kursiv
        EditToolbarStrikethrough: Durchgestrichen
        EditToolbarCode: Code
        EditToolbarList: Liste
        EditToolbarUl: • Unsortierte Liste
        EditToolbarOl: 1. Sortierte Liste
        EditToolbarTl: ✓ Aufgabenliste
        EditToolbarLink: Link
        EditToolbarFile: Datei
        EditToolbarEmojiawesome: Emoji
        EditToolbarFontawesome: Symbol
        EditToolbarStatus: Status
        EditToolbarUndo: Rückgängig
        EditToolbarRedo: Wiederholen
        EditToolbarPreview: Vorschau
        EditToolbarHelp: Hilfe
        EditMailFooter: @sitename
        EditDataGenerated: Diese Seite ist automatisch erstellt.
        EditUploadProgress: Datei hochladen…
        EditUserDescription: Redakteur
        EditMenuSettings: Einstellungen
        EditMenuHelp: Hilfe
        EditMenuLogout: Abmelden
        EditYellowUrl: https://datenstrom.se/de/yellow/
        EditYellowHelpUrl: https://datenstrom.se/de/yellow/help/
        EmojiawesomeDescription: Jede Menge Emoji.
        EnglishDescription: Englisch/English mit der Sprache "en".
        FeedDescription: Feed mit letzten Änderungen.
        FontawesomeDescription: Icons und Symbole.
        FrenchDescription: Französisch/Français mit der Sprache "fr".
        GalleryDescription: Bildergalerie mit Popup.
        GermanDescription: Deutsch/Deutsch mit der Sprache "de".
        GooglecalendarDescription: Google-Kalender einbinden.
        GooglemapDescription: Google-Karten einbinden.
        HelloworldDescription: Beispielfunktion für Datenstrom Yellow.
        HelpDescription: Hilfe für deine Webseite.
        HighlightDescription: Quellcode hervorheben.
        HungarianDescription: Ungarisch/Magyar mit der Sprache "hu".
        ImageDescription: Bilder in unterschiedlichen Größen.
        ImageDefaultAlt: Bild ohne Beschreibung
        InstagramDescription: Instagram-Fotos einbinden.
        InstallTitle: Hallo
        InstallLanguage: Was ist deine Sprache?
        InstallExtension: Was willst du machen?
        InstallExtensionWebsite: Kleine Webseite
        InstallExtensionBlog: Kleines Blog
        InstallExtensionWiki: Kleines Wiki
        InstallButton: Installieren
        InstallHomeTitle: Startseite
        InstallHomeText: [image photo.jpg Beispiel rounded]\n\n[edit - Du kannst diese Seite im Webbrowser bearbeiten] oder einen Texteditor benutzen. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
        InstallAboutTitle: Über
        InstallAboutText: [Erstellt mit Datenstrom Yellow](https://datenstrom.se/de/yellow/).
        InstallDefaultTitle: Seite
        InstallDefaultText: Dies ist eine neue Seite.
        InstallBlogTitle: Blogseite
        InstallBlogText: Dies ist eine neue Blogseite.
        InstallWikiTitle: Wikiseite
        InstallWikiText: Dies ist eine neue Wikiseite.
        InstallExampleImage: Das ist ein Beispielbild
        ItalianDescription: Italienisch/Italiano mit der Sprache "it".
        JapaneseDescription: Japanisch/日本語 mit der Sprache "ja".
        MarkdownDescription: Textformatierung für Menschen.
        MetaDescription: Metadaten für Menschen und Maschinen.
        NorwegianDescription: Norwegisch/Norsk mit der Sprache "nb".
        ParsedownDescription: Textformatierung für Menschen.
        ParisDescription: Paris ist ein elegantes Thema.
        PolishDescription: Polnisch/Polski mit der Sprache "pl".
        PortugueseDescription: Portugiesisch/Português mit der Sprache "pt".
        PreviousnextDescription: Links zu vorherigen/nächsten Seite anzeigen.
        PreviousnextPagePrevious: ← Zurück: @title
        PreviousnextPageNext: Weiter: @title →
        PublishDescription: Erweiterungen erstellen und veröffentlichen.
        RussianDescription: Russisch/Русский mit der Sprache "ru".
        SearchDescription: Volltext-Suche.
        SearchResultsNone: Bitte einen Suchbegriff eingeben.
        SearchResultsEmpty: Keine Treffer für diese Suchanfrage.
        SearchSpecialChanges: Letzte Änderungen
        SearchButton: Suchen
        ServeDescription: Eingebauter Webserver.
        SitemapDescription: Sitemap mit allen Seiten.
        SliderDescription: Bildergalerie mit Schieber.
        SlovakDescription: Slowakisch/Slovenčina mit der Sprache "sk".
        SoundcloudDescription: Soundcloud-Audio einbinden.
        SpanishDescription: Spanisch/Español mit der Sprache "es".
        StockholmDescription: Stockholm ist ein schlichtes Thema.
        SwedishDescription: Schwedisch/Svenska mit der Sprache "sv".
        TocDescription: Inhaltsverzeichnis anzeigen.
        TrafficDescription: Zugriffsanalysen aus Logdateien erstellen.
        TurkishDescription: Türkisch/Türkçe mit der Sprache "tr".
        TwitterDescription: Twitter-Nachrichten einbinden.
        UpdateDescription: Webseite auf dem neusten Stand halten.
        UpdateExtensionDefaultDescription: Keine Beschreibung vorhanden.
        UpdateExtensionDeveloper: Entwickelt von @x.
        UpdateExtensionDesigner: Entworfen von @x.
        UpdateExtensionTranslator: Übersetzt von @x.
        WikiDescription: Wiki für deine Webseite.
        WikiModified: Zuletzt aktualisiert am
        WikiTag: Tags:
        WikiSpecialPages: Alle Seiten
        WikiSpecialChanges: Letzte Änderungen
        YoutubeDescription: Youtube-Videos einbinden.
END;
    }
}
