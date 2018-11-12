<?php

namespace Easir\SDK\Model;

use Easir\SDK\Response;

class Lead extends Response
{
    /**
     * @var array
     */
    protected $collections = [
        'rejections' => 'rejection',
        'acceptions' => 'acception',
        'assignments' => 'assignment',
        'escalations' => 'escalation',
        'calls' => 'call',
        'revocations' => 'revocation',
    ];
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $company_id;
    /**
     * @var int
     */
    public $user_id;
    /**
     * @var int
     */
    public $team_id;
    /**
     * @var int
     */
    public $agency_team_id;
    /**
     * @var Team
     */
    public $team;
    /**
     * @var string
     */
    public $lead_type_id;
    /**
     * @var LeadType
     */
    public $lead_type;
    /**
     * @var bool
     */
    public $b2c;
    /**
     * @var string
     */
    public $interest;
    /**
     * @var string
     */
    public $lead_source;
    /**
     * @var string
     */
    public $lead_user;
    /**
     * @var array
     */
    public $lead_data;
    /**
     * @var string
     */
    public $status;
    /**
     * @var Rejection[]
     */
    public $rejections;
    /**
     * @var Acception[]
     */
    public $acceptions;
    /**
     * @var Assignment[]
     */
    public $assignments;
    /**
     * @var Escalation[]
     */
    public $escalations;
    /**
     * @var Call[]
     */
    public $calls;
    /**
     * @var Revocation[]
     */
    public $revocations;
    /**
     * @var string
     */
    public $case_id;
    /**
     * @var OriginalAccount
     */
    public $original_account;
    /**
     * @var string
     */
    public $account_id;
    /**
     * @var Account
     */
    public $account;
    /**
     * @var OriginalContact
     */
    public $original_contact;
    /**
     * @var string
     */
    public $contact_id;
    /**
     * @var Contact
     */
    public $contact;
    /**
     * @var string
     */
    public $expires_at;
    /**
     * @var int
     */
    public $external_weight;
    /**
     * @var string
     */
    public $created_at;
    /**
     * @var string
     */
    public $updated_at;
}
