<?php

class TemplatePayloadStub
{
    public function default()
    {
        return [
              "template_id" => 1,
               "medias" => [
                        [
                           "_id" => "646260ad324c9a95010f28c3",
                           "classification" => [
                              "name" => "Institucional",
                              "types" => [
                                 [
                                    "name" => "Área de Negócios",
                                    "items" => [
                                       "Pessoa Física"
                                    ]
                                 ],
                                 [
                                          "name" => "Segmento",
                                          "items" => [
                                             "Varejo"
                                          ]
                                       ],
                                 [
                                                "name" => "Direcionamento da Comunicação",
                                                "items" => [
                                                   "Comunicação Aberta"
                                                ]
                                             ],
                                 [
                                                      "name" => "Canal de veiculação",
                                                      "items" => [
                                                         "SMS"
                                                      ]
                                                   ]
                              ]
                           ],
                           "type" => [
                                                            "name" => "Notícia",
                                                            "data" => [
                                                               "title" => "Novo Hubble",
                                                               "short_description" => "Hubble daora",
                                                               "source" => [
                                                                  "id" => 4,
                                                                  "name" => "Suno Research",
                                                                  "file" => [
                                                                     "id" => 601,
                                                                     "original_name" => "3413168b-d5d9-4e46-8a5a-01f0c58515b4.jpeg",
                                                                     "extension" => "jpeg",
                                                                     "mime_type" => "image/jpeg",
                                                                     "url" => "https://uotz-radar-dev.s3.sa-east-1.amazonaws.com/uuid/fb620589-7410-4c3a-b90c-424bea65f1ee.jpeg?response-content-type=application%2Foctet-stream&response-content-disposition=attachment%3B%20filename%3D%223413168b-d5d9-4e46-8a5a-01f0c58515b4.jpeg%22&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUPELY5AVMIG3PIXJ%2F20230515%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230515T164055Z&X-Amz-SignedHeaders=host&X-Amz-Expires=1200&X-Amz-Signature=61b1cfdc84542d6362c0eeb744e6048c6c7ba140982620c7dad77a867804f750"
                                                                  ]
                                                               ],
                                                               "link" => "www.google.com"
                                                            ]
                                                         ],
                           "is_shared" => false,
                           "file" => [
                                                                        "original_name" => "f1f3b7b0-da5d-42ab-be6e-25e66c459246.",
                                                                        "path" => "uuid/f1f3b7b0-da5d-42ab-be6e-25e66c459246.",
                                                                        "size" => 113983,
                                                                        "extension" => "",
                                                                        "mime_type" => "image/png"
                                                                     ],
                           "clipping_category" => "OUTRAS NOTÍCIAS"
                        ]
                     ],
               "medias_count" => 1,
               "views" => 0
        ];
    }

    public function csc()
    {
        return  [
           "template_id" => 2,
           "_id" => [
                 "_id" => "646cc7e941c60bb11d0b9822"
           ],
           "csc" => [
                    "requirements" => '<p class="ql-align-justify"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p>',
                    "value" => "150.00",
                    "description" => '<p class="ql-align-justify">It is a long es<span style="background-color: rgb(0, 0, 0);">tablished fact that a reader will be</span> distracted by the readable conte<em style="color: rgb(230, 0, 0);">nt of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content h</em>ere, content here, making it look like readable English. Many <u>desktop publishing packages and web page editors now use Lorem Ipsum as their defau</u>lt model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,<strong> sometimes on purpose (injected humour and the like)</strong>.</p><p><br></p>'
           ],
           "dasd" => "dasdasdasd"
        ];
    }

    public function categorized()
    {
        return [
           "template_id" => 5,
           "_id" => [
                 "_id" => "64662627a01b3d9f7002be13"
              ],
           "medias" => [
                    [
                       "_id" => "646260ad324c9a95010f28c3",
                       "classification" => [
                          "name" => "Institucional",
                          "types" => [
                             [
                                "name" => "Área de Negócios",
                                "items" => [
                                   "Pessoa Física"
                                ]
                             ],
                             [
                                      "name" => "Segmento",
                                      "items" => [
                                         "Varejo"
                                      ]
                                   ],
                             [
                                            "name" => "Direcionamento da Comunicação",
                                            "items" => [
                                               "Comunicação Aberta"
                                            ]
                                         ],
                             [
                                                  "name" => "Canal de veiculação",
                                                  "items" => [
                                                     "SMS"
                                                  ]
                                               ]
                          ]
                       ],
                       "type" => [
                                                        "name" => "Notícia",
                                                        "data" => [
                                                           "title" => "Novo Hubble",
                                                           "short_description" => "Hubble daora",
                                                           "source" => [
                                                              "id" => 4,
                                                              "name" => "Suno Research",
                                                              "file" => [
                                                                 "id" => 601,
                                                                 "original_name" => "3413168b-d5d9-4e46-8a5a-01f0c58515b4.jpeg",
                                                                 "extension" => "jpeg",
                                                                 "mime_type" => "image/jpeg",
                                                                 "url" => "https://uotz-radar-dev.s3.sa-east-1.amazonaws.com/uuid/fb620589-7410-4c3a-b90c-424bea65f1ee.jpeg?response-content-type=application%2Foctet-stream&response-content-disposition=attachment%3B%20filename%3D%223413168b-d5d9-4e46-8a5a-01f0c58515b4.jpeg%22&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUPELY5AVMIG3PIXJ%2F20230515%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230515T164055Z&X-Amz-SignedHeaders=host&X-Amz-Expires=1200&X-Amz-Signature=61b1cfdc84542d6362c0eeb744e6048c6c7ba140982620c7dad77a867804f750"
                                                              ]
                                                           ],
                                                           "link" => "www.google.com"
                                                        ]
                                                     ],
                       "is_shared" => false,
                       "file" => [
                                                                    "original_name" => "f1f3b7b0-da5d-42ab-be6e-25e66c459246.",
                                                                    "path" => "uuid/f1f3b7b0-da5d-42ab-be6e-25e66c459246.",
                                                                    "size" => 113983,
                                                                    "extension" => "",
                                                                    "mime_type" => "image/png"
                                                                 ],
                       "clipping_category" => "OUTRAS NOTÍCIAS"
                    ]
                 ],
           "medias_count" => 1,
           "views" => 0,
           "template_id" => 2,
        ];
    }

