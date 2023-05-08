# shadowcodex/slack-spec

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/shadowcodex-php.git"
        }
    ],
    "require": {
        "shadowcodex/slack-spec": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \shadowcodex\slackspec\SlackSpec;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveRequest;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveApplicationJSON;
use \shadowcodex\slackspec\Models\Operations\AdminAppsApproveSecurity;

$sdk = SlackSpec::builder()
    ->build();

try {
    $request = new AdminAppsApproveRequest();
    $request->requestBody = new AdminAppsApproveApplicationJSON();
    $request->requestBody->appId = 'corrupti';
    $request->requestBody->requestId = 'provident';
    $request->requestBody->teamId = 'distinctio';
    $request->token = 'quibusdam';

    $requestSecurity = new AdminAppsApproveSecurity();
    $requestSecurity->slackAuth = 'Bearer YOUR_ACCESS_TOKEN_HERE';

    $response = $sdk->admin->adminAppsApprove($request, $requestSecurity);

    if ($response->defaultSuccessTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [admin](docs/admin/README.md)

* [adminAppsApprove](docs/admin/README.md#adminappsapprove) - Approve an app for installation on a workspace.
* [adminAppsApprovedList](docs/admin/README.md#adminappsapprovedlist) - List approved apps for an org or workspace.
* [adminAppsRequestsList](docs/admin/README.md#adminappsrequestslist) - List app requests for a team/workspace.
* [adminAppsRestrict](docs/admin/README.md#adminappsrestrict) - Restrict an app for installation on a workspace.
* [adminAppsRestrictedList](docs/admin/README.md#adminappsrestrictedlist) - List restricted apps for an org or workspace.
* [adminConversationsArchive](docs/admin/README.md#adminconversationsarchive) - Archive a public or private channel.
* [adminConversationsConvertToPrivate](docs/admin/README.md#adminconversationsconverttoprivate) - Convert a public channel to a private channel.
* [adminConversationsCreate](docs/admin/README.md#adminconversationscreate) - Create a public or private channel-based conversation.
* [adminConversationsDelete](docs/admin/README.md#adminconversationsdelete) - Delete a public or private channel.
* [adminConversationsDisconnectShared](docs/admin/README.md#adminconversationsdisconnectshared) - Disconnect a connected channel from one or more workspaces.
* [adminConversationsEkmListOriginalConnectedChannelInfo](docs/admin/README.md#adminconversationsekmlistoriginalconnectedchannelinfo) - List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.
* [adminConversationsGetConversationPrefs](docs/admin/README.md#adminconversationsgetconversationprefs) - Get conversation preferences for a public or private channel.
* [adminConversationsGetTeams](docs/admin/README.md#adminconversationsgetteams) - Get all the workspaces a given public or private channel is connected to within this Enterprise org.
* [adminConversationsInvite](docs/admin/README.md#adminconversationsinvite) - Invite a user to a public or private channel.
* [adminConversationsRename](docs/admin/README.md#adminconversationsrename) - Rename a public or private channel.
* [adminConversationsRestrictAccessAddGroup](docs/admin/README.md#adminconversationsrestrictaccessaddgroup) - Add an allowlist of IDP groups for accessing a channel
* [adminConversationsRestrictAccessListGroups](docs/admin/README.md#adminconversationsrestrictaccesslistgroups) - List all IDP Groups linked to a channel
* [adminConversationsRestrictAccessRemoveGroup](docs/admin/README.md#adminconversationsrestrictaccessremovegroup) - Remove a linked IDP group linked from a private channel
* [adminConversationsSearch](docs/admin/README.md#adminconversationssearch) - Search for public or private channels in an Enterprise organization.
* [adminConversationsSetConversationPrefs](docs/admin/README.md#adminconversationssetconversationprefs) - Set the posting permissions for a public or private channel.
* [adminConversationsSetTeams](docs/admin/README.md#adminconversationssetteams) - Set the workspaces in an Enterprise grid org that connect to a public or private channel.
* [adminConversationsUnarchive](docs/admin/README.md#adminconversationsunarchive) - Unarchive a public or private channel.
* [adminEmojiAdd](docs/admin/README.md#adminemojiadd) - Add an emoji.
* [adminEmojiAddAlias](docs/admin/README.md#adminemojiaddalias) - Add an emoji alias.
* [adminEmojiList](docs/admin/README.md#adminemojilist) - List emoji for an Enterprise Grid organization.
* [adminEmojiRemove](docs/admin/README.md#adminemojiremove) - Remove an emoji across an Enterprise Grid organization
* [adminEmojiRename](docs/admin/README.md#adminemojirename) - Rename an emoji.
* [adminInviteRequestsApprove](docs/admin/README.md#admininviterequestsapprove) - Approve a workspace invite request.
* [adminInviteRequestsApprovedList](docs/admin/README.md#admininviterequestsapprovedlist) - List all approved workspace invite requests.
* [adminInviteRequestsDeniedList](docs/admin/README.md#admininviterequestsdeniedlist) - List all denied workspace invite requests.
* [adminInviteRequestsDeny](docs/admin/README.md#admininviterequestsdeny) - Deny a workspace invite request.
* [adminInviteRequestsList](docs/admin/README.md#admininviterequestslist) - List all pending workspace invite requests.
* [adminTeamsAdminsList](docs/admin/README.md#adminteamsadminslist) - List all of the admins on a given workspace.
* [adminTeamsCreate](docs/admin/README.md#adminteamscreate) - Create an Enterprise team.
* [adminTeamsList](docs/admin/README.md#adminteamslist) - List all teams on an Enterprise organization
* [adminTeamsOwnersList](docs/admin/README.md#adminteamsownerslist) - List all of the owners on a given workspace.
* [adminTeamsSettingsInfo](docs/admin/README.md#adminteamssettingsinfo) - Fetch information about settings in a workspace
* [adminTeamsSettingsSetDefaultChannels](docs/admin/README.md#adminteamssettingssetdefaultchannels) - Set the default channels of a workspace.
* [adminTeamsSettingsSetDescription](docs/admin/README.md#adminteamssettingssetdescription) - Set the description of a given workspace.
* [adminTeamsSettingsSetDiscoverability](docs/admin/README.md#adminteamssettingssetdiscoverability) - An API method that allows admins to set the discoverability of a given workspace
* [adminTeamsSettingsSetIcon](docs/admin/README.md#adminteamssettingsseticon) - Sets the icon of a workspace.
* [adminTeamsSettingsSetName](docs/admin/README.md#adminteamssettingssetname) - Set the name of a given workspace.
* [adminUsergroupsAddChannels](docs/admin/README.md#adminusergroupsaddchannels) - Add one or more default channels to an IDP group.
* [adminUsergroupsAddTeams](docs/admin/README.md#adminusergroupsaddteams) - Associate one or more default workspaces with an organization-wide IDP group.
* [adminUsergroupsListChannels](docs/admin/README.md#adminusergroupslistchannels) - List the channels linked to an org-level IDP group (user group).
* [adminUsergroupsRemoveChannels](docs/admin/README.md#adminusergroupsremovechannels) - Remove one or more default channels from an org-level IDP group (user group).
* [adminUsersAssign](docs/admin/README.md#adminusersassign) - Add an Enterprise user to a workspace.
* [adminUsersInvite](docs/admin/README.md#adminusersinvite) - Invite a user to a workspace.
* [adminUsersList](docs/admin/README.md#adminuserslist) - List users on a workspace
* [adminUsersRemove](docs/admin/README.md#adminusersremove) - Remove a user from a workspace.
* [adminUsersSessionInvalidate](docs/admin/README.md#adminuserssessioninvalidate) - Invalidate a single session for a user by session_id
* [adminUsersSessionReset](docs/admin/README.md#adminuserssessionreset) - Wipes all valid sessions on all devices for a given user
* [adminUsersSetAdmin](docs/admin/README.md#adminuserssetadmin) - Set an existing guest, regular user, or owner to be an admin user.
* [adminUsersSetExpiration](docs/admin/README.md#adminuserssetexpiration) - Set an expiration for a guest user
* [adminUsersSetOwner](docs/admin/README.md#adminuserssetowner) - Set an existing guest, regular user, or admin user to be a workspace owner.
* [adminUsersSetRegular](docs/admin/README.md#adminuserssetregular) - Set an existing guest user, admin user, or owner to be a regular user.

### [adminApps](docs/adminapps/README.md)

* [adminAppsApprove](docs/adminapps/README.md#adminappsapprove) - Approve an app for installation on a workspace.
* [adminAppsRestrict](docs/adminapps/README.md#adminappsrestrict) - Restrict an app for installation on a workspace.

### [adminAppsApproved](docs/adminappsapproved/README.md)

* [adminAppsApprovedList](docs/adminappsapproved/README.md#adminappsapprovedlist) - List approved apps for an org or workspace.

### [adminAppsRequests](docs/adminappsrequests/README.md)

* [adminAppsRequestsList](docs/adminappsrequests/README.md#adminappsrequestslist) - List app requests for a team/workspace.

### [adminAppsRestricted](docs/adminappsrestricted/README.md)

* [adminAppsRestrictedList](docs/adminappsrestricted/README.md#adminappsrestrictedlist) - List restricted apps for an org or workspace.

### [adminConversations](docs/adminconversations/README.md)

* [adminConversationsArchive](docs/adminconversations/README.md#adminconversationsarchive) - Archive a public or private channel.
* [adminConversationsConvertToPrivate](docs/adminconversations/README.md#adminconversationsconverttoprivate) - Convert a public channel to a private channel.
* [adminConversationsCreate](docs/adminconversations/README.md#adminconversationscreate) - Create a public or private channel-based conversation.
* [adminConversationsDelete](docs/adminconversations/README.md#adminconversationsdelete) - Delete a public or private channel.
* [adminConversationsDisconnectShared](docs/adminconversations/README.md#adminconversationsdisconnectshared) - Disconnect a connected channel from one or more workspaces.
* [adminConversationsGetConversationPrefs](docs/adminconversations/README.md#adminconversationsgetconversationprefs) - Get conversation preferences for a public or private channel.
* [adminConversationsGetTeams](docs/adminconversations/README.md#adminconversationsgetteams) - Get all the workspaces a given public or private channel is connected to within this Enterprise org.
* [adminConversationsInvite](docs/adminconversations/README.md#adminconversationsinvite) - Invite a user to a public or private channel.
* [adminConversationsRename](docs/adminconversations/README.md#adminconversationsrename) - Rename a public or private channel.
* [adminConversationsSearch](docs/adminconversations/README.md#adminconversationssearch) - Search for public or private channels in an Enterprise organization.
* [adminConversationsSetConversationPrefs](docs/adminconversations/README.md#adminconversationssetconversationprefs) - Set the posting permissions for a public or private channel.
* [adminConversationsSetTeams](docs/adminconversations/README.md#adminconversationssetteams) - Set the workspaces in an Enterprise grid org that connect to a public or private channel.
* [adminConversationsUnarchive](docs/adminconversations/README.md#adminconversationsunarchive) - Unarchive a public or private channel.

### [adminConversationsEkm](docs/adminconversationsekm/README.md)

* [adminConversationsEkmListOriginalConnectedChannelInfo](docs/adminconversationsekm/README.md#adminconversationsekmlistoriginalconnectedchannelinfo) - List all disconnected channels—i.e., channels that were once connected to other workspaces and then disconnected—and the corresponding original channel IDs for key revocation with EKM.

### [adminConversationsRestrictAccess](docs/adminconversationsrestrictaccess/README.md)

* [adminConversationsRestrictAccessAddGroup](docs/adminconversationsrestrictaccess/README.md#adminconversationsrestrictaccessaddgroup) - Add an allowlist of IDP groups for accessing a channel
* [adminConversationsRestrictAccessListGroups](docs/adminconversationsrestrictaccess/README.md#adminconversationsrestrictaccesslistgroups) - List all IDP Groups linked to a channel
* [adminConversationsRestrictAccessRemoveGroup](docs/adminconversationsrestrictaccess/README.md#adminconversationsrestrictaccessremovegroup) - Remove a linked IDP group linked from a private channel

### [adminEmoji](docs/adminemoji/README.md)

* [adminEmojiAdd](docs/adminemoji/README.md#adminemojiadd) - Add an emoji.
* [adminEmojiAddAlias](docs/adminemoji/README.md#adminemojiaddalias) - Add an emoji alias.
* [adminEmojiList](docs/adminemoji/README.md#adminemojilist) - List emoji for an Enterprise Grid organization.
* [adminEmojiRemove](docs/adminemoji/README.md#adminemojiremove) - Remove an emoji across an Enterprise Grid organization
* [adminEmojiRename](docs/adminemoji/README.md#adminemojirename) - Rename an emoji.

### [adminInviteRequests](docs/admininviterequests/README.md)

* [adminInviteRequestsApprove](docs/admininviterequests/README.md#admininviterequestsapprove) - Approve a workspace invite request.
* [adminInviteRequestsDeny](docs/admininviterequests/README.md#admininviterequestsdeny) - Deny a workspace invite request.
* [adminInviteRequestsList](docs/admininviterequests/README.md#admininviterequestslist) - List all pending workspace invite requests.

### [adminInviteRequestsApproved](docs/admininviterequestsapproved/README.md)

* [adminInviteRequestsApprovedList](docs/admininviterequestsapproved/README.md#admininviterequestsapprovedlist) - List all approved workspace invite requests.

### [adminInviteRequestsDenied](docs/admininviterequestsdenied/README.md)

* [adminInviteRequestsDeniedList](docs/admininviterequestsdenied/README.md#admininviterequestsdeniedlist) - List all denied workspace invite requests.

### [adminTeams](docs/adminteams/README.md)

* [adminTeamsCreate](docs/adminteams/README.md#adminteamscreate) - Create an Enterprise team.
* [adminTeamsList](docs/adminteams/README.md#adminteamslist) - List all teams on an Enterprise organization

### [adminTeamsAdmins](docs/adminteamsadmins/README.md)

* [adminTeamsAdminsList](docs/adminteamsadmins/README.md#adminteamsadminslist) - List all of the admins on a given workspace.

### [adminTeamsOwners](docs/adminteamsowners/README.md)

* [adminTeamsOwnersList](docs/adminteamsowners/README.md#adminteamsownerslist) - List all of the owners on a given workspace.

### [adminTeamsSettings](docs/adminteamssettings/README.md)

* [adminTeamsSettingsInfo](docs/adminteamssettings/README.md#adminteamssettingsinfo) - Fetch information about settings in a workspace
* [adminTeamsSettingsSetDefaultChannels](docs/adminteamssettings/README.md#adminteamssettingssetdefaultchannels) - Set the default channels of a workspace.
* [adminTeamsSettingsSetDescription](docs/adminteamssettings/README.md#adminteamssettingssetdescription) - Set the description of a given workspace.
* [adminTeamsSettingsSetDiscoverability](docs/adminteamssettings/README.md#adminteamssettingssetdiscoverability) - An API method that allows admins to set the discoverability of a given workspace
* [adminTeamsSettingsSetIcon](docs/adminteamssettings/README.md#adminteamssettingsseticon) - Sets the icon of a workspace.
* [adminTeamsSettingsSetName](docs/adminteamssettings/README.md#adminteamssettingssetname) - Set the name of a given workspace.

### [adminUsergroups](docs/adminusergroups/README.md)

* [adminUsergroupsAddChannels](docs/adminusergroups/README.md#adminusergroupsaddchannels) - Add one or more default channels to an IDP group.
* [adminUsergroupsAddTeams](docs/adminusergroups/README.md#adminusergroupsaddteams) - Associate one or more default workspaces with an organization-wide IDP group.
* [adminUsergroupsListChannels](docs/adminusergroups/README.md#adminusergroupslistchannels) - List the channels linked to an org-level IDP group (user group).
* [adminUsergroupsRemoveChannels](docs/adminusergroups/README.md#adminusergroupsremovechannels) - Remove one or more default channels from an org-level IDP group (user group).

### [adminUsers](docs/adminusers/README.md)

* [adminUsersAssign](docs/adminusers/README.md#adminusersassign) - Add an Enterprise user to a workspace.
* [adminUsersInvite](docs/adminusers/README.md#adminusersinvite) - Invite a user to a workspace.
* [adminUsersList](docs/adminusers/README.md#adminuserslist) - List users on a workspace
* [adminUsersRemove](docs/adminusers/README.md#adminusersremove) - Remove a user from a workspace.
* [adminUsersSetAdmin](docs/adminusers/README.md#adminuserssetadmin) - Set an existing guest, regular user, or owner to be an admin user.
* [adminUsersSetExpiration](docs/adminusers/README.md#adminuserssetexpiration) - Set an expiration for a guest user
* [adminUsersSetOwner](docs/adminusers/README.md#adminuserssetowner) - Set an existing guest, regular user, or admin user to be a workspace owner.
* [adminUsersSetRegular](docs/adminusers/README.md#adminuserssetregular) - Set an existing guest user, admin user, or owner to be a regular user.

### [adminUsersSession](docs/adminuserssession/README.md)

* [adminUsersSessionInvalidate](docs/adminuserssession/README.md#adminuserssessioninvalidate) - Invalidate a single session for a user by session_id
* [adminUsersSessionReset](docs/adminuserssession/README.md#adminuserssessionreset) - Wipes all valid sessions on all devices for a given user

### [api](docs/api/README.md)

* [apiTest](docs/api/README.md#apitest) - Checks API calling code.

### [apps](docs/apps/README.md)

* [appsEventAuthorizationsList](docs/apps/README.md#appseventauthorizationslist) - Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.
* [appsPermissionsInfo](docs/apps/README.md#appspermissionsinfo) - Returns list of permissions this app has on a team.
* [appsPermissionsRequest](docs/apps/README.md#appspermissionsrequest) - Allows an app to request additional scopes
* [appsPermissionsResourcesList](docs/apps/README.md#appspermissionsresourceslist) - Returns list of resource grants this app has on a team.
* [appsPermissionsScopesList](docs/apps/README.md#appspermissionsscopeslist) - Returns list of scopes this app has on a team.
* [appsUninstall](docs/apps/README.md#appsuninstall) - Uninstalls your app from a workspace.

### [appsEventAuthorizations](docs/appseventauthorizations/README.md)

* [appsEventAuthorizationsList](docs/appseventauthorizations/README.md#appseventauthorizationslist) - Get a list of authorizations for the given event context. Each authorization represents an app installation that the event is visible to.

### [appsPermissions](docs/appspermissions/README.md)

* [appsPermissionsInfo](docs/appspermissions/README.md#appspermissionsinfo) - Returns list of permissions this app has on a team.
* [appsPermissionsRequest](docs/appspermissions/README.md#appspermissionsrequest) - Allows an app to request additional scopes

### [appsPermissionsResources](docs/appspermissionsresources/README.md)

* [appsPermissionsResourcesList](docs/appspermissionsresources/README.md#appspermissionsresourceslist) - Returns list of resource grants this app has on a team.

### [appsPermissionsScopes](docs/appspermissionsscopes/README.md)

* [appsPermissionsScopesList](docs/appspermissionsscopes/README.md#appspermissionsscopeslist) - Returns list of scopes this app has on a team.

### [auth](docs/auth/README.md)

* [authRevoke](docs/auth/README.md#authrevoke) - Revokes a token.
* [authTest](docs/auth/README.md#authtest) - Checks authentication & identity.

### [bots](docs/bots/README.md)

* [botsInfo](docs/bots/README.md#botsinfo) - Gets information about a bot user.

### [calls](docs/calls/README.md)

* [callsAdd](docs/calls/README.md#callsadd) - Registers a new Call.
* [callsEnd](docs/calls/README.md#callsend) - Ends a Call.
* [callsInfo](docs/calls/README.md#callsinfo) - Returns information about a Call.
* [callsParticipantsAdd](docs/calls/README.md#callsparticipantsadd) - Registers new participants added to a Call.
* [callsParticipantsRemove](docs/calls/README.md#callsparticipantsremove) - Registers participants removed from a Call.
* [callsUpdate](docs/calls/README.md#callsupdate) - Updates information about a Call.

### [callsParticipants](docs/callsparticipants/README.md)

* [callsParticipantsAdd](docs/callsparticipants/README.md#callsparticipantsadd) - Registers new participants added to a Call.
* [callsParticipantsRemove](docs/callsparticipants/README.md#callsparticipantsremove) - Registers participants removed from a Call.

### [chat](docs/chat/README.md)

* [chatDelete](docs/chat/README.md#chatdelete) - Deletes a message.
* [chatDeleteScheduledMessage](docs/chat/README.md#chatdeletescheduledmessage) - Deletes a pending scheduled message from the queue.
* [chatGetPermalink](docs/chat/README.md#chatgetpermalink) - Retrieve a permalink URL for a specific extant message
* [chatMeMessage](docs/chat/README.md#chatmemessage) - Share a me message into a channel.
* [chatPostEphemeral](docs/chat/README.md#chatpostephemeral) - Sends an ephemeral message to a user in a channel.
* [chatPostMessage](docs/chat/README.md#chatpostmessage) - Sends a message to a channel.
* [chatScheduleMessage](docs/chat/README.md#chatschedulemessage) - Schedules a message to be sent to a channel.
* [chatScheduledMessagesList](docs/chat/README.md#chatscheduledmessageslist) - Returns a list of scheduled messages.
* [chatUnfurl](docs/chat/README.md#chatunfurl) - Provide custom unfurl behavior for user-posted URLs
* [chatUpdate](docs/chat/README.md#chatupdate) - Updates a message.

### [chatScheduledMessages](docs/chatscheduledmessages/README.md)

* [chatScheduledMessagesList](docs/chatscheduledmessages/README.md#chatscheduledmessageslist) - Returns a list of scheduled messages.

### [conversations](docs/conversations/README.md)

* [conversationsArchive](docs/conversations/README.md#conversationsarchive) - Archives a conversation.
* [conversationsClose](docs/conversations/README.md#conversationsclose) - Closes a direct message or multi-person direct message.
* [conversationsCreate](docs/conversations/README.md#conversationscreate) - Initiates a public or private channel-based conversation
* [conversationsHistory](docs/conversations/README.md#conversationshistory) - Fetches a conversation's history of messages and events.
* [conversationsInfo](docs/conversations/README.md#conversationsinfo) - Retrieve information about a conversation.
* [conversationsInvite](docs/conversations/README.md#conversationsinvite) - Invites users to a channel.
* [conversationsJoin](docs/conversations/README.md#conversationsjoin) - Joins an existing conversation.
* [conversationsKick](docs/conversations/README.md#conversationskick) - Removes a user from a conversation.
* [conversationsLeave](docs/conversations/README.md#conversationsleave) - Leaves a conversation.
* [conversationsList](docs/conversations/README.md#conversationslist) - Lists all channels in a Slack team.
* [conversationsMark](docs/conversations/README.md#conversationsmark) - Sets the read cursor in a channel.
* [conversationsMembers](docs/conversations/README.md#conversationsmembers) - Retrieve members of a conversation.
* [conversationsOpen](docs/conversations/README.md#conversationsopen) - Opens or resumes a direct message or multi-person direct message.
* [conversationsRename](docs/conversations/README.md#conversationsrename) - Renames a conversation.
* [conversationsReplies](docs/conversations/README.md#conversationsreplies) - Retrieve a thread of messages posted to a conversation
* [conversationsSetPurpose](docs/conversations/README.md#conversationssetpurpose) - Sets the purpose for a conversation.
* [conversationsSetTopic](docs/conversations/README.md#conversationssettopic) - Sets the topic for a conversation.
* [conversationsUnarchive](docs/conversations/README.md#conversationsunarchive) - Reverses conversation archival.

### [dialog](docs/dialog/README.md)

* [dialogOpen](docs/dialog/README.md#dialogopen) - Open a dialog with a user

### [dnd](docs/dnd/README.md)

* [dndEndDnd](docs/dnd/README.md#dndenddnd) - Ends the current user's Do Not Disturb session immediately.
* [dndEndSnooze](docs/dnd/README.md#dndendsnooze) - Ends the current user's snooze mode immediately.
* [dndInfo](docs/dnd/README.md#dndinfo) - Retrieves a user's current Do Not Disturb status.
* [dndSetSnooze](docs/dnd/README.md#dndsetsnooze) - Turns on Do Not Disturb mode for the current user, or changes its duration.
* [dndTeamInfo](docs/dnd/README.md#dndteaminfo) - Retrieves the Do Not Disturb status for up to 50 users on a team.

### [emoji](docs/emoji/README.md)

* [emojiList](docs/emoji/README.md#emojilist) - Lists custom emoji for a team.

### [files](docs/files/README.md)

* [filesCommentsDelete](docs/files/README.md#filescommentsdelete) - Deletes an existing comment on a file.
* [filesDelete](docs/files/README.md#filesdelete) - Deletes a file.
* [filesInfo](docs/files/README.md#filesinfo) - Gets information about a file.
* [filesList](docs/files/README.md#fileslist) - List for a team, in a channel, or from a user with applied filters.
* [filesRemoteAdd](docs/files/README.md#filesremoteadd) - Adds a file from a remote service
* [filesRemoteInfo](docs/files/README.md#filesremoteinfo) - Retrieve information about a remote file added to Slack
* [filesRemoteList](docs/files/README.md#filesremotelist) - Retrieve information about a remote file added to Slack
* [filesRemoteRemove](docs/files/README.md#filesremoteremove) - Remove a remote file.
* [filesRemoteShare](docs/files/README.md#filesremoteshare) - Share a remote file into a channel.
* [filesRemoteUpdate](docs/files/README.md#filesremoteupdate) - Updates an existing remote file.
* [filesRevokePublicURL](docs/files/README.md#filesrevokepublicurl) - Revokes public/external sharing access for a file
* [filesSharedPublicURL](docs/files/README.md#filessharedpublicurl) - Enables a file for public/external sharing.
* [filesUpload](docs/files/README.md#filesupload) - Uploads or creates a file.

### [filesComments](docs/filescomments/README.md)

* [filesCommentsDelete](docs/filescomments/README.md#filescommentsdelete) - Deletes an existing comment on a file.

### [filesRemote](docs/filesremote/README.md)

* [filesRemoteAdd](docs/filesremote/README.md#filesremoteadd) - Adds a file from a remote service
* [filesRemoteInfo](docs/filesremote/README.md#filesremoteinfo) - Retrieve information about a remote file added to Slack
* [filesRemoteList](docs/filesremote/README.md#filesremotelist) - Retrieve information about a remote file added to Slack
* [filesRemoteRemove](docs/filesremote/README.md#filesremoteremove) - Remove a remote file.
* [filesRemoteShare](docs/filesremote/README.md#filesremoteshare) - Share a remote file into a channel.
* [filesRemoteUpdate](docs/filesremote/README.md#filesremoteupdate) - Updates an existing remote file.

### [migration](docs/migration/README.md)

* [migrationExchange](docs/migration/README.md#migrationexchange) - For Enterprise Grid workspaces, map local user IDs to global user IDs

### [oauth](docs/oauth/README.md)

* [oauthAccess](docs/oauth/README.md#oauthaccess) - Exchanges a temporary OAuth verifier code for an access token.
* [oauthToken](docs/oauth/README.md#oauthtoken) - Exchanges a temporary OAuth verifier code for a workspace token.
* [oauthV2Access](docs/oauth/README.md#oauthv2access) - Exchanges a temporary OAuth verifier code for an access token.

### [oauthV2](docs/oauthv2/README.md)

* [oauthV2Access](docs/oauthv2/README.md#oauthv2access) - Exchanges a temporary OAuth verifier code for an access token.

### [pins](docs/pins/README.md)

* [pinsAdd](docs/pins/README.md#pinsadd) - Pins an item to a channel.
* [pinsList](docs/pins/README.md#pinslist) - Lists items pinned to a channel.
* [pinsRemove](docs/pins/README.md#pinsremove) - Un-pins an item from a channel.

### [reactions](docs/reactions/README.md)

* [reactionsAdd](docs/reactions/README.md#reactionsadd) - Adds a reaction to an item.
* [reactionsGet](docs/reactions/README.md#reactionsget) - Gets reactions for an item.
* [reactionsList](docs/reactions/README.md#reactionslist) - Lists reactions made by a user.
* [reactionsRemove](docs/reactions/README.md#reactionsremove) - Removes a reaction from an item.

### [reminders](docs/reminders/README.md)

* [remindersAdd](docs/reminders/README.md#remindersadd) - Creates a reminder.
* [remindersComplete](docs/reminders/README.md#reminderscomplete) - Marks a reminder as complete.
* [remindersDelete](docs/reminders/README.md#remindersdelete) - Deletes a reminder.
* [remindersInfo](docs/reminders/README.md#remindersinfo) - Gets information about a reminder.
* [remindersList](docs/reminders/README.md#reminderslist) - Lists all reminders created by or for a given user.

### [rtm](docs/rtm/README.md)

* [rtmConnect](docs/rtm/README.md#rtmconnect) - Starts a Real Time Messaging session.

### [search](docs/search/README.md)

* [searchMessages](docs/search/README.md#searchmessages) - Searches for messages matching a query.

### [stars](docs/stars/README.md)

* [starsAdd](docs/stars/README.md#starsadd) - Adds a star to an item.
* [starsList](docs/stars/README.md#starslist) - Lists stars for a user.
* [starsRemove](docs/stars/README.md#starsremove) - Removes a star from an item.

### [team](docs/team/README.md)

* [teamAccessLogs](docs/team/README.md#teamaccesslogs) - Gets the access logs for the current team.
* [teamBillableInfo](docs/team/README.md#teambillableinfo) - Gets billable users information for the current team.
* [teamInfo](docs/team/README.md#teaminfo) - Gets information about the current team.
* [teamIntegrationLogs](docs/team/README.md#teamintegrationlogs) - Gets the integration logs for the current team.
* [teamProfileGet](docs/team/README.md#teamprofileget) - Retrieve a team's profile.

### [teamProfile](docs/teamprofile/README.md)

* [teamProfileGet](docs/teamprofile/README.md#teamprofileget) - Retrieve a team's profile.

### [usergroups](docs/usergroups/README.md)

* [usergroupsCreate](docs/usergroups/README.md#usergroupscreate) - Create a User Group
* [usergroupsDisable](docs/usergroups/README.md#usergroupsdisable) - Disable an existing User Group
* [usergroupsEnable](docs/usergroups/README.md#usergroupsenable) - Enable a User Group
* [usergroupsList](docs/usergroups/README.md#usergroupslist) - List all User Groups for a team
* [usergroupsUpdate](docs/usergroups/README.md#usergroupsupdate) - Update an existing User Group
* [usergroupsUsersList](docs/usergroups/README.md#usergroupsuserslist) - List all users in a User Group
* [usergroupsUsersUpdate](docs/usergroups/README.md#usergroupsusersupdate) - Update the list of users for a User Group

### [usergroupsUsers](docs/usergroupsusers/README.md)

* [usergroupsUsersList](docs/usergroupsusers/README.md#usergroupsuserslist) - List all users in a User Group
* [usergroupsUsersUpdate](docs/usergroupsusers/README.md#usergroupsusersupdate) - Update the list of users for a User Group

### [users](docs/users/README.md)

* [usersConversations](docs/users/README.md#usersconversations) - List conversations the calling user may access.
* [usersDeletePhoto](docs/users/README.md#usersdeletephoto) - Delete the user profile photo
* [usersGetPresence](docs/users/README.md#usersgetpresence) - Gets user presence information.
* [usersIdentity](docs/users/README.md#usersidentity) - Get a user's identity.
* [usersInfo](docs/users/README.md#usersinfo) - Gets information about a user.
* [usersList](docs/users/README.md#userslist) - Lists all users in a Slack team.
* [usersLookupByEmail](docs/users/README.md#userslookupbyemail) - Find a user with an email address.
* [usersProfileGet](docs/users/README.md#usersprofileget) - Retrieves a user's profile information.
* [usersProfileSet](docs/users/README.md#usersprofileset) - Set the profile information for a user.
* [usersSetActive](docs/users/README.md#userssetactive) - Marked a user as active. Deprecated and non-functional.
* [usersSetPhoto](docs/users/README.md#userssetphoto) - Set the user profile photo
* [usersSetPresence](docs/users/README.md#userssetpresence) - Manually sets user presence.

### [usersProfile](docs/usersprofile/README.md)

* [usersProfileGet](docs/usersprofile/README.md#usersprofileget) - Retrieves a user's profile information.
* [usersProfileSet](docs/usersprofile/README.md#usersprofileset) - Set the profile information for a user.

### [views](docs/views/README.md)

* [viewsOpen](docs/views/README.md#viewsopen) - Open a view for a user.
* [viewsPublish](docs/views/README.md#viewspublish) - Publish a static view for a User.
* [viewsPush](docs/views/README.md#viewspush) - Push a view onto the stack of a root view.
* [viewsUpdate](docs/views/README.md#viewsupdate) - Update an existing view.

### [workflows](docs/workflows/README.md)

* [workflowsStepCompleted](docs/workflows/README.md#workflowsstepcompleted) - Indicate that an app's step in a workflow completed execution.
* [workflowsStepFailed](docs/workflows/README.md#workflowsstepfailed) - Indicate that an app's step in a workflow failed to execute.
* [workflowsUpdateStep](docs/workflows/README.md#workflowsupdatestep) - Update the configuration for a workflow extension step.
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
