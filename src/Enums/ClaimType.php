<?php

declare(strict_types=1);

enum ClaimType: string
{
    /**
     * The e-mail address of the user.
     */
    case ADFS_EMAIL_ADDRESS = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress';

    /**
     * The given name of the user.
     */
    case ADFS_GIVEN_NAME = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname';

    /**
     * The unique name of the user.
     */
    case ADFS_NAME = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name';

    /**
     * The user principal name (UPN) of the user.
     */
    case ADFS_UPN = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/upn';

    /**
     * The common name of the user.
     */
    case ADFS_COMMON_NAME = 'http://schemas.xmlsoap.org/claims/CommonName';

    /**
     * The e-mail address of the user when interoperating with AD FS 1.1 or AD FS 1.0.
     */
    case ADFS_AD_FS_1_X_EMAIL_ADDRESS = 'http://schemas.xmlsoap.org/claims/EmailAddress';

    /**
     * A group that the user is a member of.
     */
    case ADFS_GROUP = 'http://schemas.xmlsoap.org/claims/Group';

    /**
     * The UPN of the user when interoperating with AD FS 1.1 or AD FS 1.0.
     */
    case ADFS_AD_FS_1_X_UPN = 'http://schemas.xmlsoap.org/claims/UPN';

    /**
     * A role that the user has.
     */
    case ADFS_ROLE = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/role';

    /**
     * The surname of the user.
     */
    case ADFS_SURNAME = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname';

    /**
     * The private identifier of the user.
     */
    case ADFS_PPID = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/privatepersonalidentifier';

    /**
     * The SAML name identifier of the user.
     */
    case ADFS_NAME_IDENTIFIER = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/nameidentifier';

    /**
     * The method used to authenticate the user.
     */
    case ADFS_AUTHENTICATION_METHOD = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/authenticationmethod';

    /**
     * The deny-only group SID of the user.
     */
    case ADFS_DENY_ONLY_GROUP_SID = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/denyonlysid';

    /**
     * The deny-only primary SID of the user.
     */
    case ADFS_DENY_ONLY_PRIMARY_SID = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/denyonlyprimarysid';

    /**
     * The deny-only primary group SID of the user.
     */
    case ADFS_DENY_ONLY_PRIMARY_GROUP_SID = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/denyonlyprimarygroupsid';

    /**
     * The group SID of the user.
     */
    case ADFS_GROUP_SID = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/groupsid';

    /**
     * The primary group SID of the user.
     */
    case ADFS_PRIMARY_GROUP_SID = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/primarygroupsid';

    /**
     * The primary SID of the user.
     */
    case ADFS_PRIMARY_SID = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/primarysid';

    /**
     * The domain account name of the user in the form of <domain>\<user>.
     */
    case ADFS_WINDOWS_ACCOUNT_NAME = 'http://schemas.microsoft.com/ws/2008/06/identity/claims/windowsaccountname';

    /**
     * The employee ID of the user. (ADFS)
     */
    case ADFS_EMPLOYEE_ID = 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/employeeid';

    /**
     * The display name of the user.
     */
    case AAD_DISPLAY_NAME = 'http://schemas.microsoft.com/identity/claims/displayname';

    /**
     * The employee ID of the user. (Azure Active Directory)
     */
    case AAD_EMPLOYEE_ID = 'http://schemas.microsoft.com/identity/claims/employeeid';

    /**
     * The mobile number of the user.
     */
    case MOBILE_NUMBER = 'mobile_number';

    /**
     * The work number of the user.
     */
    case WORK_NUMBER = 'work_number';

    /**
     * The employee ID of the user.
     */
    case EMPLOYEE_ID = 'employee_id';

    /**
     * The department of the user.
     */
    case DEPARTMENT = 'department';

    /**
     * The job title of the user.
     */
    case JOB_TITLE = 'job_title';

    /**
     * The name of the realm the user is from.
     */
    case REALM_NAME = 'realmName';
}
