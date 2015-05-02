<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.9';

// Database
$Configuration['Database']['Name'] = 'TEDxUHasseltDB';
$Configuration['Database']['Host'] = 'eu-cdbr-azure-west-a.cloudapp.net';
$Configuration['Database']['User'] = 'b470115e9fa4cd';
$Configuration['Database']['Password'] = 'bff3b064';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'TEDxUHasselt Forum';
$Configuration['Garden']['Cookie']['Salt'] = 'VQNFDOZIOS';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'TEDxUHasselt Forum';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.9';
$Configuration['Garden']['RewriteUrls'] = FALSE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '11';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = '5CA8-801B6950-CF1FDE3C';
$Configuration['Garden']['InstallationSecret'] = '0598f133b2a160abaf422c7de08e4d33e9730757';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.9';

// Last edited by admin (84.192.197.69:3)2015-05-02 19:11:08