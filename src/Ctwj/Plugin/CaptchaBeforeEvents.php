<?php

namespace Ctwj\Plugin;

final class CaptchaBeforeEvents {
	
	/**
	*	captcha.before 事件会在打印验证码之前抛出
	*/
	const CAPTCHA_BEFORE = 'captcha_before';

	/**
	*	captcha.before 事件会在打印验证码之后抛出
	*/
	const CAPTCHA_AFTER = 'captcha_after';

}
