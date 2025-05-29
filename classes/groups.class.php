<?php







class groups
{



    public $groups = [
        'hi' => [
            'c1' => [
                'color' => [127.5, 255, 127.5],
                'properties' => [
                    'conscious' => 'c',
                ]
            ],
            'c2' => [
                'color' => [127.5, 255, 127.5],
                'properties' => [
                    'conscious' => 'c',
                ]
            ],
            's1' => [
                'color' => [127.5, 0, 127.5],
                'properties' => [
                    'conscious' => 's',
                ]
            ],
            's2' => [
                'color' => [127.5, 0, 127.5],
                'properties' => [
                    'conscious' => 's',
                ]
            ],
        ],
        'thinking_face' => [
            'c1' => [
                'color' => [127.5, 255, 127.5],
            ],
            'c2' => [
                'color' => [127.5, 255, 127.5],
            ],
            's1' => [
                'color' => [127.5, 0, 127.5],
            ],
            's2' => [
                'color' => [127.5, 0, 127.5],
            ],
        ],
        'starting_line' => [
            'input1' => [
                'color' => [0, 0, 255],
            ],
            'input2' => [
                'color' => [0, 255, 255],
            ],
        ],











        # top face
        'me_0_1' => [ // conscious of v
            'corner' => [
                'color' => [255, 255, 255], # left brain # maybe nose?
            ],
            'face' => [
                'color' => [127.5, 255, 127.5], # right brain # maybe face?
            ],
            'edge' => [
                'color' => [127.5, 255, 255], # maybe brain?
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5], # mouth
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 1,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_0_2' => [
            'corner' => [
                'color' => [255, 255, 255],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'edge' => [
                'color' => [255, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 2,
            ]
        ],
        'me_0_3' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'edge' => [
                'color' => [127.5, 255, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 3,
                'use_center' => f,
            ]
        ],
        'me_0_4' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'edge' => [
                'color' => [0, 255, 127.5],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 4,
            ]
        ],
        'me_0_5' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [0, 255, 127.5],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 5,
            ]
        ],
        'me_0_6' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [127.5, 255, 255],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 6,
            ]
        ],
        'me_0_7' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [255, 255, 127.5],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 7,
            ]
        ],
        'me_0_8' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [127.5, 255, 0],
            ],
            'face' => [
                'color' => [127.5, 255, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'eye',
                'group_function' => 'me',
                'face_id' => 0,
                'external_interaction_id' => 'ss',
                'parent_group' => 0,
                'child_group' => 8,
            ]
        ],
        # left
        'me_1_1' => [
            'corner' => [
                'color' => [255, 255, 255],
            ],
            'edge' => [
                'color' => [255, 127.5, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 1,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_1_2' => [
            'corner' => [
                'color' => [255, 255, 255],
            ],
            'edge' => [
                'color' => [127.5, 255, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 2,
            ]
        ],
        'me_1_3' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [0, 127.5, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 3,
                'use_center' => f,
            ]
        ],
        'me_1_4' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [127.5, 0, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 4,
            ]
        ],
        'me_1_5' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [127.5, 255, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 5,
            ]
        ],
        'me_1_6' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [0, 127.5, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 6,
            ]
        ],
        'me_1_7' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [127.5, 0, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 7,
            ]
        ],
        'me_1_8' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [255, 127.5, 255],
            ],
            'face' => [
                'color' => [127.5, 127.5, 255],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'left_face',
                'group_function' => 'me',
                'face_id' => 1,
                'external_interaction_id' => 'c',
                'parent_group' => 1,
                'child_group' => 8,
            ]
        ],
        # other ear
        'me_2_1' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [255, 127.5, 0],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 1,
                'use_center' => f,
            ]
        ],
        'me_2_2' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [255, 0, 127.5],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 2,
            ]
        ],
        'me_2_3' => [
            'corner' => [
                'color' => [255, 255, 255],
            ],
            'edge' => [
                'color' => [255, 255, 127.5],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 3,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_2_4' => [
            'corner' => [
                'color' => [255, 255, 255],
            ],
            'edge' => [
                'color' => [255, 127.5, 255],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 4,
                'use_center' => f,
            ]
        ],
        'me_2_5' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [255, 127.5, 0],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 5,
            ]
        ],
        'me_2_6' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [255, 255, 127.5],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 6,
            ]
        ],
        'me_2_7' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [255, 0, 127.5],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 7,
            ]
        ],
        'me_2_8' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [255, 127.5, 255],
            ],
            'face' => [
                'color' => [255, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'left',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 2,
                'external_interaction_id' => 'ear2',
                'parent_group' => 2,
                'child_group' => 8,
            ]
        ],
        # ear
        'me_3_1' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [0, 127.5, 255],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 1,
                'use_center' => f,
            ]
        ],
        'me_3_2' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [0, 0, 127.5],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 2,
            ]
        ],
        'me_3_3' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'edge' => [
                'color' => [0, 255, 127.5],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 3,
            ]
        ],
        'me_3_4' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'edge' => [
                'color' => [0, 127.5, 0],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 4,
                'use_center' => f,
            ]
        ],
        'me_3_5' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [0, 127.5, 255],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 5,
            ]
        ],
        'me_3_6' => [
            'corner' => [
                'color' => [0, 255, 255],
            ],
            'edge' => [
                'color' => [0, 255, 127.5],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 6,
            ]
        ],
        'me_3_7' => [
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [0, 0, 127.5],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 7,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_3_8' => [
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [0, 127.5, 0],
            ],
            'face' => [
                'color' => [0, 127.5, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'ear',
                'group_function' => 'me',
                'face_id' => 3,
                'external_interaction_id' => 'ear',
                'parent_group' => 3,
                'child_group' => 8,
            ]
        ],
        # bottom face
        'me_4_1' => [ // subconscious of me
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [127.5, 0, 0],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 1,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_4_2' => [
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [0, 0, 127.5],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 2,
            ]
        ],
        'me_4_3' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [127.5, 0, 255],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 3,
                'use_center' => f,
            ]
        ],
        'me_4_4' => [
            'corner' => [
                'color' => [255, 0, 255],
            ],
            'edge' => [
                'color' => [255, 0, 127.5],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 4,
            ]
        ],
        'me_4_5' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [255, 0, 127.5],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 5,
            ]
        ],
        'me_4_6' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [127.5, 0, 0],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 6,
            ]
        ],
        'me_4_7' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [0, 0, 127.5],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 7,
            ]
        ],
        'me_4_8' => [
            'corner' => [
                'color' => [0, 0, 255],
            ],
            'edge' => [
                'color' => [127.5, 0, 255],
            ],
            'face' => [
                'color' => [127.5, 0, 127.5],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => 'mouth',
                'group_function' => 'me',
                'face_id' => 4,
                'external_interaction_id' => 'cs',
                'parent_group' => 4,
                'child_group' => 8,
            ]
        ],
        # right
        'me_5_1' => [
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [0, 127.5, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 1,
                'use_center' => true,
                'use_face' => true,
            ]
        ],
        'me_5_2' => [
            'corner' => [
                'color' => [0, 0, 0],
            ],
            'edge' => [
                'color' => [127.5, 0, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 2,
            ]
        ],
        'me_5_3' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [127.5, 255, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 3,
            ]
        ],
        'me_5_4' => [
            'corner' => [
                'color' => [255, 255, 0],
            ],
            'edge' => [
                'color' => [255, 127.5, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 4,
                'use_center' => f,
            ]
        ],
        'me_5_5' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'edge' => [
                'color' => [0, 127.5, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 5,
            ]
        ],
        'me_5_6' => [
            'corner' => [
                'color' => [0, 255, 0],
            ],
            'edge' => [
                'color' => [127.5, 255, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 6,
            ]
        ],
        'me_5_7' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [127.5, 0, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'right',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 7,
            ]
        ],
        'me_5_8' => [
            'corner' => [
                'color' => [255, 0, 0],
            ],
            'edge' => [
                'color' => [255, 127.5, 0],
            ],
            'face' => [
                'color' => [127.5, 127.5, 0],
            ],
            'center' => [
                'color' => [127.5, 127.5, 127.5],
            ],
            'properties' => [
                'group_representation' => 'right',
                'brain_side' => 'left',
                'cubeface' => '',
                'group_function' => 'me',
                'face_id' => 5,
                'external_interaction_id' => 's',
                'parent_group' => 5,
                'child_group' => 8,
            ]
        ],
    ];







}