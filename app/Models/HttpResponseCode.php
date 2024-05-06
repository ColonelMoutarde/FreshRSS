<?php
declare(strict_types=1);

class FreshRSS_HttpResponseCode {
	public const HTTP_100_CONTINUE = 100;
	public const HTTP_101_SWITCHING_PROTOCOLS = 101;
	public const HTTP_102_PROCESSING = 102;
	public const HTTP_103_EARLY_HINTS = 103;
	public const HTTP_200_OK = 200;
	public const HTTP_201_CREATED = 201;
	public const HTTP_202_ACCEPTED = 202;
	public const HTTP_203_NON_AUTHORITATIVE_INFORMATION = 203;
	public const HTTP_204_NO_CONTENT = 204;
	public const HTTP_205_RESET_CONTENT = 205;
	public const HTTP_206_PARTIAL_CONTENT = 206;
	public const HTTP_207_MULTI_STATUS = 207;
	public const HTTP_208_ALREADY_REPORTED = 208;
	public const HTTP_226_IM_USED = 226;
	public const HTTP_300_MULTIPLE_CHOICES = 300;
	public const HTTP_301_MOVED_PERMANENTLY = 301;
	public const HTTP_302_FOUND = 302;
	public const HTTP_303_SEE_OTHER = 303;
	public const HTTP_304_NOT_MODIFIED = 304;
	public const HTTP_305_USE_PROXY = 305;
	public const HTTP_306_RESERVED = 306;
	public const HTTP_307_TEMPORARY_REDIRECT = 307;
	public const HTTP_308_PERMANENTLY_REDIRECT = 308;
	public const HTTP_400_BAD_REQUEST = 400;
	public const HTTP_401_UNAUTHORIZED = 401;
	public const HTTP_402_PAYMENT_REQUIRED = 402;
	public const HTTP_403_FORBIDDEN = 403;
	public const HTTP_404_NOT_FOUND = 404;
	public const HTTP_405_METHOD_NOT_ALLOWED = 405;
	public const HTTP_406_NOT_ACCEPTABLE = 406;
	public const HTTP_407_PROXY_AUTHENTICATION_REQUIRED = 407;
	public const HTTP_408_REQUEST_TIMEOUT = 408;
	public const HTTP_409_CONFLICT = 409;
	public const HTTP_410_GONE = 410;
	public const HTTP_411_LENGTH_REQUIRED = 411;
	public const HTTP_412_PRECONDITION_FAILED = 412;
	public const HTTP_413_REQUEST_ENTITY_TOO_LARGE = 413;
	public const HTTP_414_REQUEST_URI_TOO_LONG = 414;
	public const HTTP_415_UNSUPPORTED_MEDIA_TYPE = 415;
	public const HTTP_416_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
	public const HTTP_417_EXPECTATION_FAILED = 417;
	public const HTTP_418_I_AM_A_TEAPOT = 418;
	public const HTTP_421_MISDIRECTED_REQUEST = 421;
	public const HTTP_422_UNPROCESSABLE_ENTITY = 422;
	public const HTTP_423_LOCKED = 423;
	public const HTTP_424_FAILED_DEPENDENCY = 424;
	public const HTTP_425_TOO_EARLY = 425;
	public const HTTP_426_UPGRADE_REQUIRED = 426;
	public const HTTP_428_PRECONDITION_REQUIRED = 428;
	public const HTTP_429_TOO_MANY_REQUESTS = 429;
	public const HTTP_431_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
	public const HTTP_451_UNAVAILABLE_FOR_LEGAL_REASONS = 451;
	public const HTTP_500_INTERNAL_SERVER_ERROR = 500;
	public const HTTP_501_NOT_IMPLEMENTED = 501;
	public const HTTP_502_BAD_GATEWAY = 502;
	public const HTTP_503_SERVICE_UNAVAILABLE = 503;
	public const HTTP_504_GATEWAY_TIMEOUT = 504;
	public const HTTP_505_VERSION_NOT_SUPPORTED = 505;
	public const HTTP_506_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;
	public const HTTP_507_INSUFFICIENT_STORAGE = 507;
	public const HTTP_508_LOOP_DETECTED = 508;
	public const HTTP_510_NOT_EXTENDED = 510;
	public const HTTP_511_NETWORK_AUTHENTICATION_REQUIRED = 511;

