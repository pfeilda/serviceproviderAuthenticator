<?php
namespace DanielPfeil\ServiceProviderAuthenticator;

interface ServiceProvider
{
    public function getApplicationID():?string;
    public function getSessionId():?string;
    public function getIdentityProvider():?string;
    public function getAuthenticationInstant():?string;
    public function getAuthenticationMethod():?string;
    public function getAuthenticationContextClass():?string;
    public function getSessionIndex():?string;
    public function getPrefix():?string;
    public function getCookieName():?string;
    public function isSessionExisting():?string;
    public function getField(string $fieldame):?string;
    public function getPrefixedField(string $fieldname, bool $useShortPrefix = true):?string;
}