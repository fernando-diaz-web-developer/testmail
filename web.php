<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Esto va en el directorio routes de Laravel. Aquí va
| la ruta que configure, es para que ven la data.
|
*/

Route::get('/', function () {
    return view('testmail',[

    	'menu' =>  ['fakeurl' => 'EVENTS',
		'fakeurl2' => 'HOME', 
		'fakeurl3' => 'LESSONS',
		'fakeurl4' => 'WELLNESS',
		'fakeurl5' => 'MORE' ],
    	'title' => 'Hey Mat',
    	'month' => 'May',
    	'amount'=>'10,388',
    	'city'=>'Culvers City',
    	'state'=>'CA',
    	'mostdemanded'=>[
			['name'=>'DJ',
            'category'=>'EVENTS',
            'alt'=>'Event Music',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/YLYEvpzw_OojCD1BODQL5uSCnwELlY1rf9xpXTk_lPhOMlo6lM1vT5VDuGjUg9ZOsY5bXdWstherkwGlj13NwMyUfFLXftWZUIT9HAK2gm7s1yvit9OC-FDB6Oc=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2165_mobile',
            'description' =>'Great for birthdays, weddings, anniversaries and dance parties.'],
            ['name'=>'Caterers',
            'category'=>'EVENTS',
            'alt'=>'Event Catering',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci3.googleusercontent.com/proxy/BeCCuojXHijSNKOIjOjDQO7kft6FTmzRBD7pJDc-1K05eUyM2V9QmgLZlbuBc4Qo_43Uj2mdWK7CKiIkeXI_yZKVXY0nR3uI-sTX1FPmbKDZxNi0JVOVZzszM8I=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/1866_mobile',
            'description' =>'Great for birthdays, weddings, anniversaries and dance parties.'],
            ['name'=>'Handymen',
            'category'=>'HOME',
            'alt'=>'Handyman',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci3.googleusercontent.com/proxy/FlkAVr33A4kXK8yf3BHEm9ZIFdinqG1WqB36VQcUPJDYSkrw64serkRXSxsBsP0PY5wjcEd9SKEaqbwRPE8eInvk3iAG7Zh-ZKI56Z5C_5CzV6Zi1eF2Cxi9IW8=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2233_mobile',
            'description' =>'Great for birthdays, weddings, anniversaries and dance parties.'],
            ['name'=>'Caterers',
            'category'=>'EVENTS',
            'alt'=>'Event Catering',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci3.googleusercontent.com/proxy/BeCCuojXHijSNKOIjOjDQO7kft6FTmzRBD7pJDc-1K05eUyM2V9QmgLZlbuBc4Qo_43Uj2mdWK7CKiIkeXI_yZKVXY0nR3uI-sTX1FPmbKDZxNi0JVOVZzszM8I=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/1866_mobile',
            'description' =>'Great for birthdays, weddings, anniversaries and dance parties.'] ] ,
    	'random'=>[
			['name'=>'Pet Trainer',
            'category'=>'HOME',
            'alt'=>'Train pets',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/YLYEvpzw_OojCD1BODQL5uSCnwELlY1rf9xpXTk_lPhOMlo6lM1vT5VDuGjUg9ZOsY5bXdWstherkwGlj13NwMyUfFLXftWZUIT9HAK2gm7s1yvit9OC-FDB6Oc=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2165_mobile',
            'description' =>'Pets training.'],
			['name'=>'Pet Trainer',
            'category'=>'HOME',
            'alt'=>'Train pets',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/YLYEvpzw_OojCD1BODQL5uSCnwELlY1rf9xpXTk_lPhOMlo6lM1vT5VDuGjUg9ZOsY5bXdWstherkwGlj13NwMyUfFLXftWZUIT9HAK2gm7s1yvit9OC-FDB6Oc=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2165_mobile',
            'description' =>'Pets training.'],
			['name'=>'Pet Trainer',
            'category'=>'HOME',
            'alt'=>'Train pets',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/YLYEvpzw_OojCD1BODQL5uSCnwELlY1rf9xpXTk_lPhOMlo6lM1vT5VDuGjUg9ZOsY5bXdWstherkwGlj13NwMyUfFLXftWZUIT9HAK2gm7s1yvit9OC-FDB6Oc=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2165_mobile',
            'description' =>'Pets training.'],
			['name'=>'Pet Trainer',
            'category'=>'HOME',
            'alt'=>'Train pets',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/YLYEvpzw_OojCD1BODQL5uSCnwELlY1rf9xpXTk_lPhOMlo6lM1vT5VDuGjUg9ZOsY5bXdWstherkwGlj13NwMyUfFLXftWZUIT9HAK2gm7s1yvit9OC-FDB6Oc=s0-d-e1-ft#https://static1.thumbtackstatic.com/production/hero-images/2165_mobile',
            'description' =>'Pets training.']

    	],
    	'featured' => [
    		'slogan_question' => 'Not bringing your dog on summer vacation?',
    		'slogan_sub' => 'Hire a pet sitter',
    		'featured' => ['name'=>'Pet Sitter',
            'category'=>'HOME',
            'alt'=>'Sitting pets',
            'category_link'=>'fake',
            'link'=>'fakelink',
            'image'=>'https://ci6.googleusercontent.com/proxy/Jo5uB3mhnpBGOsLTmi6-HgXCBAwSoB3Wvg1fbv3rKqlIiIuCU13JGZqYLDNHcXxtBxONQMWNTXGHGqlpKM4T3EnoCCeEzP_sSSzRzUG1dKREyWwDjFpfXNe78uEDf23xyeXUqj9DtL1q6gHwowKgJzmE5qwnSHXGiWqOj_oC7bbdQ0VLdZJ_rAfOXd3MFlLBDaZo9F-AtZ-PfnHKM2t5YJ34ln-R2JWvsxwF09zoKEez4Nf9v618bocb05locLNkrlNe41oRMbbBDRw=s0-d-e1-ft#https://static.cdn.responsys.net/i2/responsysimages/thumbtk/contentlibrary/customer_marketing/seasonal/2018/05_may/2018_0515/img/Seasonal_5.15_PopGeo_Banner_PetSitter_ImageOnly.jpg',
            'description' =>'Pets training.']
    	],
    	'searchurl' => 'myfakesearchurl',
    	'totalservices' => '1,000+'
    ] );
});
