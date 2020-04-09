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
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'image_aspect_ratio' => 'horizontal',
                        'elements' => [
                            [
                                'title' => 'စောင့်ကြည့် လူနာ ' . $this['pui'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/JxPQxNr/one.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ],
                            [
                                'title' => 'သံသယ လူနာ ' .  $this['suspected'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/ykgkNTQ/two.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ],
                            [
                                'title' => 'ပိုးတွေ့ လူနာ ' .  $this['confirm'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/3yY3tk6/three.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ],
                            [
                                'title' => 'ပိုးမတွေ့ လူနာ ' .  $this['lab_negative'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/vV9HMc1/four.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ],
                            [
                                'title' => 'ဓာတ်ခွဲအဖြေစောင့်ဆိုင်းဆဲ လူနာ ' .  $this['lab_pending'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/yh8GqcV/five.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ], [
                                'title' => 'ပိုးတွေ့သေဆုံး လူနာ ' .  $this['deaths'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/ctyNhzt/six.png',
                                'subtitle' => $this['dt'],
                                'buttons' => [[

                                    'type' => 'show_block',
                                    'block_names' => ['Menu'],
                                    'title' => 'မာတိကာ'
                                ]]
                            ],
                            [
                                'title' => 'ပိုးတွေ့ပြန်လည်သက်သာ လူနာ ' .  $this['recovered'] . ' ဦး',
                                'image_url' => 'https://i.ibb.co/6sBJwfp/seven.png',
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
