<?php
/*
List of url countries according to google trends
https://trends.google.com/trends/hottrends/atom/feed?pn=p30 Argentina
https://trends.google.com/trends/hottrends/atom/feed?pn=p8 Australia
https://trends.google.com/trends/hottrends/atom/feed?pn=p44 Austria
https://trends.google.com/trends/hottrends/atom/feed?pn=p41 Belgium
https://trends.google.com/trends/hottrends/atom/feed?pn=p18 Brazil
https://trends.google.com/trends/hottrends/atom/feed?pn=p13 Canada
https://trends.google.com/trends/hottrends/atom/feed?pn=p38 Chile
https://trends.google.com/trends/hottrends/atom/feed?pn=p32 Colombia
https://trends.google.com/trends/hottrends/atom/feed?pn=p43 Czech Republic
https://trends.google.com/trends/hottrends/atom/feed?pn=p29 Egypt
https://trends.google.com/trends/hottrends/atom/feed?pn=p50 Finland
https://trends.google.com/trends/hottrends/atom/feed?pn=p16 France
https://trends.google.com/trends/hottrends/atom/feed?pn=p15 Germany
https://trends.google.com/trends/hottrends/atom/feed?pn=p48 Greece
https://trends.google.com/trends/hottrends/atom/feed?pn=p10 Hong Kong
https://trends.google.com/trends/hottrends/atom/feed?pn=p45 Hungary
https://trends.google.com/trends/hottrends/atom/feed?pn=p3 India
https://trends.google.com/trends/hottrends/atom/feed?pn=p19 Indonesia
https://trends.google.com/trends/hottrends/atom/feed?pn=p6 Israel
https://trends.google.com/trends/hottrends/atom/feed?pn=p27 Italy
https://trends.google.com/trends/hottrends/atom/feed?pn=p4 Japan
https://trends.google.com/trends/hottrends/atom/feed?pn=p37 Kenya
https://trends.google.com/trends/hottrends/atom/feed?pn=p34 Malaysia
https://trends.google.com/trends/hottrends/atom/feed?pn=p21 Mexico
https://trends.google.com/trends/hottrends/atom/feed?pn=p17 Netherlands
https://trends.google.com/trends/hottrends/atom/feed?pn=p53 New Zealand
https://trends.google.com/trends/hottrends/atom/feed?pn=p52 Nigeria
https://trends.google.com/trends/hottrends/atom/feed?pn=p51 Norway
https://trends.google.com/trends/hottrends/atom/feed?pn=p25 Philippines
https://trends.google.com/trends/hottrends/atom/feed?pn=p31 Poland
https://trends.google.com/trends/hottrends/atom/feed?pn=p39 Romania
https://trends.google.com/trends/hottrends/atom/feed?pn=p14 Russia
https://trends.google.com/trends/hottrends/atom/feed?pn=p36 Saudi Arabia
https://trends.google.com/trends/hottrends/atom/feed?pn=p5 Singapore
https://trends.google.com/trends/hottrends/atom/feed?pn=p40 South Africa
https://trends.google.com/trends/hottrends/atom/feed?pn=p23 South Korea
https://trends.google.com/trends/hottrends/atom/feed?pn=p26 Spain
https://trends.google.com/trends/hottrends/atom/feed?pn=p42 Sweden
https://trends.google.com/trends/hottrends/atom/feed?pn=p46 Switzerland
https://trends.google.com/trends/hottrends/atom/feed?pn=p12 Taiwan
https://trends.google.com/trends/hottrends/atom/feed?pn=p33 Thailand
https://trends.google.com/trends/hottrends/atom/feed?pn=p24 Turkey
https://trends.google.com/trends/hottrends/atom/feed?pn=p35 Ukraine
https://trends.google.com/trends/hottrends/atom/feed?pn=p9 United Kingdom
https://trends.google.com/trends/hottrends/atom/feed?pn=p1 United States
https://trends.google.com/trends/hottrends/atom/feed?pn=p28 Vietnam
*/

$url = file_get_contents('https://trends.google.com/trends/hottrends/atom/feed?pn=p24');
echo '<ul>';
$trends = new SimpleXmlElement($url);
foreach($trends->channel->item as $value) { 
       $textTitle   = $value->title;
	   echo '<li><a target="_blank" href="https://www.google.com/search?q='.urlencode($textTitle).'">'.$textTitle.'</a></li>';       
}
echo '</ul>';