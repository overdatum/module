<?php namespace Layla\Module\Types;

class MethodType {

	const CONSTRUCT   = 1;
	const DESTRUCT    = 2;
	const CALL        = 3;
	const CALLSTATIC  = 4;
	const GETTER      = 5;
	const SETTER      = 6;
	const ISSET       = 7;
	const UNSET       = 8;
	const SLEEP       = 9;
	const WAKEUP      = 10;
	const TOSTRING    = 11;
	const INVOKE      = 12;
	const SETSTATE    = 13;
	const DUPLICATE   = 14;

}
