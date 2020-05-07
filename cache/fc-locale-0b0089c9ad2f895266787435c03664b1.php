<?php return array (
  'plugins.generic.backup.name' => 'Backup-Plugin',
  'plugins.generic.backup.description' => 'Dieses Plugin legt ein Backup der Installation an.',
  'plugins.generic.backup.link' => 'Backup herunterladen',
  'plugins.generic.backup.longdescription' => '<p>Die folgenden Links ermöglichen der/dem Website-Administrator/in, ein komplettes Backup der verschiedenen Komponenten einer Installation herunterzuladen. Ein komplettes Backup enthält <strong>alle</strong> der folgenden Komponenten. Bitte ziehen Sie technische Dokumentation zu Rate, wenn Sie sich darüber informieren möchten, wie diese Komponenten zusammenwirken.</p>',
  'plugins.generic.backup.db' => 'Datenbank',
  'plugins.generic.backup.files' => 'Dateien',
  'plugins.generic.backup.code' => 'Code',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong>ACHTUNG:</strong> Das "tar"-Tool wurde nicht in config.inc.php konfiguriert. Die Konfiguration hängt von Ihrer Server-Konfiguration ab. Sie sollte in einem Abschnitt namens [cli] enthalten sein, mit einer Option "tar", die den Pfad zum "tar"-Werkzeug enthält, z.B.:<br />
<pre>[cli]
tar = "/bin/tar"
</pre><br />',
  'plugins.generic.backup.failure' => '<strong>ACHTUNG:</strong> Eventuell ist ein Fehler während des Backup-Prozesses aufgetreten. Die wahrscheinlichste Ursache sind falsche Dateizugriffsrechte.',
); ?>