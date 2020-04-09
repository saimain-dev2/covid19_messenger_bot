<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OverviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            [
                'text' =>  $this['dt'] . ' တွင် ရရှိသော အချက်အလက်များအရ မြန်မာနိုင်ငံ၏ (ကိုရိုနာ ရောဂါ) ဖြစ်ပွားမှုအခြေအနေမှာ အောက်ပါအတိုင်းဖြစ်သည်။',

            ],
            [
                'text' => 'စောင့်ကြည့်လူနာ (PUI) - ' . $this['pui'] . ' ဦး ၊ ' . 'သံသယ လူနာ (Suspected) - ' . $this['suspected'] . ' ဦး ၊ ' . 'ပိုးတွေ့ လူနာ (Lab Confirmed) - ' . $this['confirm'] . ' ဦး ၊ ' . 'ပိုးမတွေ့ လူနာ (Lab Negative) - ' . $this['lab_negative'] . ' ဦး ၊ ' . 'ဓာတ်ခွဲအဖြေစောင့်ဆိုင်းဆဲ လူနာ (Lab Pending) - ' . $this['lab_pending'] . ' ဦး ၊ ' . 'ပိုးတွေ့သေဆုံး လူနာ (Death among Lab Confirmed) - ' . $this['deaths'] . ' ဦး ၊ ' . 'ပိုးတွေ့ပြန်လည်သက်သာ လူနာ (Recovered) - ' . $this['recovered'] . ' ဦး ရှိပါသည်။',
            ],
            [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'image_aspect_ratio' => 'horizontal',
                        'elements' => [
                            [
                                'title' => $this['pui'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/WKgn41x/PUI-1.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'image_aspect_ratio' => 'horizontal',
                        'elements' => [
                            [
                                'title' => $this['suspected'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/rkMd3Zx/s.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ]
                        ]
                    ]
                ]
            ], [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'image_aspect_ratio' => 'horizontal',
                        'elements' => [
                            [
                                'title' => $this['confirm'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/7CRTFPH/sa.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ]
                        ]
                    ]
                ]
            ]

        ];
    }
}
