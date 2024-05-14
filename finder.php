<?php

return \StubsGenerator\Finder::create()
    ->in( array( 'source/wpforms-lite' ) )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/wpforms-lite'])
            ->files()
            ->depth('< 1')
            ->path('wpforms.php')
    )
    ->notPath('includes/class-db.php')
    ->notPath('includes/class-form.php')
    ->notPath('includes/class-field.php')
    ->notPath('includes/class-process.php')
    ->notPath('includes/admin/class-settings.php')
    ->notPath('includes/functions/checks.php')
    ->notPath('includes/functions/filesystem-media.php')
    ->notPath('includes/functions/payments.php')
    ->notPath('includes/functions/plugins.php')
    ->notPath('includes/admin/settings-api.php')
    ->notPath('src/ErrorHandler.php')
    ->notPath('includes/admin/builder')
    ->notPath('src/Admin')
    ->notPath('src/Db')
    ->notPath('src/Emails')
    ->notPath('src/Forms')
    ->notPath('src/Frontend')
    ->notPath('src/Helpers')
    ->notPath('src/Integrations')
    ->notPath('src/Lite/Admin')
    ->notPath('src/Lite/Emails')
    ->notPath('src/Lite/Integrations')
    ->notPath('src/Logger')
    ->notPath('src/Migrations')
    ->notPath('src/Providers')
    ->notPath('src/Requirements')
    ->notPath('src/SmartTags')
    ->notPath('src/Tasks')
    ->notPath('includes/templates')
    ->notPath('templates')
    ->notPath('vendor')
    ->notPath('vendor_prefixed')
    ->sortByName(true)
;
