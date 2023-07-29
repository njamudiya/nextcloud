<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Nitish Jamudiya <info@jamudiya.tech>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ADMgmt\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'admgmt';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
