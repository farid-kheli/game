<!DOCTYPE html>
<html lang="en">

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/game1.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <title>game1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!--  -->
<body>
    <div class="game">
        <div class="title"
        x-init="

        Echo.private('game.1').listen('emaple', (e) => {
    console.log(e);
});
    
    Echo.private('game.1').listenForWhisper('move' ,(e) => {
    let id= e.move
        console.log(id)
        play(id)


    })"
         >
            <span>X O</span>
            game
        </div>
       

        <div class="main1" id="item1">
            <div class="main2" id="S11" onclick="play(this.id)"></div>
            <div class="main2" id="S12" onclick="play(this.id)"></div>
            <div class="main2" id="S13" onclick="play(this.id)"></div>
            <div class="main2" id="S14" onclick="play(this.id)"></div>
            <div class="main2" id="S15" onclick="play(this.id)"></div>
            <div class="main2" id="S16" onclick="play(this.id)"></div>
            <div class="main2" id="S17" onclick="play(this.id)"></div>
            <div class="main2" id="S18" onclick="play(this.id)"></div>
            <div class="main2" id="S19" onclick="play(this.id)"></div>
        </div>
        <div class="main1" id="item2">
            <div class="main2" id="S21" onclick="play(this.id)"></div>
            <div class="main2" id="S22" onclick="play(this.id)"></div>
            <div class="main2" id="S23" onclick="play(this.id)"></div>
            <div class="main2" id="S24" onclick="play(this.id)"></div>
            <div class="main2" id="S25" onclick="play(this.id)"></div>
            <div class="main2" id="S26" onclick="play(this.id)"></div>
            <div class="main2" id="S27" onclick="play(this.id)"></div>
            <div class="main2" id="S28" onclick="play(this.id)"></div>
            <div class="main2" id="S29" onclick="play(this.id)"></div>
        </div>

        <div class="main1" id="item3">
            <div class="main2" id="S31" onclick="play(this.id)"></div>
            <div class="main2" id="S32" onclick="play(this.id)"></div>
            <div class="main2" id="S33" onclick="play(this.id)"></div>

            <div class="main2" id="S34" onclick="play(this.id)"></div>
            <div class="main2" id="S35" onclick="play(this.id)"></div>
            <div class="main2" id="S36" onclick="play(this.id)"></div>

            <div class="main2" id="S37" onclick="play(this.id)"></div>
            <div class="main2" id="S38" onclick="play(this.id)"></div>
            <div class="main2" id="S39" onclick="play(this.id)"></div>
        </div>

        <div class="main1" id="item4">
            <div class="main2" id="S41" onclick="play(this.id)"></div>
            <div class="main2" id="S42" onclick="play(this.id)"></div>
            <div class="main2" id="S43" onclick="play(this.id)"></div>

            <div class="main2" id="S44" onclick="play(this.id)"></div>
            <div class="main2" id="S45" onclick="play(this.id)"></div>
            <div class="main2" id="S46" onclick="play(this.id)"></div>

            <div class="main2" id="S47" onclick="play(this.id)"></div>
            <div class="main2" id="S48" onclick="play(this.id)"></div>
            <div class="main2" id="S49" onclick="play(this.id)"></div>
        </div>
        <div class="main1" id="item5">
            <div class="main2" id="S51" onclick="play(this.id)"></div>
            <div class="main2" id="S52" onclick="play(this.id)"></div>
            <div class="main2" id="S53" onclick="play(this.id)"></div>

            <div class="main2" id="S54" onclick="play(this.id)"></div>
            <div class="main2" id="S55" onclick="play(this.id)"></div>
            <div class="main2" id="S56" onclick="play(this.id)"></div>

            <div class="main2" id="S57" onclick="play(this.id)"></div>
            <div class="main2" id="S58" onclick="play(this.id)"></div>
            <div class="main2" id="S59" onclick="play(this.id)"></div>
        </div>
        <div class="main1" id="item6">
            <div class="main2" id="S61" onclick="play(this.id)"></div>
            <div class="main2" id="S62" onclick="play(this.id)"></div>
            <div class="main2" id="S63" onclick="play(this.id)"></div>

            <div class="main2" id="S64" onclick="play(this.id)"></div>
            <div class="main2" id="S65" onclick="play(this.id)"></div>
            <div class="main2" id="S66" onclick="play(this.id)"></div>
            <div class="main2" id="S67" onclick="play(this.id)"></div>
            <div class="main2" id="S68" onclick="play(this.id)"></div>
            <div class="main2" id="S69" onclick="play(this.id)"></div>
        </div>

        <div class="main1" id="item7">
            <div class="main2" id="S71" onclick="play(this.id)"></div>
            <div class="main2" id="S72" onclick="play(this.id)"></div>
            <div class="main2" id="S73" onclick="play(this.id)"></div>

            <div class="main2" id="S74" onclick="play(this.id)"></div>
            <div class="main2" id="S75" onclick="play(this.id)"></div>
            <div class="main2" id="S76" onclick="play(this.id)"></div>

            <div class="main2" id="S77" onclick="play(this.id)"></div>
            <div class="main2" id="S78" onclick="play(this.id)"></div>
            <div class="main2" id="S79" onclick="play(this.id)"></div>
        </div>
        <div class="main1" id="item8">
            <div class="main2" id="S81" onclick="play(this.id)"></div>
            <div class="main2" id="S82" onclick="play(this.id)"></div>
            <div class="main2" id="S83" onclick="play(this.id)"></div>

            <div class="main2" id="S84" onclick="play(this.id)"></div>
            <div class="main2" id="S85" onclick="play(this.id)"></div>
            <div class="main2" id="S86" onclick="play(this.id)"></div>
            <div class="main2" id="S87" onclick="play(this.id)"></div>
            <div class="main2" id="S88" onclick="play(this.id)"></div>
            <div class="main2" id="S89" onclick="play(this.id)"></div>
        </div>
        <div class="main1" id="item9">
            <div class="main2" id="S91" onclick="play(this.id)"></div>
            <div class="main2" id="S92" onclick="play(this.id)"></div>
            <div class="main2" id="S93" onclick="play(this.id)"></div>

            <div class="main2" id="S94" onclick="play(this.id)"></div>
            <div class="main2" id="S95" onclick="play(this.id)"></div>
            <div class="main2" id="S96" onclick="play(this.id)"></div>

            <div class="main2" id="S97" onclick="play(this.id)"></div>
            <div class="main2" id="S98" onclick="play(this.id)"></div>
            <div class="main2" id="S99" onclick="play(this.id)"></div>
        </div>
    </div>
    <!--
    <audio id="beap" preload="auto">
        <source src="beap.mp3.wav">
    </audio>
    <script>

        var beepOne = $("#beap")[0];
        $(".main2")
            .mouseenter(function () {
                beepOne.play();
            });

    </script>
    -->
     <button onclick="relod()">RELOADE</button>
