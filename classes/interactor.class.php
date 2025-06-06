<?php




class interactor
{

    # Data for input positions
    public $previous_loop = [];

    # What settings to use
    public $use_setup = 'starting_line';

    # What colours to use ( Likely overridden in loadSetup() )
    public $use_vectors = 'starting_line';

    # What process to use for the vector
    public $use_process = 'interaction';

    public $disable_looping = false; # i.e. only load first frame
    public $duplicate_cube = false;
    public $show_wireframe = true;

    public $frame_count = 1;

    public $supported_vectors = [
        'starting_line',
        'thinking_face',
        'hi'
    ];



    public function __construct()
    {
        $this->v = new vectors();
    }




    // set in url ?setup=starting_line
    public function loadSetup()
    {



        switch ($this->use_setup) {



            case 'starting_line':
                $this->disable_looping = true;
                $this->use_vectors = 'starting_line';
                $this->use_process = 'process_starting_line';
                break;

            case 'thinking_face':
                $this->show_wireframe = true;
                $this->use_vectors = 'thinking_face';
                $this->use_process = 'process_thinking_face';
                break;

            case 'hi':
                $this->duplicate_cube = true;
                $this->show_wireframe = false;
                $this->use_vectors = 'hi';
                $this->use_process = 'process_hi';
                break;


            case 'test':
                $this->show_wireframe = false;
                $this->use_vectors = 'test';
                $this->use_process = 'process_test';
                break;





        }


        $this->v->loadVectors($this->use_vectors);

    }





    // public function checkResetData()
    // {
    //     if (isset($_POST['reset_data']) && $_POST['reset_data'] == 'true' || $this->disable_looping === true) {
    //         unset($_POST['loop_data']);
    //         $this->frame_count = 1;
    //     }
    // }


    public function loadPreviousProcess()
    {
        # override variables if looping (not first loop)
        if ( isset($_POST['loop_data']) && ! empty($_POST['loop_data']) ) {

            $this->v->previous_loop = $_POST['loop_data']['result'];

            $this->frame_count = $_POST['loop_data']['frame_count'] + 1;

        }
    }


    public function runProcesses()
    {
        $this->v->{$this->use_process}();
    }


    public function saveProcesses()
    {
        $this->result = $this->v->result;
    }


    public function outputRepresentations()
    {
        $output = [];

        $output['frame_count'] = $this->frame_count;

        $output['loop_data'] = [
            'frame_count' => $this->frame_count,
            'result' => $this->result,
        ];

        $output['box'] = $this->v->box;

        # Add this class' properties to the output
        $output['interactor_settings'] = [];
        foreach (get_class_vars(get_class($this)) as $prop => $_) {
            $output['interactor_settings'][$prop] = $this->$prop;
        }

        echo json_encode($output, JSON_PRETTY_PRINT);
    }


}