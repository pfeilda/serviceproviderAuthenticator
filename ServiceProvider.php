<?php

interface ServiceProvider
{
    public function getApplicationID():string;
    public function getSessionId():string;
    public function getIdentityProvider():string;
    public function getAuthenticationInstant():string;
    public function getAuthenticationMethod():string;
    public function getAuthentcationContext():string;
    public function getPrefix():string;
    public function getCookieName():string;
}