</body>
<script>
let t = 'X';
let id2 = 'V';
let id3 = '';
let id4 = '';
let s = [];
let y = [];
let h = [];
let np = [];
function play(id) {
    let element = document.getElementById(id);
    id4 = id
    if(np.includes(parseInt(id[1])) || element.innerHTML != ''){
        console.log('this is not playabul');
        return;
    }
    np = [];
    for (let i = 1; i <= 9; i++) {
        document.getElementById(`item${i}`).style.background = '';
    }
    
    if (t == 'X' && element.innerHTML == '') {

        if (id2 == 'V' || id == `S${id2}1` || id == `S${id2}2` || id == `S${id2}3` || id == `S${id2}4` || id == `S${id2}5` || id == `S${id2}6` || id == `S${id2}7` | id == `S${id2}8` || id == `S${id2}9`) {
            element.innerHTML = 'X';
            t = 'O';
            id2 = id[2];
            winer(id[1]);
            if (h[id4[2]] == 'T' || id3 == 'M') {
                if (id3 == 'M') {
                    id3 = ''
                } else {
                    id2 = 'V';
                }

            }
            else {
                for (let i = 1; i <= 9; i++) {
                    if (i != id2) {
                        document.getElementById(`item${i}`).style.background = '#f0ffff62';
                        np.push(i);
                    }
                }
            }
        }

    }
    if (t == 'O' && element.innerHTML == '') {
        if (id2 == 'V' || id == `S${id2}1` || id == `S${id2}2` || id == `S${id2}3` || id == `S${id2}4` || id == `S${id2}5` || id == `S${id2}6` || id == `S${id2}7` | id == `S${id2}8` || id == `S${id2}9`) {
            element.innerHTML = 'O';
            t = 'X';
            id2 = id;
            id2 = id[2];

            console.log(id2, id);
            winer(id[1]);
            if (h[id[2]] == 'T' || id3 == 'M') {
                if (id3 == 'M') {
                    id3 = ''
                } else {
                    id2 = 'V';
                }

            } else {
                for (let i = 1; i <= 9; i++) {
                    if (i != id2) {
                        console.log(id3);
                        document.getElementById(`item${i}`).style.background = '#f0ffff62';
                        np.push(i);
                    }
                }
            }


        }
    }
     Echo.private('game.1').whisper('move', {
            move: id
        });
}
function winer(A) {
    for (let i = 1; i <= 9; i++) {
        s[i] = document.getElementById(`S${A}${i}`).innerHTML;
    }
    if (s[1] == s[2] && s[2] == s[3] && s[1] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[1];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[1] == s[4] && s[4] == s[7] && s[1] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[1];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[1] == s[5] && s[5] == s[9] && s[1] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[1];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[2] == s[5] && s[5] == s[8] && s[2] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[2];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[3] == s[6] && s[6] == s[9] && s[3] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[3];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[3] == s[5] && s[5] == s[7] && s[3] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[3];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[4] == s[5] && s[5] == s[6] && s[5] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[4];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }
    if (s[7] == s[8] && s[8] == s[9] && s[7] != '') {
        for (let i = 1; i <= 9; i++) {
            document.getElementById(`S${A}${i}`).style.display = 'none';
        }
        document.getElementById(`item${A}`).innerHTML = s[7];
        id3 = 'M';
        id2 = 'V';
        winer2()
    }

}
function winer2() {
    h[id4[1]] = 'T'
    for (let i = 1; i <= 9; i++) {
        s[i] = document.getElementById(`item${i}`).innerHTML;
    }
    if (s[1] == s[2] && s[2] == s[3] && s[1] != '') {
        final();
    }
    if (s[1] == s[4] && s[4] == s[7] && s[1] != '') {
        final();
    }
    if (s[1] == s[5] && s[5] == s[9] && s[1] != '') {
        final();
    }
    if (s[2] == s[5] && s[5] == s[8] && s[2] != '') {
        final();
    }
    if (s[3] == s[6] && s[6] == s[9] && s[3] != '') {
        final();
    }
    if (s[3] == s[5] && s[5] == s[7] && s[3] != '') {
        final();
    }
    if (s[4] == s[5] && s[5] == s[6] && s[5] != '') {
        final();
    }
    if (s[7] == s[8] && s[8] == s[9] && s[7] != '') {
        final();
    }
}
function final() {
    setInterval(function () { document.getElementsByClassName("title") += '.'} , 1000);
    setTimeout(relod(), 4000);
}
function relod() {
    location.reload()
}</script>
</html>