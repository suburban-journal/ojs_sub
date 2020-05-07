<?php return array (
  'plugins.importexport.dnb.displayName' => 'DNB-Export-Plug-In',
  'plugins.importexport.dnb.description' => 'Artikel im DNB-Format exportieren oder abliefern.',
  'plugins.importexport.dnb.archiveAccess.required' => '<strong>Hinweis:</strong> Diese Zeitschrift ist keine Open-Access-Zeitschrift, so dass Sie zuerst eine der möglichen Zugriffsoptionen für die bei der DNB archivierten Artikeln in den Plug-In-Einstellungen auswählen müssen, bevor Sie mit dem Export fortgahren können.',
  'plugins.importexport.dnb.registrationIntro' => 'Um Artikel direkt aus OJS heraus abliefern zu können, müssen Sie Ihren Benutzernamen, Ihr Passwort und Ihre Unterordner-ID eintragen. Exportieren können Sie die DNB-Pakete aber auch ohne die Zugangsdaten eingetragen zu haben.',
  'plugins.importexport.dnb.noISSN' => 'ISSN (s. <a href="{$journalSettingsUrl}" target="_blank">Setup-Seite</a>) wird für Export und Ablieferung benötigt.',
  'plugins.importexport.dnb.noTAR' => 'TAR-Befehl (s. Teil "cli" in der Datei config.inc.php) wird für Export und Ablieferung benötigt.',
  'plugins.importexport.dnb.noExportFilter' => 'Exportfilter nicht registriert! Haben Sie das Installationsskript ausgeführt?',
  'plugins.importexport.dnb.settings.form.archiveAccess' => 'Bitte definieren Sie den Zugriff auf die Artikel im DNB-Archiv:',
  'plugins.importexport.dnb.settings.form.archiveAccess.description' => 'Für Open-Access-Zeitschriften und -Artikel ist der Zugriff auf die archivierte Version automatisch uneingeschränkt für alle (zweite Option). Geschlossene Zeitschriften und Zeitschriften mit beschränktem Zugriff müssen eine von den durch die DNB zur Verfügung gestellten Zugriffsoptionen für Archivexemplare auswählen. Bitte beachten Sie, dass auf Ausgaben oder Artikelebene vergebene Zugriffsrechte vorgang von den hier gesetzten Zugriffrechten haben.',
  'plugins.importexport.dnb.settings.form.archiveAccess.a' => 'Beschränkter Zugriff, d.h. nur an speziellen Rechnern in den Lesesälen der DNB.',
  'plugins.importexport.dnb.settings.form.archiveAccess.b' => 'Uneingeschränkter Zugriff für alle.',
  'plugins.importexport.dnb.settings.form.archiveAccess.d' => 'Zugriff für registrierte Nutzer/innen auch von außerhalb der DNB.',
  'plugins.importexport.dnb.settings.form.archiveAccessRequired' => 'Bitte definieren Sie die Zugriffsberechtigungen auf die archivierten Artikel.',
  'plugins.importexport.dnb.settings.form.folderId' => 'Unterordner-ID',
  'plugins.importexport.dnb.settings.form.folderId.description' => 'Das ist der Unterordner in Ihrem DNB-Hotfolder, in den die exportierten Pakete hochgeladen werden sollen.',
  'plugins.importexport.dnb.settings.form.username' => 'Benutzername',
  'plugins.importexport.dnb.settings.form.password.description' => 'Bitte beachten Sie, dass das Passwort im Klartext, d.h. unverschlüsselt, gespeichert wird.',
  'plugins.importexport.dnb.settings.form.automaticDeposit' => 'Automatische Ablieferung der Artikel zur DNB',
  'plugins.importexport.dnb.settings.form.automaticDeposit.description' => 'OJS prüft regelmäßig, ob es Artikel gibt, die noch nicht an die DNB abgeliefert wurden (d.h. Artikel, die noch nicht über OJS in den DNB Hotfolder abgeliefert und nicht als registriert markiert wurden) und liefert diese automatisch in den DNB Hotfolder ab. Bitte beachten Sie, dass eine kurze Zeitspanne zur Verarbeitung nach der Veröffentlichung benötigt wird. Sie können alle nicht abgelieferten Artikel in der Artikelauflistung überprüfen.',
  'plugins.importexport.dnb.status.non' => 'Nicht abgeliefert',
  'plugins.importexport.dnb.status.deposited' => 'Abgeliefert',
  'plugins.importexport.dnb.status.legend' => '
		<p>Ein Artikel kann einen der folgenden Status haben:<br/>
		<strong>Nicht abgeliefert</strong>: Der Artikel wurde noch nicht bei der DNB abgeliefert (er wurde nicht über OJS in den DNB Hotfolder und auch nicht extern, z.B. über das DNB Webformular abgeliefert).<br/>
		<strong>Abgeliefert</strong>: Der Artikel wurde über OJS in den DNB-Hotfolder abgeliefert.<br/>
		<strong>Als registriert markiert</strong>: Der Artikel wurde manuell als registriert markiert. Sie können Artikel als registriert markieren (s. Button "Als registriert markieren"), um anzuzeigen, dass dieser Artikel außerhalb von OJS an die DNB abgeliefert wurde, z.B. über das DNB Webformular.
		</p>',
  'plugins.importexport.dnb.deposited.success' => 'Die ausgewählten Artikel wurden abgeliefert!',
  'plugins.importexport.dnb.deposit' => 'Abliefern',
  'plugins.importexport.dnb.deposit.confirm' => 'Sie haben schon abgelieferte Artikel ausgewählt. Sind Sie sicher, dass Sie mit der Ablieferung fortfahren möchten?',
  'plugins.importexport.dnb.deposit.notice' => '<strong>Hinweis:</strong> Die Ablieferung kann lange dauern. Bitte wählen Sie wenige Artikel aus und haben Sie Geduld, nachdem Sie den "Abliefern"-Knopf gedrückt haben. Sie werden benachrichtigt werden, wenn der Prozess fertig ist.',
  'plugins.importexport.dnb.selectAll' => 'Alle auswählen',
  'plugins.importexport.dnb.deselectAll' => 'Alle abwählen',
  'plugins.importexport.dnb.export.error.articleCannotBeExported' => 'Der Artikel {$param} kann nicht exportiert werden, weil er keine lokale PDF- oder EPUB-Fahne hat.',
  'plugins.importexport.dnb.export.error.articleMetadataInvalidCharacters' => 'Die XML-Datei mit der Einreichungs-ID {$param} Es wurden keine Artikel exportiert!',
  'plugins.importexport.dnb.export.error.articleMetadataInvalidCharacters.param' => '{$submissionId} konnte nicht erstellt werden. Ein Feld enthält enhält Zeichen die in der XML 1.0 Spezifikation nicht erlaubt sind: "{$node}".',
  'plugins.importexport.dnb.export.error.outputFileNotWritable' => 'Die Ausgabedatei {$param} ist nicht schreibbar.',
  'plugins.importexport.dnb.deposit.error.noObjectsSelected' => 'You have to select at least one object for export.',
  'plugins.importexport.dnb.deposit.error.fileUploadFailed' => 'Das Hochladen per SFTP ist fehlgeschlagen: {$param}.',
  'plugins.importexport.dnb.deposit.error.fileUploadFailed.param' => 'für die Paketdatei {$package} des Artikels {$articleId}: {$error}',
  'plugins.importexport.dnb.export.error.curlError' => 'Bei der Ausführung von curl ist ein Fehler aufgetreten: {$param}. Export abgebrochen!',
  'plugins.importexport.dnb.export.error.remoteGalleyContentTypeNotValid' => 'Der entfernte Server meldet den nicht akzeptierten Inhaltstyp: {$param}. Export aller Artikel abgebrochen!',
  'plugins.importexport.dnb.export.error.remoteFileMimeTypeNotValid' => 'Mime type der Galley mit der ID {$param} nicht akzeptiert. Export abgebrochen!',
  'plugins.importexport.dnb.export.error.urnSet' => 'Das DNB Export Plugin exportiert keine Artikel mit URNs auf Artikelebene. Bitte wenden Sie sich an die Deutsche Nationalbibliothek für mehr Informaitonen. ',
  'plugins.importexport.dnb.senderTask.name' => 'DNB automatic deposit task',
); ?>