0.19.0
Added support for DELETE /accounts/:account_id/contacts/:contact_id
Added support for PUT /accounts/:account_id/contacts/:contact_id

0.18.0
Added support for PUT /accounts/:account_id/contacts/:contact_id/consent
Added support for GET /accounts/:account_id/contacts/:contact_id

0.17.0
Added support for GET /accounts/{account_id}
Added support for GET /accounts/{account_id}/cases

0.16.0
Changed Client to return unhandled/raw response
Added support for PUT /groups/{group_id}/teams/{team_id}
Added support for PUT /teams/{team_id}/users/{user_id}
Added support for POST /groups
Added support for DELETE /companies/{company_id}/users/{user_id}
Added support for DELETE /teams/{team_id}/users/{user_id}

0.15.0
Removed /Model/LeadData it did not map lead data correctly
Added more parameters for GET /accounts and renamed class
Added support for GET /accounts/{accountId}/contacts
Renamed field {id} to {company_id} in ListCompanyTeams classes 

0.14.0
Removed GET /companies
Added Level class for User

0.13.0
Added support for Attachments
Added support for POST /automated-communications
Added support for POST /templates
Added support for GET /filenamager/files/{file_id}
Added support for GET /automated-communications/{id}
Added support for GET /relations-paths/{id}
Added support for GET /templates/{id}

0.12.0
Added support for POST /fields/custom
Added support for POST /relations-paths
Added support for GET /automated-communications
Added support for GET /contacts
Added support for GET /lead-types
Added support for GET /roles
Added support for GET /teams
Added support for GET /templates


0.11.0
Added support for GET /relations-paths
Added support for GET /fields/account
Added support for GET /fields/b2c_account
Added support for GET /fields/contact
Added support for GET /fields/b2c_contact

0.10.2
Added support for PUT /accounts/{accountId}/contacts/{contactId}

0.10.1
Added account_id to CreateLead request model.

0.10.0
Added Plans

0.9.2
Fixed class name collision

0.9.1
Added support to update a lead

0.9.0
Added support for webhooks
Added partial support for leads

0.8.3
Removed support for some private APIs

0.8.2
Added support for internal models

0.8.1
Fixed bad class name

0.8.0
Added support for:
Create: Account, Activity, Case, Contact, Team, User
Get: Case
List: Accounts, Cases

0.7.0
Added support for GET /companies/{companyId}/teams
Added support for GET /teams/{teamId}

0.6.3
Added support for user_counts on GET /companies

0.6.2
Renamed GetAccessToken to GetAuthForUser to reflect the change in 0.6.1

0.6.1
GET /token/{userId} now uses the \Easir\SDK\Response\Auth response type

0.6.0
Added support for GET /me
Added support for GET /token/{userId}

0.5.0
Added support for GET /companies/{companyId}/users
Added support for GET /companies/{companyId}/users/{userId}
Bugfix: Fixed problem with created_at on Company response model

0.4.0
Added support for GET /companies
Added support for GET /companies/{companyId}

0.3.0
Added support for GET /localization-types/(users|companies) apis.
Added support for the 'refresh_token' grant type to GET /token.

0.2.0
Added support for the client_credentials and password grant types to GET /tokens.
Added support for POST /companies

0.1.0 (not tagged)