<?php

/**
 *   Copyright 2018 Vimeo.
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 */
declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => '6c1549f48663ae63a51ad62c2e80ed37949042b2',
            'client_secret' => 'dafs7u4rB7NVtcZs7aLzUlWthKKbNWlL9bmsUfgbD00fw7QYSo1p6IGPX3kZiZhDz4G2/OkYJz9bw8gZdfxcRbbOWrkYxkR85ix5gytvlluW+0zZY9Ata/Wfv3O+TyAi',
            'access_token' => 'adee6fb723ff51900705c423c2d9d804',
        ],

        'alternative' => [
            'client_id' => '6c1549f48663ae63a51ad62c2e80ed37949042b2',
            'client_secret' => 'dafs7u4rB7NVtcZs7aLzUlWthKKbNWlL9bmsUfgbD00fw7QYSo1p6IGPX3kZiZhDz4G2/OkYJz9bw8gZdfxcRbbOWrkYxkR85ix5gytvlluW+0zZY9Ata/Wfv3O+TyAi',
            'access_token' => 'e701185b38a0c0bfd98b78234ac2198e',
        ],

    ],

];
