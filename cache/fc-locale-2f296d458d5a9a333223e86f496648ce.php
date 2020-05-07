<?php return array (
  'plugins.generic.orcidProfile.displayName' => 'ORCID-Plugin',
  'plugins.generic.orcidProfile.description' => 'Ermöglicht das Importieren von Benutzerinformationen von ORCID.',
  'plugins.generic.orcidProfile.instructions' => 'Sie können dieses Formular vorbefüllen mit Informationen aus Ihrem ORCID-Datensatz. Geben Sie Ihre ORCID-iD oder eine E-Mail-Adresse an, die mit Ihrem ORCID-Datensatz verknüpft ist. Dann klicken Sie "Abschicken".',
  'plugins.generic.orcidProfile.noData' => 'Konnte keine ORCID-Informationen finden.',
  'plugins.generic.orcidProfile.emailOrOrcid' => 'E-Mail-Adresse oder ORCID-iD:',
  'plugins.generic.orcidProfile.manager.settings.title' => 'ORCID-API-Einstellungen',
  'plugins.generic.orcidProfile.manager.settings.hidden' => 'versteckt',
  'plugins.generic.orcidProfile.manager.settings.description' => 'Bitte den ORCID-API Zugang konfigurieren, um Informationen aus ORCID-Datensätzen in Nutzer- und Autoreprofile einlesen zu können und Veröffentlichungen in verknüpfte ORCID-Datensätze zu übertragen (nur ORCID Member).',
  'plugins.generic.orcidProfile.manager.settings.description.globallyconfigured' => 'Die ORCID-API wurde in der globalen Konfigurationsdatei konfiguriert.',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath' => 'ORCID-API',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.public' => 'Public',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.publicSandbox' => 'Public Sandbox',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.member' => 'Member',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.memberSandbox' => 'Member Sandbox',
  'plugins.generic.orcidProfile.manager.settings.orcidClientId' => 'ClientID',
  'plugins.generic.orcidProfile.manager.settings.orcidClientSecret' => 'Client Secret',
  'plugins.generic.orcidProfile.manager.settings.orcidScope' => 'Umfang des ORCID-API Zugriffs',
  'plugins.generic.orcidProfile.manager.settings.mailSectionTitle' => 'E-Mail Einstellungen',
  'plugins.generic.orcidProfile.manager.settings.logSectionTitle' => 'ORCID Anfragen protokollieren',
  'plugins.generic.orcidProfile.manager.settings.logLevel.help' => 'Wählen Sie die Art der Nachrichten die protokolliert werden sollen',
  'plugins.generic.orcidProfile.manager.settings.logLevel.error' => 'Fehler',
  'plugins.generic.orcidProfile.manager.settings.logLevel.all' => 'Alle',
  'plugins.generic.orcidProfile.author.accessDenied' => 'ORCID Zugriff abgelehnt',
  'plugins.generic.orcidProfile.author.accessTokenStored' => 'ORCID Zugriff genehmigt mit Berechtigung {$orcidAccessScope}, gültig bis',
  'plugins.generic.orcidProfile.author.requestAuthorization' => 'Sende E-Mail an Beiträger/in um ORCID Authorisierung anzufragen',
  'plugins.generic.orcidProfile.author.deleteORCID' => 'Lösche ORCID iD und Zugriffsberechtigung!',
  'plugins.generic.orcidProfile.author.orcidEmptyNotice' => 'Siehe unten zur Authentifizierung der ORCID iD',
  'plugins.generic.orcidProfile.author.unauthenticated' => 'ORCID iD nicht authentifiziert! Bitte Authorisierung anfragen.',
  'plugins.generic.orcidProfile.verify.title' => 'ORCID Authorisierung',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.success' => 'Die Einreichung wurde zu Ihrem ORCID-Datensatz hinzugefügt.',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.failure' => 'Die Einreichung konnte nicht zu ihrem ORCID-Datensatz hinzugefügt werden.',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.notpublished' => 'Die Einreichung wird bei Veröffentlichung zu ihrem ORCID-Datensatz hinzugefügt werden.',
  'plugins.generic.orcidProfile.verify.success' => 'Ihre ORCID-ID wurde verifiziert und die Einreichung erfolgreich mit Ihrer ORCID-ID verknüpft.',
  'plugins.generic.orcidProfile.verify.failure' => 'Ihre ORCID-ID konnte nicht verifiziert werden oder der Link ist nicht mehr gültig.',
  'plugins.generic.orcidProfile.verify.denied' => 'Sie haben den Zugriff auf Ihren ORCID-Datensatz abgelehnt.',
  'plugins.generic.orcidProfile.authFailure' => 'OJS konnte nicht mit ORCID kommunizieren.',
  'plugins.generic.orcidProfile.failure.contact' => 'Bitte kontaktieren Sie den/die Zeitschriftenverwalter/in und geben Sie Ihren Namen, ORCID-iD und Details zu der Einreichung an.',
  'plugins.generic.orcidProfile.fieldset' => 'ORCID',
  'plugins.generic.orcidProfile.connect' => 'ORCID iD anlegen und verknüpfen',
  'plugins.generic.orcidProfile.authorise' => 'ORCID iD authorisieren und verknüpfen',
  'plugins.generic.orcidProfile.about.title' => 'Was ist ORCID?',
  'plugins.generic.orcidProfile.about.orcidExplanation' => 'Dies ist eine kurze orcid beschreibung',
  'plugins.generic.orcidProfile.about.howAndWhy.title' => 'Wie und warum werden ORCID iDs gesammelt?',
  'plugins.generic.orcidProfile.about.howAndWhy' => 'This journal is collecting your ORCID iD so we can [add purpose and distinguish between Member API and Public API].
	When you click the “Authorize” button in the ORCID popup, we will ask you to share your iD using an authenticated process: either by <a href="https://support.orcid.org/hc/en-us/articles/360006897454">registering for an ORCID iD</a> or, if you already have one, <a href="https://support.orcid.org/hc/en-us/categories/360000661673">to sign into your ORCID account</a>, then granting us permission to get your ORCID iD. We do this to ensure that you are correctly identified and securely connecting your ORCID iD.<br>
	Learn more in <a href="https://orcid.org/blog/2017/02/20/whats-so-special-about-signing">What’s so special about signing in.</a>',
  'plugins.generic.orcidProfile.about.display.title' => 'Wo werden ORCID iDs angezeigt?',
  'plugins.generic.orcidProfile.about.display' => 'To acknowledge that you have used your iD and that it has been authenticated, we display the ORCID iD icon <img src="https://orcid.org/sites/default/files/images/orcid_16x16(1).gif" alt="iD icon" width="16" height="16" border="0"> alongside your name on the article page of your submission and on your public user profile.<br>
	Learn more in <a href="https://orcid.org/blog/2013/02/22/how-should-orcid-id-be-displayed">How should an ORCID iD be displayed.</a>',
); ?>