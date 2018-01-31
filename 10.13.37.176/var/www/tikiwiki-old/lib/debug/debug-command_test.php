<?php
/** \file
 * $Header: /cvsroot/tikiwiki/tiki/lib/debug/debug-command_test.php,v 1.3.12.1 2008/02/21 19:10:04 marclaporte Exp $
 *
 * \brief Skeleton to quick startup of making new debugger command
 *
 * \author zaufi <zaufi@sendmail.ru>
 *
 */

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"],basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

require_once ('lib/debug/debugger-ext.php');

/**
 * \brief Just a test
 *
 * This skeleton can be used to quick make and test smth :)
 * It contain minimum to be a debugger command -- it is not
 * example of full functional command...
 *
 * Usual way to use this file:
 * 1. change smth
 * 2. play with result
 * 3. if results can be used by others goto 4 else goto 5
 * 4. rename file, add needed helpers(), cvs add, cvs ci, cvs up, goto 6
 * 5. rm file, cvs up
 * 6. if (have_another_idea() == true) goto 1
 *
 */
class DebuggerCommand_Test extends DebuggerCommand {
	/// \b Must have function to announce command name in debugger console
	function name() {
		return "test";
	}

	/// Execute command with given set of arguments. Must return string of result.
	function execute($params) {
		// NOTE: Don't forget to set result type! By default it is NO_RESULT.
		$this->set_result_type(TEXT_RESULT);

		return 'done';
	}
}

function dbg_command_factory_test() {
	return new DebuggerCommand_Test();
}

?>