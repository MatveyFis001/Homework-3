<?php
function Text($txt)
{

    //$pattern = '/[\W \d]/';
    $pattern = '/[^\p{L}]/u';
    $str = preg_replace($pattern, '',$txt);
    echo $str.PHP_EOL;
    echo PHP_EOL;
    $res = '';
    for($i = 0; $i < mb_strlen($str, 'utf-8'); $i++){
        if($i % 2 == 0){
            $res = mb_strtoupper(mb_substr($str, $i, 1, 'utf-8'));
        } else {
            $res = mb_strtolower(mb_substr($str, $i, 1, 'utf-8'));
        }
        echo $res;
    }
}

Text(" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis justo posuere, lacinia risus quis, venenatis orci. Donec quis ex a lacus faucibus placerat eget volutpat mauris. Nulla ultricies, sapien eu faucibus dictum, neque est lobortis neque, vel ultrices arcu nisl ut diam. Proin quis quam convallis augue egestas porta ac non nisl. Pellentesque vitae odio nec velit accumsan sagittis eget nec ligula. Integer vitae tincidunt purus. Etiam eget dignissim urna. Mauris sollicitudin et arcu sit amet viverra. In sollicitudin consectetur justo sit amet eleifend.
Vestibulum eleifend eleifend orci in efficitur. Pellentesque ac feugiat ante, non rutrum augue. In condimentum eros in lectus ultricies eleifend. Nullam non ante euismod, imperdiet erat nec, dictum mi. Integer finibus imperdiet faucibus. Duis rutrum commodo leo, vitae lobortis nisl rutrum id. Nullam nulla lacus, efficitur iaculis elementum nec, porta id lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur semper velit eu lectus egestas, vel congue sem molestie. Aenean sit amet ex at mauris euismod congue. Donec nec accumsan nisl. Ut sodales massa orci, in semper lacus malesuada a. Duis enim nunc, pellentesque eget vestibulum sit amet, venenatis vel lorem. Morbi imperdiet laoreet blandit. Suspendisse at volutpat erat. "
);
