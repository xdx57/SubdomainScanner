<?php
function asu(){system('clear');}
function ban($a){echo "\e[0m#subdomain scanner | coded by xKenTangk57.xdx\n#ip; \e[92m$a\e[0m\n\e[36m";}
asu();
echo "Masukan Url; ";
$a = trim(fgets(STDIN));
echo "Save to; ";
$b = trim(fgets(STDIN));
asu();
ban($a);
system("curl http://api.hackertarget.com/hostsearch/?q=".str_replace('/','',str_replace('http://','',str_replace('https://','',str_replace('www.','',strtolower($a)))))." -o $b");
asu();
ban($a);
$del = file_get_contents("$b");
@unlink("$b");
foreach(explode("\n",$del) as $lis) {
$xdx = explode(',',$lis)[0];
file_put_contents("$b","$xdx\n", FILE_APPEND);
echo "~> $xdx\n";
}