    public function descriptive()
    {
        return [
            "template_id" => 3,
           "_id" => [
                 "id" => "6475008aad5f49f0180c0633"
              ],
           "data" => [
                    [
                       "name" => "Destaques desta edição",
                       "articles" => [
                          [
                             "title" => "What is Lorem Ipsum?",
                             "description" => '<p class="ql-align-justify"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic t<span style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);">ypesetting, remaining essentially unchanged. </span>It was popularised in the 1960s with the release<u> of Letraset sheets containing </u>Lorem Ipsum passages, and more recently with desk<em>top publishing software </em>like Aldus PageMaker inclu<strong>ding versions of Lorem Ipsum.</strong></p><p><br></p>'
                          ]
                       ]
                    ]
                 ],
           "attachments" => [
                                "clippings/attachments/teste-com-js.pdf"
                             ]
        ];
    }

    public function text()
    {
        return [
           "template_id" => 4,
           "_id" => [
                 "id" => "6475008aad5f49f0180c0633"
              ],
           "data" => [
                    [
                       "name" => "Destaques desta edição",
                       "articles" => [
                          [
                             "title" => "What is Lorem Ipsum?",
                             "description" => '<p class="ql-align-justify"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic t<span style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);">ypesetting, remaining essentially unchanged. </span>It was popularised in the 1960s with the release<u> of Letraset sheets containing </u>Lorem Ipsum passages, and more recently with desk<em>top publishing software </em>like Aldus PageMaker inclu<strong>ding versions of Lorem Ipsum.</strong></p><p><br></p>'
                          ]
                       ]
                    ]
                 ],
           "attachments" => [
                                "clippings/attachments/teste-com-js.pdf"
                             ]
        ];
    }

    public function alwaysOn()
    {
        return [
               "template_id" => 6,
               "_id" => [
                     "id" => "64b04fc903f49db831097096"
                  ],
               "data" => [
                        "pages" => [
                           [
                              "main" => "true",
                              "medias" => [
                                 [
                                    "title" => "Novo Hubble",
                                    "description" => "<p>Hubble daora</p>",
                                    "id" => "646260ad324c9a95010f28c3",
                                    "file" => "https://uotz-radar-dev.s3.sa-east-1.amazonaws.com/uuid/f1f3b7b0-da5d-42ab-be6e-25e66c459246.?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUPELY5AVMIG3PIXJ%2F20230713%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230713T192510Z&X-Amz-SignedHeaders=host&X-Amz-Expires=600&X-Amz-Signature=c1003975db9271d9a8645afdbf9106b4fdddaeba7b976120ba1bafa437df308b",
                                    "main" => "false"
                                 ],
                                 [
                                       "title" => "Novo Hubble",
                                       "description" => "<p>Hubble daora</p>",
                                       "id" => "646260ad324c9a95010f28c3",
                                       "file" => "https://uotz-radar-dev.s3.sa-east-1.amazonaws.com/uuid/f1f3b7b0-da5d-42ab-be6e-25e66c459246.?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUPELY5AVMIG3PIXJ%2F20230713%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230713T192510Z&X-Amz-SignedHeaders=host&X-Amz-Expires=600&X-Amz-Signature=c1003975db9271d9a8645afdbf9106b4fdddaeba7b976120ba1bafa437df308b",
                                       "main" => "false"
                                    ]
                              ],
                              "destaque" => [
                                          "title" => "Notícia fresquinha",
                                          "description" => "<p>Hubble daora</p>",
                                          "id" => "6470c4210b879f3c57f8e077",
                                          "file" => "https://uotz-radar-dev.s3.sa-east-1.amazonaws.com/uuid/f1f3b7b0-da5d-42ab-be6e-25e66c459246.?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAUPELY5AVMIG3PIXJ%2F20230713%2Fsa-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230713T192510Z&X-Amz-SignedHeaders=host&X-Amz-Expires=600&X-Amz-Signature=c1003975db9271d9a8645afdbf9106b4fdddaeba7b976120ba1bafa437df308b",
                                          "main" => "true"
                                       ]
                           ]
                        ],
                        "volume" => "5",
                        "edition" => "10"
                     ]
            ];
    }
}
