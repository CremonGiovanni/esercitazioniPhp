<html>
    <head> <title>es 02 funzioni</title> </head>
    <body>
        <?php
             function generaChar($a){
                $string="A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
                $parts = explode(",", $string);
                for($i=0; $i<$a; $i++){
                    $array[$i]=$parts[rand(0,51)];
                }
                return $array;
            }
            function tuttoMaiuscolo($array){
                for($i=0; $i<count($array); $i++){
                    $array2[$i]= strtoupper($array[$i]);
                }
                return $array2;
            }
            function stampaLista($array){
                foreach ($array as $valore) {
                    echo "$valore, ";
                }
            }
            $a=20;
            $lista=generaChar($a);
            stampaLista($lista);
            echo "</br>";
            tuttoMaiuscolo($lista);
            stampaLista(tuttoMaiuscolo($lista));
        ?>
    </body>
</html>