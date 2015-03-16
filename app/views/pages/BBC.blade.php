@extends('layouts.project')
@section('content')

    <div class="break"></div>
    <h2>BBC webpage mock-up</h2>
    <div id="container">
    
        <div id="topbar">
            <div class="fixedwidth">
                
                <div id="logodiv">
                    <img src="/resources/projects/BBC/bbclogo.png" />
                </div>

                <div id="spacer">
                </div>

                <div id="topmenudiv">
                    <ul>
                        <li>News</li>
                        <li>Sport</li>
                        <li>Weather</li>
                        <li>Earth</li>
                        <li>Future</li>
                        <li>Shop</li>
                        <li>TV</li>
                        <li>Radio</li>
                        <li>More...</li>
                    </ul>
                </div>

                <div id="searchdiv">
                    <input type="text" placeholder="Search" />
                </div>

            </div>
        </div>

        <div class="break"></div>

        <div id="newsbar">
            <div class="fixedwidth">

                <p id="newsheader">NEWS<span id="UK">UK</span></p>

                <div id="rss">
                    RSS <img src="/resources/projects/BBC/rss.png" />
                </div>

                <div class="break"></div>

                <div class="fixedwidth" id="topicmenu">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">US & Canada</a></li>
                        <li><a href="">Latin America</a></li>
                        <li class="selected"><a href="">UK</a></li>
                        <li><a href="">Africa</a></li>
                        <li><a href="">Asia</a></li>
                        <li><a href="">Australia</a></li>
                        <li><a href="">Europe</a></li>
                        <li><a href="">Mid-East</a></li>
                        <li><a href="">Business</a></li>
                        <li><a href="">Health</a></li>
                        <li><a href="">Sci/Environment</a></li>
                        <li><a href="">Tech</a></li>
                        <li><a href="">Entertainment</a></li>
                        <li style="border-right: none"><a href="">Video</a></li>
                </div>

            </div>
        </div>

        <div class="break"></div>
        
        <div id="content">
            <div class="fixedwidth">

                <p><span class="date">22 December 2014</span> Last updated at 16:12 ET</p>

                <h1><a href="">Six people killed in bin lorry crash</a></h1>

                <img class="headlineimage" src="/resources/projects/BBC/headlineimage.jpg" />

                <div class="newsitem"> 
                    <p>Six people have been killed and eight others injured after an out-of-control bin lorry crashed into pedestrians in central Glasgow.</p>

                    <p><a href="">Glasgow bin lorry crash</a></p>
                    <p><a href="">Witnesses tell of 'horrible scenes'</a></p>
                    <p><a class="video" href="">Bin lorry 'ran up on pavement'</a></p>
                    <p><a href="">In quotes: Reaction to Glasgow bin lorry crash</a></p>
                    <p><a class="video" href="">Police: 'A number of fatalities'</a></p>

                </div>

                <div id="watchlisten">

                    <img src="/resources/projects/BBC/boxes.png" class="boxes" />

                    <h2>Watch/Listen</h2>

                    <img src="/resources/projects/BBC/leftarrow.png" class="leftarrow" />

                    <div class="wlblock">
                        <img src="/resources/projects/BBC/itemleft.png">
                        <p><a href="">Rural shoppers boost online figures</a></p>
                    </div>

                    <div class="wlblock">
                        <img src="/resources/projects/BBC/itemright.png">
                        <p><a href="">A look back at Joe Cocker's career</a></p>
                    </div>

                    <img src="/resources/projects/BBC/rightarrow.png" class="rightarrow" />

                    <div class="break"></div>

                    <p><span class="live">Live</span>  <a href="" class="livelink">Radio 5 live</a></p>

                </div>

            </div>
        </div>
    </div>
    <div class="break"></div>
    <h2 class="separator">Screenshot of BBC webpage, 22 December 2014</h2>
    <div id="original">
        <div id="screenshot">
            <img src="/resources/projects/BBC/BBC-original_screenshot-clipped.png">
        </div>
    </div>

    <div class="separator"></div>
@stop