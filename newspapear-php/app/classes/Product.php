<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Brand;


class Product

{
    public $products;
    public $category;
    public $categoryById;
    public $brand;
    public $result = [];

    public function getAllProduct()
    {
        return [
            0  =>  [
                'id'           => 1,
                'category_id'  => 1,
                'name'         => 'বিশেষ সংবাদ',
                'detail'       => 'ব্ল্যাকে টিকিট কেটে নিজের সিনেমা দেখলেন নায়ক',
                'image'        =>'1.jpg',
                'description'  =>'জীবনে বহু সিনেমা ব্ল্যাকে টিকিট কেটে দেখেছি। আজকে আমার সিনেমা “পরাণ”–এর অষ্টম সপ্তাহে এসেও মধুমিতায় ব্ল্যাকে টিকিট কেটে দেখতে হলো। সঙ্গে “পরাণ”-এর পরিচালকও।’ এমন বাক্য লিখে আজ শুক্রবার সন্ধ্যায় নিজের ফেসবুক আইডিতে একটি ভিডিও প্রকাশ করেছেন ‘পরাণ’ ছবির নায়ক শরীফুল রাজ। ভিডিওতে দেখা গেছে, রাস্তার পাশে মধুমিতা হলের মূল ফটকের সামনের ঘটনা। রাজের মাথায় ক্যাপ ও মুখে মাস্ক। রায়হান রাফির মুখেও মাস্ক। তাঁদের চেনার কোনো উপায় নেই। তাঁরা বাইরে দুজনের সঙ্গে টিকিট নিয়ে দরদাম করছেন। এরপর আড়াই শ করে এক হাজার টাকা দিয়ে চারটি টিকিট কিনে ভেতরে গেলেন।',
            ],
            1  =>  [
                'id'           => 2,
                'category_id'  => 2,
                'name'         => 'সর্বশেষ',
                'detail'       => 'ওয়েব ডিজাইন শিখতে যা জানতে হবে',
                'image'        =>'2.jpg',
                'description'  =>'ফ্রিল্যান্স মার্কেটপ্লেসগুলোতে ওয়েব ডিজাইন কাজের চাহিদা রয়েছে। আর তাই ওয়েব ডিজাইনের কাজ করে হাজার হাজার তরুণ-তরুণী ফ্রিল্যান্সার হিসেবে সফলতা অর্জন করেছেন। আর তাই ফ্রিল্যান্সিংয়ের ক্ষেত্রে যাঁরা একেবারে নতুন, তাঁরা ভালোভাবে ওয়েব ডিজাইন প্রশিক্ষণ নিয়ে ক্যারিয়ার গড়তে পারেন।

ওয়েব ডিজাইনার হিসেবে নিজেকে গড়ে তুলতে হলে প্রথমে জানতে হবে, কী কী শিখতে হবে। মনে রাখতে হবে, ওয়েব ডেভেলপমেন্ট, অর্থাৎ ওয়েব প্রোগ্রামিং শেখার প্রথম ধাপই হলো ওয়েব ডিজাইন। এ জন্য আপনাকে প্রথমেই শিখতে হবে এইচটিএমএল (হাইপার টেক্সট মার্কআপ ল্যাঙ্গুয়েজ) এবং সিএসএস (ক্যাসক্যাডিং স্টাইল শিট)। কারণ, একটি ওয়েবসাইটের মূল কাঠামো তৈরিই হয় এইচটিএমএলের মাধ্যমে। তাই এইচটিএমএলে থাকা বিভিন্ন ট্যাগের ব্যবহার জানা খুবই গুরুত্বপূর্ণ। ',
            ],
            2  =>  [
                'id'           => 3,
                'category_id'  => 3,
                'name'         => 'রাজনীতি',
                'detail'       =>  'আড়াইহাজারে আ.লীগের বিরুদ্ধে বিএনপির মিছিলে হামলার অভিযোগ, সাংবাদিককে মারধর',
                'image'        =>'3.jpg',
                'description'  =>'নারায়ণগঞ্জের আড়াইহাজারে আওয়ামী লীগের নেতা–কর্মীদের বিরুদ্ধে বিএনপির বিক্ষোভ মিছিলে হামলার অভিযোগ উঠেছে। এ ঘটনায় বিএনপি ও এর সহযোগী সংগঠনের অন্তত পাঁচ নেতা আহত হয়েছেন। আজ শুক্রবার বেলা ১১টায় উপজেলার গোপালদী বাজারে হামলার ঘটনা ঘটে।

হামলার পর আওয়ামী লীগের কর্মীরা এক বিএনপি নেতার দোকানে আগুন দিয়েছেন বলে অভিযোগ উঠেছে। এদিকে আগুনের ছবি তুলতে গিয়ে দৈনিক সংবাদের উপজেলা প্রতিনিধি হারাধন চন্দ্র মারধরের শিকার হয়েছেন। বিএনপির আহত নেতারা হলেন উপজেলা বিএনপির যুগ্ম সাধারণ সম্পাদক আফজাল হোসেন, সাংগঠনিক সম্পাদক কামাল হোসেন, গোপালদী পৌরসভা বিএনপির সভাপতি শামসুল হক, আড়াইহাজার পৌরসভা বিএনপির সাংগঠনিক সম্পাদক আরমান মোল্লা ও পৌর স্বেচ্ছাসেবক দলের যুগ্ম আহ্বায়ক মো. সোহাগ। আহত ব্যক্তিরা স্থানীয় বিভিন্ন চিকিৎসাকেন্দ্রে চিকিৎসা নিয়েছেন।


',
            ],
            3  =>  [
                'id'           => 4,
                'category_id'  => 4,
                'name'         => 'জীবনযাপন',
                'detail'       =>  'এই সাত অভ্যাসে আপনার জীবন বিফলে যেতে পারে',
                'image'        =>'4.jpg',
                'description'  =>'অভ্যাস আমাদের জীবনে এতটাই গুরুত্বপূর্ণ যে বলা হয়, মানুষ অভ্যাসের দাস। ভালো অভ্যাস যেমন সফলতার চাবিকাঠি, ঠিক তেমনই খারাপ অভ্যাস সফলতা থেকে অনেকটা দূরে ঠেলে নিয়ে যায়। এমনই সাত অভ্যাস (পড়ুন বদভ্যাস) সম্পর্কে জানিয়েছে ভারতীয় অনলাইন ম্যাগাজিন ‘ইনভেস্টিং ফিউশনস’। আপনারাও জেনে নিন।
১. আলস্যে সময় কাটানো

বলা হয়, আলস্য পরম শত্রু। আলস্যে সময় কাটানো বা সময় অপচয় করা মানে হলো জীবনেরই অপচয়। তাই নিরর্থক কাজে সময়ের অপচয় বন্ধ করুন। প্রয়োজনে মোবাইলের টাইমার চালু করে কাজ শুরু করুন। কাজের গতি ঠিক রাখুন। সাধারণত কাজের শুরুর স্পিডটাই আপনাকে প্রেরণা জোগাবে। আর কাজটি দীর্ঘ সময় ধরে করতে সাহায্য করবে।

২. তুলনা করা

বিশ্বাস করুন, পৃথিবীতে কারও সঙ্গে কারও কোনো তুলনা হয় না। প্রত্যেক মানুষ, তাঁদের বেড়ে ওঠার অভিজ্ঞতা, চিন্তার জগৎ ভিন্ন। তুলনা জিনিসটা আপনাকে হতাশা ছাড়া আর কিছুই দেবে না। অন্যের সঙ্গে তুলনা আপনার জীবনকে বিফলে নিতে পারে। অনেক মানুষই আপনার চেয়ে এগিয়ে কিংবা আপনার চেয়ে ভালো পরিস্থিতিতে থাকবে। তুলনা করে নিজেকে ছোট করবেন না। মনে রাখবেন, আপনি কোনো বস্তু নন, মানুষ।',
            ],
            4  =>  [
                'id'           => 5,
                'category_id'  => 5,
                'name'         => 'বিনোদন',
                'detail'        => 'সাহসী দৃশ্যে অভিনয়ে মায়ের নিষেধাজ্ঞা, ছবিটি ছাড়তে বাধ্য হন এই অভিনেত্রী',
                'image'        =>'5.jpg',
                'description'  =>'আগে বেশ কয়েকটি হিন্দি ছবি করলেও হালে পানি পাননি কিয়ারা আদভানি। কিন্তু ২০১৮ সালে মুক্তি পাওয়া নেটফ্লিক্সের অ্যান্থলজি ছবি ‘লাস্ট স্টোরিজ’ কিয়ারার ক্যারিয়ারের গতিপথ বদলে দেয়। এরপর কিয়ারা অভিনীত দুটি ছবি ‘কবির সিং’ ও ‘গুড নিউজ’ সুপারহিট হয়। তবে যে ‘লাস্ট স্টোরিজ’ দিয়ে কিয়ারার ব্যাপক পরিচিতি, আদতে সেই ছবিটি তাঁর করারই কথা ছিল না। করণ জোহরের ছবিটির জন্য প্রথম পছন্দ ছিলেন কৃতি শ্যানন। কিন্তু করণের ছবি তিনি ফিরিয়ে দেন, কেন?



‘লাস্ট স্টোরিজ’–এ প্রথম পছন্দ ছিলেন কৃতি শ্যানন
‘লাস্ট স্টোরিজ’–এ প্রথম পছন্দ ছিলেন কৃতি শ্যাননছবি : সংগৃহীত
সেলিব্রিটি চ্যাট শো ‘কফি উইথ করণ’-এর একটি পর্বে সে প্রশ্নেরই উত্তর দিয়েছেন করণ জোহর। শোটির নতুন পর্বে একসঙ্গে হাজির হয়েছিলেন ‘কবির সিং’ জুটি কিয়ারা ও শহিদ কাপুর। অনুমিতভাবেই শোতে উঠে আসে ‘লাস্ট স্টোরিজ’ প্রসঙ্গ। করণ নিজের ছবিটি নিয়ে বলেন, ‘ছবির জন্য শুরুতে কৃতি শ্যাননকে প্রস্তাব দিই। কিন্তু সে জানায়, তার মা তাকে ছবিটি করার অনুমতি ',
            ],
            5  =>  [
                'id'           => 6,
                'category_id'  => 6,
                'name'         => 'খেলা',
                'detail'        => 'বেটিং কোম্পানির সঙ্গে চুক্তি, ধারাভাষ্যের চাকরি হারালেন জনসন',
                'image'        =>'6.jpg',
                'description'  =>'বেটিং কোম্পানির সঙ্গে চুক্তির কারণে জাতীয় রেডিও স্টেশনের কাজ থেকে থেকে সরে যেতে হয়েছে অস্ট্রেলিয়ার সাবেক ফাস্ট বোলার মিচেল জনসনকে। আগামী রোববার থেকে শুরু হতে যাওয়া জিম্বাবুয়ের বিপক্ষে অস্ট্রেলিয়ার ওয়ানডে সিরিজে এবিসি রেডিওর হয়ে কাজ করার কথা ছিল জনসনের।

তবে বিপত্তি বেধেছে জনসনের সঙ্গে বেট নেশন নামের একটি কোম্পানির চুক্তি থাকায়। তাঁকে জানানো হয়েছে, এবিসি রেডিওর নীতি অনুযায়ী তাদের সঙ্গে চুক্তিতে থাকা অবস্থায় কোনো বেটিং কোম্পানির সঙ্গে সংশ্লিষ্টতা থাকা যাবে না।
কিন্তু এমন পরিস্থিতিতেও কেন রাষ্ট্রায়ত্ত একটি রেডিও স্টেশন বেটিং নিয়ে এমন কঠোর নীতি মেনে চলবে, জনসন বুঝতে পারছেন না সেটিই। দ্য অস্ট্রেলিয়ানের সঙ্গে কথা বলার সময় জনসন প্রশ্ন তুলেছেন এ নিয়ে। তাঁর যুক্তি, এবিসি রেডিওর অর্থায়ন করে অস্ট্রেলিয়া সরকার। যে সরকার বেটিং থেকে বড় রাজস্বই পায়। অথচ সেই এবিসি রেডিওই আবার বেটিংয়ের ব্যাপারে এমন কঠোর।
ক্রিকেট অস্ট্রেলিয়ামিচেল জনসন
মিচেল জনসন নিয়ে আরও পড়ুন
অ্যান্ডি মারের কফি আবিষ্কার
সামাজিক যোগাযোগমাধ্যমে তারকাদের দেওয়া কিছু নির্বাচিত ছবি দিয়েই এই ফটো ফিচার—লা মাসিয়ায় বার–বি–কিউ পার্টি ডিপাইদের, কির',
            ],
            6 =>  [
                'id'           => 7,
                'category_id'  => 7,
                'name'         => 'বাংলাদেশ',
                'detail'       =>'পপুলিশকে পাথর ছুড়ে আহত করার মামলায় দুই বিএনপি কর্মী গ্রেপ্তার',
                'image'        =>'1.1.jpg',
                'description'  =>'ময়মনসিংহের গৌরীপুরে পাথর ছুড়ে চারজন পুলিশকে আহত করার অভিযোগে হওয়া মামলায় বিএনপির দুই কর্মীকে গ্রেপ্তার করা হয়েছে। গতকাল বৃহস্পতিবার রাতে তাঁদের গ্রেপ্তার করে গৌরীপুর থানার পুলিশ। গ্রেপ্তার ব্যক্তিরা হলেন উপজেলার বালুয়া গ্রামের সাইফুল ইসলাম ও শিবপুর গ্রামের শাহজাহান মিয়া।



   গৌরীপুর থানা-পুলিশ জানায়, গত বুধবার সন্ধ্যায় উপজেলার রামগোপালপুর বাজারে বিএনপির বিক্ষোভ সমাবেশের কারণে মহাসড়কে জনদুর্ভোগ সৃষ্টি হয়। এতে পুলিশের পক্ষ থেকে সমাবেশ বন্ধ করতে বলা হলে সমাবেশকারীদের অনেকে পুলিশকে লক্ষ্য করে পাথর ছোড়েন। এ সময় চারজন পুলিশ আহত হন। তাঁরা হলেন গৌরীপুর থানার পরিদর্শক (তদন্ত) মনিরুজ্জামান মজুমদার, উপপরিদর্শক (এসআই) শফিকুল ইসলাম, মো. শরীফ এবং পুলিশ সদস্য আক্তার হোসেন।',
                ],
             7=>  [
                'id'           => 8,
                'category_id'  => 8,
                'name'         => 'চাকরি',
                'detail'       =>'পপুলিশকে পাথর ছুড়ে আহত করার মামলায় দুই বিএনপি কর্মী গ্রেপ্তার',
                'image'        =>'7.jpg',
                'description'  =>'ময়মনসিংহের গৌরীপুরে পাথর ছুড়ে চারজন পুলিশকে আহত করার অভিযোগে হওয়া মামলায় বিএনপির দুই কর্মীকে গ্রেপ্তার করা হয়েছে। গতকাল বৃহস্পতিবার রাতে তাঁদের গ্রেপ্তার করে গৌরীপুর থানার পুলিশ। গ্রেপ্তার ব্যক্তিরা হলেন উপজেলার বালুয়া গ্রামের সাইফুল ইসলাম ও শিবপুর গ্রামের শাহজাহান মিয়া।



গৌরীপুর থানা-পুলিশ জানায়, গত বুধবার সন্ধ্যায় উপজেলার রামগোপালপুর বাজারে বিএনপির বিক্ষোভ সমাবেশের কারণে মহাসড়কে জনদুর্ভোগ সৃষ্টি হয়। এতে পুলিশের পক্ষ থেকে সমাবেশ বন্ধ করতে বলা হলে সমাবেশকারীদের অনেকে পুলিশকে লক্ষ্য করে পাথর ছোড়েন। এ সময় চারজন পুলিশ আহত হন। তাঁরা হলেন গৌরীপুর থানার পরিদর্শক (তদন্ত) মনিরুজ্জামান মজুমদার, উপপরিদর্শক (এসআই) শফিকুল ইসলাম, মো. শরীফ এবং পুলিশ সদস্য আক্তার হোসেন।

',
            ],
        ];
    }

    public function getProductById($id)
    {
        $this ->products = $this->getAllProduct();
       foreach ($this->products as $product)
       {
           if ($product ['id'] == $id )
           {
               $this->category = new  Category();
              $this->categoryById =  $this->category->getCategoryInfo($product['category_id']);
              $product['category_name'] = $this->categoryById['name'];


               return $product;

           }
       }


    }

    public function getCategoryProduct($id)
{
    $this->products = $this->getAllProduct();
    foreach ($this->products as $product)
    {
        if($product['category_id'] == $id)
        {
            array_push($this->result, $product);
        }
    }
    return $this->result;
}

}