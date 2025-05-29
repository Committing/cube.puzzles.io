<?php

/*
 * [interactor.class.php]
 *     - is for switching between multiple settings and processes
 *     - 'thinking_face' is the one given on snoozing.com / cube.puzzles.io. The cube is bigger than one example.
 *         - $this->use_vectors = the colours to be used
 *         - $this->use_process = the function name which processes the colours
 *
 *
 *    Change the code however you like.
*/

require_once('defaults.php');
require_once('functions.php');
require_once('classes/interactor.class.php');
require_once('classes/groups.class.php');
require_once('classes/box_positions.class.php');
require_once('classes/box.class.php');
require_once('classes/vectors.class.php');


# initiate class
$i = new interactor();

$i->use_setup = isset($_POST['setup']) && ! empty($_POST['setup']) ? $_POST['setup'] : 'thinking_face';

$i->loadSetup();

# If _reset_ was clicked, load first frame
// $i->checkResetData();

# Load past loop's output for reiteration
$i->loadPreviousProcess();

# run the main interaction
$i->runProcesses();

# save output for next loop
$i->saveProcesses();

# output
$i->outputRepresentations();
exit;


