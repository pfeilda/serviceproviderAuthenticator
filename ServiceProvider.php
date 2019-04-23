<?php
/**
 * Copyright (C) 2018  Daniel Pfeil <daniel.pfeil@itpfeil.de
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

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
    public function isSessionExisting():bool;
    public function getField(string $fieldName):?string;
    public function getPrefixedField(string $fieldName, bool $useShortPrefix = true):?string;
}