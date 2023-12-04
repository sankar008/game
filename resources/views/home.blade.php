
@extends('layouts.app')
@section('content')

    <div class="cm-patti">
        <h3>Today Lucky Number</h3>
        <div class="row">
            <div class="aa55" style="border-right: 1px solid #ff0016;width:40%">
                <h4>Golden Ank</h4>
                <p>3-8-1-6</p>
            </div>
            <div class="aa55" style="width:60%">
                <h4>Final Ank</h4>
                <div class="marquee">
                    <p>
                        MILAN MORNING - 4<br>SRIDEVI - 4<br>KALYAN MORNING - 2<br>PADMAVATI - 2<br>MADHURI - 4<br>SRIDEVI
                        MORNING - 6<br>KARNATAKA DAY - 0<br>TIME BAZAR - 0<br>MILAN DAY - 4<br>KALYAN - 6<br>SRIDEVI NIGHT -
                        4<br>MADHURI NIGHT - 2<br>MILAN NIGHT - ...<br>RAJDHANI NIGHT - ...<br>MAIN BAZAR - ...<br>KALYAN
                        NIGHT - ...<br>OLD MAIN MUMBAI - ...<br>MADHUR DAY - 6<br>MADHUR NIGHT - ...<br>KUBER - 0<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="matka-result">
        <h4 class="resp_sz">☔LIVE RESULT☔</h4>
        <div class="matka-card live-box">
            Sabse Tezz Live Result Yahi Milega
            
            @foreach($livegameDetails as $val)
            <span class="gn">{{ $val['name'] }}</span>
           
            <span class="gr">{{ $val['is_result_show']?$val['result']:'Loading...' }}</span>
            <button onclick="window.location.reload()">Refresh</button>
            @endforeach
            <br>
        </div>
    </div>
   
    <div class="para2 py_5"
        style="margin-bottom: 7px;font-size:16px;padding: 7px;line-height: 25px;background: #b80000;color: white;">
        अब सभी मटका बाजार खेलो ऑनलाइन ऐप पर रोज खेलो रोज कमाओ अभी डाउनलोड करो <br>
        <a style="color:white;color: white;border: 2px solid #fff;padding: 3px 0px;display: block;width: 200px;margin: auto;border-radius: 15px;background: #011e76;
       margin-top: 8px;"
            href="#"> 👉 Play Matka Online (MB Play)</a>
        With 100% Trusted App - Diwali Special - Instant Withdraw
    </div>
    <div class="para2" style="margin-bottom: 7px;font-size:16px;padding: 7px;line-height: 25px;color:#b80000;">
        <img src="{{ asset('fronted_assets/images/diwali.png') }}" style="width:100%;max-width:600px;">
        <span style="color: #ff00a2;display: block;text-shadow: 0px 0px 5px white;font-size: 20px;font-weight: bold;">☆
            NOTICE ☆</span>
        <span style="color:#011e76;">☆ DUE TO DIWALI ☆</span> <br>
        FROM <span style="color:#011e76;">10-11-2023</span> TO <span style="color:#011e76;">19-11-2023</span><br>
        ALL MARKET HAVE BEEN DECLARED AS HOLIDAY...
        <hr>
        ALL MARKET STARTS FROM:-<br>
        <span style="color:#011e76;">20-11-2023</span>
        <hr>
        <span style="color:#011e76;">SRIDEVI, SRIDEVI NIGHT, KARNATKA, GUJRAT, RATAN, PADMAVATI, SUPREME DAY & NIGHT,
            MAHADEVI, KAMAL MORNING, KAMAL DAY, KAMAL NIGHT, SITA MORNING, SITA DAY, SITA NIGHT, ANDHRA MORNING, ANDHRA DAY,
            MAIN KALYAN DAY, MAHAKAL, MUMBAI MORNING, KESRI MORNING, MAIN BAZAR, NIGHT, KALYAN MORNING, RATAN KHATRI, MAIN
            BAZAR DAY<br>
            WILL RUN ON ALL DAYS</span>
        <hr>
        <span style="color:#011e76;">FROM :- 20-11-2023</span><br>
        -: CHANGE IN TIMINGS 
        @foreach($livegameDetails as $val)
        <hr>
        {{ $val['name'] }}<br>
        @if($val['is_result_show'] == true)
        <span style="color:#011e76;">{{ date('h:i a', strtotime($val['start_time'] )) }} to {{ date('h:i a', strtotime($val['end_time'] )) }}</span>
        @else
        <span style="color:#011e76;">Loading...</span>
        @endif
        @endforeach
    </div>
    <div>
        <div class="para3">KALYAN MATKA | MATKA RESULT | KALYAN MATKA TIPS | SATTA MATKA | MATKA.COM | MATKA PANA JODI
            TODAY | BATTA SATKA | MATKA PATTI JODI NUMBER | MATKA RESULTS | MATKA CHART | MATKA JODI | SATTA COM | FULL
            RATE GAME | MATKA GAME | MATKA WAPKA | ALL MATKA RESULT LIVE ONLINE | MATKA RESULT | KALYAN MATKA RESULT |
            DPBOSS MATKA 143 | MAIN MATKA
        </div>
    </div>
    <h4 class="banner resp_sz"> WORLD ME SABSE FAST SATTA MATKA RESULT </h4>
    <div class="satta-result" style="border-color: #aa00c0;margin-bottom: 2px;">
        
        @foreach($allgameDetails as $val)
      
        <div style="background-color: {{ $val['background_color'] != '#ffffff'?$val['background_color']:''}}">
            <h4>{{ $val ->name }}</h4>
            <span>{{ $val->result }}</span>
            <p>{{ date('h:i a', strtotime($val->start_time)) }} &nbsp;&nbsp; {{ date('h:i a', strtotime($val->end_time)) }}</p>
            <a href="{{ route('jodi', ['slug_name'=> $val->slug_name]) }}" class="result_timing btn_chart">Jodi</a>
            <a href="{{ route('panel', ['slug_name'=> $val->slug_name]) }}" class="result_timing_right btn_chart">Panel</a>
        </div>
        
      
      @endforeach 
    </div>
 
 
    <div class="conta">
        <p>Email for any inquiries Or Support:</p>
        <a href="#"><span class="__cf_email__"
                data-cfemail="cfbcbabfbfa0bdbb8fabbfada0bcbce1bcaabdb9a6acaabc">[email&#160;protected]</span></a>
    </div>
    </div>
    <div class="my-table mr-sl">
        <h4 class="resp_sz">MAIN STARLINE</h4>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Result</th>
                    <th>Time</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="my-table cm-sl mf-sl" style="background: yellow;border: 6px solid gold;border-style: outset;">
        <h4 class="resp_sz"
            style="font-size: 20px;background: red;color: white;border-radius: 0px;text-shadow: none;margin: 0px;">MUMBAI
            STARLINE RESULT
            <a href="#"
                style="padding: 3px 5px 2px;height:auto;width: auto;float: right;margin: -1px 0px 0px 0;background-color: #000;border-radius: 5px;font-size: 14px;color: white;text-shadow: none;">Chart</a>
        </h4>
        <table>
            <thead>
                <tr>
                    <th>Round</th>
                    <th>Result</th>
                    <th>Round</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="my-table mr-sl">
        <h4 class="resp_sz">NEW KALYAN STAR LINE</h4>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Result</th>
                    <th>Time</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="my-table mumraj-sl">
        <h4 class="resp_sz">Mumbai Rajshree Star Line Result</h4>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Result</th>
                    <th>Time</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4 class="a-27-title h4 resp_sz"> <a href="#" style="color: #fff;" title="satta matka tricks"> EverGreen
            Trick Zone And Matka Tricks By DpBoss </a></h4>
    <div class="blue-div">
        <h4 class="resp_sz">Dpboss Special Game Zone</h4>
        <a href="#"> Dpboss Guessing Forum </a>
        <a href="#"> All market free fix game </a>
        <a href="#"> Ratan Khatri Fix Panel Chart </a> <a href="#"> Matka Final Number Trick Chart </a>
    </div>
    <div class="blue-div bbaa">
        <h4 class="resp_sz">Matka Jodi List</h4>
        <a href="#">Matka Jodi Count Chart</a>
        <a href="#">Dhanvarsha Daily Fix Open To Close</a>
        <a href="#">Matka Jodi Family Chart</a>
        <a href="#">Penal Count Chart</a>
        <a href="#">Penal Total Chart</a>
        <a href="#">All 220 Card List</a>
    </div>
    <div class="red-list">
        <div>
            <h4 class="resp_sz">DpBoss Net Weekly Patti Or Penal Chart From 20-11-2023 To 26-11-2023 For Kalyan, Milan,
                Kalyan Night, Rajdhani, Time, Main Bazar, Mumbai Royal Night</h4>
            <p>1=>678-245-399-579</p>
            <p>2=>110-679-129-480</p>
            <p>3=>120-139-355-346</p>
            <p>4=>149-257-130-266</p>
            <p>5=>357-140-456-168</p>
            <p>6=>268-899-358-123</p>
            <p>7=>359-179-449-250</p>
            <p>8=>459-288-378-116</p>
            <p>9=>289-450-117-379</p>
            <p>0=>460-235-127-280</p>
        </div>
        <div>
            <h4 class="resp_sz">DpBoss Net Weekly Line Open Or Close From 20-11-2023 To 26-11-2023 For Kalyan, Milan,
                Kalyan Night, Rajdhani, Time, Main Bazar, Mumbai Royal Night</h4>
            <p>Mon. 0-5-2-7</p>
            <p>Tue. 4-9-3-8</p>
            <p>Wed. 1-6-2-7</p>
            <p>Thu. 0-5-3-8</p>
            <p>Fri. 2-7-4-9</p>
            <p>Sat. 1-6-3-8</p>
            <p>Sun. 2-7-1-6</p>
        </div>
        <div>
            <h4 class="resp_sz">DpBoss Net Weekly Jodi Chart From 20-11-2023 To 26-11-2023 For Kalyan Milan Kalyan Night,
                Rajdhani Time, Main Bazar, Mumbai Royal Night Market</h4>
            <p>58 53 35 30</p>
            <p>22 27 72 77</p>
            <p>07 57 70 75</p>
            <p>23 28 73 78</p>
            <p>13 18 63 68</p>
            <p>41 46 91 96</p>
        </div>
    </div>
    <div class="fg-div">
        <h4 class="resp_sz">FREE GAME ZONE OPEN-CLOSE</h4>
        <div class="fg-main para-1 bdr mb-1 p-1">
            <div class="fgzoc-time">
                <p class="fg-p1 resp_sz">✔DATE:↬ : 20/11/2023
                    ↫
                </p>
                <span class="resp_sz" style="font-size: 22px;color: #000;text-shadow: 1px 1px 2px #fff;">FREE GUESSING
                    DAILY</span>
                <h5 class="fg-p1 resp_sz">OPEN TO CLOSE FIX ANK</h5>
            </div>
            <div class="card-1212">
                <div class="fg-c1">
                    <p class="fg-p2">↪ MILAN MORNING</p>
                    <p class="fg-p4">
                        4-9-1-6
                    </p>
                    <p class="fg-p4">455-559-128-123-457</p>
                    <p class="fg-p4">41-46-91-96-14-19-64-69</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ KALYAN MORNING</p>
                    <p class="fg-p4">
                        0-5-1-6
                    </p>
                    <p class="fg-p4">145-357-236-556-178</p>
                    <p class="fg-p4">01-06-51-56-10-15-60-65</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ TIME BAZAR</p>
                    <p class="fg-p4">
                        1-6-2-7
                    </p>
                    <p class="fg-p4">290-240-237-377-160</p>
                    <p class="fg-p4">12-17-62-67-21-26-71-76</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ MILAN DAY</p>
                    <p class="fg-p4">
                        4-9-5-0
                    </p>
                    <p class="fg-p4">112-117-267-389-127</p>
                    <p class="fg-p4">45-40-95-90-54-59-04-09</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ KALYAN</p>
                    <p class="fg-p4">
                        1-6-5-0
                    </p>
                    <p class="fg-p4">290-367-140-190-550</p>
                    <p class="fg-p4">11-16-61-66-55-50-05-00</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ MILAN NIGHT</p>
                    <p class="fg-p4">
                        4-9-1-6
                    </p>
                    <p class="fg-p4">149-199-290-240-268</p>
                    <p class="fg-p4">44-49-94-99-11-16-61-66</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ KALYAN NIGHT</p>
                    <p class="fg-p4">
                        5-0-1-6
                    </p>
                    <p class="fg-p4">140-127-128-466-556</p>
                    <p class="fg-p4">51-56-01-06-10-15-60-65</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ RAJDHANI NIGHT</p>
                    <p class="fg-p4">
                        3-8-1-6
                    </p>
                    <p class="fg-p4">355-558-134-128-178</p>
                    <p class="fg-p4">31-36-81-86-13-18-63-68</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ MAIN BAZAR</p>
                    <p class="fg-p4">
                        7-8-9-0
                    </p>
                    <p class="fg-p4">278-189-225-550-145</p>
                    <p class="fg-p4">78-87-79-97-70-07-90-09</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ SRIDEVI NIGHT</p>
                    <p class="fg-p4">1-8-9-0</p>
                    <p class="fg-p4">399-224-199-244</p>
                    <p class="fg-p4">13-18-83-98-94-99-01-06</p>
                    <p class="fg-p4"></p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ OLD MAIN MUMBAI</p>
                    <p class="fg-p4">7=9=4</p>
                    <p class="fg-p4">269=250=149=590=340=234</p>
                    <p class="fg-p4">71 =76 =41 =46 =91= 96</p>
                    <p class="fg-p4"></p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ PADMAVATI</p>
                    <p class="fg-p4">3-5-7</p>
                    <p class="fg-p4">229-490-445-122-177-258-458-188-377</p>
                    <p class="fg-p4">32-35-30-54-57-54-77-79-70</p>
                    <p class="fg-p4">1-7-9-0</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ KARNATAKA DAY</p>
                    <p class="fg-p4">4-5-8</p>
                    <p class="fg-p4">130-235-456-890-350-478</p>
                    <p class="fg-p4">49-47-57-59-80-89</p>
                    <p class="fg-p4">0-7-9</p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ KUBER</p>
                    <p class="fg-p4">0--5--3--8</p>
                    <p class="fg-p4">127--136--159--258--238--346--125--279</p>
                    <p class="fg-p4">38--85--03--35--55--33--00--88--80--03</p>
                    <p class="fg-p4"></p>
                </div>
                <div class="fg-c1">
                    <p class="fg-p2">↪ SRIDEVI</p>
                    <p class="fg-p4">1-6-7-8</p>
                    <p class="fg-p4">678-178-124-567</p>
                    <p class="fg-p4">11-16-62-67-73-78-83-88</p>
                    <p class="fg-p4"></p>
                </div>
            </div>
        </div>
        <div class="B">
            <span>
                <p class="paa3">KALYAN<br>जोड़ी ट्रिक.<br> ᴅᴀᴛᴇ:-21-07-2023<br>&nbsp;&nbsp;&nbsp; शुक्रवार <br>जोड़ी लाइन
                    छोटे रूप में बताया गया है<br>फिक्स LINE के साथ<br> कुछ हफ्ते पहले लाइन<br>शनिवार ---गुरुवार ---शुक्रवार
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 58-------43-----72<br> पिछले हफ्ते नीचे फ्रंट लाइन&nbsp; शनिवार
                    --बुधवार ---शुक्रवार <br>&nbsp;&nbsp; 46--------43--------22<br>हमारे बड़े प्रोफेसर के लाइन के हिसाब से
                    फिक्स<br>ओपन टू क्लोz<br>आज ---555555<br>फिक्स पत्त<br>258-359<br>जोड़ी<br>52-57-71-24<br> आना चाहिए<br>
                </p>
            </span>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0" class="new-table-add">
            <tbody>
                <tr>
                    <td colspan="9" class="ntah">कल्याण</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">सोम</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">मंगल</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">बुध</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">गुरु</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">शुक्र</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">शनि</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
        <table width="100%" cellspacing="0" cellpadding="0" class="new-table-add">
            <tbody>
                <tr>
                    <td colspan="9" class="ntah">KALYAN NIGHT / MAIN BAZAR </td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">सोम</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">मंगल</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">बुध</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">गुरु</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td rowspan="2" class="ntah-blue-sec">शुक्र</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                    <td rowspan="2" class="ntah-red-sec">0</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
            </tbody>
        </table>
        <div class="purpel-header ab1">
            <h6 class="resp_sz">SATTA MATKA JODI CHART</h6>
            <a href="#">Time Chart</a>
            <a href="#">Sridevi Chart</a>
            <a href="#">Kalyan Morning Chart</a>
            <a href="#">Madhuri Chart</a>
            <a href="#">Kalyan Chart</a>
            <a href="#">Sridevi Night Chart</a>
            <a href="#">Kalyan Night Chart</a>
            <a href="#">Old Main Mumbai Chart</a>
            <a href="#">Main Bazar Chart</a>
            <a href="#">Milan Morning Chart</a>
            <a href="#">Milan Day Chart</a>
            <a href="#">Milan Night Chart</a>
            <a href="#">Madhuri Night Chart</a>
            <a href="#">Madhur Morning Chart</a>
            <a href="#">Madhur Day Chart</a>
            <a href="#">Madhur Night Chart</a>
            <a href="#"> Rajdhani Night Chart </a>
            <a href="#"> Kuber Chart </a>
        </div>
        <div class="purpel-header ab1">
            <h6 class="resp_sz">MATKA PANEL CHART</h6>
            <a href="#">Time Panel Chart</a>
            <a href="#">Sridevi Panel Chart</a>
            <a href="#">Kalyan Morning Panel Chart</a>
            <a href="#">Madhuri Penal Chart</a>
            <a href="#">Padmavati Penal Chart</a>
            <a href="#">Kalyan Penal Chart</a>
            <a href="#">Sridevi Night Penal Chart</a>
            <a href="#">Kalyan Night Penal Chart</a>
            <a href="#">Old Main Mumbai Panel Chart</a>
            <a href="#">Main Bazar Penal Chart</a>
            <a href="#">Milan Morning Panel Chart</a>
            <a href="#"> Milan Day Penal Chart </a>
            <a href="#"> Milan Night Penal Chart </a>
            <a href="#">Madhuri Night Panel Chart </a>
            <a href="#"> Rajdhani Night Panel Chart </a>
            <a href="#">Madhur Morning Day Chart</a>
            <a href="#">Madhur Day Panel Chart </a>
            <a href="#">Kuber Penal Chart</a>
        </div>
        <div class="faq">
            <p>
                Welcome to the Dpboss. network, your ultimate destination for everything related to the fascinating world of
                Satta Matka. As a leading authority in the realm of Matka games, Dpboss. network is your go-to platform for
                reliable information, accurate Matka results, and expert guidance. Whether you're a seasoned player or a
                curious newcomer, our comprehensive collection of resources, including Kalyan Matka, Matka Result, and
                Mumbai Matka, among others, will provide you with a thrilling and immersive experience. Join us as we embark
                on this captivating adventure, where every Matka number, Matka chart, and Matka game holds the potential to
                unlock fortunes.
            </p>
            <div class="faq-card aabbcc">
                <label for="faq1"> <span> History of Satta Matka </span> </label>
                <div class="card-body">
                    <p>The history of Satta Matka dates back to the 1960s when it originated as a form of gambling in
                        Mumbai, India. Initially, it involved betting on the opening and closing rates of cotton in the
                        Bombay Cotton Exchange. The practice of placing bets on the fluctuating cotton rates attracted a
                        significant number of people looking to try their luck.<br>
                        As the popularity of this form of gambling grew, it expanded beyond the cotton exchange. The game
                        underwent several modifications and evolved into a numbers-based betting system. Players began
                        betting on random numbers ranging from 0 to 9, which were drawn from a Matka (earthen pot).<br>
                        With time, various Matka markets emerged, such as Kalyan Matka, Mumbai Matka, Rajdhani Matka, Night
                        Milan Matka, and Main Mumbai Matka, among others. Each market had its own set of rules and draws,
                        providing players with multiple opportunities to participate in the game.
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq2"> <span> Types of Satta Matka </span> </label>
                <div class="card-body">
                    <p>Kalyan Matka: Kalyan Matka is one of the most popular variants of Satta Matka. It focuses on betting
                        based on the opening and closing rates of cotton in the Bombay Cotton Exchange. It has a separate
                        set of rules and draws. <br>
                        Mumbai Matka: Mumbai Matka is closely associated with the city of Mumbai (formerly Bombay). It
                        includes various games and draws, allowing players to bet on different numbers and combinations.<br>
                        Rajdhani Matka: Rajdhani Matka is another type of Satta Matka game that involves betting on numbers
                        based on the opening and closing rates of cotton in the Rajdhani Cotton Exchange.<br>
                        Night Milan Matka: Night Milan Matka is a popular variant that is played during the evening and
                        night hours. It offers exciting betting opportunities and draws for players looking to try their
                        luck after sunset.<br>
                        Main Mumbai Matka: Main Mumbai Matka is specifically focused on the city of Mumbai. It has its own
                        set of rules, draws, and betting options for players interested in the Main Mumbai market.<br>
                        Gali Deshawar Matka: Gali Deshawar Matka is a specific variant of Satta Matka that is popular in
                        certain regions of India. It involves betting on numbers and predicting the outcome based on the
                        draw.<br>
                        Milan Day Matka: Milan Day Matka is a daytime variant of Satta Matka, providing players with betting
                        opportunities during the day. It has its own set of rules and draws separate from the night games.
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq3"> <span> The Basics of Matka: </span> </label>
                <div class="card-body">
                    <p>Matka is a popular form of gambling that originated in India in the 1960s. It is a lottery-style game
                        that involves betting on numbers. The term "Satta" refers to "betting" in Hindi, while "Matka" means
                        "earthen pot" in Hindi, which was traditionally used to draw random numbers.<br>
                        Game Format: Satta Matka is typically played on days when markets are closed, such as weekends or
                        public holidays. It usually consists of two sets of numbers, from 0 to 9, which are drawn at
                        random.<br>
                        Betting Process: Players place bets on combinations of numbers before the opening and closing times
                        of the Satta Matka result. The bets are placed on different types of markets or options, including
                        single, Jodi (pair), Patti (three-digit number), and more.<br>
                        Matka Draw: The Matka draw involves drawing three numbers from 0 to 9 from a deck of playing cards.
                        These numbers are drawn twice, creating a two-digit number. For example, if the numbers drawn are 5,
                        3, and 6, the result is 53. This process is repeated to obtain the second set of numbers.<br>
                        Result Declaration: The winning numbers are declared based on the combination of the two sets of
                        numbers. For example, if the first set is 53 and the second set is 46, the result would be 53 x 46.
                        The result is usually a two-digit number, and the last digit of the product is taken into
                        consideration. In this example, the last digit is 6, so 6 would be the winning number.<br>
                        Payouts: The payouts in Satta Matka vary depending on the type of bet and the amount placed.
                        Different markets have different payout ratios. If a player wins, they receive a pre-determined
                        amount multiplied by their betting amount.
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq4"> <span> Different Variants of Matka Games </span> </label>
                <div class="card-body">
                    <p>There are several variants of Matka games that have emerged over time. Here are some of the popular
                        ones:<br>
                        Single: In this variant, players bet on a single number between 0 and 9. If their chosen number is
                        drawn, they win.<br>
                        Jodi: Jodi is a variant where players bet on a pair of numbers between 00 and 99. If their selected
                        pair matches the result, they win.<br>
                        Patti: Patti is a three-digit number variant where players bet on all three digits of the result.
                        There are different types of Patti bets, including Single Patti, Double Patti, and Triple Patti.<br>
                        Half Sangam: Half Sangam is a combination bet where players choose one number from the first set of
                        numbers and pair it with any other number from the second set. If their selected combination matches
                        the result, they win.<br>
                        Full Sangam: Full Sangam is similar to Half Sangam, but players select both numbers from each set.
                        If their chosen combination matches the result, they win.<br>
                        Cycle Patti: Cycle Patti is a variation where players bet on a set of three numbers in a specific
                        order. If their selected cycle matches the result, they win.
                        Berji: Berji is a type of bet where players select two consecutive numbers and add them together. If
                        their total matches the result, they win.
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What Is Kalyan Matka and Its Winning Strategy </span> </label>
                <div class="card-body">
                    <p> Kalyan Matka is a popular form of gambling that originated in India. It is a variation of the
                        traditional Matka game and is specifically based on the opening and closing rates of cotton traded
                        on the Bombay Cotton Exchange. Over time, it has evolved into a game where players bet on numbers
                        and combinations, similar to other Matka games. Here are some tips for playing:
                        Understand the game rules and different types of bets. <br>
                        Analyze past results for patterns, but remember that outcomes are based on chance.<br>
                        Set a budget and stick to it.<br>
                        Diversify your bets to minimize risks.<br>
                        Bet with reasonable amounts and avoid chasing losses.<br>
                        Control your emotions and make rational decisions.<br>
                        Stay updated with the latest information and market trends.<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="let-rock">
            <div class="t-rock t-0">What is Mumbai Matka? </div>
            <p>Mumbai Matka is another variant of the popular Matka gambling game that originated in India. It is
                specifically associated with the city of Mumbai (formerly known as Bombay), hence the name "Mumbai Matka."
                Similar to other Matka games, Mumbai Matka involves betting on numbers and combinations. Mumbai Matka is a
                variant of the popular Matka gambling game. It involves players placing bets on different numbers and
                combinations.</p>
            <div class="t-rock">What is Rajdhani Matka? </div>
            <p>Rajdhani Matka is a variant of the popular Matka gambling game in India. It involves betting on numbers and
                combinations in the Rajdhani market. Players place bets on various options such as single numbers, pairs,
                and three-digit numbers before the result is declared.
                The game follows a format similar to other Matka games, with two sets of numbers drawn at random. The
                winning numbers are determined based on the combination of the two sets, with the last digit of their
                product serving as the winning number. It's important to adhere to local laws and regulations while
                participating in Rajdhani Matka or any form of gambling.
            </p>
            <div class="t-rock">What is Satta Chart Analysis?</div>
            <p>Satta Chart Analysis involves studying historical Satta Matka charts to identify patterns, trends, and number
                frequencies. It helps in making informed decisions when selecting numbers or combinations for future bets.
                However, it's important to remember that Satta Matka outcomes are based on chance, and analysis doesn't
                guarantee accurate predictions. Gamble responsibly and within legal boundaries.</p>
            <div class="t-rock">What is matka open and matka close? </div>
            <p>"Matka Open" is the first set of numbers that are announced or declared at the beginning of a specific Matka
                game. It represents the opening result or the initial set of winning numbers.
                "Matka Close" is the second set of numbers that are announced or declared at the end of the Matka game. It
                represents the closing result or the final set of winning numbers.
                The time interval between the Matka Open and Matka Close varies depending on the specific Matka game being
                played. It can range from a few minutes to several hours, depending on the rules and regulations of the
                Matka market or game. Players place their bets on different numbers or combinations before the Matka Open,
                and the winning numbers are determined by the Matka Close.
            </p>
            <div class="t-rock">Matka Jodi On Dpboss. network: Combining Numbers for Winning Bets</div>
            <p>Matka Jodi is a term used in Matka gambling to refer to a combination of two numbers that players select to
                place their bets. The Jodi represents a pair of numbers that are combined together to form a single outcome.
                Here are some key points about Matka Jodi: <br>
                Number Combination: In Matka Jodi, players choose two numbers from 0 to 9 and combine them to create a pair.
                For example, if a player selects the numbers 3 and 7, the Jodi would be represented as 37.<br>
                Betting Process: Players place their bets on different Jodi options available in the Matka game. The Jodi
                can be selected based on personal preference, analysis of past results, or other strategies.<br>
                Result Declaration: The Jodi is compared to the winning numbers declared at the end of the Matka game. If
                the Jodi matches the outcome, the player wins the bet. For example, if the winning numbers are declared as 3
                and 7, the Jodi 37 would be a winning combination.<br>
                Payouts: The payouts for Matka Jodi bets vary depending on the specific Matka market and the odds associated
                with the chosen Jodi. Different Jodi combinations may have different payout rates.
            </p>
            <div class="t-rock">Bombay Satta Guessing and Tips</div>
            <p>Bombay Satta, also known as Mumbai Satta or Mumbai Matka, refers to the vibrant and historically significant
                Matka gambling scene in the city of Mumbai, India. Matka, which originated in the 1960s, was initially
                centered around the cotton exchange market in Mumbai and eventually became a popular form of gambling.<br>
                In Bombay Satta, players place bets on various combinations of numbers, ranging from single-digit numbers to
                three-digit numbers. The game involves guessing the correct numbers that will be drawn as a result. These
                numbers are then declared as the "open" and "close" for the day.<br>
                Mumbai has been a hub for Matka gambling, with numerous Matka markets or "Matka bazaars" operating in
                different areas of the city. Some of the well-known Matka markets in Mumbai include Kalyan Matka, Worli
                Matka, Milan Day, and Rajdhani Night, among others. Each market has its own set of rules and timings for the
                result declaration.
            </p>
            <div class="t-rock">सट्टा मटका में सट्टा चार्ट का महत्व </div>
            <p>सट्टा मटका में सट्टा चार्ट का महत्व बहुत अधिक होता है। यह चार्ट खिलाड़ियों के लिए एक महत्वपूर्ण और उपयोगी
                उपकरण होता है। नीचे सट्टा चार्ट के महत्व के कुछ पहलू दिए गए हैं:
                संख्या प्रविष्टियाँ: सट्टा चार्ट में पिछले खेलों की संख्या प्रविष्टियाँ दर्शाई जाती हैं। इससे खिलाड़ी अगले
                खेल में उन संख्याओं की प्राथमिकता को समझ सकते हैं और अपनी रणनीति बना सकते हैं।
                रेंज और दिशानिर्देश: सट्टा चार्ट में रेंज और दिशानिर्देश प्रदर्शित किए जाते हैं। इससे खिलाड़ी को उचित और
                सुरक्षित बेटिंग करने के लिए सही सीमा और दिशा मिलती है।
                पैटर्न और ट्रेंड: सट्टा चार्ट में पैटर्न और ट्रेंड की जानकारी उपलब्ध होती है। इससे खिलाड़ी को अवकाश और
                निर्धारित पैटर्न में सट्टा लगाने की क्षमता मिलती है। वे चार्ट के माध्यम से बाजार के प्रवाह को समझते हैं और
                अनुकूल ट्रेंड के अनुसार अपने बेट प्लेस कर सकते हैं।
                रिजल्ट और रिकॉर्ड: सट्टा चार्ट में पिछले खेलों के रिजल्ट और रिकॉर्ड दिखाए जाते हैं। यह खिलाड़ियों को पिछले
                परिणामों का विश्लेषण करने और रिकॉर्ड्स के माध्यम से खेल के विशेषताओं को समझने में मदद करता है।
            </p>
            <div class="t-rock">डीपीबॉस और सट्टा मटका का महत्व</div>
            <p> इन खेलों में भाग लेने वाले खिलाड़ियों को अजीबोगरीब संख्याओं पर शर्त लगाने की स्थिति में जीतने का अद्वितीय
                अनुभव मिलता है। <br>
                मानसिक चुनौतियों का सामना: डीपीबॉस और सट्टा मटका खेल में खिलाड़ियों को रणनीतिक और मनोबल की चुनौतियों का
                सामना करना पड़ता है। यह मानसिक क्षमता को सुधारता है और नए रणनीतिक तथ्यों को समझने में मदद करता है।<br>
                सामाजिक समृद्धि: ये खेल एक सामाजिक मंच के रूप में भी महत्वपूर्ण हैं, जहां लोग मिलते हैं और अपने अनुभव और
                ज्ञान को साझा करते हैं। इससे सामाजिक बंधन बनते हैं और लोग एक-दूसरे के साथ अधिक संवाद स्थापित करते हैं।<br>
                आर्थिक पहलू: डीपीबॉस और सट्टा मटका खेल के आर्थिक पहलू भी महत्वपूर्ण हैं। ये खेल जीते गए राशि का प्रबंधन करने
                में मदद करते हैं और खिलाड़ियों को आर्थिक रूप से स्थिरता प्रदान कर सकते हैं।
            </p>
            <div class="t-rock">कल्याण मटका: रूल, टाइमिंग, और खेलने का तरीका</div>
            <p>कल्याण मटका एक प्रमुख और लोकप्रिय सट्टा मटका खेल है जो कि बहुत से लोगों के बीच प्रिय है। यहां कल्याण मटका के
                रूल, टाइमिंग, और खेलने का एक सामान्य तरीका दिया गया है:
                रूल: कल्याण मटका में कुछ महत्वपूर्ण रूल होते हैं जिन्हें खिलाड़ियों को पालन करना चाहिए। कुछ मुख्य रूल
                निम्नलिखित हैं:<br>
                खेलने के लिए, खिलाड़ी को सही और प्रायोगिक ज्ञान होना चाहिए।<br>
                केवल विश्वसनीय और प्रमाणित सोर्सेज से नंबर या गेस्सिंग लेना चाहिए।<br>
                सट्टा करने से पहले वित्तीय प्रबंधन करना चाहिए और सतर्क रहना चाहिए।<br>
                अपराधिक गतिविधियों से दूर रहना चाहिए और गैरकानूनी सट्टा नहीं खेलना चाहिए।<br>
                टाइमिंग: कल्याण मटका का खेल दोपहर 2:30 बजे से शुरू होता है और शाम 4:30 बजे तक चलता है। यह हर सप्ताह के दिनों
                में खेला जाता है, जिसमें सोमवार से शनिवार तक शामिल हैं।<br>
                खेलने का तरीका: कल्याण मटका में खेलने के लिए निम्नलिखित तरीका अनुसरण किया जा सकता है:<br>
                पहले, खिलाड़ी को एक विश्वसनीय और प्रमाणित डीपीबॉस साइट का चयन करना चाहिए।<br>
                साइट पर खुद को रजिस्टर करना और लॉग इन करना चाहिए।<br>
                खेल की तारीख, समय और बाजार का चयन करें।<br>
                खेल में भाग लेने के लिए राशि जमा करें और नंबर चुनें।<br>
                रिजल्ट जारी होने के बाद, विजेता को राशि प्राप्त होगी।<br>
            </p>
        </div>
        <div class="faq">
            <div class="faq-card aabbcc">
                <label for="faq1">
                    <span> What is Satta Matka? </span>
                </label>
                <div class="card-body">
                    <p>Satta Matka is a popular form of lottery and gambling that originated in India. It involves betting
                        on numbers and earning potential winnings based on the outcome. </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq2"> <span> Who is Dpboss? </span> </label>
                <div class="card-body">
                    <p>Dpboss is a prominent figure in the Satta Matka industry. He is known for providing tips, guidance,
                        and expert advice to players, helping them make informed decisions in their Matka games.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq3"> <span> How does Matka work? </span> </label>
                <div class="card-body">
                    <p>In Matka, players choose a set of numbers from a predefined range and place bets on those numbers.
                        The bets are then collected, and a random number is drawn. If a player's chosen number matches the
                        result, they win.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq4"> <span> What is Kalyan Matka? </span> </label>
                <div class="card-body">
                    <p>Kalyan Matka is a popular variant of Matka game that focuses on betting based on the opening and
                        closing rates of cotton in the Bombay Cotton Exchange.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> How can I check the Matka Result? </span> </label>
                <div class="card-body">
                    <p> You can check the Matka Result through various online platforms or websites dedicated to Satta
                        Matka. These platforms display the results for different Matka games, including Kalyan Matka, Mumbai
                        Matka, Rajdhani Matka, and more.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Matka Chart? </span> </label>
                <div class="card-body">
                    <p> A Matka Chart is a graphical representation of previous results and trends in the Matka game. It
                        helps players analyze patterns and make predictions for future games.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is the difference between Matka and Satta? </span> </label>
                <div class="card-body">
                    <p> Satta is a broader term that encompasses various forms of gambling, while Matka specifically refers
                        to a game that involves betting on numbers.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What are Matka Open and Matka Close? </span> </label>
                <div class="card-body">
                    <p> Matka Open and Matka Close are the first and last numbers, respectively, that are drawn in a Matka
                        game. Players can place bets on these numbers and potentially win if they match the result.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What are Matka Panna and Matka Jodi? </span> </label>
                <div class="card-body">
                    <p> In Matka, Panna refers to a three-digit number that represents a panel, while Jodi is a two-digit
                        number that represents a pair. Players can place bets on Panna or Jodi combinations to increase
                        their chances of winning.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Fix Satta? </span> </label>
                <div class="card-body">
                    <p> Fix Satta refers to a game or a set of numbers that are predetermined or fixed. It implies that the
                        outcome is predecided, which can be beneficial for players who have access to this information.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Lucky Online Matka? </span> </label>
                <div class="card-body">
                    <p> Lucky Online Matka refers to an online platform where players can participate in Matka games and try
                        their luck by placing bets on various numbers and combinations.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Live Matka?
                    </span> </label>
                <div class="card-body">
                    <p> Live Matka refers to the real-time streaming or updating of Matka games. It allows players to
                        witness the draw and results as they happen, enhancing the transparency and excitement of the game
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Gali Deshawar Matka?
                    </span> </label>
                <div class="card-body">
                    <p> Gali Deshawar Matka is a specific variant of the Satta Matka game that is popular in certain regions
                        of India. It involves betting on numbers and predicting the outcome based on the draw.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Bombay Satta?
                    </span> </label>
                <div class="card-body">
                    <p> Bombay Satta refers to the Satta Matka games that are specifically associated with the city of
                        Mumbai (formerly Bombay). It includes various games like Kalyan Matka, Main Mumbai Matka, and more.
                    </p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What are SattaMatka Tips?</span> </label>
                <div class="card-body">
                    <p>SattaMatka Tips are suggestions and strategies provided by experts or experienced players to improve
                        your chances of winning in the Matka game. These tips may include analyzing previous results,
                        following patterns, or using mathematical calculations.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> What is Satta Matka World? </span> </label>
                <div class="card-body">
                    <p> Satta Matka World refers to the vast community and network of players, websites, and resources
                        dedicated to Satta Matka. It encompasses online platforms, forums, and information hubs that cater
                        to the game's enthusiasts.</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> सट्टा मटका क्या होता है?</span> </label>
                <div class="card-body">
                    <p> सट्टा मटका भारत में उत्पन्न हुए एक प्रसिद्ध लॉटरी और जुआ है जिसमें खेलाड़ी नंबर पर शर्त लगाकर
                        प्राप्त होने वाली जीत की संभावना है।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> डीपीबॉस कौन हैं?</span> </label>
                <div class="card-body">
                    <p> डीपीबॉस सट्टा मटका उद्योग में एक प्रमुख व्यक्ति हैं। वे खिलाड़ियों को सलाह, निर्देश और विशेषज्ञ सलाह
                        प्रदान करके उन्हें उनके मटका खेलों में सूचित निर्णय लेने में मदद करते हैं।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> मटका कैसे काम करता है? </span> </label>
                <div class="card-body">
                    <p> मटका में, खिलाड़ी एक पूर्वनिर्धारित सीमा से एक सेट नंबर का चयन करते हैं और उन नंबरों पर शर्त लगाते
                        हैं। शर्तें संग्रहित की जाती हैं और एक यादृच्छिक संख्या की खींचाई की जाती है। यदि खिलाड़ी का चयनित
                        नंबर परिणाम के साथ मेल खाता है, तो वे जीतते हैं।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> कल्याण मटका क्या है?
                    </span> </label>
                <div class="card-body">
                    <p> कल्याण मटका सट्टा मटका का एक प्रसिद्ध रूप है जो बॉम्बे कॉटन एक्सचेंज में कपास की खुलने और बंद होने
                        के दर पर शर्त लगाने पर केंद्रित होता है।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> मटका रिज़ल्ट क्या होता है?
                    </span> </label>
                <div class="card-body">
                    <p> मटका रिज़ल्ट मटका खेल का परिणाम होता है। यह वह जीतने वाला नंबर या कॉम्बिनेशन होता है जो विजेताओं को
                        और उनकी जीती गई राशि को निर्धारित करता है।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> मटका रिज़ल्ट कैसे चेक किया जाता है?
                    </span> </label>
                <div class="card-body">
                    <p> आप मटका रिज़ल्ट को विभिन्न ऑनलाइन प्लेटफ़ॉर्म या सट्टा मटका के लिए वेबसाइटों के माध्यम से चेक कर
                        सकते हैं। ये प्लेटफ़ॉर्म विभिन्न मटका खेलों, जैसे की कल्याण मटका, मुंबई मटका, राजधानी मटका, आदि के
                        लिए रिज़ल्ट दिखाते हैं।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span>मटका चार्ट क्या होता है? </span> </label>
                <div class="card-body">
                    <p> मटका चार्ट पहले के परिणामों और ट्रेंड का एक ग्राफिकल प्रतिनिधित्व है। यह खिलाड़ियों को पिछले
                        परिणामों का विश्लेषण करने और भविष्य के खेलों के लिए पूर्वानुमान बनाने में मदद करता है।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> मटका रिज़ल्ट क्या होता है?
                    </span> </label>
                <div class="card-body">
                    <p> मटका रिज़ल्ट मटका खेल का परिणाम होता है। यह वह जीतने वाला नंबर या कॉम्बिनेशन होता है जो विजेताओं को
                        और उनकी जीती गई राशि को निर्धारित करता है।</p>
                </div>
            </div>
            <div class="faq-card">
                <label for="faq5"> <span> मटका रिज़ल्ट क्या होता है?
                    </span> </label>
                <div class="card-body">
                    <p> मटका रिज़ल्ट मटका खेल का परिणाम होता है। यह वह जीतने वाला नंबर या कॉम्बिनेशन होता है जो विजेताओं को
                        और उनकी जीती गई राशि को निर्धारित करता है।</p>
                </div>
            </div>
        </div>
    @endsection
