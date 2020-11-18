<?php
	/**
	 *
	 * Created by Wangqs
	 * Date: 2020/11/19 2:23 上午
	 */

	namespace Wangqs\Baidu_Npl\Libs;

	/**
	 *
	 * Created by Malcolm.
	 * Date: 2020/11/19  2:23 上午
	 */
	class AipSignOption
	{

		const EXPIRATION_IN_SECONDS = 'expirationInSeconds';

		const HEADERS_TO_SIGN = 'headersToSign';

		const TIMESTAMP = 'timestamp';

		const DEFAULT_EXPIRATION_IN_SECONDS = 1800;

		const MIN_EXPIRATION_IN_SECONDS = 300;

		const MAX_EXPIRATION_IN_SECONDS = 129600;

	}