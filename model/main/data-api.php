<?php
//require_once("./lib/dbcon.php");

$data_array = array('href'=> array() , 'game'=> array() , 'minigame'=> array() , 'music'=> array(), 'border'=> array());

$href = [
  ['깃저장소','http://github.com/u4bi'],
  ['티스토리','http://web.u4bi.com'],
  ['페이스북','http://www.facebook.com/ymjcode'],
  ['깃페이지','http://u4bi.github.io'],
  ['로켓펀치','http://www.rocketpunch.com/@myungJ2EE'],
  ['링크드인','http://www.linkedin.com/in/myungj2ee'],
  ['유튜브','http://www.youtube.com/channel/UCg9KB52VF-B5MHFfBLAxmRA'],
  ['웹프로필','http://u4bi.com']
];

$game = [
  ['만남의광장','null'],
  ['오버워치 전적','over'],
  ['코딩용 음악','music'],
  ['미니게임','game'],
  ['밀실탈출','escape'],
  ['홀짝 사다리','radder'],
  ['FPS샷감 연습','shot'],
  ['지하철매니저','subway']
];

$minigame = [
  ['자스핑퐁','js-pingpong'],
  ['스타런','star-run'],
  ['자스팡',''],
  ['스택키우기',''],
  ['웹경마','horse-game'],
  ['석봉이알피지','suckbong-game']
];

$music = [
  ['편안한','_Ps8U_lhjPg?autoplay=1'],
  ['고요한','A81R-3lvYP8?autoplay=1'],
  ['잔잔한',''],
  ['신나는',''],
  ['열정적인',''],
  ['즐거운',''],
  ['비가오는','BoCLdG2x594?autoplay=1'],
  ['탐험하는',''],
  ['모험하는',''],
  ['도서관간','InZ_XAs0-nM?autoplay=1'],
  ['급박해진',''],
  ['전투하는',''],
  ['씁쓸한',''],
  ['우울한',''],
  ['화가나는',''],
  ['클럽가는',''],
  ['힙클가는',''],
  ['베이퍼한','l6GktA3RYtw?list=RDl6GktA3RYtw&autoplay=1']
];

$border = [
  ['자유게시판','free'],
  ['정보게시판','data'],
  ['생활게시판','life'],
  ['메모게시판','memo']
];

foreach ($href as $x){
    $data = array( "name" => $x[0], "path" => $x[1]);
    array_push($data_array['href'], $data);
}

foreach ($game as $x){
    $data = array( "name" => $x[0], "path" => $x[1]);
    array_push($data_array['game'], $data);
}

foreach ($minigame as $x){
    $data = array( "name" => $x[0], "path" => $x[1]);
    array_push($data_array['minigame'], $data);
}

foreach ($music as $x){
    $data = array( "name" => $x[0], "path" => $x[1]);
    array_push($data_array['music'], $data);
}

foreach ($border as $x){
    $data = array( "name" => $x[0], "path" => $x[1]);
    array_push($data_array['border'], $data);
}

echo json_encode($data_array,JSON_UNESCAPED_UNICODE);
?>