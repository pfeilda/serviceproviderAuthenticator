<?php
namespace DanielPfeil\ServiceProviderAuthenticator;

interface ServiceProvider
{
    public function getApplicationID():string;
    public function getSessionId():string;
    public function getIdentityProvider():string;
    public function getAuthenticationInstant():string;
    public function getAuthenticationMethod():string;
    public function getAuthenticationContextClass():string;
    public function getSessionIndex();
    public function getPrefix():string;
    public function getCookieName():string;
}