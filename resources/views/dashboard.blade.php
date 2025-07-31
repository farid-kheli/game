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
        <div class="title" id="title"
        x-init="
    
    Echo.private('game.{{$gameId}}').listen('move' ,(e) => {
            if(e.message != ''){
                console.log(e.message);
            }
                posision(e.status,e.Game?.leagelmove,e.SBoard);
            

 })"
         >
            <span>X O</span>
            game
        </div>
       

        <div class="main1" id="item0">
            <div class="main2" id="S00" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S01" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S02" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S03" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S04" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S05" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S06" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S07" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S08" onclick="SendMove(this.id)"></div>
        </div>
        <div class="main1" id="item1">
            <div class="main2" id="S10" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S11" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S12" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S13" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S14" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S15" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S16" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S17" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S18" onclick="SendMove(this.id)"></div>
        </div>

        <div class="main1" id="item2">
            <div class="main2" id="S20" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S21" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S22" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S23" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S24" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S25" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S26" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S27" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S28" onclick="SendMove(this.id)"></div>
        </div>

        <div class="main1" id="item3">
            <div class="main2" id="S30" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S31" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S32" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S33" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S34" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S35" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S36" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S37" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S38" onclick="SendMove(this.id)"></div>
        </div>
        <div class="main1" id="item4">
            <div class="main2" id="S40" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S41" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S42" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S43" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S44" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S45" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S46" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S47" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S48" onclick="SendMove(this.id)"></div>
        </div>
        <div class="main1" id="item5">
            <div class="main2" id="S50" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S51" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S52" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S53" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S54" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S55" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S56" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S57" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S58" onclick="SendMove(this.id)"></div>
        </div>

        <div class="main1" id="item6">
            <div class="main2" id="S60" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S61" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S62" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S63" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S64" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S65" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S66" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S67" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S68" onclick="SendMove(this.id)"></div>
        </div>
        <div class="main1" id="item7">
            <div class="main2" id="S70" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S71" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S72" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S73" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S74" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S75" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S76" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S77" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S78" onclick="SendMove(this.id)"></div>
        </div>
        <div class="main1" id="item8">
            <div class="main2" id="S80" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S81" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S82" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S83" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S84" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S85" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S86" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S87" onclick="SendMove(this.id)"></div>
            <div class="main2" id="S88" onclick="SendMove(this.id)"></div>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
posision(@json($status),{{ $leagalmove }},@json($board));
function posision(curentstatus,leagalmove,board) {
    for (let i = 0; i < 9; i++) {
        for(let j = 0; j < 9 ;j ++){
            let element = document.getElementById(`S${i}${j}`);
            
            if( element!= null && element.innerHTML != curentstatus[`S${i}`][j]){
                element.innerHTML = curentstatus[`S${i}`][j];
            }
        }
        winning(i,board[`S${i}`])
    }
    if(leagalmove != 9){
        for (let i = 0; i < 9; i++) {
            if (i != leagalmove) {
                document.getElementById(`item${i}`).style.background = '#f0ffff62';
                np.push(i);
            }
            document.getElementById(`item${leagalmove}`).style.background = '';
        }
    }
    else{
        for (let i = 0; i < 9; i++) {
            document.getElementById(`item${i}`).style.background = '';
        }
    }
}

function winning(index,A){
    if (A != null) {
        document.getElementById(`item${index}`).innerHTML = A;
    }
}

function SendMove(id) {
    axios.post("{{route('game.move')}}", {
        game_id: {{$gameId}},
        id: id,
        status: status,
        lastmoveawinner:lastmoveawinner
    })
    .catch(error => {
        alert(error.response.data.message || 'An error occurred');
    });
}

</script>
</html>