	public const MESSAGE_100 = 'Continue';
	public const MESSAGE_101 = 'Switching Protocols';
	public const MESSAGE_102 = 'Processing';
	public const MESSAGE_103 = 'Early Hints';
	public const MESSAGE_200 = 'OK';
	public const MESSAGE_201 = 'Created';
	public const MESSAGE_202 = 'Accepted';
	public const MESSAGE_203 = 'Non-Authoritative Information';
	public const MESSAGE_204 = 'No Content';
	public const MESSAGE_205 = 'Reset Content';
	public const MESSAGE_206 = 'Partial Content';
	public const MESSAGE_207 = 'Multi-Status';
	public const MESSAGE_208 = 'Already Reported';
	public const MESSAGE_226 = 'IM Used';
	public const MESSAGE_300 = 'Multiple Choices';
	public const MESSAGE_301 = 'Moved Permanently';
	public const MESSAGE_302 = 'Found';
	public const MESSAGE_303 = 'See Other';
	public const MESSAGE_304 = 'Not Modified';
	public const MESSAGE_305 = 'Use Proxy';
	public const MESSAGE_307 = 'Temporary Redirect';
	public const MESSAGE_308 = 'Permanent Redirect';
	public const MESSAGE_400 = 'Bad Request';
	public const MESSAGE_401 = 'Unauthorized';
	public const MESSAGE_402 = 'Payment Required';
	public const MESSAGE_403 = 'Forbidden';
	public const MESSAGE_404 = 'Not Found';
	public const MESSAGE_405 = 'Method Not Allowed';
	public const MESSAGE_406 = 'Not Acceptable';
	public const MESSAGE_407 = 'Proxy Authentication Required';
	public const MESSAGE_408 = 'Request Timeout';
	public const MESSAGE_409 = 'Conflict';
	public const MESSAGE_410 = 'Gone';
	public const MESSAGE_411 = 'Length Required';
	public const MESSAGE_412 = 'Precondition Failed';
	public const MESSAGE_413 = 'Content Too Large';
	public const MESSAGE_414 = 'URI Too Long';
	public const MESSAGE_415 = 'Unsupported Media Type';
	public const MESSAGE_416 = 'Range Not Satisfiable';
	public const MESSAGE_417 = 'Expectation Failed';
	public const MESSAGE_418 = 'I\'m a teapot';
	public const MESSAGE_421 = 'Misdirected Request';
	public const MESSAGE_422 = 'Unprocessable Content';
	public const MESSAGE_423 = 'Locked';
	public const MESSAGE_424 = 'Failed Dependency';
	public const MESSAGE_425 = 'Too Early';
	public const MESSAGE_426 = 'Upgrade Required';
	public const MESSAGE_428 = 'Precondition Required';
	public const MESSAGE_429 = 'Too Many Requests';
	public const MESSAGE_431 = 'Request Header Fields Too Large';
	public const MESSAGE_451 = 'Unavailable For Legal Reasons';
	public const MESSAGE_500 = 'Internal Server Error';
	public const MESSAGE_501 = 'Not Implemented';
	public const MESSAGE_502 = 'Bad Gateway';
	public const MESSAGE_503 = 'Service Unavailable';
	public const MESSAGE_504 = 'Gateway Timeout';
	public const MESSAGE_505 = 'HTTP Version Not Supported';
	public const MESSAGE_506 = 'Variant Also Negotiates';
	public const MESSAGE_507 = 'Insufficient Storage';
	public const MESSAGE_508 = 'Loop Detected';
	public const MESSAGE_510 = 'Not Extended';
	public const MESSAGE_511 = 'Network Authentication Required';
}